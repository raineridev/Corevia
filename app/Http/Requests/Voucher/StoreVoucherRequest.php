<?php

namespace App\Http\Requests\Voucher;

use App\DTOs\VoucherData;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreVoucherRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'active' => 'required|boolean',
            'name' => 'required|max:255|',
            'code' => 'required|max:255',
            'quantity' => 'required|integer',
            'minimum_value' => 'required|integer',
            'start_at' => 'required|date',
            'end_at' =>  'required|date',
        ];
    }

    public function toDTO() : VoucherData
    {
        $data = $this->validated();

        return new VoucherData(
            name: $data['name'],
            code: $data['code'],
            quantity: $data['quantity'],
            minimumValue: $data['minimum_value'],
            startAt: $data['start_at'],
            endAt: $data['end_at'],
    );
    }
}
