<?php

namespace Ennq\MedsTheme\Http\Controller\Front;


use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Ennq\MedsTheme\Lib\SearchInterface;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends PublicController
{
    public const SEARCH_QUERY = 'query';

    /**@var SearchInterface */
    private $search;

    public function __construct(SearchInterface $search)
    {
        parent::__construct();
        $this->search = $search;
    }

    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $paginator = $this->search->paginate($request->get(self::SEARCH_QUERY));

        return view('theme::front/search_result', [
            'query' => $request->get('query'),
            'paginator' => $paginator
        ]);
    }

    public function asyncSearch(Request $request): View
    {
        try {
            $paginator = $this->search->paginate($request->get(self::SEARCH_QUERY));
            $json = json_encode($paginator, JSON_UNESCAPED_UNICODE);
        } catch (\Exception $e) {
            return view('theme::front/api', [
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ]);
        }

        return view('theme::front/api', [
            'code' => '200',
            'message' => 'OK',
            'page' => (string)$paginator->getCurrentPageIndex(),
            'pageof' => (string)$paginator->getPaginationLength(),
            'data' => $json
        ]);
    }
}
