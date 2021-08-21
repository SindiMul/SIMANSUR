<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DisposisiRequest extends FormRequest
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

            'suratmasuk_id' => 'required|integer|exists:surat_masuks,id',
            'tanggal_penyelesaian' => 'required|max:255',
            'tembusan' => 'required|max:255',
        ];
    }
}