<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller
{
    /**
     * @var View
     */
    private $template;

    /**
     * @var Model_Content
     */
    private $contentModel;

    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);

        $this->contentModel = Model::factory('Content');
        $this->template = $this->contentModel->getTemplate();
    }

    public function action_index()
	{
        $content = View::factory("index")
            ->set('pages', $this->contentModel->getPage())
            ->set('hit', $this->contentModel->getRandomHit());

        $this
            ->template
            ->set('content', $content);

		$this->response->body($this->template);
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