@extends('layouts.index')

@section('titulo')

    Inicia Sesion


@endsection

@section('contenido')


<form class="row g-3">

   <div class="col-md-10">

        <div class="col-md-4">

            <label for="usuario">Email o Usuario</label>

            <input type="email" class="form-control" id="usuario">

        </div>

        <div class="col-md-4">
        
            <label for="apasssword">Contrasena</label>

            <input type="password" class="form-control" id="apasssword">
        
        </div>

        <div class="checkbox mb-3">

            <label>

                <input type="checkbox" value="remember-me"> Recuerdame
                
            </label>

        </div>

        <div class="col-4">

            <a href="/dashboard">

                <button type="button" class="btn btn-outline-dark me-4">Ingresar</button>

              </a>


        </div>
        

    </div>
  </form>

@endsection