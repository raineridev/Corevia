<?php

namespace App\Http\Requests\Variant;

use App\DTOs\VariantData;
use Illuminate\Foundation\Http\FormRequest;

class StoreVariantRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'price' => "required|numeric|regex:/^\d+(\.\d{1,2})?$/|gt:0",
            'product_id' => 'required|exists:products,id',
        ];
    }

    public function toDTO() : VariantData
    {
        $data = $this->validated();

        return new VariantData(
            name:  $data['name'],
            productId:  $data['product_id'],
            price:  $data['price'],
        );
    }
}
