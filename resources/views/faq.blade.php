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
            R: Debido a la Contingencia de salud causada por el virus SARS COV 2, actualmente nuestra operación se redujo a un domicilio virtual, con gusto podemos atenderte por nuestros medios oficiales de contacto.
        </div>
        <br><br><br>
        <h3>2.	¿Pueden enviarme cotizaciones de un producto específico?</h3>
        <br>
        <div class="txt">
            R: Con gusto, no dudes en enviarnos tu requisición a contacto@cominmex.com.mx y en breve un asesor se pondrá en contacto contigo para brindarte un servicio personalizado, no olvides colocar tu número telefónico y correo electrónico. 
        </div>
        <br><br><br>
        <h3>3.	¿Realizan envíos a toda la República Mexicana?</h3>
        <br>
        <div class="txt">
            R: Si, por la paquetería o servicio de mensajería de tu preferencia.
        </div>
        <br><br><br>
        <h3>4.	¿Cuáles son los costos de envío?</h3>
        <br>
        <div class="txt">
            R: El costo de envío es variable en función del tipo de material, peso, volumen y zona de envío. 
        </div>
        <br><br><br>
        <h3>5.	¿Cuáles son los tiempos de envío?</h3>
        <br>
        <div class="txt">
            R: 3 a 5 días hábiles. 
        </div>
        <br><br><br>
        <h3>6.	¿Ofrecen envío express?</h3>
        <br>
        <div class="txt">
            R: Si, previamente acordado y confirmado con su Asesor COMINMEX.
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
            R: Por favor póngase en contacto a través de contacto@cominmex.com.mx o de manera directa con su Asesor COMINMEX, es muy importante para nosotros pueda recibir su material en tiempo y con las especificaciones de calidad que nos respaldan.  
        </div>
        <br><br><br>
        <h3>9.	¿Qué hago si el producto se daña durante el envío?</h3>
        <br>
        <div class="txt">
            R: Por favor tome evidencias del daño, comparta a través de contacto@cominmex.com.mx o de manera directa con su Asesor COMINMEX; en un lapso no mayor a 48 horas tendrá una resolución.  
        </div>
        <br><br><br>
        <h3>10.	¿Qué hago si quiero devolver un producto o pedido?</h3>
        <br>
        <div class="txt">
            R: Contactar a su Asesor COMINMEX, es importante saber el por qué de la devolución.   
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
            R: Si, es muy importante indicar a su asesor los datos de facturación que requiere.      
        </div>
        <br><br><br>
        <h3>13.	¿Cómo hacer el seguimiento de mi compra?</h3>
        <br>
        <div class="txt">
            R: El primer paso es la confirmación de su pedido por parte de su Asesor COMINMEX, posteriormente en caso de ser envío por paquetería su asesor le compartirá el numero de guía para su rastreo.       
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
            R: Consulte con su Asesor COMINMEX el tiempo de reabastecimiento. 
        </div>
        <br><br><br>
        
    </div>
</div>
@endsection

