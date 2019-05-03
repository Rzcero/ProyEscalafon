<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProdIntelectualRequest extends FormRequest
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
            'tipomedio'=>'required|in:2,3',
            'medio_escrito'=>'required_if:tipomedio,2',
            'medio_multimedia'=>'required_if:tipomedio,3',
            'nom_publicacion'=>'required'
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'tipoDocIdentidad.required'=>'El campo Doc. Identidad es obligatorio.',
    //         'num_docIdentidad.required_if'=>'El campo Número es obligatorio.',
    //     ];
    // }
}
