<?php

/**
 * Class Model_Content
 */
class Model_Content extends Kohana_Model
{

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
		$idSql = !empty(Arr::get($params, 'id', 0)) ? 'where `slug` = :id' : '';
		return DB::query(Database::SELECT, "select * from `pages` $idSql")
			->param(':id', Arr::get($params, 'id', 0))
			->execute()
			->as_array();
	}

	public function getPageImgs($params = [])
	{
		$idSql = !empty(Arr::get($params, 'id', 0)) ? 'and `page_id` = :id' : '';
		return DB::query(Database::SELECT, "select * from `page_imgs` where `status_id` = 1 $idSql")
			->param(':id', Arr::get($params, 'id', 0))
			->execute()
			->as_array();
	}
}
?>