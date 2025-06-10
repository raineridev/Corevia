<?php

namespace App\Http\Repositories\Eloquent;

use App\DTOs\BaseDTO;
use App\Models\Voucher;
use Illuminate\Support\Collection;
use App\Http\Repositories\RepositoryInterface;

class VoucherRepository implements RepositoryInterface
{
    public function all(): Collection
    {
        return Voucher::all();
    }

    public function create(BaseDTO $dto) : Voucher
    {
        $voucher = Voucher::create([
            'active'  => $dto->active,
            'name' => $dto->name,
            'code'    => $dto->code,
            'quantity' => $dto->quantity,
            'start_at' => $dto->startAt,
            'end_at' => $dto->endAt,
            'min_value' => $dto->minimumValue
        ]);
        return $voucher;
    }

    public function find(int $id) : ?Voucher
    {
        $voucher = Voucher::findOrFail($id);
        return $voucher;
    }

    public function update(int $id, array $data) : Voucher
    {
        $voucher = Voucher::findOrFail($id);
        $voucher->update($data);
        return $voucher;
    }

    public function delete($id) : void
    {
        $voucher = Voucher::findOrFail($id);
        $voucher->delete();
    }
}
