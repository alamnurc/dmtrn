<?php

namespace App\Http\Requests\User;
use Illuminate\Foundation\Http\FormRequest;

class ProfilRequest extends FormRequest
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
            'name' => 'required',
            'username' => 'required',
            'tanggalLahir' => 'date',
            'jenisKelamin',
            'noHP' => 'integer',
            'alamat',
            'asalInstansi',
            'periode',
            'mentor',
            'jurusan',
            'semesterKelas' => 'integer'
        ];
    }
}
