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
		$content = $this->contentModel->getContent('index', []);

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
		} elseif ($id == 'portfolio') {
			HTTP::redirect('/portfolio/1');
		}

		$_GET['id'] = $id;
		$pageData = Arr::get($this->contentModel->getPage($_GET), 0, []);
		$view = $id == 'scope' ? 'scope' : 'page';

		$content = $this->contentModel->getContent($view, $pageData);

		$footer = View::factory('footer')
			->set('pagesImgs', $this->contentModel->getPageImgs(['id' => Arr::get($pageData, 'id')]))
		;

		$this
			->template
			->set('content', $content)
			->set('footer', $footer);

		$this->response->body($this->template);
	}

	public function action_portfolio()
	{
		$id = $this->request->param('id');

		$_GET['id'] = $id;
		$pageData = Arr::get($this->contentModel->getPortfolioPage($_GET), 0, []);

		$content = $this->contentModel->getContent('portfolio', $pageData);

		$footer = View::factory('footer')
			->set('pagesImgs', $this->contentModel->getPortfolioPageImgs(['id' => Arr::get($pageData, 'id')]))
		;

		$this
			->template
			->set('content', $content)
			->set('footer', $footer);

		$this->response->body($this->template);
	}

}