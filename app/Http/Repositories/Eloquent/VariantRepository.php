<?php

namespace App\Http\Repositories\Eloquent;

use App\DTOs\BaseDTO;
use App\Models\Variant;
use Illuminate\Support\Collection;
use App\Http\Repositories\RepositoryInterface;
class VariantRepository implements RepositoryInterface
{
    public function all(): Collection
    {
        return Variant::all();
    }

    public function create(BaseDTO $data): Variant
    {
        return Variant::create([
            'name' => $data->name,
            'product_id' => $data->productId,
            'price' => $data->price,
        ]);
    }

    public function find(int $id): ?Variant
    {
        return Variant::findOrFail($id);
    }

    public function update(int $id, array $data): Variant
    {
        $variant = Variant::findOrFail($id);
        $variant->update($data);

        return $variant;
    }

    public function delete(int $id): void
    {
        $variant = Variant::findOrFail($id);
        $variant->delete();
    }
}
