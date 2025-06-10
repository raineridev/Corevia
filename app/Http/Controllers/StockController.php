<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStockRequest;
use App\Http\Requests\UpdateStockRequest;
use App\Models\Stock;

class StockController extends Controller
{
    public function __construct(StockService $stockService) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->stockService->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStockRequest $request)
    {
        $stock = $this->stockService->store($request->toDTO());

        return $stock;
    }

    /**
     * Display the specified resource.
     */
    public function show(Stock $stock)
    {
        $stock = $this->stockService->find($stock->id);

        return $stock;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStockRequest $request, Voucher $stock)
    {
        $stock = $this->stockService->find($stock->id, $request);

        return $stock;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stock $stock)
    {
        $stock = $this->stockService->delete($stock->id);

        return $stock;
    }
}
