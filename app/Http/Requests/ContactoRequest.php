<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        /*IMPORTANTE CAMBIAR A TRUE PARA QUE FUNCIONE*/
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

            'campoNombre' => 'required|min:2|max:15',
            'apellido' => 'required|min:2|max:20',
            'email' => 'required|email',
            'telefono' => 'nullable|regex:/^[67][0-9]{8}$/'

        ];
    }

    public function messages()
    {

        [
            'required'    => 'El :attribute es obligatorio.',
            'min'    => 'El :attribute debe tener como mínimo :min caracteres.',
            'max'    => 'El :attribute debe tener como máximo :min caracteres.',
            'email' => 'Email no válido',
            'regex'      => 'El número :attribute es invalido',
        ];



     }
}
