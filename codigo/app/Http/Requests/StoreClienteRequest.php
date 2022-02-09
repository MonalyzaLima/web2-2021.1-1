<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
                'cpf' => 'required',
                'endereco' => 'required',
                'telefone' => 'required',
                'dataNascimento' => 'required',
        ];
    }

    public function messages(){
        return[
            'nome.required' => 'Campo Nome obrigatório',
            'cpf.required' => 'Campo CPF obrigatório',
            'endereco.required' => 'Campo Endereço obrigatório',
            'telefone.required' => 'Campo Telefone obrigatório',
            'dataNascimento.required' => 'Campo Data de nascimento obrigatório',
        ];

    }
}
