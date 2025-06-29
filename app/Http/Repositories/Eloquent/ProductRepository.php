<?php

namespace App\Http\Repositories\Eloquent;

use App\DTOs\BaseDTO;
use App\Http\Repositories\RepositoryInterface;
use App\Models\Product;
use Illuminate\Support\Collection;

class ProductRepository implements RepositoryInterface
{
    public function all(): Collection
    {
        return Product::all();
    }

    public function create(BaseDTO $data): Product
    {
        return Product::create([
            'name' => $data->name,
            'price' => $data->price,
            'active' => $data->active,
        ]);
    }

    public function find(int $id): ?Product
    {
        return Product::findOrFail($id);
    }

    public function update(int $id, array $data): Product
    {
        $product->update($data);

        return $product;
    }

    public function delete(int $id): void
    {
        $product = Product::findOrFail($id);
        $product->delete();
    }
}
