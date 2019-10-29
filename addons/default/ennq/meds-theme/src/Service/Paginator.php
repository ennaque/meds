<?php


namespace Ennq\MedsTheme\Service;


use Symfony\Component\HttpFoundation\Request;

class Paginator
{
    private const PAGINATION_KEY = 'page';

    /** @var int */
    private $perPage;
    /** @var int */
    private $currentPage;
    /** @var \Countable */
    private $items;
    /** @var int */
    private $total;

    public function __construct($items, int $perPage = 5, int $currentPage = 1)
    {
        $realCurrentPage = app('request')->get(self::PAGINATION_KEY);
        if (\is_numeric($realCurrentPage)) {
            $this->currentPage = $realCurrentPage;
        } else {
            $this->currentPage = $currentPage;
        }
        $this->perPage = $perPage;
        $this->items = $items;
        $this->total = count($items);
    }

    public function getPaginatedItems(): array
    {
        return array_slice((array)$this->items, ($this->currentPage - 1) * 5, $this->perPage);
    }

    public function render(): string
    {
        return view('theme::partials/pagination', [
            'page' => $this->currentPage,
            'pagination' => $this->getPaginationArray($this->currentPage),
            'link' => '/search?query=' . app('request')->get('query') //TODO: fix this shit
        ]);
    }

    /**
     * @return int
     */
    private function getPaginationLength(): int
    {
        return (int)ceil($this->total / $this->perPage);
    }

    /**
     * @param int $page
     * @return array|null
     */
    private function getPaginationArray(int $page): ?array
    {
        $length = $this->getPaginationLength();

        if (($page < 1) || ($page > $length) || ($length <= 1)) {
            return null;
        }

        if ($length <= 5) {
            for ($i = 1; $i <= $length; ++$i) {
                $arr[] = (string)$i;
            }
            return $arr ?? null;
        }

        switch ($page) {
            case 1:
            case 2:
            case 3:
                $arr = ['1', '2', '3', '4', '...', (string)$length];
                break;
            case $length:
            case $length - 1:
            case $length - 2:
                $arr = ['1', '...', (string)($length - 3), (string)($length - 2), (string)($length - 1), (string)($length)];
                break;
            default:
                $arr = ['1', '...', (string)($page - 1), (string)($page), (string)($page + 1), '...', (string)$length];
                break;
        }

        return $arr;
    }



    public function getCurrentPageUrl()
    {
        $se = app('request')->getUri();

        return $this->currentPage;
    }
}
