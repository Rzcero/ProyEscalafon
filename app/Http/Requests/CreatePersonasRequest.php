<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonasRequest extends FormRequest
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
            'tipoDocIdentidad'=>'required',
            't_personal'=>'required',
            'selec_grupo'=>'required',
            'selec_condi'=>'required',
            'selec_categ'=>'required',
            'r_laboral'=>'required',
            't_docIdent'=>'required',
            't_legajo'=>'required',
            'n_doc'=>'required',
            'ape_pat'=>'required',
            'ape_mat'=>'required',
            'nomb'=>'required'
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'n_doc.required'=>'El campo Número es obligatorio.'
    //     ];
    // }

}
