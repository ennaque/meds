<?php

namespace Ennq\MedsTheme\Http\Controller\Front;

use Anomaly\PagesModule\Page\PageModel;
use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Ennq\MedsTheme\Lib\SearchInterface;
use Ennq\MedsTheme\Service\Paginator;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
    public function index(Request $request)//: View
    {
//        dump($request->getRequestUri());
//        dump(Route::currentRouteName());
//        dump(Route::getCurrentRoute()->parameters());
//        return;
//        return 'test';
        $paginator = $this->search->paginate($request->get(self::SEARCH_QUERY));

//        dump($paginator->getPaginationLength());
//        return ;

        return view('theme::front/search_result', [
            'entities' => $paginator->getPaginatedItems(),
            'query' => $request->get('query'),
            'pag' => $paginator
        ]);
    }

    public function asyncSearch(Request $request): View
    {
        $searchResult = $this->search->search($request->get(self::SEARCH_QUERY));

        $json = json_encode($searchResult, JSON_UNESCAPED_UNICODE);

        return view('theme::front/api', [
            'code' => 200,
            'message' => 'OK',
            'list' => 1,
            'listof' => 1,
            'data' => $json
        ]);
    }
}
