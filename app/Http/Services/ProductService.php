<?php

namespace App\Http\Services;

use App\DTOs\Products\ProductData;
use App\Http\Repositories\Eloquent\ProductRepository;

class ProductService
{
    public function __construct(private ProductRepository $productRepository) {}
    public function all()
    {
        return $this->productRepository->all();
    }

    public function create(ProductData $data)
    {
        return $this->productRepository->create($data);
    }

    public function find(int $id)
    {
        return $this->productRepository->find($id);
    }
    public function update(int $id, array $data)
    {
        return $this->productRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->productRepository->delete($id);
    }
}
