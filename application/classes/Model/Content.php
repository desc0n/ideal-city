<?php

/**
 * Class Model_Content
 */
class Model_Content extends Kohana_Model
{
    public function getTemplate()
    {
        return View::factory("template")
            ->set('news', $this->getNews())
            ->set('cloudTag', $this->getCloudTag())
        ;
    }

    public function getContent($view, $pageData)
    {
        return View::factory($view)
            ->set('menu', $this->getMenu())
            ->set('pages', $this->getPage())
            ->set('portfolioPages', $this->getPortfolioPage())
            ->set('scopePages', $this->getScopePage())
            ->set('pageData', $pageData)
            ->set('hit', $this->getRandomHit())
            ->set('get', Request::initial()->get())
        ;
    }

    public function getMenu()
    {
        return View::factory('menu')
            ->set('pages', $this->getPage())
            ->set('portfolioPages', $this->getPortfolioPage())
            ->set('scopePages', $this->getScopePage())
            ->set('get', Request::initial()->get())
        ;
    }

	public function getCategory($params = [])
	{
		$idSql = isset($params['category_id']) ? 'and `id` = :id' : '';
		return DB::query(Database::SELECT, "select * from `category` where 1 $idSql")
			->param(':id', Arr::get($params, 'category_id', 0))
			->execute()
			->as_array();
	}

	public function getPage($params = [])
	{
		$idSql = !empty(Arr::get($params, 'id')) ? 'where `slug` = :id' : '';
		return DB::query(Database::SELECT, "select * from `pages__pages` $idSql")
			->param(':id', Arr::get($params, 'id'))
			->execute()
			->as_array();
	}

	public function getPortfolioPage($params = [])
	{
		$idSql = !empty(Arr::get($params, 'id')) ? 'where `id` = :id' : '';
		return DB::query(Database::SELECT, "select * from `portfolio__pages` $idSql")
			->param(':id', Arr::get($params, 'id'))
			->execute()
			->as_array();
	}

	public function getScopePage($params = [])
	{
		$idSql = !empty(Arr::get($params, 'id')) ? 'where `id` = :id' : '';
		return DB::query(Database::SELECT, "select * from `scope__pages` $idSql")
			->param(':id', Arr::get($params, 'id'))
			->execute()
			->as_array();
	}

	public function getCloudTag($params = [])
	{
		$idSql = !empty(Arr::get($params, 'id')) ? 'where `slug` = :id' : '';
		return DB::query(Database::SELECT, "select * from `cloud_tags` $idSql")
			->param(':id', Arr::get($params, 'id'))
			->execute()
			->as_array();
	}

    public function getPageImgs($params = [])
    {
        $idSql = !empty(Arr::get($params, 'id', 0)) ? 'and `page_id` = :id' : '';
        return DB::query(Database::SELECT, "select * from `pages__imgs` where `enabled` = 1 $idSql")
            ->param(':id', Arr::get($params, 'id', 0))
            ->execute()
            ->as_array();
    }

    public function getPortfolioPageImgs($params = [])
    {
        $idSql = !empty(Arr::get($params, 'id', 0)) ? 'and `page_id` = :id' : '';
        return DB::query(Database::SELECT, "select * from `portfolio__imgs` where `enabled` = 1 $idSql")
            ->param(':id', Arr::get($params, 'id', 0))
            ->execute()
            ->as_array();
    }

    public function getScopePageImgs($params = [])
    {
        $idSql = !empty(Arr::get($params, 'id', 0)) ? 'and `page_id` = :id' : '';
        return DB::query(Database::SELECT, "select * from `scope__imgs` where `enabled` = 1 $idSql")
            ->param(':id', Arr::get($params, 'id', 0))
            ->execute()
            ->as_array();
    }

    public function getNews($params = [])
    {
        $idSql = !empty(Arr::get($params, 'id', 0)) ? 'and `slug` = :id' : '';
        $viewedSql = !empty(Arr::get($params, 'viewed', true)) ? 'and `viewed` = 1' : '';

        return DB::query(Database::SELECT, "select * from `news` where 1 $idSql $viewedSql order by `date` desc")
            ->param(':id', Arr::get($params, 'id'))
            ->execute()
            ->as_array();
    }

    public function getRandomHit()
    {
        $hits = [];

        foreach ($this->getHit() as $hit) {
            $hits[] = $hit['id'];
        }

        $randomHit = Arr::get($this->getHit(['id' => array_rand($hits)]), 0, []);

        if (!empty($randomHit)) {
            $randomHit['imgs'] = $this->getHitsImgs(['hit_id' => Arr::get($randomHit, 'id')]);
        }

        return $randomHit;
    }

    public function getHit($params = [])
    {
        $idSql = !empty(Arr::get($params, 'id')) ? 'and `id` = :id' : '';
        $viewedSql = !empty(Arr::get($params, 'viewed', true)) ? 'and `viewed` = 1' : '';

        return DB::query(Database::SELECT, "select * from `hits__hits` where 1 $idSql $viewedSql")
            ->param(':id', Arr::get($params, 'id'))
            ->execute()
            ->as_array();
    }

    public function getHitsImgs($params = [])
    {
        $idSql = !empty(Arr::get($params, 'id', 0)) ? 'and `hit_id` = :id' : '';

        return DB::query(Database::SELECT, "select * from `hits__imgs` where `enabled` = 1 $idSql")
            ->param(':id', Arr::get($params, 'id', 0))
            ->execute()
            ->as_array();
    }

}
?>