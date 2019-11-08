<?php


namespace Ennq\MedsTheme\Lib;


use Ennq\MedsTheme\Service\Paginator;
use Symfony\Component\HttpFoundation\Request;

interface SearchInterface
{
    /**
     * @param string $request
     * @param int|null $limit
     * @return array<SearchEntry>
     */
    public function search(string $request, ?int $limit = 10): array;

    /**
     * @param string $request
     * @return Paginator
     */
    public function paginate(string $request): PaginatorInterface;
}
