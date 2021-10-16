<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SuratTugasRequest extends FormRequest
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
         
            'nomor' => 'required|max:255',
            'perihal' => 'required|max:255',
            'tempat' => 'required|max:255',
            'hari' => 'required |max:255',
            'pukul' => 'required|max:255',
            'dasar' => 'required |max:255',
        ];
    }
}
