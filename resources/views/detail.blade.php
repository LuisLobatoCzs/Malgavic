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
        font-size:20;
    }
    .title3{
        font-size:15;
        color:#595b57;
    }
    .title4{
        font-size:15;
        color:#595b57;
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
        background: rgba(255, 255, 255, 1);
    }
    .d2 {
        background: rgba(255, 144, 0, 1);
    }
    .d3 {
        background-image: url({{URL::asset('/images/bgr.jpg')}});
    }
    .d4 {
        background: rgba(2, 54, 84, 1);
    }
    .d5 {
        background: rgba(2, 54, 84, 0.7);
    }
    .d6 {
        background: rgba(255, 144, 0, 0.7);
    }
</style>

@extends('layouts.app')

@section('content')

<div class="col-12 d1">
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Centro de mensajes</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <?php
                            foreach ($mensaje as $message){
                        ?>
                        <div class="title2">
                            <div class="title3">Cliente:</div>
                            &nbsp
                            <?php echo $message->Cliente; ?>
                            <br>
                            <div class="title3">Mensaje: </div>
                            &nbsp
                            <?php echo $message->Mensaje; ?>
                            <br><br>
                            <div class="text-right">
                                <div class="title3">Contacto: </div>
                                <div class="title4">
                                    &nbsp
                                    <?php echo 'C.P.: '.$message->CP; ?>
                                </div>
                                <div class="title4">
                                    &nbsp
                                    <?php echo $message->Telefono; ?>
                                </div>
                                <div class="title4">
                                    &nbsp
                                    <?php echo $message->Correo; ?>
                                </div>
                                <br>
                            </div>
                        </div>
                        
                        <div class="row justify-content-center">
                            <a href="/deleted?id=<?php echo $message->id_mensaje?>" class="col-sm-12 col-md-3">
                                <button type="button" class="btn btn-danger col-12">Eliminar mensaje</button>
                            </a>
                            <div class="col-1 mayor"></div>
                            <div class="col-1 menor"><br></div>
                            <a href="/attended?id=<?php echo $message->id_mensaje?>" class="col-sm-12 col-md-3">
                                <button type="button" class="btn btn-success col-12">Marcar como atendido</button>
                            </a>
                        </div>

                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>
</div>
@endsection
