<?php

namespace App\Services;

use App\DTO\Replies\CreateReplyDTO;

class ReplySupportService
{
    public function getAllBySupportId(string $id): array
    {
        return [];
    }

    public function createNew(CreateReplyDTO $dto): \stdClass
    {
        throw new \Exception('Not implemented yet');
    }

}
