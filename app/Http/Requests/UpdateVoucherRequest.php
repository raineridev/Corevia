<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVoucherRequest extends FormRequest
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
            'active' => 'boolean',
            'name' => 'max:255|',
            'code' => 'max:255',
            'quantity' => 'integer',
            'minimum_value' => 'integer',
            'start_at' => 'date',
            'end_at' =>  'date',
        ];
    }
}
