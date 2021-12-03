<style>
    body {
        margin: 0;
        font-size: 0.9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #212529;
        text-align: left;
        background-color: #f8fafc;
        background-image: url(/img/bg.jpg);
        background-attachment: fixed;
    }
</style>
@extends('layouts.app')
@section('content')

<div class="col-12">

    <div class="row">
        <a class="sobreponer2 burbuja flotante whatsapp" target="blank" href="https://api.whatsapp.com/send?phone={{env('MALGAVIC_PHONE_COUNTRY')}}{{env('MALGAVIC_PHONE')}}&text=Hola%2C%20me%20gustaría%20solicitar%20información">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <div class="row justify-content-center d1">    
        <!-- Slider -->
        <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner blackout">
                
                <!-- Diapositivas-->
                <div class="carousel-item active">
                    <img class="img-fluid" src="{{URL::asset('/img/banner/b3.jpg')}}" alt="First slide">
                    <!-- Cuadro de texto flotante-->
                    <div class="col-md-8 col-sm-10 col-11 blanco sobreponer centrado-absoluto centrar centrado-vertical">
                        <div style="font-size: calc(1em + 3vw)">
                            <b> Añade estilo y seguridad a tus proyectos con los mejores diseños. </b>
                            
                            <br><br>
                            <a href="/catalogos">
                                <button class="btn btn-rojo btn-ovalado titulo9"> 
                                    &nbsp; <i class="fas fa-book"></i> Ver catálogos &nbsp; 
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev sobreponer" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next sobreponer" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>  
        </div>
    </div>
</div>

<!--Destacados-->
<div class="col-12 bg-index" id="Productos">
    <div>
        <!-- Título -->
        <div class="row justify-content-center p-5">
            <span style="font-size: calc(1em + 3vw)">
                Productos destacados. 
            </span>
        </div>        
        <!-- Productos -->
        <div class="row text-center ">
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3 pl-4 pr-4 pb-3 destacado">
                <div class="redondeado m-2" id="cut">
                    <img alt="destacado" src="{{URL::asset('/img/destacados/d1.jpg')}}" class="img-fluid zoom">
                </div>
                <br>
                <span style="font-size: calc(1em + 1vw)">
                    Rueda tipo Super
                </span>
            </figure>
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3 pl-4 pr-4 pb-3 destacado">
                <div class="redondeado m-2" id="cut">
                    <img alt="destacado" src="{{URL::asset('/img/destacados/d2.jpg')}}" class="img-fluid zoom">
                </div>
                <br>
                <span style="font-size: calc(1em + 1vw)">
                    Rodaja Poliuretano Carga Pesada
                </span>
            </figure>
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3 pl-4 pr-4 pb-3 destacado">
                <div class="redondeado m-2" id="cut">
                    <img alt="destacado" src="{{URL::asset('/img/destacados/d3.jpg')}}" class="img-fluid zoom">
                </div>
                <br>
                <span style="font-size: calc(1em + 1vw)">
                    Puntos de Fijación Cristal
                </span>
            </figure>
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3 pl-4 pr-4 pb-3 destacado">
                <div class="redondeado m-2" id="cut">
                    <img alt="destacado" src="{{URL::asset('/img/destacados/d4.jpg')}}" class="img-fluid zoom">
                </div>
                <br>
                <span style="font-size: calc(1em + 1vw)">
                    Barandal Inoxidable
                </span>
            </figure>
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3 pl-4 pr-4 pb-3 destacado not_priority">
                <div class="redondeado m-2" id="cut">
                    <img alt="destacado" src="{{URL::asset('/img/destacados/d5.jpg')}}" class="img-fluid zoom">
                </div>
                <br>
                <span style="font-size: calc(1em + 1vw)">
                    Piña forja Española
                </span>
            </figure>
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3 pl-4 pr-4 pb-3 destacado not_priority">
                <div class="redondeado m-2" id="cut">
                    <img alt="destacado" src="{{URL::asset('/img/destacados/d6.jpg')}}" class="img-fluid zoom">
                </div>
                <br>
                <span style="font-size: calc(1em + 1vw)">
                    Berrendo EPP
                </span>
            </figure>
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3 pl-4 pr-4 pb-3 destacado not_priority">
                <div class="redondeado m-2" id="cut">
                    <img alt="destacado" src="{{URL::asset('/img/destacados/d7.jpg')}}" class="img-fluid zoom">
                </div>
                <br>
                <span style="font-size: calc(1em + 1vw)">
                    Stabilus Integra
                </span>
            </figure>
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3 pl-4 pr-4 pb-3 destacado not_priority">
                <div class="redondeado m-2" id="cut">
                    <img alt="destacado" src="{{URL::asset('/img/destacados/d8.jpg')}}" class="img-fluid zoom">
                </div>
                <br>
                <span style="font-size: calc(1em + 1vw)">
                    Mecanismos Gira
                </span>
            </figure>
        </div>
    </div>
    <br><br>
</div>

<div class="col-12 bg-celeste-rgba" >
    <div class="row">
        <img src="{{URL::asset('/img/waveUP.svg')}}" width="100%">
    </div>
</div>

<div class="col-12">
    <div class="row bg-celeste-rgba justify-content-center" ng-init="typewriter()">
        <!-- Cuadro de texto flotante-->
        <div class="col-md-8 col-sm-10 col-11 blanco sobreponer centrar centrado-total">
            <div class="" style="font-size: calc(1em + 2.1vw); margin:auto;">
                El inventario más completo para todo tipo de <b> <span class="typed"></span> </b>
                <br>
                <a href="/catalogos">
                    <button class="btn btn-rojo btn-ovalado titulo8"> 
                        &nbsp; <i class="fas fa-book"></i> Ver catálogos &nbsp; 
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="col-12 bg-celeste-rgba" >
    <div class="row">
        <img src="{{URL::asset('/img/waveDOWN.svg')}}" width="100%">
    </div>
</div>

<!--Contacto-->
<div class="col-12 bg-index" id="Contacto">
    <div class="container">
        <div class="row">
            <span style="font-size: calc(1em + 2vw)">
                <br>
                Contáctanos. 
            </span>
        </div>
        <div class="row pt-5 pb-0 centrado-vertical">
            <!-- Formulario -->
            <div class="col-md-7 col-11 text-center pb-5">
                <form>
                    <fieldset>
                        <div class="form-group">
                            <div class="row">
                                <input type="text" class="form-control col-8" name="fecha" ng-model="$scope.fecha" hidden required value="<?php echo date("Y-m-d H:i:s"); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="nombre" class="col-4 control-label title3">Nombre:</label>
                                <input type="text" class="form-control col-8" name="nombre" ng-model="$scope.nombre" placeholder="Nombre completo" required value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="telefono" class="col-4 control-label title3">Teléfono:</label>
                                <input type="number" class="form-control col-8" name="telefono" ng-model="$scope.telefono" placeholder="Número a 10 dígitos" pattern="[0-9]{10}" required value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="correo" class="col-4 control-label title3">E-Mail:</label>
                                <input type="email" class="form-control col-8" name="correo" ng-model="$scope.correo" placeholder="ejemplo@correo.com" required value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="cp" class="col-4 control-label title3">Código postal:</label>
                                <input type="number" class="form-control col-8" name="cp" ng-model="$scope.cp" placeholder="A 5 dígitos" required value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="mensaje" class="col-4 control-label title3">Mensaje:</label>
                                <textarea class="form-control col-8" rows="6" name="mensaje" ng-model="$scope.mensaje" required placeholder="Dejanos tu mensaje aquí"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-4"></div>
                                <button type="submit" ng-click="contactar()" class="btn btn-rojo btn-ovalado col-md-4 col-sm-6 col-8">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>     
            </div>

            <!-- Imagen -->
            <div class="col-5 centrar not_priority">
                <object class="img-fluid" data="{{ asset('img/undraw_message_sent_1030.svg') }}" type="image/svg+xml"></object> 
            </div>
        </div>
    </div>
</div>

<div class="col-12 bg-celeste" >
    <div class="row">
        <img src="{{URL::asset('/img/waveUP.svg')}}" width="100%">
    </div>
</div>

<!-- Ubicación -->
<div class="bg-celeste col-12 pb-5 blanco">
    <div class="container" id="Ubicación">
        <div class="row pb-3">
            <span style="font-size: calc(1em + 2vw)">
                Visita nuestras oficinas.
            </span>
        </div>
        <div class="row justify-content-center centrado-vertical">
            <!-- Imagen -->
            <div class="col-5 centrar not_priority">
                <object loading="lazy" class="img-fluid" data="{{ asset('img/undraw_right_direction_tge8.svg') }}" type="image/svg+xml"></object> 
            </div>
            <div class="col-md-7 col-12 mapouter">
                <div class="gmap_canvas img-fluid">
                    <iframe loading="lazy" class="redondeado_lite" width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=19.651310496101978,%20-99.21618556329621&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a>
                    <br>
                    <style>.mapouter{position:relative;text-align:right;height:300px;width:500px;}</style>
                    <style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:500px;}</style>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- GAP -->
<div class="bg-gris-rgba">
    
</div>

@endsection

