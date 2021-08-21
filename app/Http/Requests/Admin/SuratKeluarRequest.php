<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SuratKeluarRequest extends FormRequest
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

            'nomor_surat' => 'required|max:255',
            'perihal' => 'required|max:255',
            'tujuan_surat' => 'required|max:255',
            'tanggal_surat' => 'required',
            'keterangan' => 'required|max:255',
            'file' => 'required',
        ];
    }
}
