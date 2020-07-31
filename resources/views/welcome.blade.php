{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bootstrap Website One</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="/css/main.css">
  </head>
  <body>

    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <div class="container">
        <a href="index.html" class="navbar-brand">
          Instituto | Itali
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#home-section" class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a href="#info-section" class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <hr>  

    <!-- HOME -->
    <header id="home-section">
      <div class="dark-overlay">
        <div style= "padding-top: 100px;" class="home-inner">
          <div class="container">
          <div class="row">
            <div class="col-lg-6 d-none d-sm-block">
            <h1 ><strong>PROGRAMA LECTURA VELÓZ</strong></h1>
            <h3  style="padding-top: 0px; " class="display-5">¿ Tienes el hábito de leer pero no te alcanza el tiempo ?, incrementa tu velocidad al máximo.  </h3>
            </div>
          </div>
            <div class="row">
              <div style="right: 40px;" class="col-lg-6 d-none d-sm-block" >
                <div style="width: 600px;left: 0px; 
                padding: 15px;box-sizing: border-box;"
                class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XaeRY9xic44" allowfullscreen></iframe>
                </div>             
                <hr>
              </div>
              <!-- SECOND COLUMN -->
              <div style="bottom: 250px; padding: 2.25rem " class="col-lg-6 ">
                <div class="card text-center" style="background-color: #424242;">
                  <div class="card-body">
                    <h3>Formulario de Contacto</h3>
                    <p></p>
                    <form class="contact-form" method="post" action="{{route('contact.send')}}">
                      @csrf
                      <div class="form-group">
                        <input type="text" name="nombre" id="nombre" class="form-control form-control-lg" placeholder="Nombre Completo">
                      </div>
                      <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <select class="form-control" name="sede" id="exampleFormControlSelect1">
                                    <option>Seleccione una Sede</option>
                                    <option>Cusco</option>
                                    <option>Puno</option>
                                    <option>Juliaca</option>
                                    <option>Andahuaylas</option>
                                  </select>
                            </div>
                            
                            <div class="col-md-6">
                                <select class="form-control" name="programa" id="exampleFormControlSelect1">
                                    <!-- <option>Seleccione un Programa</option>
                                    s <option>PELA</option>-->
                                    <option>LECTURA VELOZ</option>
                                  </select>
                            </div>
                          </div>
                      </div>
                      <div class="form-group">
                        <input type="text" name="celular" class="form-control form-control-lg" placeholder="Celular">
                      </div>
                      <div class="form-group">
                        <input type="text" name="email" class="form-control form-control-lg" placeholder="E-mail">
                      </div>
                      <input type="submit" onclick="alert2()" value="Enviar Datos" id="send" class="btn btn-outline-light btn-block">
                    </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- INFO HEAD -->
    <hr>
    <section class="info-head-section">
      <div style="padding-top: 0px"  class="container">
          <div class="col text-center">
            <div class="p-5">
              <h1 class="display-4;font-weight: 300;">TESTIMONIOS</h1>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4">
              <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UvNcestjPFs" allowfullscreen></iframe>
              </div>
          </div>
          <div class="col-md-4">
              <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PFiMZ_68O9E" allowfullscreen></iframe>
              </div>
          </div>
          <div class="col-md-4">
              <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8YvBcsas2BY" allowfullscreen></iframe>
              </div>
          </div>
          <div class="col text-center">
              <div class="p-5">
            
              </div>
            </div>
        </div>
      </div>
    </section>
    <hr>
    <section class="info-section bg-light text-muted py-0" id="info-section">
    
    </section>

    <!-- HEAD SECTION -->
    <section class="info-head-section bg-danger">

    </section>

    <section class="info-section bg-light text-muted py-0" id="info-section">

    </section>

    <!-- FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12 p-5">
            <!--Footer Bottom-->
            <p class="text-center">&copy; Copyright 2020 -  Instituto ITALI.</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  </body>
</html>



<script>

  function alert2(){

  const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Signed in successfully'
})
}
 
</script>