<?php

namespace App\Repositories\Contracts;

use stdClass;

interface PaginationInterface
{
    /**
     * @return stdClass[]
     */
    public function items(): array;

    PUBLIC function total(): int;

    public function isFirstPage(): bool;

    public function isLastPage(): bool;

    public function currentPage(): int;

    public function getNumberNextPage(): int;

    public function getNumberPreviousPage(): int;
}
