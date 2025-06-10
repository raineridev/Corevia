<?php

namespace App\Http\Repositories\Eloquent;

use App\DTOs\BaseDTO;
use App\Http\Repositories\RepositoryInterface;
use App\Models\Variant;
use Illuminate\Support\Collection;

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
            'price' => $data->price,
            'active' => $data->active,
            'stock' => $data->stock,
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
