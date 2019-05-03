<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEstSuperiorRequest extends FormRequest
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
            'centro_estudio_superior'=>'required',
            'carrera'=>'required',
            
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'n_doc.required'=>'El campo Número es obligatorio.'
    //     ];
    // }

}
