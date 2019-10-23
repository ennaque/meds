<?php


namespace Ennq\MedsTheme\Lib;


use Ennq\MedsTheme\Service\Paginator;
use Symfony\Component\HttpFoundation\Request;

interface SearchInterface
{
    /**
     * @param Request $request
     * @return array<SearchEntry>
     */
    public function search(Request $request): array;

    /**
     * @param Request $request
     * @return Paginator
     */
    public function paginate(Request $request): Paginator;
}
