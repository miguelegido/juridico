<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

    <head>

      <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
         

      <style>

        .barra-divider {
          height: 0.5rem;
          background-color: rgba(0, 0, 0, .1);
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

      </style>

        

     <title>Juridico - @yield('titulo')</title>

    </head>

    <body class="d-flex flex-column h-100">

      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

        <symbol id="edificio" viewBox="0 0 18 16">

          <path fill-rule="evenodd" clip-rule="evenodd" d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
        
        </symbol>

      </svg>  

      <header class="p-3 bg-dark text-white">

        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">

          <div class="container">

            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">

              <svg class="bi bi-bank2" width="18" height="18" role="img" fill="white" aria-label="Juridico"><use xlink:href="#edificio"/></svg>

            </a>

            <a class="navbar-brand" href="/">Estudio Juridico</a>
  
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#barranav" aria-controls="barranav" aria-expanded="false" aria-label="Toggle navigation">
              
              <span class="navbar-toggler-icon"></span>
              
            </button>

      
            <div class="collapse navbar-collapse" id="barranav">
  
              <ul class="navbar-nav me-auto mb-2 mb-sm-0 ">
  
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/">Pagina Principal</a>
                </li>
  
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/contacto">Contacto</a>
                </li>  
               
              </ul>

              <div class="text-end">

                <a href="/login">

                  <button type="button" class="btn btn-outline-light me-2" >Iniciar Sesion</button>

                </a>
                

              </div>

            </div>

          </div>

        </nav> 

      </header>
      
      <div class="barra-divider"></div>




     <main class="container">

        <div class="d-flex flex-column h-100">

          <div class="container-md">

            <span style="font-size:x-large">
              <br>
              <h3>@yield('titulo')</h3>              
              <hr>
              <br>
          </span>

           
            @yield('contenido')

          </div>

        </div>
                      

    </main>


      <footer class="footer mt-auto py-3 bg-dark text-center">

        <div class="container text-light">
          Estudio Juridico - Todos los derechos reservados
          {{ now()->year }}
        </div>
        
        <span class="text-light">Desarrollado por Miguel Aguilar.</span>

      </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
      </body>

</html>
