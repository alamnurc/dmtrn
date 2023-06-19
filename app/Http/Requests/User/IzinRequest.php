<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class IzinRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|max:64',
            'tanggalMulai' => 'date',
            'jamMulai' => 'time',
            'tanggalSelesai' => 'date',
            'jamSelesai' => 'time',
            'keperluan' => 'required|max:128',
            'status' => 'required|max:32'
        ];
    }
}
