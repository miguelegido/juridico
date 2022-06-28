<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientesController extends Controller
{
    public function nombre($name, $lastname = null)

    {   if($lastname){

        return "El nombre del cliente es {$name}, y su apellido es {$lastname}";

    }else

    return "El nombre del cliente es {$name}";
       
    }

    public function show($id)
    {
        return view('clientes-show')->with(['id' => $id]);
    }
}
