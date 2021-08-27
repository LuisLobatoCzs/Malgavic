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
        <h3>¿Quiénes somos?</h3>
        <br>
        <div class="txt">
        Somos una empresa responsable¸ comprometidos en brindar el mejor servicio y producto siempre con los mayores estándares de calidad y con un enfoque en la mejora continua en búsqueda de la excelencia, apegados a la comunicación, respeto y honestidad con clientes externos e internos.
        Permítanos colaborar en sus proyectos, ¡estaremos encantados! 
        </div>
        <br><br><br>
        <h3>Misión</h3>
        <br>
        <div class="txt">
        Ser la mejor opción en proveeduría para nuestros clientes mediante el asesoramiento y correcta selección de nuestros productos, con enfoque a las necesidades puntuales; ser un socio estratégico. 
        </div>
        <br><br><br>
        <h3>Visión</h3>
        <br>
        <div class="txt">
        Ser expertos en la comercialización y abastecimiento de productos para la Industria, ofreciendo a nuestros clientes calidad en nuestros productos; lograr afianzamiento en el mercado mediante el cumplimiento de estándares de servicio siendo respaldado por nuestra misión, valores y marcas.
        </div>
        <br><br><br>
        <h3>Valores</h3>
        <br>
        <div class="txt">
        Responsabilidad, compromiso, calidad, excelencia, comunicación, respeto y honestidad.
        </div>
        <br><br><br>
    </div>
</div>
@endsection

