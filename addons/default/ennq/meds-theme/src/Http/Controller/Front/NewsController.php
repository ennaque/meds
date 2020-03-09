<?php


namespace Ennq\MedsTheme\Http\Controller\Front;


use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Ennq\MedsTheme\Service\NewsEngine;
use Symfony\Component\HttpFoundation\Request;


class NewsController extends PublicController
{

    private $newsEngine;

    public function __construct(NewsEngine $newsEngine)
    {
        parent::__construct();
        $this->newsEngine = $newsEngine;
    }

    public function index(Request $request)
    {
        return view('theme::front/index', [
            'paginator' => $this->newsEngine->getAll()
        ]);
    }
}
