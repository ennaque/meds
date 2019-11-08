<?php


namespace Ennq\MedsTheme\Service;


use Countable;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use function is_numeric;

class Paginator
{
    public const PAGINATION_KEY = 'page';

    /** @var int */
    private $perPage;
    /** @var int */
    private $currentPage;
    /** @var Countable */
    private $items;
    /** @var int */
    private $total;

    public function __construct($items = [], ?int $total = null, int $perPage = 10, int $currentPage = 1)
    {
        $realCurrentPage = app('request')->get(self::PAGINATION_KEY);
        if (is_numeric($realCurrentPage)) {
            $this->currentPage = $realCurrentPage;
        } else {
            $this->currentPage = $currentPage;
        }
        $this->perPage = $perPage;
        $this->items = $items;
        $this->total = $total ?? count($items);
    }

    public function setItems($items): self
    {
        $this->items = $items;
    }

    /**
     * @return bool
     */
    public function hasNextPage(): bool
    {
        return !($this->getPaginationLength() === $this->currentPage);
    }

    /**
     * @return bool
     */
    public function hasPreviousPage(): bool
    {
        return (false !== Input::get(self::PAGINATION_KEY, false)
            && 1 !== Input::get(self::PAGINATION_KEY));
    }

    /**
     * @return string
     */
    public function getCurrentPage(): string
    {
        return $this->getPage($this->currentPage);
    }

    /**
     * @return int
     */
    public function getCurrentPageIndex(): int
    {
        return $this->currentPage;
    }

    /**
     * @return string|null
     */
    public function getNextPage(): ?string
    {
        if ($this->hasNextPage()) {
            return $this->getPage($this->currentPage + 1);
        }

        return null;
    }

    /**
     * @return string|null
     */
    public function getPreviousPage(): ?string
    {
        if ($this->hasPreviousPage()) {
            return $this->getPage($this->currentPage - 1);
        }

        return null;
    }

    /**
     * @return int
     */
    public function getLastPageIndex(): int
    {
        return $this->getPaginationLength();
    }

    /**
     * @return string
     */
    public function getFirstPage(): string
    {
        return $this->getPage(1);
    }

    /**
     * @return string
     */
    public function getLastPage(): string
    {
        return $this->getPage($this->getPaginationLength());
    }

    /**
     * @return array
     */
    public function getPaginatedItems(): array
    {
        return array_slice((array)$this->items, ($this->currentPage - 1) * 5, $this->perPage);
    }

    /**
     * @return int
     */
    public function getPaginationLength(): int
    {
        return (int)ceil($this->total / $this->perPage);
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return view('theme::partials/pagination', [
            'paginator' => $this
        ]);
    }

    /**
     * @param int $offset
     * @return string|null
     */
    public function getPageByOffset(int $offset): ?string
    {
        if (0 === $offset) {
            return $this->getCurrentPage();
        }
        if ($this->currentPage + $offset < 1 || $this->currentPage + $offset > $this->total) {
            return null;
        }

        return $this->getPage($offset);
    }

    /**
     * @param int $page
     * @return string
     */
    protected function getPage(int $page): string
    {
        $parameters = Input::get();
        $parameters[self::PAGINATION_KEY] = $page;

        return route(Route::currentRouteName(), $parameters);
    }
}
