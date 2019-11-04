<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    function saludar($nombre = "", $color = "")
    {
        if ($nombre == "" && $color == "") {
            return view('saludo');
        }
        else if ($nombre != "" && $color == "") {
            return view('saludo',['nombre'=>$nombre]);
        }
        else {
            return view('saludo',['nombre'=>$nombre,'color'=>$color]);
        }
    }
}
