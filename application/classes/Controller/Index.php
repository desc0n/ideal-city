<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller {

	public function action_index()
	{
		$template=View::factory("template")
			->set('get', $_GET)
			->set('post', $_POST);

		$template->content = View::factory("index");
		$this->response->body($template);
	}

	public function action_page()
	{
        /**
         * @var $contentModel Model_Content
         */
        $contentModel = Model::factory('Content');

		$id = $this->request->param('id');
		$_GET['id'] = $id;

		$template=View::factory("template")
			->set('get', $_GET);

		$pageData = $contentModel->getPage($_GET);
		$template->content = View::factory("page")
			->set('title', Arr::get(Arr::get($pageData, 0, []), 'title', ''))
			->set('content', Arr::get(Arr::get($pageData, 0, []), 'content', ''));
		$this->response->body($template);
	}

}