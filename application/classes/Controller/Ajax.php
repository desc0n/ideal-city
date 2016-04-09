<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller
{
	/** @var  Model_Admin */
	private $adminModel;

	/** @var  Model_News */
	private $newsModel;

	public function __construct(Request $request, Response $response)
	{
		parent::__construct($request, $response);

		$this->adminModel = Model::factory('Admin');
		$this->newsModel = Model::factory('News');
	}

	public function action_get_typeahead()
	{
		$this->response->body(View::factory('typeahead')->set('words', Model::factory("Word")->getWords($_POST))->set('post', $_POST));
	}

	public function action_get_typeahead_admin()
	{
		$this->response->body(View::factory('typeahead_admin')->set('words', Model::factory("Word")->getWords($_POST))->set('post', $_POST));
	}

	public function action_remove_img()
	{
		$this->response->body($this->adminModel->removeImg($_POST));
	}

	public function action_hide_img()
	{
		$this->response->body($this->adminModel->hideImg($_POST));
	}

	public function action_show_img()
	{
		$this->response->body($this->adminModel->showImg($_POST));
	}

	public function action_remove_project_img()
	{
		$this->response->body($this->adminModel->removeProjectImg($_POST));
	}

	public function action_hide_project_img()
	{
		$this->response->body($this->adminModel->hideProjectImg($_POST));
	}

	public function action_show_project_img()
	{
		$this->response->body($this->adminModel->showProjectImg($_POST));
	}

	public function action_hide_project_gallery_img()
	{
		$this->response->body($this->adminModel->hideProjectGalleryImg($_POST));
	}

	public function action_show_project_gallery_img()
	{
		$this->response->body($this->adminModel->showProjectGalleryImg($_POST));
	}

	public function action_download_news()
	{
		$this->response->body($this->newsModel->downloadNews($this->request->post('id')));
	}

	public function action_remove_news()
	{
		$this->response->body($this->adminModel->removeNews($_POST));
	}

	public function action_hide_news()
	{
		$this->response->body($this->adminModel->hideNews($_POST));
	}

	public function action_show_news()
	{
		$this->response->body($this->adminModel->showNews($_POST));
	}

	public function action_hide_list_news()
	{
		$this->response->body($this->adminModel->hideListNews($_POST));
	}

	public function action_show_list_news()
	{
		$this->response->body($this->adminModel->showListNews($_POST));
	}

	public function action_change_project_link()
	{
		$this->response->body($this->adminModel->changeProjectLink($_POST));
	}

}
