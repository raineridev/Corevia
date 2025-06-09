<?php

namespace App\Http\Services;

use App\Models\Product;
use App\DTOs\Products\ProductData;

class VoucherService
{
    public function __construct(VoucherRepository $voucherRepository) {}

    public function all()
    {
        return $this->voucherRepository->all();
    }

    public function create(ProductData $data)
    {
        return $this->voucherRepository->create($data);
    }

    public function find(int $id)
    {
        return $this->voucherRepository->find($id);
    }

    public function update(int $id, array $data)
    {
        return $this->voucherRepository->update($id, $data);
    }

    public function delete(int $id)
    {
        return $this->voucherRepository->delete($id);
    }
}
