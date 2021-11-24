<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\UpperCase;

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
            'nome' => ['required', 'min:10', new UpperCase()],
            'debito' => 'required',
            'endereco ' => 'required',
        ];
    }

    public function messages(){
        return [
            'nome.required' => "Campo nome obrigatório",
            'nome.min' => "Campo nome deve ter no mínimo :min",
            'debito.required' => "Campo débito obrigatório",
            'endereco.required' => "Campo endereço obrigatório"
        ];
    }
}
