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
            'nome' => 'required|min:10',
            'cnpj' => 'required',
            'email ' => 'required|email:rfc,dns',
        ];
    }

    public function messages(){
        return [
            'nome.required' => "Campo nome obrigatório",
            'nome.min' => "Campo nome deve ter no mínimo :min",
            'cnpj.required' => "Campo CNPJ obrigatório",
            'email.required' => "Campo E-mail obrigatório"
        ];
    }
}
