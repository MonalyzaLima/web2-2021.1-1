<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
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
            'nomeProduto' => 'required',
            'ano' => 'required',
            'cor' => 'required',
            'marca' => 'required',
            'quantidade' => 'required',
            'valorVenda' => 'required',
            'valorCompra' => 'required',
        ];
    }

    public function messages(){
        return[
            'nomeProduto.required' => 'Campo Nome obrigatório',
            'ano.required' => 'Campo Ano obrigatório',
            'cor.required' => 'Campo Endereço obrigatório',
            'marca.required' => 'Campo Telefone obrigatório',
            'quantidade.required' => 'Campo  Quantidade obrigatório',
            'valorVenda.required' => 'Campo  Valor de venda obrigatório',
            'valorCompra.required' => 'Campo  Valor de compra obrigatório',
        ];

    }
}
