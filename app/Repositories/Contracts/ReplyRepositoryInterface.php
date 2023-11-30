<?php

namespace App\Repositories\Contracts;

use App\DTO\Replies\CreateReplyDTO;
use stdClass;

interface ReplyRepositoryInterface
{
    public function getAllBySupportId(string $id): array;

    public function createNew(CreateReplyDTO $dto): stdClass;
}
