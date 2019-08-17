<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            'nome' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            'descricao' => 'required|string|min: 1|max: 500',
            'preco' => 'required|numeric',
            'idCategoriaFk' => 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'required' => 'O :attribute é obrigatório',
            'string' => 'Dados inválidos',
            'numeric' => 'Dados inválidos. O valor precisa ser numérico',
            'regex' => ':attribute com um formato inválido'
        ];
    }
}
