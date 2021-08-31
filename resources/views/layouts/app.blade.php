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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body class="">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-marino shadow-sm">
            <div class="container">
                <a class="col-5 link-blanco" href="{{ url('/') }}">
                    <div class="row centrado-vertical">
                        <div class="col-4 color_actual">
                            <svg class="img-fluid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 517.48 517.48"><path  d="M263.32,405.84c-84.84,0-153.87-69-153.87-153.86s69-153.86,153.87-153.86,153.86,69,153.86,153.86-69,153.86-153.86,153.86m0-291.06c-75.66,0-137.21,61.54-137.21,137.2s61.55,137.19,137.21,137.19S400.52,327.63,400.52,252,339,114.78,263.32,114.78"/><path  d="M263.32,361.38a109.41,109.41,0,1,1,0-218.81v16.67A92.74,92.74,0,1,0,356.05,252h16.67a109.52,109.52,0,0,1-109.4,109.41"/><polygon  points="471.15 371.56 454.48 371.56 454.48 147.1 263.32 261.7 72.16 147.1 72.16 371.56 55.49 371.56 55.49 117.68 263.32 242.26 471.15 117.68 471.15 371.56"/></svg>
                        </div>
                        <div class="col-6 color_actual">
                            <svg class="img-fluid" viewBox="0 0 373.48 83.35001">
                                <path d="m 19.49,72.4 a 5.45,5.45 0 0 1 2,-2.11 5.69,5.69 0 0 1 2.89,-0.76 5.87,5.87 0 0 1 3.34,0.93 5.24,5.24 0 0 1 2,2.6 h -1.37 a 4,4 0 0 0 -1.52,-1.85 4.44,4.44 0 0 0 -2.47,-0.66 4.55,4.55 0 0 0 -2.3,0.59 4.19,4.19 0 0 0 -1.6,1.73 6.1,6.1 0 0 0 0,5.19 4.13,4.13 0 0 0 1.6,1.71 4.83,4.83 0 0 0 4.77,-0.06 3.89,3.89 0 0 0 1.52,-1.82 h 1.37 a 5.19,5.19 0 0 1 -2,2.58 5.94,5.94 0 0 1 -3.33,0.92 5.69,5.69 0 0 1 -2.89,-0.76 5.56,5.56 0 0 1 -2,-2.1 6.64,6.64 0 0 1 0,-6.13" />
                                <path d="m 37.59,80.64 a 5.32,5.32 0 0 1 -2.07,-2.11 6.56,6.56 0 0 1 0,-6.13 5.39,5.39 0 0 1 2.07,-2.11 6,6 0 0 1 5.87,0 5.43,5.43 0 0 1 2.06,2.11 6.64,6.64 0 0 1 0,6.13 5.36,5.36 0 0 1 -2.06,2.11 6,6 0 0 1 -5.87,0 m 5.25,-0.85 a 4.23,4.23 0 0 0 1.63,-1.72 5.93,5.93 0 0 0 0,-5.2 4.27,4.27 0 0 0 -1.63,-1.71 4.8,4.8 0 0 0 -4.65,0 4.27,4.27 0 0 0 -1.63,1.71 5.93,5.93 0 0 0 0,5.2 4.23,4.23 0 0 0 1.63,1.72 4.8,4.8 0 0 0 4.65,0" />
                                <polygon points="129.29,111.75 133.73,101.81 134.97,101.81 134.97,113.28 133.81,113.28 133.81,104.12 129.72,113.28 128.87,113.28 124.78,104.16 124.78,113.28 123.62,113.28 123.62,101.81 124.85,101.81 "     transform="translate(-72,-32)" />
                                <polygon points="146.91,112.32 146.91,113.29 140.84,113.29 140.84,101.65 146.91,101.65 146.91,102.61 142.01,102.61 142.01,106.95 146.41,106.95 146.41,107.91 142.01,107.91 142.01,112.32 " transform="translate(-72,-32)" />
                                <path d="m 86.61,81.28 -2.88,-4.85 h -2.14 v 4.85 H 80.43 V 69.67 h 3.49 a 4.16,4.16 0 0 1 3,0.93 3.16,3.16 0 0 1 1,2.44 3.3,3.3 0 0 1 -0.72,2.15 3.43,3.43 0 0 1 -2.13,1.16 l 3,4.93 z m -5,-5.8 h 2.34 a 2.88,2.88 0 0 0 2.06,-0.66 2.36,2.36 0 0 0 0.69,-1.78 2.28,2.28 0 0 0 -0.67,-1.77 3,3 0 0 0 -2.09,-0.62 h -2.33 z" />
                                <path d="m 93.63,72.4 a 5.38,5.38 0 0 1 2,-2.11 5.67,5.67 0 0 1 2.89,-0.76 5.87,5.87 0 0 1 3.34,0.93 5.22,5.22 0 0 1 2,2.6 h -1.36 a 4,4 0 0 0 -1.52,-1.85 4.47,4.47 0 0 0 -2.47,-0.66 4.55,4.55 0 0 0 -2.3,0.59 4.19,4.19 0 0 0 -1.6,1.73 6,6 0 0 0 0,5.19 4.13,4.13 0 0 0 1.6,1.71 4.83,4.83 0 0 0 4.77,-0.06 3.89,3.89 0 0 0 1.52,-1.82 h 1.36 a 5.17,5.17 0 0 1 -2,2.58 5.94,5.94 0 0 1 -3.33,0.92 5.67,5.67 0 0 1 -2.89,-0.76 5.49,5.49 0 0 1 -2,-2.1 6.64,6.64 0 0 1 0,-6.13" />
                                <rect x="109.45" y="69.669998" width="1.16" height="11.62" />
                                <path d="m 123.21,78.53 h -5.28 l -1,2.75 h -1.23 l 4.24,-11.47 h 1.31 l 4.23,11.47 h -1.23 z m -0.34,-1 -2.3,-6.28 -2.29,6.28 z" />
                                <polygon points="203.71,112.34 207.88,112.34 207.88,113.28 202.54,113.28 202.54,101.67 203.71,101.67 " transform="translate(-72,-32)" />
                                <rect x="140.77" y="69.669998" width="1.16" height="11.62" />
                                <polygon points="226.4,101.67 226.4,102.6 220.55,112.25 226.48,112.25 226.48,113.29 219.18,113.29 219.18,112.35 225.04,102.7 219.28,102.7 219.28,101.67 " transform="translate(-72,-32)" />
                                <path d="m 166.48,78.53 h -5.28 l -1,2.75 H 159 l 4.24,-11.47 h 1.31 l 4.23,11.47 h -1.28 z m -0.34,-1 -2.3,-6.28 -2.29,6.28 z" />
                                <path d="m 180.56,70.36 a 5,5 0 0 1 2.12,2 6.43,6.43 0 0 1 0.73,3.13 6.31,6.31 0 0 1 -0.73,3.1 4.81,4.81 0 0 1 -2.12,2 7.28,7.28 0 0 1 -3.3,0.69 h -3.44 V 69.67 h 3.44 a 7.28,7.28 0 0 1 3.3,0.69 m 0.39,8.69 a 4.8,4.8 0 0 0 1.28,-3.55 4.87,4.87 0 0 0 -1.28,-3.58 5,5 0 0 0 -3.69,-1.29 H 175 v 9.69 h 2.28 a 5,5 0 0 0 3.69,-1.27" />
                                <path d="m 191.05,80.64 a 5.45,5.45 0 0 1 -2.07,-2.11 6.64,6.64 0 0 1 0,-6.13 5.52,5.52 0 0 1 2.07,-2.11 6,6 0 0 1 5.87,0 5.29,5.29 0 0 1 2.08,2.11 6.64,6.64 0 0 1 0,6.13 5.23,5.23 0 0 1 -2.06,2.11 6,6 0 0 1 -5.87,0 m 5.26,-0.85 a 4.3,4.3 0 0 0 1.63,-1.72 6,6 0 0 0 0,-5.2 4.34,4.34 0 0 0 -1.63,-1.71 4.82,4.82 0 0 0 -4.66,0 4.27,4.27 0 0 0 -1.63,1.71 6,6 0 0 0 0,5.2 4.23,4.23 0 0 0 1.63,1.72 4.82,4.82 0 0 0 4.66,0" />
                                <path d="m 211.27,81.28 -2.88,-4.85 h -2.15 v 4.85 h -1.16 V 69.67 h 3.49 a 4.15,4.15 0 0 1 2.95,0.93 3.17,3.17 0 0 1 1,2.44 3.26,3.26 0 0 1 -0.73,2.15 3.43,3.43 0 0 1 -2.13,1.16 l 3,4.93 z m -5,-5.8 h 2.35 a 2.85,2.85 0 0 0 2.05,-0.66 2.36,2.36 0 0 0 0.69,-1.78 2.32,2.32 0 0 0 -0.66,-1.77 3,3 0 0 0 -2.1,-0.62 h -2.33 z" />
                                <path d="m 224.79,78.53 h -5.28 l -1,2.75 h -1.23 l 4.23,-11.47 h 1.32 L 227,81.28 h -1.23 z m -0.34,-1 -2.3,-6.28 -2.29,6.28 z" />
                                <rect x="239.91" y="69.669998" width="1.16" height="11.62" />
                                <polygon points="326.54,101.67 327.7,101.67 327.7,113.28 326.54,113.28 320.1,103.51 320.1,113.28 318.94,113.28 318.94,101.67 320.1,101.67 326.54,111.42 " transform="translate(-72,-32)" />
                                <path d="m 268.31,70.36 a 5,5 0 0 1 2.12,2 6.43,6.43 0 0 1 0.73,3.13 6.31,6.31 0 0 1 -0.73,3.1 4.81,4.81 0 0 1 -2.12,2 7.28,7.28 0 0 1 -3.3,0.69 h -3.44 V 69.67 H 265 a 7.28,7.28 0 0 1 3.3,0.69 m 0.39,8.69 a 4.8,4.8 0 0 0 1.31,-3.55 4.87,4.87 0 0 0 -1.28,-3.58 5,5 0 0 0 -3.69,-1.29 h -2.28 v 9.69 H 265 a 5,5 0 0 0 3.69,-1.27" />
                                <path d="M 277.62,69.67 V 77 a 3.52,3.52 0 0 0 0.83,2.56 3,3 0 0 0 2.25,0.83 3,3 0 0 0 2.23,-0.82 3.55,3.55 0 0 0 0.81,-2.57 v -7.31 h 1.16 V 77 a 4.38,4.38 0 0 1 -1.17,3.33 4.75,4.75 0 0 1 -6.1,0 4.38,4.38 0 0 1 -1.17,-3.33 v -7.29 z" />
                                <path d="m 292.23,81 a 3.22,3.22 0 0 1 -1.37,-1.11 2.86,2.86 0 0 1 -0.53,-1.6 h 1.23 a 2.32,2.32 0 0 0 0.74,1.49 3.23,3.23 0 0 0 3.82,0 1.94,1.94 0 0 0 0.69,-1.53 1.81,1.81 0 0 0 -0.39,-1.21 2.31,2.31 0 0 0 -0.94,-0.68 15.36,15.36 0 0 0 -1.57,-0.49 15.74,15.74 0 0 1 -1.84,-0.61 3.08,3.08 0 0 1 -1.16,-0.94 2.76,2.76 0 0 1 -0.48,-1.71 2.83,2.83 0 0 1 0.46,-1.6 3.11,3.11 0 0 1 1.31,-1.11 4.65,4.65 0 0 1 1.95,-0.4 4,4 0 0 1 2.6,0.79 3,3 0 0 1 1.14,2 h -1.26 a 2.07,2.07 0 0 0 -0.79,-1.27 2.7,2.7 0 0 0 -1.79,-0.56 2.74,2.74 0 0 0 -1.75,0.56 1.85,1.85 0 0 0 -0.69,1.52 1.73,1.73 0 0 0 0.38,1.18 2.34,2.34 0 0 0 0.95,0.68 16.38,16.38 0 0 0 1.56,0.5 15.33,15.33 0 0 1 1.83,0.62 3.06,3.06 0 0 1 1.18,0.94 2.74,2.74 0 0 1 0.48,1.7 3,3 0 0 1 -0.43,1.54 3.19,3.19 0 0 1 -1.28,1.18 4.28,4.28 0 0 1 -2,0.45 4.76,4.76 0 0 1 -2,-0.4" />
                                <polygon points="379.03,102.63 379.03,113.28 377.87,113.28 377.87,102.63 374.63,102.63 374.63,101.67 382.26,101.67 382.26,102.63 " transform="translate(-72,-32)" />
                                <path d="m 321.51,81.28 -2.88,-4.85 h -2.14 v 4.85 h -1.16 V 69.67 h 3.49 a 4.16,4.16 0 0 1 2.95,0.93 3.16,3.16 0 0 1 1,2.44 3.3,3.3 0 0 1 -0.72,2.15 3.43,3.43 0 0 1 -2.14,1.16 l 3,4.93 z m -5,-5.8 h 2.34 a 2.88,2.88 0 0 0 2.06,-0.66 2.36,2.36 0 0 0 0.69,-1.78 2.32,2.32 0 0 0 -0.67,-1.77 3,3 0 0 0 -2.09,-0.62 h -2.33 z" />
                                <rect x="328.31" y="69.669998" width="1.16" height="11.62" />
                                <path d="m 342.07,78.53 h -5.28 l -1,2.75 h -1.23 l 4.24,-11.47 h 1.31 l 4.23,11.47 h -1.23 z m -0.35,-1 -2.29,-6.28 -2.29,6.28 z" />
                                <polygon points="422.56,112.34 426.74,112.34 426.74,113.28 421.4,113.28 421.4,101.67 422.56,101.67 " transform="translate(-72,-32)" />
                                <polygon points="98.44,64.33 110.43,34.43 122.8,34.43 122.8,77.62 112.28,77.62 112.28,51.72 102.62,77.62 94.13,77.62 84.41,51.66 84.41,77.62 73.89,77.62 73.89,34.43 86.31,34.43 " transform="translate(-72,-32)" />
                                <path d="M 91.35,38 H 75.22 l -2.58,7.64 h -11 L 77.27,2.44 h 12.18 l 15.63,43.2 H 93.93 Z M 88.64,29.88 83.28,14.07 78,29.87 Z" />
                                <polygon points="198.41,69.5 212.2,69.5 212.2,77.62 187.89,77.62 187.89,34.43 198.41,34.43 " transform="translate(-72,-32)" />
                                <path d="m 180.06,16.09 a 7.88,7.88 0 0 0 -3.35,-3.29 11,11 0 0 0 -5.14,-1.14 10.59,10.59 0 0 0 -8.18,3.34 12.75,12.75 0 0 0 -3.08,9 q 0,6 3.23,9.32 3.23,3.32 8.9,3.35 a 10.72,10.72 0 0 0 6.55,-2 11.16,11.16 0 0 0 3.9,-5.66 h -13.35 v -7.75 h 22.89 V 31 a 20.5,20.5 0 0 1 -4,7.32 20.81,20.81 0 0 1 -7.11,5.48 22,22 0 0 1 -9.72,2.09 23,23 0 0 1 -11.41,-2.8 19.88,19.88 0 0 1 -7.81,-7.78 22.77,22.77 0 0 1 -2.77,-11.31 23,23 0 0 1 2.8,-11.42 19.94,19.94 0 0 1 7.78,-7.81 22.8,22.8 0 0 1 11.38,-2.8 22.08,22.08 0 0 1 13.08,3.76 17.72,17.72 0 0 1 7,10.39 z" />
                                <path d="M 231.32,38 H 215.2 l -2.59,7.64 h -11 l 15.63,-43.2 h 12.18 L 245,45.63 h -11.1 z m -2.71,-8.12 -5.35,-15.81 -5.26,15.8 z" />
                                <polygon points="357.27,34.43 368.41,34.43 353.09,77.62 339.93,77.62 324.61,34.43 335.8,34.43 346.51,67.04 " transform="translate(-72,-32)" />
                                <rect x="306.87" y="2.4300003" width="10.52" height="43.189999" />
                                <path d="m 332.15,12.55 a 19.88,19.88 0 0 1 7.73,-7.81 22.35,22.35 0 0 1 11.22,-2.8 21.47,21.47 0 0 1 13.17,4.06 19.51,19.51 0 0 1 7.32,11.08 H 360 A 9.42,9.42 0 0 0 356.37,13 10.35,10.35 0 0 0 351,11.54 a 10,10 0 0 0 -7.87,3.38 q -3,3.39 -3,9 0,5.61 3,9 A 10,10 0 0 0 351,36.39 10.25,10.25 0 0 0 356.37,35 9.39,9.39 0 0 0 360,30.86 h 11.56 a 19.35,19.35 0 0 1 -7.32,11 21.58,21.58 0 0 1 -13.17,4 22.35,22.35 0 0 1 -11.22,-2.8 19.87,19.87 0 0 1 -7.73,-7.78 23.1,23.1 0 0 1 -2.73,-11.28 23.31,23.31 0 0 1 2.76,-11.42" />
                            </svg>
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
                            <ul class="col-12"> <a class="txt3" href="/about">Acerca de nosotros</a> </ul>
                            <ul class="col-12"> <a class="txt3" href="/privacy">Políticas de privacidad</a> </ul>
                            <ul class="col-12"> <a class="txt3" href="/faq">Preguntas frecuentes</a> </ul> 
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
