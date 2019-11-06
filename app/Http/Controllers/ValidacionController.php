<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class ValidacionController extends Controller
{
    function validarForm(Request $request)
    {

        $validatedData = Validator::make($request->all(), [

            'campoNombre' => 'required|min:2|max:15',
            'apellido' => 'required|min:2|max:20',
            'email' => 'required|email:rfc',
            'telefono' => 'regex:/[679][0-9]{8}/'
        ]);

        if ($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData->errors());
        } 
        else
            return view('infoForm', ['nombre' => $request->campoNombre, 'apellido' => $request->apellido, 'email' => $request->email, 'telefono' => $request->telefono]);
    }
}
