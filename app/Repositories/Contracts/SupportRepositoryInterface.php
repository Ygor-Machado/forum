<?php

namespace App\Repositories\Contracts;

use App\DTO\Supports\CreateSupportDTO;
use App\DTO\Supports\UpdateSupportDTO;
use App\Enums\SupportStatus;
use stdClass;

interface SupportRepositoryInterface
{

    public function paginate(int $page = 1, int $totalPerPage = 15, string $filter = null): PaginationInterface;

    public function getAll(string $filter = null): array;

    public function findOne($id): stdClass | null;

    public function delete($id): void;

    public function new(CreateSupportDTO $dto): stdClass;

    public function update(UpdateSupportDTO $dto): stdClass | null;

    public function updateStatus(string $id, SupportStatus $status): void;
}
