<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateIdiomasRequest extends FormRequest
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
            'horas'=>'numeric|min:0',
            'creditos'=>'numeric|min:0',
            'tipo_idioma'=>'required',
            'tipo_doc'=>'required'
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'n_doc.required'=>'El campo Número es obligatorio.'
    //     ];
    // }

}
