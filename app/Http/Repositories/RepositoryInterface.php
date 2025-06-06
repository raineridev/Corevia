<?php

namespace App\Http\Repositories;

use App\DTOs\BaseDTO;

interface RepositoryInterface
{
    public function all();

    public function create(BaseDTO $data);

    public function find(int $id);

    public function update(int $id, array $data);

    public function delete(int $id);
}
