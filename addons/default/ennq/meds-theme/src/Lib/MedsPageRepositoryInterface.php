<?php


namespace Ennq\MedsTheme\Lib;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;

interface MedsPageRepositoryInterface extends PageRepositoryInterface
{
    public function searchLikeContentOrTitle(string $needle, int $offsetFrom = 0, int $offsetTo = 10000);

    public function countByNeedle(string $needle);
}
