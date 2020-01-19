<?php


namespace Ennq\MedsTheme\Lib;


use Anomaly\PostsModule\Post\Contract\PostRepositoryInterface;

interface MedsPostRepositoryInterface extends PostRepositoryInterface
{
    public function searchLikeContentOrTitle(string $needle, int $offsetFrom = 0, int $offsetTo = 10000);

    public function countByNeedle(string $needle);
}
