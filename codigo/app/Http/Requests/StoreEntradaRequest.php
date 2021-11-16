<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntradaRequest extends FormRequest
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
            'notaFiscal' => 'required|min:10',
            'valorTotal' => 'required',
        ];
    }

    public function messages(){
        return [
            'notaFiscal.required' => "Campo nota fiscal obrigatório",
            'notaFiscal.min' => "Campo nome deve ter no mínimo :min",
            'valorTotal.requered' => "Campo valor total obrigatório"
        ];
    }
}
