<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFornecedorRequest extends FormRequest
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
            'cnpj' => 'required',
            'endereco' => 'required',
            'telefone' => 'required',
            'email' => 'required',
        ];
    }

    public function messages(){
        return[
            'nome.required' => 'Campo Nome obrigatório',
            'cnpj.required' => 'Campo CNPJ obrigatório',
            'endereco.required' => 'Campo Endereço obrigatório',
            'telefone.required' => 'Campo Telefone obrigatório',
            'email.required' => 'Campo E-mail obrigatório',
        ];

    }

}
