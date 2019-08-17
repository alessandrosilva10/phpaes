<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceitaRequest extends FormRequest
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
            'titulo' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            'preparo' => 'required|string|min: 1|max: 499',
            'ingredientes' => 'required|string|min: 1|max: 499',
            'aprovado' => 'required|string'
        ];
    }

    public function messages(){
        return [
            'required' => 'O :attribute é obrigatório',
            'max' => 'O :attribute não pode ser maior que 100',
            'min' => 'O :attribute não pode ser menor que 1',
            'string' => 'Dados inválidos'
        ];
    }
}
