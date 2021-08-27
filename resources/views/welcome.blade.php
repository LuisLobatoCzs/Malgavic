@extends('layouts.app')
@section('content')

<?php
    if(isset($alerta)){
        if($alerta == 1){
            echo '
                <script>
                    toastr["success"]("Pronto nos pondremos en contacto contigo.", "Mensaje enviado!!",{"progressBar": true, "closeButton": true, "positionClass": "toast-bottom-right", "showDuration": "1000",}); 
                </script>
            ';
            $alerta = 0;
        }
    }
?>

<div class="col-12 mayor">
    <div class="row justify-content-center d1">    <!--Banner-->
        <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{URL::asset('/images/banner/b1.png')}}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{URL::asset('/images/banner/b2.png')}}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{URL::asset('/images/banner/b3.png')}}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{URL::asset('/images/banner/b4.png')}}">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{URL::asset('/images/banner/b5.png')}}">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>  
        </div>
    </div>
    <div class="row justify-content-center d5">    <!--Catálogo-->
        <div class="col-6 col-xl-4">
            <br><br><br>
            <a href="/catalogues">
            <div class="row justify-content-center">
                <img src="{{URL::asset('/images/boton2.png')}}" alt="catalog" height="100%" width="100%">
            </div>
            </a>
            <br><br><br>
        </div>
    </div>
</div>
<div class="col-12 menor">
    <div class="row justify-content-center d1">    <!--Banner-->
        <div id="carousel2" class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{URL::asset('/images/banner/bm1.png')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{URL::asset('/images/banner/bm2.png')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{URL::asset('/images/banner/bm3.png')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{URL::asset('/images/banner/bm4.png')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{URL::asset('/images/banner/bm5.png')}}" alt="First slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="row justify-content-center d5">    <!--Catálogo-->
        <div class="col-8 col-xl-4">
            <br><br><br>
            <a href="/catalogues">
                <div class="row justify-content-center">
                    <img src="{{URL::asset('/images/boton2.png')}}" alt="catalog" height="100%" width="100%">
                </div>
            </a>
            <br><br><br>
        </div>
    </div>
</div>


<div class="col-12 d2" id="Productos">   <!--Destacados-->
    <div>
        <br>
        <div class="title mayor col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            Productos destacados. 
        </div>
        <div class="title2 menor col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            Productos destacados.
        </div>
        <br><br>
        <div class="row text-center">
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3" > 
                <img alt="destacado" src="{{URL::asset('/images/destacados/d1.jpg')}}" width="90%">
                <h3 class="text-center name mayor">
                    Rueda tipo Super
                </h3>
                <h3 class="text-center name2 menor">
                    Rueda tipo Super
                </h3>
            </figure>
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3" > 
                <img alt="destacado" src="{{URL::asset('/images/destacados/d2.jpg')}}" width="90%">
                <h3 class="text-center name mayor">
                    Rodaja Poliuretano Carga Pesada
                </h3>
                <h3 class="text-center name2 menor">
                    Rodaja Poliuretano Carga Pesada
                </h3>
            </figure>
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3" > 
                <img alt="destacado" src="{{URL::asset('/images/destacados/d3.jpg')}}" width="90%">
                <h3 class="text-center name mayor">
                    Puntos de Fijación Cristal
                </h3>
                <h3 class="text-center name2 menor">
                    Puntos de Fijación Cristal
                </h3>
            </figure>
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3" > 
                <img alt="destacado" src="{{URL::asset('/images/destacados/d4.jpg')}}" width="90%">
                <h3 class="text-center name mayor">
                    Barandal Inoxidable 
                </h3>
                <h3 class="text-center name2 menor">
                    Barandal Inoxidable
                </h3>
            </figure>
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3 mayor" > 
                <img alt="destacado" src="{{URL::asset('/images/destacados/d5.jpg')}}" width="90%">
                <h3 class="text-center name mayor">
                    Piña forja Española
                </h3>
                <h3 class="text-center name2 menor">
                    Piña forja Española
                </h3>
            </figure>
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3 mayor" > 
                <img alt="destacado" src="{{URL::asset('/images/destacados/d6.jpg')}}" width="90%">
                <h3 class="text-center name mayor">
                    Berrendo EPP
                </h3>
                <h3 class="text-center name2 menor">
                    Berrendo EPP
                </h3>
            </figure>
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3 mayor" > 
                <img alt="destacado" src="{{URL::asset('/images/destacados/d7.jpg')}}" width="90%">
                <h3 class="text-center name mayor">
                    Stabilus Integra
                </h3>
                <h3 class="text-center name2 menor">
                    Stabilus Integra
                </h3>
            </figure>
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3 mayor" > 
                <img alt="destacado" src="{{URL::asset('/images/destacados/d8.jpg')}}" width="90%">
                <h3 class="text-center name mayor">
                    Mecanismos Gira
                </h3>
                <h3 class="text-center name2 menor">
                    Mecanismos Gira
                </h3>
            </figure>
        </div>
    </div>
    <br><br>
</div>
<div class="col-12 d4" id="Contacto">     <!--Contacto-->
    <div class="container">
        <div class="row">
            <div class="col-5 mayor">
                <br>
                <br>
                <br>
                <br>
                <img src="{{URL::asset('/images/ball-bearings.png')}}" alt="Picture" width="100%"> 
            </div>

            <div class="col-7 text-center mayor">
                <div class="title"><br>Contáctanos<br><br></div>
                <form action="/contactar" method="POST">
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="form-group">
                            <div class="row">
                                <input type="text" class="form-control col-8" name="fecha" hidden required value="<?php echo date("Y-m-d H:i:s"); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="nombre" class="col-4 control-label title3">Nombre:</label>
                                <input type="text" class="form-control col-8" name="nombre" placeholder="Nombre completo" required value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="telefono" class="col-4 control-label title3">Teléfono:</label>
                                <input type="number" class="form-control col-8" name="telefono" placeholder="Número a 10 dígitos" pattern="[0-9]{10}" required value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="correo" class="col-4 control-label title3">E-Mail:</label>
                                <input type="email" class="form-control col-8" name="correo" placeholder="Ej. ejemplo@correo.com" required value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="cp" class="col-4 control-label title3">Código postal:</label>
                                <input type="number" class="form-control col-8" name="cp" placeholder="A 5 dígitos" required value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="mensaje" class="col-4 control-label title3">Mensaje:</label>
                                <textarea class="form-control col-8" rows="6" name="mensaje" required placeholder="Dejanos tu mensaje aquí"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-4"></div>
                                <button type="submit" class="btn btn-success col-4">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>     
            </div>

            <div class="col-11 text-center menor">
                <div class="title"><br>Contáctanos<br><br></div>
                <form action="/contactar" method="POST">
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="form-group">
                            <div class="row">
                                <input type="text" class="form-control col-8" name="fecha" hidden required value="<?php echo date("Y-m-d H:i:s"); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="nombre" class="col-4 control-label title3">Nombre:</label>
                                <input type="text" class="form-control col-8" name="nombre" placeholder="Nombre completo" required value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="telefono" class="col-4 control-label title3">Teléfono:</label>
                                <input type="text" class="form-control col-8" name="telefono" placeholder="Número a 10 dígitos" required value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="correo" class="col-4 control-label title3">E-Mail:</label>
                                <input type="text" class="form-control col-8" name="correo" placeholder="Ej. ejemplo@correo.com" required value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="cp" class="col-4 control-label title3">Código postal:</label>
                                <input type="number" class="form-control col-8" name="cp" placeholder="A 5 dígitos" required value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="mensaje" class="col-4 control-label title3">Mensaje:</label>
                                <textarea class="form-control col-8" rows="6" name="mensaje" required placeholder="Dejanos tu mensaje aquí"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-4"></div>
                                <button type="submit" class="btn btn-success col-4">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <br>
        <br>
    </div>
</div>
<div class="d6">
    <br><br><br><br><br>
</div>

@endsection

