<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRiderRequest extends FormRequest
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
            "fname" => 'required|string',
            "lname" => 'required|string',
            "team" => 'required|string',
            "manufacturer_id" => 'required|integer',
            "nationality" => 'required|string',
            "imageURL" => 'required|string',
        ];
    }
}
