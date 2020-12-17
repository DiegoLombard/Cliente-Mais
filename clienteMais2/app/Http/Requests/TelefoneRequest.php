<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TelefoneRequest extends FormRequest
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
    public function messages()
    {
        return [
            'titulo.required' => 'Preencha um titulo',
            'titulo.max' => 'Título deve ter até 150 caracteres',
            'telefone.required'=> 'Preencha um telefone',
            
            'telefone.max' => 'Telefone deve ter até 30 caracteres'
     
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
                'titulo' => 'required|max:150',
                'telefone' => 'required|max:30'
                
            
        ];
    }
}
