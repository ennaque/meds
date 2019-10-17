<?php

namespace Ennq\MedsTheme\Http\Controller\Front;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Ennq\MedsTheme\Lib\SearchInterface;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SearchController extends PublicController
{
    /**@var SearchInterface */
    private $search;

    public function __construct(SearchInterface $search)
    {
        parent::__construct();
        $this->search = $search;
    }

    public function index(Request $request): View
    {
        dump($this->search->search($request->get('query')));

        return view('theme::front/search_result', [
            'entities' => $this->search->search($request->get('query'))
        ]);
    }

    public function asyncSearch(Request $request): Response
    {
        return new Response();
    }

}
