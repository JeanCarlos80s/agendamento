<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ReuniaoRequest extends Request
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
            'nome' => 'required',
            'data_reuniao' => 'required',
            'hora_reuniao' => 'required'
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'Este campo é requerido',
            'data_reuniao.required' => 'Informe a data da reunião',
            'hora_reuniao.required' => 'Informe a hora da reunião'
        ];
    }
}
