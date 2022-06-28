<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    
    {
        $users = [
            'Yohana',
            'Miguel',
            'Isaac',
            'Escarlet',
            ];
            return view('usuarios')->with(['users' => $users]);

        return view('usuarios');
    
    }
        
    public function show($id)

        {
            return view('usuarios-show')->with(['id' => $id]);
        }

    public function create()

    {
        return ('Crear nuevo usuario');
    }

        

}


