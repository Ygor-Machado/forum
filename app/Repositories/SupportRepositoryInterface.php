<?php

namespace App\Repositories;

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use stdClass;

interface SupportRepositoryInterface
{
    public function getAll(string $filter = null): array;

    public function findOne($id): stdClass | null;

    public function delete($id): void;

    public function new(CreateSupportDTO $dto): stdClass;

    public function update(UpdateSupportDTO $dto): stdClass | null  ;


}
