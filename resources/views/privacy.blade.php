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
    .title{
        font-size:35;
        color:#fff;
    }
    .title2{
        font-size:25;
        color:#fff;
    }
    .title3{
        font-size:20;
        color:#fff;
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
        background-image: url({{URL::asset('/images/bgr.jpg')}});
    }
</style>

@extends('layouts.app')
@section('content')

<div class="col-12 d1">
    <br><br>
    <div class="container justify-content">
        <h2>Aviso de Privacidad</h2>
        <br>
        <div class="txt">
            Entendemos que es importante para tí como nuestro cliente entender de que forma utilizamos la información que recabamos dentro de nuestro sitio web. A continuación se detallan conceptos bajo los cuales se recaba información a nombre de MALGAVIC S. de R.L de C.V. 
        </div>
        <br><br><br>
        <h3>Datos Personales recabados</h3>
        <br>
        <div class="txt">
            MALGAVIC® puede recopilar datos personales como nombre(s) y apellidos, correo electrónico, domicilio fiscal, domicilio personal, RFC, número de teléfono celular y/o local. Estos datos personales son proporcionados voluntariamente al decidir solicitar los servicios que nuestra empresa ofrezca, así como la solicitud de cotizaciones o contacto con nosotros.
        </div>
        <br><br><br>
        <h3>Usos y finalidades de sus datos personales</h3>
        <br>
        <div class="txt">
            Estos datos serán utilizados para contactarnos con usted, con la finalidad de resolver sus dudas, entregar cotizaciones y/o ventas, así como ofrecerle nuestros productos y servicios o emitir facturación por los servicios prestados.
        </div>
        <br><br><br>
        <h3>Transmisión y transferencia de Datos Personales</h3>
        <br>
        <div class="txt">
            MALGAVIC® no divulgará o compartirá sus datos personales con terceros, exceptuando únicamente entidades gubernamentales en caso que sean requeridos por estas.
        </div>
        <br><br><br>
        <h3>Cambios al Aviso de Privacidad</h3>
        <br>
        <div class="txt">
            MALGAVIC®  se reserva el derecho de modificar o enmendar, total o parcialmente, el presente Aviso de Privacidad y será mostrado por este medio.
        </div>
        <br><br><br>
        <h3>Consentimiento</h3>
        <br>
        <div class="txt">
            Al proporcionar cualquier tipo de información, incluyendo sus datos personales, expresamente acepta: 
            <ul>
                <li>Las condiciones contenidas en el presente Aviso de Privacidad</li>
                <li>Estar de acuerdo en que la información proporcionada por usted pueda almacenarse, usarse y, en general, tratarse para los fines que se señalan</li>
                <li>Otorga a MALGAVIC®  autorización para obtener, compilar, almacenar, compartir, comunicar, transmitir y usar tal información de cualquier manera o forma, de conformidad con las condiciones establecidas en el presente y las leyes aplicables.</li>
            </ul>
        </div>
        <br><br><br>
    </div>
</div>
@endsection

