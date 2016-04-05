<?php

/**
 * Class Model_News
 */
class Model_News extends Kohana_Model
{
    /**
     * @param null|int $id
     * @return array
     */
    public function findNewsSources($id = null)
    {
        $query = DB::select()
            ->from('news__sources')
            ->where('', '', 1)
        ;

        if ($id !== null) {
            $query->and_where('id', '=', $id);
        }

        return $query->execute()->as_array();
    }

    /**
     * @param int|null $src_id
     * @param int|null $id
     * @param mixed|null $viewed
     *
     * @return array
     */
    public function findNews($src_id = null, $id = null, $slug = null, $viewed = null)
    {
        $query = DB::select()
            ->from('news')
            ->where('', '', 1)
        ;

        if ($viewed !== null) {
            if ($viewed != 'all') {
                $query->and_where('viewed', '=', $viewed);
            }
        } else {
            $query->and_where('viewed', '=', 1);
        }

        if ($id !== null) {
            $query->and_where('id', '=', $id);
        }

        if ($src_id !== null) {
            $query->and_where('source_id', '=', $src_id);
        }

        if ($slug !== null) {
            $query->and_where('slug', '=', $slug);
        }

        return $query->execute()->as_array();
    }

    /**
     * @param int $id
     * @return bool
     *
     * @throws Kohana_Exception
     */
    public function downloadNews($id)
    {
        /** @var $adminModel Model_Admin */
        $adminModel = Model::factory('Admin');

        $url = null;

        $source = Arr::get($this->findNewsSources($id), 0);

        if (0 === count($source)) {
            return false;
        }

        $sourceLink = Arr::get($source, 'link');

        $mainUrl = preg_match('/com/', $sourceLink) ? substr($sourceLink, 0, (strpos($sourceLink, '.') + 4)) : substr($sourceLink, 0, (strpos($sourceLink, '.') + 3));

        $parser = new \Sunra\PhpSimple\HtmlDomParser();

        $html = $parser->file_get_html($sourceLink);

        $issetNews = $this->findNews($id, null, null, 'all');
        $issetNewsSlug = [];

        foreach ($issetNews as $news) {
            $issetNewsSlug[] = $news['slug'];
        }

        $pageNewsLink = $this->findPagesNewsLink($id, $html, $issetNewsSlug);

        if (null === $pageNewsLink) {
            return false;
        }

        $url = $this->findNewsUrl($mainUrl, $pageNewsLink);

        if (null === $url) {
            return false;
        }

        $newsData = $this->findNewsData($id, $url);

        if (empty(Arr::get($newsData, 'title'))) {
            return false;
        }

        if (empty(Arr::get($newsData, 'content'))) {
            return false;
        }

        $slug = $adminModel->slugify($newsData['title']);

        if (in_array($slug, $issetNewsSlug)) {
            return false;
        }

        $content = $parser->str_get_html($newsData['content']);
        $contentText = $content->innertext;

        $imgs = $content->find('img');

        foreach ($imgs as $img) {
            $contentText = str_replace($img->src, sprintf('%s%s', $mainUrl, $img->src), $contentText);
        }

        $links = $content->find('a');

        foreach ($links as $link) {
            $contentText = !preg_match('/http/', $link->href) ? str_replace($link->href, sprintf('%s%s', $mainUrl, $link->href), $contentText) : $contentText;
        }

        DB::insert('news')
            ->columns(['title', 'content', 'source_id', 'slug', 'viewed', 'date'])
            ->values([$newsData['title']->innertext, $contentText, $id, $slug, 0, DB::expr('now()')])
            ->execute()
        ;

        return true;
    }

    /**
     * @param int $id
     * @param mixed $html
     * @param array $issetNewsSlug
     *
     * @return string|null
     */
    private function findPagesNewsLink($id, $html, $issetNewsSlug)
    {
        /** @var $adminModel Model_Admin */
        $adminModel = Model::factory('Admin');

        $pageNewsLink = null;

        if ($id == 1) {
            $links = $html->find('a');

            foreach ($links as $link) {
                if (Arr::get($link->attr, 'class') == 'detail') {
                    $pageNewsLink = $link->href;

                    break;
                }
            }
        } elseif ($id == 2) {
            $links = $html->find('a');

            foreach ($links as $link) {
                if (Arr::get($link->attr, 'class') == 'ntitle') {
                    $slug = $adminModel->slugify($link->innertext);

                    if (in_array($slug, $issetNewsSlug)) {
                        continue;
                    }

                    $pageNewsLink = $link->href;

                    break;
                }
            }
        } elseif ($id == 3) {
            $links = $html->find('.news-list .news-item p a');

            foreach ($links as $link) {
                $slug = $adminModel->slugify($link->innertext);

                if (in_array($slug, $issetNewsSlug)) {
                    continue;
                }

                $pageNewsLink = $link->href;

                break;
            }
        } elseif (in_array($id, [4, 5])) {
            $links = $html->find('div.headline h3.headline_title a');

            foreach ($links as $link) {
                $slug = $adminModel->slugify($link->innertext);

                if (in_array($slug, $issetNewsSlug)) {
                    continue;
                }

                $pageNewsLink = $link->href;

                break;
            }
        } elseif ($id == 6) {
            $links = $html->find('div.news__item a.link');

            foreach ($links as $link) {
                $slug = $adminModel->slugify($link->innertext);

                if (in_array($slug, $issetNewsSlug)) {
                    continue;
                }

                $pageNewsLink = $link->href;

                break;
            }
        }

        return $pageNewsLink;
    }

    /**
     * @param string $mainUrl
     * @param string $pageNewsLink
     *
     * @return string
     */
    private function findNewsUrl($mainUrl, $pageNewsLink)
    {
        return sprintf('%s%s', $mainUrl, $pageNewsLink);
    }

    /**
     * @param int $id
     * @param string $url
     *
     * @return array
     */
    private function findNewsData($id, $url)
    {
        $newsData = [];

        $parser = new \Sunra\PhpSimple\HtmlDomParser();

        $htmlNews = $parser->file_get_html($url);

        if ($id == 1) {
            $newsData['title'] = $htmlNews->find('h1', 0);
            $newsData['content'] = $htmlNews->find('div.main_news_detail div.description div.text', 0);
        } elseif ($id == 2) {
            $newsData['title'] = $htmlNews->find('div.lside h1', 0);
            $newsData['content'] = $htmlNews->find('div.lside div.fnblk div.fntxt', 0);
        } elseif ($id == 3) {
            $newsData['title'] = $htmlNews->find('div#content-middle h1', 0);
            $newsData['content'] = $htmlNews->find('div#content-middle div[class="simple-content mt15"] div[class="simple-content mt25"]', 0);
        } elseif (in_array($id, [4, 5])) {
            $newsData['title'] = $htmlNews->find('div.reader_article h3.reader_article_headline', 0);
            $newsData['content'] = $htmlNews->find('div.reader_article div.reader_article_body', 0);
        } elseif ($id == 6) {
            $newsData['title'] = $htmlNews->find('h2.content__title', 0);
            $newsData['content'] = $htmlNews->find('div.article__text', 0);
        }

        return $newsData;
    }
}
?>