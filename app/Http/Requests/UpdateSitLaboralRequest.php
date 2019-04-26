<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSitLaboralRequest extends FormRequest
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
            't_personal'=>'required|in:2,3',
            'selec1'=>'required|in:2,3,4,5,6,7',
            'selec2'=>'required|in:2,3,4,5'
        ];
    }
}
