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
            $query->and_where('src_id', '=', $src_id);
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

        $source = Arr::get($this->findNewsSources($id), 0);

        if (0 === count($source)) {
            return false;
        }

        $parser = new \Sunra\PhpSimple\HtmlDomParser();

        $html = $parser->file_get_html(Arr::get($source, 'link'));

        if ($id == 1) {
            $pageNewsLink = null;

            $links = $html->find('a');

            foreach ($links as $link) {
                if (Arr::get($link->attr, 'class') == 'detail') {
                    $pageNewsLink = $link->href;

                    break;
                }
            }

            $url = sprintf('https://rosreestr.ru%s', $pageNewsLink);

            $htmlNews = $parser->file_get_html($url);

            $newsTitle = $htmlNews->find('h1', 0);
            $newsDate = $htmlNews->find('div.main_news_detail div.description div.date', 0);
            $newsContent = $htmlNews->find('div.main_news_detail div.description div.text', 0);

            $slug = $adminModel->slugify($newsTitle);

            $check = DB::select()
                ->from('news')
                ->where('slug', '=', $slug)
                ->execute()
                ->count()
            ;

            if (0 !== $check) {
                return false;
            }

            DB::insert('news')
                ->columns(['title', 'content', 'source_id', 'slug', 'viewed', 'date'])
                ->values([!empty($newsTitle) ? $newsTitle->innertext  : '', !empty($newsContent) ? $newsContent->innertext  : '', $id, $slug, 0, !empty($newsDate) ? $newsDate->innertext : DB::expr('now()')])
                ->execute()
            ;
        }

        return true;
    }
}
?>