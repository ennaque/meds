<?php


namespace Ennq\MedsTheme\Lib;


use Ennq\MedsTheme\Service\Paginator;
use Symfony\Component\HttpFoundation\Request;

interface SearchInterface
{
    /**
     * @param string $request
     * @return Paginator
     */
    public function paginate(string $request): PaginatorInterface;
}
