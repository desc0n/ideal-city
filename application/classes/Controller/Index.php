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
        $content = View::factory('index')
            ->set('pages', $this->contentModel->getPage())
            ->set('hit', $this->contentModel->getRandomHit());

		$footer = View::factory('footer')
            ->set('pagesImgs', $this->contentModel->getPageImgs(['id' => 1]));

        $this
            ->template
            ->set('content', $content)
            ->set('footer', $footer);

		$this->response->body($this->template);
	}

	public function action_page()
	{
		$id = $this->request->param('id');

		if ($id == 'main') {
			HTTP::redirect('/');
		}

		$_GET['id'] = $id;
		$pageData = Arr::get($this->contentModel->getPage($_GET), 0, []);

		$content = View::factory('page')
			->set('pages', $this->contentModel->getPage())
			->set('pageData', $pageData)
			->set('get', $_GET)
		;

		$footer = View::factory('footer')
			->set('pagesImgs', $this->contentModel->getPageImgs(['id' => Arr::get($pageData, 'id')]))
		;

		$this
			->template
			->set('content', $content)
			->set('footer', $footer);

		$this->response->body($this->template);
	}

}