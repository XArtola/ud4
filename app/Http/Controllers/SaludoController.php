<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    function saludar($nombre = "", $color = "")
    {
        if ($nombre == "" && $color == "") {
            return view('saludo');
        } else if ($nombre != "" && $color == "") {
            return view('saludo', ['nombre' => $nombre]);
        } else {
            return view('saludo', ['nombre' => $nombre, 'color' => $color]);
        }
    }

    function saludarForm(Request $request)
    {

        $nombre = $request->input('campoNombre') . " " . $request->input('apellido');

        return view('saludo', ['nombre' => $nombre]);
    }

    function saludarFormMulti(Request $request)
    {

        $nombre = $request->input('campoNombre') . " " . $request->input('apellido');
        $jsonString = file_get_contents(base_path('public/assets/saludos.json'));
        $saludos = json_decode($jsonString, true);
        return view('saludo', ['nombre' => $nombre, 'saludos' => $saludos]);
    }
    
    function saludarFormMulti2(Request $request)
    {

        $nombre = $request->input('campoNombre') . " " . $request->input('apellido');
        $jsonString = file_get_contents(base_path('public/assets/saludos.json'));
        $saludos = json_decode($jsonString, true);
        return view('4_3_2', ['nombre' => $nombre, 'saludos' => $saludos]);
    }

}
