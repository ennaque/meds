<?php

namespace Ennq\MedsTheme\Http\Controller\Front;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Ennq\MedsTheme\Lib\SearchResultCombinerInterface;
use Ennq\MedsTheme\Lib\SearchInterface;
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

    public function index(Request $request): Response
    {
        return new Response($request->get('test'));
    }

    public function asyncSearch(Request $request): Response
    {
        var_dump($this->search->search($request->get('query')));

        return new Response();
    }

}
