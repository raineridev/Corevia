<?php

namespace App\Http\Controllers;

use App\Models\Variant;
use App\Http\Services\VariantService;
use App\Http\Requests\StoreVariantRequest;
use App\Http\Requests\UpdateVariantRequest;



class VariantController extends Controller
{
    public function __construct(variantService $variantService) {}


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->variantService->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVariantRequest $request)
    {
        $voucher = $this->variantService->store($request->toDTO());
        return $voucher;
    }

    /**
     * Display the specified resource.
     */
    public function show(Variant $voucher)
    {
        $voucher = $this->variantService->find($voucher->id);
        return $voucher;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVariantRequest $request, Voucher $voucher)
    {
        $voucher = $this->variantService->find($voucher->id, $request);
        return $voucher;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Variant $voucher)
    { 
        $voucher = $this->variantService->delete($voucher->id);
        return $voucher;
    }
}
