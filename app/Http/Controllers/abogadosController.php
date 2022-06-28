<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class abogadosController extends Controller
{
    public function show($id)
    {
        // return view('abogados-show', compact($id));
        return view('abogados-show')->with(['id' => $id]);
    }
}
