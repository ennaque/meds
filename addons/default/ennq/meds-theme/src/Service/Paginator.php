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

    /**
     * @var \Countable
     */
    private $items;

    /** @var int */
    private $total;

    public function __construct(\Countable $items, int $perPage = 5, int $currentPage = 1)
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

    public function getPaginatedItems()
    {
//        return array_slice((array)$this->items, )
    }

    public function render(): string
    {
        return "
        <ul>
            <li>1</li>
            <li>2</li>
        </ul>
        ";
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

}
