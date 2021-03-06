<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/"> 

    <link href="{{ asset('/css/sidebars.css') }}" rel="stylesheet">

    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    <title>Estudio Juridico - @yield('titulo')</title>

  </head>

  <body class="d-flex flex-column h-100">
    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        
      <a class="navbar-brand col-md-2 col-lg-2 me-0 px-3 fs-6" >Estudio Juridico</a>

      
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        
        <span class="navbar-toggler-icon"></span>

      </button>

      <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Buscar" aria-label="">

            <div class="navbar-nav">
                
                <div class="nav-item text-nowrap">

                <a class="nav-link px-3" href="/">Cerrar Sesion</a>

                </div>

            </div>

            </header>

          <div class="container-fluid">

            <div class="row">

                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">

                <div class="position-sticky pt-3 ">

                    <ul class="nav flex-column">

                    <li class="nav-item">                    

                        <a class="nav-link text-light fs-5" aria-current="page" href="/audiencias">

                        <br>

                        <span  data-feather="calendar" class="align-text-bottom "></span>
                        
                            Audiencias

                        </a>

                    </li>


                    <li class="nav-item">

                        <a class="nav-link text-light fs-5" href="/clientes">

                        <span data-feather="users" class="align-text-bottom"></span>

                        Clientes

                        </a>

                    </li>


                    <li class="nav-item">

                        <a class="nav-link text-light fs-5" data-bs-toggle="collapse" data-bs-target="#servicios-collapse" aria-expanded="false" href="">

                            <span data-feather="book" class="align-text-bottom"></span>

                            Servicios

                        </a>

                          <div class="collapse" id="servicios-collapse">

                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">

                              <li><a href="/servicios" class="link-light d-inline-flex text-decoration-none rounded">Ver Servicios</a></li>

                              <li><a href="/tipo-servicio" class="link-light d-inline-flex text-decoration-none rounded">Tipos de Servicios</a></li>

                            </ul>

                          </div>


                    </li>

                    <li class="nav-item">


                        <a class="nav-link text-light fs-5" href="/abogados">

                        <span data-feather="user" class="align-text-bottom"></span>

                        Abogados

                        </a>

                    </li>

                    <li class="nav-item">


                        <a class="nav-link text-light fs-5" href="/tribunales">

                        <span data-feather="home" class="align-text-bottom"></span>

                        Tribunales

                        </a>

                    </li>

                    <li class="nav-item">

                      <hr class="text-light" >
                      <a class="nav-link text-light fs-5" href="/usuarios">

                      <span data-feather="users" class="align-text-bottom"></span>

                      Usuarios

                      </a>

                  </li>

                    </ul>
                </div>
                </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <div class="container-md">

                <span style="font-size:x-large">
                  <br>
                  <h3>@yield('titulo')</h3>              
                  <hr>
                  <br>
              </span>

              
                @yield('contenido')

              </div>
          
        </main>



      </div>
    </div>

    <footer class="footer mt-auto py-1 bg-dark text-center">

      <div class="container text-light">

        Estudio Juridico - Todos los derechos reservados
        {{ now()->year }}
        
      </div>
      
      <span class="text-light">Desarrollado por Miguel Aguilar.</span>

    </footer>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
          <script src="{{ asset('/js/dashboard.js') }}"></script>
          <script src="{{ asset('/js/sidebars.js') }}"></script>

  </body>

</html>