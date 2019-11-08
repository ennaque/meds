<?php


namespace Ennq\MedsTheme\Lib;


use Illuminate\Contracts\Support\Arrayable;

interface PaginatorInterface extends \JsonSerializable, Arrayable
{
    public function setItems($items): self; // Arrayable and countable items

    public function hasNextPage(): bool;

    public function hasPreviousPage(): bool;

    public function getNextPage(): ?string;

    public function getPreviousPage(): ?string;

    public function getCurrentPage(): string;

    public function getCurrentPageIndex(): int;

    public function getFirstPage(): string;

    public function getLastPage(): string;

    public function getLastPageIndex(): int;

    public function getPaginationLength(): int;

    public function render(): string;

    public function getAllItems(): array;

    public function getPageByOffset(int $offset): ?string;
}
