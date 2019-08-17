<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoasRequest extends FormRequest
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
            'idUserFk' => 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'numeric' => 'Dados inválidos. O valor precisa ser numérico',
        ];
    }
}
