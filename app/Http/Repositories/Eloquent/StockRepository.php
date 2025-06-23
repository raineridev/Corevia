<?php

namespace App\Http\Repositories\Eloquent;

use App\Models\Stock;
use App\DTOs\BaseDTO;
use App\Http\Repositories\RepositoryInterface;
use Illuminate\Support\Collection;

class StockRepository implements RepositoryInterface
{
    public function all(): Collection
    {
        return Stock::all();
    }

    public function create(BaseDTO $data): Stock
    {
        return Stock::create([
            'quantity' => $data->quantity,
            'product_id' => $data->productID,
            'variant_id' => $data->variantID,
        ]);
    }

    public function find(int $id): ?Stock
    {
        return Stock::findOrFail($id);
    }

    public function update(int $id, array $data): Stock
    {
        $stock = Stock::findOrFail($id);
        $stock->update($data);

        return $stock;
    }

    public function delete(int $id): void
    {
        $stock = Stock::findOrFail($id);
        $stock->delete();
    }
}
