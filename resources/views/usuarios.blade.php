@extends('layouts.juridico')

@section('titulo')
Usuarios
@endsection

@section('contenido')


<div class="container-fluid">

    @empty($users)

        <p>No hay usuarios registrados</p>

    @else

        <ul class="list-group">

            @foreach ($users as $user)
        
                <li class="list-group-item">{{ $user }}</li>
        
            @endforeach
        
        </ul>

    @endempty


</div>


<br>

<div class="container">

    <a href="/usuarios/nuevo">
    
        <button type="button" class="btn btn-dark" >Nuevo Usuario</button>
    
    </a>    

</div>

@endsection