<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- 
        Equipo de desarrollo: 
        - Mariana Gómez Islas
        - Luis Adelfo Lobato Cázares
    -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#ff9000">
    <meta name="apple-mobile-web-app-title" content="Cominmex&reg;">
    <meta name="application-name" content="Cominmex&reg;">
    <meta name="msapplication-TileColor" content="#ff9000">
    <meta name="theme-color" content="#ffffff">

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
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body class="">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-marino shadow-sm">
            <div class="container">
                <a class="col-2 link-blanco" href="{{ url('/') }}">
                    <div class="row centrado-vertical">
                        <object class="col-8" data="{{ asset('img/logos/malgavic.svg') }}" type="image/svg+xml">
                        </object>
                        <div class="col-4 titulo3">
                            <b>MALGAVIC</b>
                        </div>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <div class="df1">
            <div class="col-12">
                <div class="row df1">
                    <div class="col-xl-6 col-lg-5 col-md-4 col-sm-4 col-6 text-center txt2">
                        <div class="container">
                            <br>
                            <div class="row">
                                
                                    <a href="{{ url('/') }}" class="col-xl-5 col-lg-6 col-md-10 col-sm-12 col-12">
                                        <img alt="picture" src="{{URL::asset('/images/logo.png')}}" width="100%">  
                                    </a>
                                   


                            </div>
                            <div class="row">
                                <div class="txt3">
                                    +52 55 7894 8658 <i class="fas fa-phone"></i>
                                    <br>
                                    <a class="txt3" href="mailto:contacto@cominmex.com.mx?Subject=Dudas%20generales">
                                        contacto@cominmex.com.mx
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-8 col-sm-8 col-6 text-right txt1">
                        <br><br>
                        <div class="row justify-content-right">
                            <ul class="col-12"> <a class="txt3" href="/about">Acerca de nosotros</a>                 </ul>
                            <ul class="col-12"> <a class="txt3" href="/privacy">Políticas de privacidad</a> </ul>
                            <ul class="col-12"> <a class="txt3"href="/faq">Preguntas frecuentes</a>         </ul> 
                        </div>
                        <br>
                    </div>
                </div>
                <div class="row df1 justify-content-center">
                    <div class="container text-center">
                        <a target="blank" href="https://www.facebook.com/Cominmex-S-de-RL-de-CV-102891144931910/">
                            <i class="fab fa-facebook-square col-1 icon"></i>
                        </a>
                        <a target="blank" href="https://www.instagram.com/cominmex/">
                            <i class="fab fa-instagram-square col-1 icon"></i>
                        </a> 
                        <a target="blank" href="https://api.whatsapp.com/send?phone=525578948658&text=Hola%2C%20me%20gustaría%20recibir%20información">
                            <i class="fab fa-whatsapp-square col-1 icon"></i>
                        </a>

                        <i class="fas fa-virus"></i>
                    </div>
                    <br><br><br>
                </div>
                <div class="row bg-celeste justify-content-center">
                    Comercializadora Industrial Mexicana S.A. de C.V.
                </div>
            </div>
        </div>
    </div>
</body>
</html>
