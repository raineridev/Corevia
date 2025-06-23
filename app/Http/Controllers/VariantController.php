<?php

namespace App\Http\Controllers;

use App\Models\Variant;
use App\Http\Services\VariantService;
use App\Http\Requests\Variant\StoreVariantRequest;
use App\Http\Requests\Variant\UpdateVariantRequest;

class VariantController extends Controller
{
    public function __construct(private VariantService $variantService) {}

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
        $variant = $this->variantService->create($request->toDTO());
        return $variant;
    }

    /**
     * Display the specified resource.
     */
    public function show(Variant $variant)
    {
        $variant = $this->variantService->find($variant->id);
        return $variant;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVariantRequest $request, Variant $variant)
    {

        $variant = $this->variantService->update($variant->id, $request->validated());

        return $variant;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Variant $variant)
    {
        $variant = $this->variantService->delete($variant->id);
        return $variant;
    }
}
