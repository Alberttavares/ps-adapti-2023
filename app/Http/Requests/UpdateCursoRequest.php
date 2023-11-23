<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCursoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'curso' => ['required','string']
        ];
    }

    public function messages(){

        return [ 
            'curso.required' => "O campo precisa ser informado!", 
            'curso.string' => "Você deve escrever um curso"
        ];
    }
}