<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonasRequest extends FormRequest
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
            'tipoDocIdentidad'=>'required|in:2,3,4,5,6',
            'num_docIdentidad'=>'required_if:tipoDocIdentidad,2,3,4,5,6',
            'apellidoPaterno'=>'required',
            'apellidoMaterno'=>'required',
            'nomb'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'tipoDocIdentidad.required'=>'El campo Doc. Identidad es obligatorio.',
            'num_docIdentidad.required_if'=>'El campo Número es obligatorio.',
        ];
    }
}
