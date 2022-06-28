@extends('layouts.index')

@section('titulo')

    Escribenos



@endsection

@section('contenido')


<form class="row g-3">

    <div class="col-md-12">

        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="email" class="form-control" id="nombre">
          </div>
      
          <div class="col-md-6">
            <label for="email" class="form-label">Correo Electronico</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
          
      
          
          <div class="col-md-6">
            <label for="tipoconsulta" class="form-label">Tipo de Consulta</label>
            <select id="tipoconsulta" class="form-select">
              <option>Consulta</option>
              <option>Otro</option>
            </select>
          </div>
      
          <div class="col-md-6">
            <label for="consulta" class="form-label">Detalles Consulta</label>
            <textarea class="form-control" id="consulta" rows="3"></textarea>
          </div>
    </div>

    <div class="col-6">
      <a href="/dashboard">
        <button type="submit" class="btn btn-dark">Enviar Consulta</button>

      </a>
       
      </div>

    
  </form>

  



@endsection