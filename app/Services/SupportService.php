<?php

namespace App\Services;

use stdClass;

class SupportService
{
    protected $repository;
    public function __construct()
    {

    }
    public function getAll(string $filter = null): array
    {
       return $this->repository->getAll($filter);
    }

    public function findOne($id): stdClass | null
    {
        return $this->repository->findOne($id);
    }

    public function new(string $subject, string $status, string $body): stdClass
    {
        return $this->repository->new($subject, $status, $body);
    }

    public function update($id, string $subject, string $status, string $body): stdClass | null
    {
        return $this->repository->update($id, $subject, $status, $body);
    }

    public function delete($id): void
    {
        $this->repository->delete($id);
    }

}
