<?php

namespace App\Repositories;
use Illuminate\Pagination\LengthAwarePaginator;
use stdClass;

class PaginationPresenter implements PaginationInterface
{
    /**
     * @var stdClass[]
     */
    private array $items;
    public function __construct(protected LengthAwarePaginator $paginator)
    {
        $this->items = $this->resolveItems($this->paginator->items());
    }

    /**
     * @return stdClass[]
     */
    public function items(): array
    {
        return $this->items;
        //return $this->paginator->items();
    }

    public function total(): int
    {
        return $this->paginator->total() ?? 1;
    }

    public function isFirstPage(): bool
    {
        return $this->paginator->onFirstPage();
    }

    public function isLastPage(): bool
    {
        return $this->paginator->currentPage() === $this->paginator->lastPage();
    }

    public function currentPage(): int
    {
        return $this->paginator->currentPage() ?? 1;
    }

    public function getNumberNextPage(): int
    {
        return $this->paginator->currentPage() + 1;
    }

    public function getNumberPreviousPage(): int
    {
        return $this->paginator->currentPage() - 1;
    }

    private function resolveItems(array $Items): array
    {
        $items = [];
        foreach ($Items as $item) {
            $stdClassObject = new stdClass();
            foreach ($item->toArray() as $key => $value) {
                $stdClassObject->{$key} = $value;
            }
            array_push($items, $stdClassObject);
        }
        return $items;
    }
}
