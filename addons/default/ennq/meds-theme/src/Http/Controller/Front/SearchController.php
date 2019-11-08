<?php

namespace Ennq\MedsTheme\Http\Controller\Front;

use Anomaly\PagesModule\Page\PageModel;
use Anomaly\PagesModule\Page\PageRepository;
use Anomaly\PostsModule\Post\PostModel;
use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Ennq\MedsTheme\Lib\SearchInterface;
use Ennq\MedsTheme\Service\Paginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
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
    private $pr;
    public function __construct(SearchInterface $search, PageRepository $pr)
    {
        parent::__construct();
        $this->search = $search;
        $this->pr = $pr;
    }

    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request)//: View
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
            'code' => 200,
            'message' => 'OK',
            'list' => $paginator->getCurrentPageIndex(),
            'listof' => $paginator->getPaginationLength(),
            'data' => $json
        ]);
    }
}
