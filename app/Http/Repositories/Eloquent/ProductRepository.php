<?php

namespace App\Http\Repositories\Eloquent;

use App\DTOs\BaseDTO;
use App\Models\Product;
use App\Http\Repositories\RepositoryInterface;
class ProductRepository implements RepositoryInterface
{
    public function all()
    {
        return Product::all();
    }

    public function create(BaseDTO $data)
    {
        return Product::create([
            'name' => $data->name,
            'price' => $data->price,
            'active' => $data->active,
            'stock' => $data->stock
        ]);
    }

    public function find(int $id)
    {
        return Product::findOrFail($id);
    }

    public function update(int $id, array $data)
    {
        $product = Product::findOrFail($id);
        $product->update((array) $data);
        return $product;
    }

    public function delete(int $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    }
}
