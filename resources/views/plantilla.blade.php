<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/siscu.ico" />
    <title>Sistema de Cursos Integrales</title>

</head>
<body style="background:#182962;">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-1">
                <a href="https://unam.mx/">
                <img src="/img/pngun.png" width="65" height="75" >
                </a>                                               
            </div>
            <div class="col-7">
                <h1 class="display-5 text-white"><strong>Universidad Nacional Autónoma de México</strong></h1>
            </div>
            <div class="col-1">
                <a href="http://www.cuautitlan.unam.mx/">
                <img src="/img/fescpng.png" width="65" height="75">
                </a> 
            </div>                  
        </div>   
        <div class="row justify-content-center">
            <div class="col-7 px-4">
                <h1 class="display-5 text-white"><strong>Facultad de Estudios Superiores Cuautitlán</strong></h1>
            </div>            
        </div>       
        
        <div class="row navbar navbar-default navbar-static-top" style="background:#7e8188;">
            <div class="col-10 py-3">
                    <div class="btn-group btn-group-lg" role="group" aria-label="...">
                        <button type="button" class="btn btn-secondary"><a href="{{ route('inicio') }}" style="text-decoration: none;color: white;">{{ __('Inicio') }}</a></button>

                        <div class="btn-group btn-group-lg" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                                  Nosotros
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                  <a class="dropdown-item" href="{{ route('nosotros') }}">Mision</a>
                                  <a class="dropdown-item" href="{{ route('nosotros') }}">Vision</a>
                                  <a class="dropdown-item" href="{{ route('nosotros') }}">Valores</a>
                                </div>
                        </div>

                        <div class="btn-group btn-group-lg" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                                  Cursos
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                  <a class="dropdown-item" href="{{ route('cursos') }}">Comunidad UNAM</a>
                                  <a class="dropdown-item" href="{{ route('cursosExt') }}">Comunidad Externa</a>
                                  <a class="dropdown-item" href="{{ route('cursos') }}">Cursos por Carrera</a>
                                </div>
                        </div>

                        <button type="button" class="btn btn-secondary"><a href="{{ route('contacto') }}" style="text-decoration: none; color: white;">Contacto</a></button>   
                    </div>                                  
            </div>
            <div class="col-2 navbar navbar-expand-xl navbar-collapse navbar-dark" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class=" navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('ENTRA') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTRATE') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>   
        </div> 
    </div> 
    
    <section class="banner">
        @yield('seccion')
    </section>

    <footer class="footer">

    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>