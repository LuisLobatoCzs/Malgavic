<style>
    body {
    margin: 0;
    font-family: "Nunito", sans-serif;
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

<div class="col-12 mayor">
    <div class="row justify-content-center d1">    <!--Banner-->
        <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
                
                <div class="carousel-item-active">
                    <img class="d-block w-100" src="{{URL::asset('/img/banner/b3.png')}}">
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
</div>

<div class="col-12 bg-index" id="Productos">   <!--Destacados-->
    <div>
        <div class="row justify-content-center p-5">
            <span style="font-size: calc(1em + 3vw)">
                Productos destacados. 
            </span>
        </div>        
        
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
            


            
            
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3 mayor" > 
                <img alt="destacado" src="{{URL::asset('/img/destacados/d5.jpg')}}" width="90%" class="redondeado">
                <h3 class="text-center name mayor">
                    Piña forja Española
                </h3>
                <h3 class="text-center name2 menor">
                    Piña forja Española
                </h3>
            </figure>
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3 mayor" > 
                <img alt="destacado" src="{{URL::asset('/img/destacados/d6.jpg')}}" width="90%" class="redondeado">
                <h3 class="text-center name mayor">
                    Berrendo EPP
                </h3>
                <h3 class="text-center name2 menor">
                    Berrendo EPP
                </h3>
            </figure>
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3 mayor" > 
                <img alt="destacado" src="{{URL::asset('/img/destacados/d7.jpg')}}" width="90%" class="redondeado">
                <h3 class="text-center name mayor">
                    Stabilus Integra
                </h3>
                <h3 class="text-center name2 menor">
                    Stabilus Integra
                </h3>
            </figure>
            <figure id="frame" class="col-6 col-md-6 col-lg-4 col-xl-3 mayor" > 
                <img alt="destacado" src="{{URL::asset('/img/destacados/d8.jpg')}}" width="90%" class="redondeado">
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

<div class="row bg-celeste-rgba" >
    <div class="col-12">
        <img src="{{URL::asset('/img/waveUP.svg')}}" width="100%">
    </div>
</div>
<div class="row bg-celeste-rgba" >
    <div class="col-12">
        <img src="{{URL::asset('/img/waveDOWN.svg')}}" width="100%">
    </div>
</div>

<div class="col-12 bg-index" id="Contacto">     <!--Contacto-->
    <div class="container">
        <div class="row">
            <div class="col-5 mayor">
                <br>
                <br>
                <br>
                <br>
                <img src="{{URL::asset('/img/ball-bearings.png')}}" alt="Picture" width="100%"> 
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
<div class="bg-celeste-rgba">
    <br><br><br><br><br>
</div>

@endsection

