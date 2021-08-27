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
        <h3>1.	¿Dónde se ubican sus oficinas?</h3>
        <br>
        <div class="txt">
        R: Estaremos encantados de poder atenderle en nuestro punto de venta: Calle Ocoyoacac No.55 Esquina con Av. Tepotzotlan, Colonia Cumbria Cuautitlán Izcalli, Edo. Mex. Cp.54740.
        </div>
        <br><br><br>
        <h3>2.	¿Pueden enviarme cotizaciones de un producto específico?</h3>
        <br>
        <div class="txt">
        R: Con gusto, no dude en enviarnos su requisición a contacto@malgavic.com.mx y en breve un asesor se pondrá en contacto con usted para brindarte un servicio personalizado, no olvide colocar su número telefónico y correo electrónico.
        </div>
        <br><br><br>
        <h3>3.	¿Realizan envíos a toda la República Mexicana?</h3>
        <br>
        <div class="txt">
        R: Si, por la paquetería o servicio de mensajería de su preferencia; si no cuenta con uno su asesor de ventas le podrá recomendar algunas opciones con base a sus necesidades.
        </div>
        <br><br><br>
        <h3>4.	¿Cuáles son los costos de envío?</h3>
        <br>
        <div class="txt">
        R: El costo de envío es variable en función del tipo de material, peso, volumen y zona de envío; pregunte sobre su producto y con gusto le daremos una cotización de paquetería.
        </div>
        <br><br><br>
        <h3>5.	¿Cuáles son los tiempos de envío?</h3>
        <br>
        <div class="txt">
        R: Dependiendo de su volumen de compra se confirma existencia, material en existencia 2-3 días, si es de fabricación 7-10 días.
        </div>
        <br><br><br>
        <h3>6.	¿Ofrecen envío express?</h3>
        <br>
        <div class="txt">
        R: Si, previamente acordado y confirmado con su Asesor MALGAVIC.
        </div>
        <br><br><br>
        <h3>7.	¿Cómo es el proceso de compra y forma de pago?</h3>
        <br>
        <div class="txt">
        R: Partiendo de la confirmación de producto(s) y pago de material vía transferencia se realiza factura y envío del mismo. 
        </div>
        <br><br><br>
        <h3>8.	¿Cómo puedo notificar un problema con mi pedido?</h3>
        <br>
        <div class="txt">
        R: Por favor póngase en contacto a través de contacto@malgavic.com.mx o de manera directa con su Asesor MALGAVIC, es muy importante para nosotros pueda recibir su material en tiempo y con las especificaciones de calidad que nos respaldan.
        </div>
        <br><br><br>
        <h3>9.	¿Qué hago si el producto se daña durante el envío?</h3>
        <br>
        <div class="txt">
        R: Por favor tome evidencias del daño, comparta a través de contacto@malgavic.com.mx o de manera directa con su Asesor MALGAVIC; en un lapso no mayor a 48 horas tendrá una resolución.
        </div>
        <br><br><br>
        <h3>10.	¿Qué hago si quiero devolver un producto o pedido?</h3>
        <br>
        <div class="txt">
        R: Contactar a su Asesor MALGAVIC, es importante saber el porqué de la devolución.
        </div>
        <br><br><br>
        <h3>11.	¿Qué pasa si mi pedido no llega a tiempo?</h3>
        <br>
        <div class="txt">
        R: Trabajamos con los servicios de paquetería de su preferencia para que pueda contar con su material en el tiempo que necesita.
        </div>
        <br><br><br>
        <h3>12.	¿Realizan facturación?</h3>
        <br>
        <div class="txt">
        R: Si, es muy importante indicar a su asesor los datos de facturación que requiere recuerde que cada operación implica trabajo por lo que es clave la verificación de datos de facturación para evitar reprocesos.
        </div>
        <br><br><br>
        <h3>13.	¿Cómo hacer el seguimiento de mi compra?</h3>
        <br>
        <div class="txt">
        R: El primer paso es la confirmación de su pedido por parte de su Asesor MALGAVIC, posteriormente en caso de ser envío por paquetería su asesor le compartirá el número de guía para su rastreo.
        </div>
        <br><br><br>
        <h3>14.	¿Dónde se fabrican sus productos?</h3>
        <br>
        <div class="txt">
        R: Trabajamos con diversas marcas de renombre, con plantas de producción a lo largo y ancho de la república.
        </div>
        <br><br><br>
        <h3>15.	¿Qué hago si el producto que quiero está agotado?</h3>
        <br>
        <div class="txt">
        R: Consulte con su Asesor MALGAVIC el tiempo de reabastecimiento. 
        </div>
        <br><br><br>
        
    </div>
</div>
@endsection

