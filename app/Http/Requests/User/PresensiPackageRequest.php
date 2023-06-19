<?php

namespace App\Http\Requests\User;
use Illuminate\Foundation\Http\FormRequest;

class PresensiPackageRequest extends FormRequest
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
            'tanggal' => 'required|date',
            'jamPresensi' => 'time',
            'jenisPresensi' => 'required|max:64'
        ];
    }
}
