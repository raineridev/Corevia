<?php

namespace App\Http\Services;

use App\DTOs\VariantData;
use App\Http\Repositories\Eloquent\VariantRepository;

class VariantService
{
    public function __construct(private VariantRepository $variantRepository) {}

    public function all()
    {
        return $this->variantRepository->all();
    }

    public function create(VariantData $data)
    {
        return $this->variantRepository->create($data);
    }

    public function find(int $id)
    {
        return $this->variantRepository->find($id);
    }

    public function update(int $id, array $data)
    {
        return $this->variantRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->variantRepository->delete($id);
    }
}
