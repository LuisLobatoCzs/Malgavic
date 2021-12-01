<style type="text/css">
    @media (min-width:768px){
        .menor{
                display:none;
        }
        .mayor{
                display:block; 
        }

    }
    @media (max-width:768px){
        .menor{
                display:block;
        }
        .mayor{
                display:none;
        }

    }

    hr {
        height: 10px;
        width: 60%;
        background-color: #023654;
    }

    @gray-darker:               #444444;
    @gray-dark:                 #696969;
    @gray:                      #999999;
    @gray-light:                #cccccc;
    @gray-lighter:              #ececec;
    @gray-lightest:             lighten(@gray-lighter,4%);

    *,
    *::before,
    *::after { 
        box-sizing: border-box;
    }

    img {
        height: auto;
        max-width: 100%;
        vertical-align: middle;
    }

    .cards {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .cards__item {
        display: flex;
        padding: 1rem;
        @media(min-width: 40rem) {
            width: 50%;
        }
        @media(min-width: 56rem) {
            width: 33.3333%;
        }
    }

    .card {
        background-color: #555;
        border-radius: 0.25rem;
        box-shadow: 0 20px 40px -14px rgba(0,0,0,0.25);
        display: flex;
        flex-direction: column;
        overflow: hidden;
        &:hover {
            .card__image {
            filter: contrast(100%);
            }
        }
    }

    .card__content {
        display: flex;
        flex: 1 1 auto;
        flex-direction: column;
        padding: 1rem;
    }

    .card__image {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
        filter: contrast(70%);
        //filter: saturate(180%);
        overflow: hidden;
        position: relative;
        transition: filter 0.5s cubic-bezier(.43,.41,.22,.91);;
        &::before {
            content: "";
            display: block;
            padding-top: 56.25%; // 16:9 aspect ratio
        }
        @media(min-width: 40rem) {
            &::before {
            padding-top: 66.6%; // 3:2 aspect ratio
            }
        }
    }

    .card__title {
        color: @gray-dark;
        font-size: 1.25rem;
        font-weight: 300;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .card__text {
        flex: 1 1 auto;
        font-size: 0.875rem;
        line-height: 1.5;
        margin-bottom: 1.25rem;
    }


    .title{
        font-size:20;
        color:#fff;
    }
    .title2{
        font-size:35;
        color:#023654;
    }
    .txt{
        font-size:18;
        color:#000;
        text-align: justify;
        text-justify: inter-palabra;
    }
    .name{
        font-size:25;
        color:#fff;
    }
    .name2{
        font-size:15;
        color:#fff;
    }
    .d1 {
        background: #f3f3f3;
    }
    .d2 {
        background: rgba(255, 144, 0, 1);
    }
    .d3 {
        background: rgba(2, 54, 84, 1);
        padding: 20;
    }
</style>

@extends('layouts.app')
@section('content')

<div class="col-12 d1">
    <div class="row text-center title2 justify-content-center">
        <br>
        Consulta nuestros catálogos.
        <br><br>
    </div>
    <div class="row text-center title2 justify-content-center">
        <hr>
    </div>
</div>
<div class="col-12 d1">
    <div class="container justify-content-center">
        <br><br>
        <div class="row title2 justify-content-center">
            <br>
            Ruedas y rodajas.
            <br><br>
        </div>
        <div class="row">
            <ul class="cards col-12">
                <li class="cards__item col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="text-center">
                            <img alt="destacado" src="{{URL::asset('/img/cat/bolas.png')}}" width="90%">
                        </div>
                        <div class="card__content">
                            <div class="card__title">Bolas de transferencia de alta calidad</div>
                            <p class="card__text">Bolas de Transferencia para la industria en general, brindado soluciones para el manejo de
                            materiales; distinguidas por su alta capacidad de carga y vida útil, fabricadas con materiales de
                            primera calidad.</p>
                            <a target="blank" href="{{URL::asset('/cat/bolas.pdf')}}">
                                <button class="btn btn-rojo col-12">Descargar</button>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="cards__item col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="text-center">
                            <img alt="destacado" src="{{URL::asset('/img/cat/cascoo.png')}}" width="90%">
                        </div>
                        <div class="card__content">
                            <div class="card__title"> Cascoo</div>
                            <p class="card__text">Ruedas y rodajas para la Industria ligera y pesada. Cuenta con productos especializados y
                                fabricados con los más altos estándares de calidad, ideales para tu manejo de materiales.</p>
                            <a target="blank" href="{{URL::asset('/cat/cascoo.pdf')}}">
                                <button class="btn btn-rojo col-12">Descargar</button>
                            </a>
                        </div>
                    </div>
                </li>    
                <li class="cards__item col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="text-center">
                            <img alt="destacado" src="{{URL::asset('/img/cat/rodamex.png')}}" width="90%">
                        </div>
                        <div class="card__content">
                            <div class="card__title">RODAMEX</div>
                            <p class="card__text"> Ruedas y rodajas para la Industria ligera y pesada. Cuenta con productos especializados y
                                fabricados con los más altos estándares de calidad, ideales para tu manejo de materiales.</p>
                            <a target="blank" href="{{URL::asset('/cat/rodamex.pdf')}}">
                                <button class="btn btn-rojo col-12">Descargar</button>
                            </a>
                        </div>
                    </div>
                </li>     
                <li class="cards__item col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="text-center">
                            <img alt="destacado" src="{{URL::asset('/img/cat/blickle.png')}}" width="90%">
                        </div>
                        <div class="card__content">
                            <div class="card__title">blickle</div>
                            <p class="card__text">Ruedas y rodajas para la Industria ligera, pesada y súper pesada. Cuenta con productos
                                especializados, fabricados con los más altos estándares de calidad y tecnología alemana, ideales
                                para el manejo de materiales.</p>
                            <a target="blank" href="{{URL::asset('/cat/blickle.pdf')}}">
                                <button class="btn btn-rojo col-12">Descargar</button>
                            </a>
                        </div>
                    </div>
                </li>            
            </ul>    
        </div>
        <br><br>
    </div>
    <br><br>
</div>
<div class="col-12 d1">
    <div class="row text-center title2 justify-content-center">
        <hr>
    </div>
</div>
<div class="col-12 d1">
    <div class="container justify-content-center">
        <br><br>
        <div class="row title2 justify-content-center">
            <br>
            Forja y accesorios para Herrería y Cancelería
            <br><br>
        </div>
        <div class="row">
            <ul class="cards col-12">
                <li class="cards__item col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="text-center">
                            <img alt="destacado" src="{{URL::asset('/img/cat/arteferro.png')}}" width="90%">
                        </div>
                        <div class="card__content">
                            <div class="card__title">Arteferro</div>
                            <p class="card__text">Productos decorativos fabricados en hierro con la más alta calidad, forja y acero inoxidable con
                                sistemas de instalación sencilla, ideales para tus proyectos estructurales y arquitectónicos..</p>
                            <a target="blank" href="{{URL::asset('/cat/arteferro.pdf')}}">
                                <button class="btn btn-rojo col-12">Descargar</button>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="cards__item col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="text-center">
                            <img alt="destacado" src="{{URL::asset('/img/cat/iamdesign.png')}}" width="90%">
                        </div>
                        <div class="card__content">
                            <div class="card__title"> i am design</div>
                            <p class="card__text">Productos de acero inoxidable y hierro galvanizado, tales como soportes, montantes para barandilla,
                            terminales, soportes de vidrio, accesorios y diseños únicos, con sistemas de instalación sencilla y
                            flexibles, ideales para tus proyectos estructurales y arquitectónicos..</p>
                            <a target="blank" href="{{URL::asset('/cat/iamdesign.pdf')}}">
                                <button class="btn btn-rojo col-12">Descargar</button>
                            </a>
                        </div>
                    </div>
                </li>       
                
<div class="col-12 d1">
    <div class="row text-center title2 justify-content-center">
        <hr>
    </div>
</div>
<div class="col-12 d1">
    <div class="container justify-content-center">
        <br><br>
        <div class="row title2 justify-content-center">
            <br>
            Soportes, puertas y ventanas.
            <br><br>
        </div>
        <div class="row">
            <ul class="cards col-12">
                <li class="cards__item col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="text-center">
                            <img alt="destacado" src="{{URL::asset('/img/cat/herrex.png')}}" width="90%">
                        </div>
                        <div class="card__content">
                            <div class="card__title">Herrex</div>
                            <p class="card__text"> Herrajes y Sistemas de Rodamiento y Movilidad, tales como Bisagras, Herrajes Europeos, Pasadores,
                            Sistemas Cantilever, Sistemas Euroriel, Sistema Rodamiento.</p>
                            <a target="blank" href="{{URL::asset('/cat/herrex.pdf')}}">
                                <button class="btn btn-rojo col-12">Descargar</button>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>    
        </div>
        <br><br>
    </div>
    <br><br>
</div>
<div class="col-12 d1">
    <div class="row text-center title2 justify-content-center">
        <hr>
    </div>
</div>
<div class="col-12 d1">
    <div class="container justify-content-center">
        <br><br>
        <div class="row title2 justify-content-center">
            <br>
            Equipo de seguridad.
            <br><br>
        </div>
        <div class="row">
            <ul class="cards col-12">
                <li class="cards__item col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="text-center">
                            <img alt="destacado" src="{{URL::asset('/img/cat/riverline.jpg')}}" width="90%">
                        </div>
                        <div class="card__content">
                            <div class="card__title">Riverline</div>
                            <p class="card__text"> Herrajes y Sistemas de Rodamiento y Movilidad, tales como Bisagras, Herrajes Europeos, Pasadores,
                            Sistemas Cantilever, Sistemas Euroriel, Sistema Rodamiento.</p>
                            <a target="blank" href="{{URL::asset('/cat/riverline.pdf')}}">
                                <button class="btn btn-rojo col-12">Descargar</button>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>    
        </div>
        <br><br>
    </div>
    <br><br>
</div>

@endsection

