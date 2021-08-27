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
                            <img alt="destacado" src="{{URL::asset('/catlg/img/rueda.png')}}" width="90%">
                        </div>
                        <div class="card__content">
                            <div class="card__title">Rodamex</div>
                            <p class="card__text">Líder nacional en fabricación de ruedas y rodajas de tipo ligero hasta semipesado.</p>
                            <a target="blank" href="{{URL::asset('/catlg/rodamex.pdf')}}">
                                <button class="btn btn-dwl col-12">Descargar</button>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="cards__item col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="text-center">
                            <img alt="destacado" src="{{URL::asset('/catlg/img/roll-master.png')}}" width="90%">
                        </div>
                        <div class="card__content">
                            <div class="card__title">PH Casters</div>
                            <p class="card__text">Soluciones lean.</p>
                            <a target="blank" href="{{URL::asset('/catlg/rollmaster.pdf')}}">
                                <button class="btn btn-dwl col-12">Descargar</button>
                            </a>
                        </div>
                    </div>
                </li>    
                <li class="cards__item col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="text-center">
                            <img alt="destacado" src="{{URL::asset('/catlg/img/tente.png')}}" width="90%">
                        </div>
                        <div class="card__content">
                            <div class="card__title">TENTE</div>
                            <p class="card__text">Soluciones prácticas a la movilidad, soluciones rápidas.</p>
                            <a target="blank" href="{{URL::asset('/catlg/tente.pdf')}}">
                                <button class="btn btn-dwl col-12">Descargar</button>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="cards__item col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="text-center">
                            <img alt="destacado" src="{{URL::asset('/catlg/img/blickle.png')}}" width="90%">
                        </div>
                        <div class="card__content">
                            <div class="card__title">Blickle</div>
                            <p class="card__text">Ruedas y rodajas de alta especialidad, líderes en carga ultra pesada.</p>
                            <a target="blank" href="{{URL::asset('/catlg/blickle.pdf')}}">
                                <button class="btn btn-dwl col-12">Descargar</button>
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
            Forja e Inoxidable.
            <br><br>
        </div>
        <div class="row">
            <ul class="cards col-12">
                <li class="cards__item col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="text-center">
                            <img alt="destacado" src="{{URL::asset('/catlg/img/arteferro.png')}}" width="90%">
                        </div>
                        <div class="card__content">
                            <div class="card__title">Forja</div>
                            <p class="card__text">Líderes en artículos de hierro forjado, todos los herrajes y chapas que necesitas.</p>
                            <a target="blank" href="{{URL::asset('/catlg/arteferro_MX.pdf')}}">
                                <button class="btn btn-dwl col-12">Descargar</button>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="cards__item col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="text-center">
                            <img alt="destacado" src="{{URL::asset('/catlg/img/arteferro.png')}}" width="90%">
                        </div>
                        <div class="card__content">
                            <div class="card__title">Inox</div>
                            <p class="card__text">Tu mejor aliado para tu diseño arquitectónico, canceleria inoxidable, galvanizada para acabados interiores y exteriores.</p>
                            <a target="blank" href="{{URL::asset('/catlg/IAM_MX.pdf')}}">
                                <button class="btn btn-dwl col-12">Descargar</button>
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
            Herramienta.
            <br><br>
        </div>
        <div class="row">
            <ul class="cards col-12">
                <div class="row">  <!-- justify-content-center  para centrar tarjetas--> 
                <li class="cards__item col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="text-center">
                            <img alt="destacado" src="{{URL::asset('/catlg/img/knova.jpg')}}" width="90%">
                        </div>
                        <div class="card__content">
                            <div class="card__title">KNOVA</div>
                            <p class="card__text">Herramientas para profesionales y apasionados. </p>
                            <a target="blank" href="{{URL::asset('/catlg/knova.pdf')}}">
                                <button class="btn btn-dwl col-12">Descargar</button>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="cards__item col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="text-center">
                            <img alt="destacado" src="{{URL::asset('/catlg/img/mik.jpg')}}" width="90%">
                        </div>
                        <div class="card__content">
                            <div class="card__title">Mikel's</div>
                            <p class="card__text">Herramienta idónea para el área de mantenimiento y ensamble.  </p>
                            <a target="blank" href="{{URL::asset('/catlg/mikels.pdf')}}">
                                <button class="btn btn-dwl col-12">Descargar</button>
                            </a>
                        </div>
                    </div>
                </li>
                </div>                
            </ul>    
        </div>
        <br><br>
    </div>
    <br><br>
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
                            <img alt="destacado" src="{{URL::asset('/catlg/img/Herrex.png')}}" width="90%">
                        </div>
                        <div class="card__content">
                            <div class="card__title">Herrex</div>
                            <p class="card__text"> </p>
                            <a target="blank" href="{{URL::asset('/catlg/Herrex.pdf')}}">
                                <button class="btn btn-dwl col-12">Descargar</button>
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
            Productos sanitizantes.
            <br><br>
        </div>
        <div class="row">
            <ul class="cards col-12">
                <li class="cards__item col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="text-center">
                            <img alt="destacado" src="{{URL::asset('/catlg/img/BioKep.png')}}" width="90%">
                        </div>
                        <div class="card__content">
                            <div class="card__title">BioKep</div>
                            <p class="card__text">Sanitizantes. </p>
                            <a target="blank" href="{{URL::asset('/catlg/BioKep.pdf')}}">
                                <button class="btn btn-dwl col-12">Descargar</button>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>    
        </div>
        <br><br><br>
    </div>
    <br><br>
</div>
@endsection

