<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest;

use Illuminate\Support\Facades\Validator;



class ValidacionController extends Controller
{
    /* VALIDACIÓN EN CONTROLADOR CON Request
    function validarForm(Request $request)
    {

        $validatedData = Validator::make($request->all(), [

            'campoNombre' => 'required|min:2|max:15',
            'apellido' => 'required|min:2|max:20',
            'email' => 'required|email',
            'telefono' => 'nullable|regex:/^[67][0-9]{8}$/'
        ],  
        [
            'required'    => 'El :attribute es obligatorio.',
            'min'    => 'El :attribute debe tener como mínimo :min caracteres.',
            'max'    => 'El :attribute debe tener como máximo :min caracteres.',
            'email' => 'Email no válido',
            'regex'      => 'El número :attribute es invalido',
        ])->validate();

        return view('infoForm', ['nombre' => $request->campoNombre, 'apellido' => $request->apellido, 'email' => $request->email, 'telefono' => $request->telefono]);
    }

*/
    /* VALIDACIÓN UTILIZANDO CLASE ContactoRequest*/
    function validarForm(ContactoRequest $request)
    {


        return view('infoForm', ['nombre' => $request->campoNombre, 'apellido' => $request->apellido, 'email' => $request->email, 'telefono' => $request->telefono]);
    }
}
