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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nomeProduto' => 'required|min:10',
            'valorCompra ' => 'required',
            'valorVenda ' => 'required',
            'quantidade ' => 'required',

        ];
    }

    public function messages(){
        return [
            'nomeProduto.required' => "Campo nome obrigatório",
            'nomeProduto.min' => "Campo nome deve ter no mínimo :min",
            'valorCompra.required' => "Campo valor de compra obrigatório",
            'valorVenda.required' => "Campo valor de venda obrigatório"
            'quantidade.required' => "Campo quantidade obrigatório"

        ];
    }
}
