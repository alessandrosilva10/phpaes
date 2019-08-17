<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CupomDescontoRequest extends FormRequest
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
            'valor' => 'required|numeric|min: 1|max: 500'
        ];  
    }

    public function messages(){
        return [
            'required' => 'O :attribute é obrigatório',
            'max' => 'O :attribute não pode ser maior que 500',
            'min' => 'O :attribute não pode ser menor que 1',
            'numeric' => 'Dados inválidos',
        ];
    }
    
}
