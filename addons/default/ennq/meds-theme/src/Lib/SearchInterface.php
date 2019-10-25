<?php


namespace Ennq\MedsTheme\Lib;


use Ennq\MedsTheme\Service\Paginator;
use Symfony\Component\HttpFoundation\Request;

interface SearchInterface
{
    /**
     * @param Request $request
     * @param int|null $limit
     * @return array<SearchEntry>
     */
    public function search(Request $request, ?int $limit = null): array;

    /**
     * @param Request $request
     * @return Paginator
     */
    public function paginate(Request $request): Paginator;
}
