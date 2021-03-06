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
            ->set('metroData', $this->getMetroData())
        ;
    }

    /**
     * @param string $view
     * @param array $pageData
     * @return View
     */
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
            ->set('pages', $this->getPage(['showed_in_menu' => true]))
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
		$idSql = !empty(Arr::get($params, 'id')) ? 'and `slug` = :id' : '';
		$editableSql = isset($params['editable']) ? 'and `editable` = :editable' : '';
		$menuSql = isset($params['showed_in_menu']) ? 'and `showed_in_menu` = :showed_in_menu' : '';

		return DB::query(Database::SELECT, "select * from `pages__pages` where 1 $idSql $editableSql $menuSql")
			->parameters([
                ':id' => Arr::get($params, 'id'),
                ':editable' => Arr::get($params, 'editable', true),
                ':showed_in_menu' => Arr::get($params, 'showed_in_menu', true),
            ])
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
        $data = [];

		$idSql = !empty(Arr::get($params, 'id')) ? 'and `id` = :id' : '';
		$slugSql = !empty(Arr::get($params, 'slug')) ? 'and `slug` = :slug' : '';
        $editableSql = isset($params['editable']) ? 'and `editable` = :editable' : '';

		$res = DB::query(Database::SELECT, "select * from `scope__pages` where 1 $idSql $editableSql $slugSql")
			->parameters([
                ':id' => Arr::get($params, 'id'),
                ':slug' => Arr::get($params, 'slug'),
                ':editable' => Arr::get($params, 'editable', true),
            ])
			->execute()
			->as_array()
        ;

        foreach ($res as $row) {
            $data[$row['id']] = $row;
        }

        return $data;
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
        $query = DB::select('*')
            ->from(Arr::get($params, 'table', 'pages__imgs'))
            ->where('', '', 1)
        ;

        if (!empty(Arr::get($params, 'id', 0))) {
            $query->and_where('page_id', '=', Arr::get($params, 'id'));
        }

        if (isset($params['enabled'])) {
            if ($params['enabled'] != 'all') {
                $query->and_where('enabled', '=', ':enabled');
            }
        } else {
            $query->and_where('enabled', '=', 1);
        }

        if (!empty(Arr::get($params, 'slug'))) {
            $query->and_where('page_id', 'in', DB::select('id')->from('pages__pages')->where('slug', '=', Arr::get($params, 'slug')));
        }

        $result = $query
            ->execute()
            ->as_array()
        ;

        return $result;
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

    public function getMetroData()
    {
        return [
            1 => ['выбор участка', null],
            2 => [null, 'топография'],
            3 => ['геология', null],
            4 => [null, 'концепция'],
            5 => ['технические условия', null],
            6 => [null, 'проектирование'],
            7 => ['согласование проекта', null],
            8 => [null, 'экспертиза'],
            9 => ['разрешение на строительство', null],
            10 => [null, 'сопровождение строительства'],
            11 => ['технический план', null],
            12 => [null, 'ввод в эксплуатацию'],
            13 => ['кадастровый учет', null],
            14 => [null, 'регистрация прав'],
        ];
    }


    /**
     * @param string $table
     * @param null $id
     * @param null $slug
     * @param array $params
     *
     * @return array
     */
    public function getPageData($table = 'pages__pages', $id = null, $slug = null, $params = [])
    {
        $query = DB::select()
            ->from($table)
            ->where('', '', 1)
        ;

        if (null !== $id) {
            $query->and_where('id', '=', $id);
        }

        if (null !== $slug) {
            $query->and_where('slug', '=', $slug);
        }

        if (isset($params['editable'])) {
            $query->and_where('editable', '=', $params['editable']);
        }

        if (isset($params['showed_in_menu'])) {
            $query->and_where('showed_in_menu', '=', $params['showed_in_menu']);
        }

        return $query->execute()->as_array();
    }

    /**
     * @param int $page_id
     * @param int $id
     * @param string $slug
     *
     * @return array
     *
     * @throws Kohana_Exception
     */
    public function findPortfolioProject($page_id = null, $id = null, $slug = null)
    {
        $query = DB::select()
            ->from('portfolio__projects')
            ->where('', '', 1)
        ;

        if($page_id !== null) {
            $query->and_where('page_id', '=', $page_id);
        }

        if($id !== null) {
            $query->and_where('id', '=', $id);
        }

        if($slug !== null) {
            $query->and_where('slug', '=', $slug);
        }

        return $query->execute()->as_array();
    }

    /**
     * @param int|null $project_id
     * @param int|null $id
     * @param mixed|null $enabled
     * @param mixed|null $galleryViewed
     *
     * @return array
     */
    public function findProjectImgs($project_id = null, $id = null, $enabled = null, $galleryViewed = null)
    {
        $query = DB::select()
            ->from('portfolio__projects_imgs')
            ->where('', '', 1)
        ;

        if ($enabled !== null) {
            if ($enabled != 'all') {
                $query->and_where('enabled', '=', $enabled);
            }
        } else {
            $query->and_where('enabled', '=', 1);
        }

        if ($galleryViewed !== null) {
            if ($galleryViewed != 'all') {
                $query->and_where('gallery_viewed', '=', $galleryViewed);
            }
        } else {
            $query->and_where('gallery_viewed', '=', 1);
        }

        if ($id !== null) {
            $query->and_where('id', '=', $id);
        }

        if ($project_id !== null) {
            $query->and_where('project_id', '=', $project_id);
        }

        return $query->execute()->as_array();
    }

}
?>