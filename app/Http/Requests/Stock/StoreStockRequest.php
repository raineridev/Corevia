<?php

namespace App\Http\Requests\Stock;

use App\DTOs\StockData;
use Illuminate\Foundation\Http\FormRequest;

class StoreStockRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'quantity' => 'required|integer|min:1',
            'product_id' => 'required|exists:products,id',
            'variant_id' => 'exists:variants,id',
        ];
    }

    public function toDTO() : StockData
    {
        $data = $this->validated();

        return new StockData(
            quantity: $data['quantity'],
            productID:  $data['product_id'],
            variantID:  $data['variant_id'] ?? null,
        );
    }
}
