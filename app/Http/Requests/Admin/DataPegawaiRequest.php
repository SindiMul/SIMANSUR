<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DataPegawaiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_petugas' => 'required|max:255',
            'nip' => 'required|integer|max:255',
            'pangkat' => 'required|max:255',
            'jabatan' => 'required |max:255',
        ];
    }
}
