<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Http\Services\StockService;
use App\Http\Requests\Stock\StoreStockRequest;
use App\Http\Requests\Stock\UpdateStockRequest;

class StockController extends Controller
{
    public function __construct(private StockService $stockService) {}

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
        $stock = $this->stockService->create($request->toDTO());

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
    public function update(UpdateStockRequest $request, Stock $stock)
    {
        $stock = $this->stockService->update($stock->id, $request->validated());

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
