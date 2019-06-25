<?php

namespace Anomaly\PagesModule\Http\Controller;


use Anomaly\Streams\Platform\Http\Controller\PublicController;

class TestController  extends PublicController
{
    public function test()
    {
        return 1;
    }
}
