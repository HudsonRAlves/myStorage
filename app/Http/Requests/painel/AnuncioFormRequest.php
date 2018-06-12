<?php

namespace App\Http\Requests\painel;

use Illuminate\Foundation\Http\FormRequest;

class AnuncioFormRequest extends FormRequest
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
        return
        [
            'nome'       => 'required|min:3|max:100',
        ];
    }
    
    public function messages(){
        return [    
        'nome.required' =>  'O campo nome é de preenchimento obrigatório!'
        ];
    }
}
