@extends('layouts.juridico')

@section('titulo')
Abogados
@endsection

@section('contenido')


<table class="table table-striped table-hover" method="GET">
    <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Telefono</th>
          <th scope="col">e-Mail</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Juan</td>
          <td>Perez</td>
          <td>987654321</td>
          <td>juan.perez@email.com</td>
          <td>

            <div class="btn-group">
                  
                <a href=""><span  data-feather="edit" class="align-text-bottom "></span></a>

            </div> 

            <div class="btn-group">

                <a href="abogados/1"><span  data-feather="eye" class="align-text-bottom "></span></a>

            </div>

          </td>
        </tr>

        <tr>
            <th scope="row" >2</th>
            <td>Miguel</td>
            <td>Martinez</td>
            <td>987654987</td>
            <td>miguel.martinez@email.com</td>
            <td>
  
              <div class="btn-group">
                    
                  <a href=""><span  data-feather="edit" class="align-text-bottom "></span></a>
  
              </div> 
  
              <div class="btn-group">
  
                  <a href="abogados/2"><span  data-feather="eye" class="align-text-bottom "></span></a>
  
              </div>
  
            </td>
          </tr>

          <tr>
            <th scope="row">3</th>
            <td>Yohana</td>
            <td>Aguilar</td>
            <td>654987321</td>
            <td>yohana.aguilar@email.com</td>
            <td>
  
              <div class="btn-group">
                    
                  <a href=""><span  data-feather="edit" class="align-text-bottom "></span></a>
  
              </div> 
  
              <div class="btn-group">
  
                  <a href="abogados/3"><span  data-feather="eye" class="align-text-bottom "></span></a>
  
              </div>
  
            </td>
          </tr>


      </tbody>
  </table>
<br>
<br>
  <div class="container">

    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" >Agregar Abogado</button>
  
  </div>
  <br>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Abogado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form class="row g-3">

          <div class="col-md-4">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>

          <div class="col-md-4">
            <label for="recipient-name" class="col-form-label">Apellido:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>

          <div class="col-md-4">
            <label for="recipient-name" class="col-form-label">RUT:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>

          <div class="col-md-12">
            <label for="recipient-name" class="col-form-label">Direccion:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>

          <div class="col-md-4">
            <label for="recipient-name" class="col-form-label">Telefono:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>

          <div class="col-md-8">
            <label for="recipient-name" class="col-form-label">Correo:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>


          <div class="mb-3">
            <label for="tipoconsulta" class="form-label">Estado</label>
            <select id="tipoconsulta" class="form-select">
              <option>Activado</option>
              <option>Desactivado</option>
            </select>
          </div>


        </form>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>

@endsection