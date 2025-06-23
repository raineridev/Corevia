<?php

namespace App\Http\Services;

use App\DTOs\StockData;
use App\Http\Repositories\Eloquent\StockRepository;

class StockService
{
    public function __construct(private StockRepository $stockRepository) {}

    public function all()
    {
        return $this->stockRepository->all();
    }

    public function create(StockData $data)
    {
        return $this->stockRepository->create($data);
    }

    public function find(int $id)
    {
        return $this->stockRepository->find($id);
    }

    public function update(int $id, array $data)
    {
        return $this->stockRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->stockRepository->delete($id);
    }
}
