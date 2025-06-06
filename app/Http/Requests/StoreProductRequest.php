<?php

namespace App\Http\Requests;

use App\DTOs\Products\ProductData;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'string|required|max:255|',
            'active' => 'boolean',
            'price' =>  "required |numeric|regex:/^\d+(\.\d{1,2})?$/|gt:0",
            'stock' => 'integer|required',
        ];
    }

    public function toDTO() : ProductData
    {
        $data = $this->validated();

        return new ProductData(
            name: $data['name'],
            active: $data['active'] ?? true,
            price: $data['price'],
            stock: $data['stock'],
        );
    }
}
