<style type="text/css">
    @media (min-width:768px){
        .menor{
                display:none;
        }
        .mayor{
                display:block; 
        }
        .oculto{
            display:none;
        }

    }
    @media (max-width:768px){
        .menor{
                display:block;
        }
        .mayor{
                display:none;
        }
        .oculto{
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
    .title4{
        color:#fff;
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
<script src="{{ asset('js/appX.js') }}" defer></script>
<div class="col-12 d1">
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Centro de mensajes</div>

                    <div class=" mayor">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table col-12">
                            <thead class="d4 title4">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">CP</th>
                                    <th scope="col">Mensaje</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i=1;
                                    foreach ($mensajes as $mensaje){
                                        if($mensaje->Status != "Eliminado"){
                                            echo '
                                                
                                                <tr>
                                                    <th scope="row">'.$i.'</th>
                                                    <td>'.$mensaje->Cliente.'</td>
                                                    <td>'.$mensaje->CP.'</td>
                                                    <td> <a href="/message_detail?id='.$mensaje->id_mensaje.'">Abrir</a></td>
                                                    <td>'.$mensaje->Telefono.'</td>
                                                    <td>'.$mensaje->Correo.'</td>
                                                    <td>'.$mensaje->Status.'</td>
                                                </tr>
                                                
                                            ';
                                        }
                                        $i+=1;
                                    }
                                    $i=0;
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class=" menor">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table col-12">
                            <thead class="d4 title4">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Mensaje</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i=1;
                                    foreach ($mensajes as $mensaje){
                                        if($mensaje->Status != "Eliminado"){
                                            echo '
                                                
                                                <tr>
                                                    <th scope="row">'.$i.'</th>
                                                    <td>'.$mensaje->Cliente.'</td>
                                                    <td> <a href="/message_detail?id='.$mensaje->id_mensaje.'">Abrir</a></td>
                                                    <td>'.$mensaje->Status.'</td>
                                                </tr>
                                                
                                            ';
                                        }
                                        $i+=1;
                                    }
                                    $i=0;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div> <!--  EXCEL  -->
                    <table class="oculto" width="50%" border="1" cellpadding="10" cellspacing="0" bordercolor="#666666" id="export_to_excel" style="border-collapse:collapse;">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Cliente</td>
                                <td>CP</td>
                                <td>Teléfono</td>
                                <td>Correo</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i=1;
                                foreach ($mensajes as $mensaje){
                                    if($mensaje->Status != "Eliminado"){
                                        echo '
                                            
                                            <tr>
                                                <td>'.$i.'</td>
                                                <td>'.$mensaje->Cliente.'</td>
                                                <td>'.$mensaje->CP.'</td>
                                                <td>'.$mensaje->Telefono.'</td>
                                                <td>'.$mensaje->Correo.'</td>
                                                <td>'.$mensaje->Status.'</td>
                                            </tr>
                                            
                                        ';
                                    }
                                    $i+=1;
                                }
                                $i=0;
                            ?>
                        </tbody>
                    </table>
                </div>
                <form action="/export" method="post" target="_blank" id="formExport">
                    {{ csrf_field() }}
                    <input type="hidden" id="data_to_send" name="data_to_send" />
                </form>
                <p>
                    <a href="#" class="btn btn-primary" id="submitExport">
                        <i class="fa fa-download"></i> Exportar a Excel
                    </a>
                </p>
            </div>
        </div>
    <br><br><br><br><br><br>
</div>


@endsection
