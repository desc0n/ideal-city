<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Portfolio extends Controller
{
    /**
     * @var View
     */
    private $template;

    /** @var Model_Content */
    private $contentModel;

    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);
        $this->contentModel = Model::factory('Content');
        $this->template = $this->contentModel->getTemplate();
    }

    public function action_project()
    {
        $slug = $this->request->param('id');

        $pageData = Arr::get($this->contentModel->findPortfolioProject(null, null, $slug), 0, []);
        $view = 'page';

        $content = $this
            ->contentModel
            ->getContent($view, $pageData)
            ->set('projectGalleryImgs', $this->contentModel->findProjectImgs(Arr::get($pageData, 'id'), null, null, 1))
        ;

        $footer = ''
//            View::factory('footer')
//            ->set('pagesImgs', $this->contentModel->findProjectImgs(Arr::get($pageData, 'id')))
//            ->set('project', true)
        ;

        $this
            ->template
            ->set('content', $content)
            ->set('footer', $footer);

        $this->response->body($this->template);
    }
}