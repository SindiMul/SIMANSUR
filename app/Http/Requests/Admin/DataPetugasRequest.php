<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class \DataPetugasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'data_pegawai_id'=> 'required|exists:data_pegawai, id',
            'surat_tugas_id'=> 'required|integer|exists:surat_tugas, id',
        ];
    }
}
