<?php

namespace App\Http\Controllers;

use App\Http\Requests\Voucher\StoreVoucherRequest;
use App\Http\Requests\Voucher\UpdateVoucherRequest;
use App\Http\Services\VoucherService;
use App\Models\Voucher;

class VoucherController extends Controller
{
    public function __construct(VoucherService $voucherService) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->voucherService->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVoucherRequest $request)
    {
        $voucher = $this->voucherService->store($request->toDTO());

        return $voucher;
    }

    /**
     * Display the specified resource.
     */
    public function show(Voucher $voucher)
    {
        $voucher = $this->voucherService->find($voucher->id);

        return $voucher;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVoucherRequest $request, Voucher $voucher)
    {
        $voucher = $this->voucherService->find($voucher->id, $request);

        return $voucher;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voucher $voucher)
    {
        $voucher = $this->voucherService->delete($voucher->id);

        return $voucher;
    }
}
