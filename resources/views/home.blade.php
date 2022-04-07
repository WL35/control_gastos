@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header "> 
                    <div class="row m-1">
                        <div class="col-md-4">
                            
                    <h1 style="font-family: cursive;font-size: 25px;margin-top: 5%;">Lista de movimientos</h1>
                        </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4"  >
                                
                            <label for="" style="">Desde:</label> 
                            </div>
                            
                            <div class="col-md-4"  style="margin-left:-4%   ">
                                
                            <label for="">Hasta:</label> 
                            </div>
                        </div>
                        <div>
                            
                        <form  class="row" action="{{route('home.search')}}" method="POST">
                            @csrf
                            <div class="col-md-4">
                                
                            <input type="date" name="desde" style="" required autocomplete="desde"  aria-describedby="emailHelp" id="desde" value="{{$desde}}">
                            </div>

                            <div class="col-md-4">
                                
                            <input type="date" name="hasta" id="hasta" style="margin-left:-15%   " value="{{$hasta}}" required autocomplete="hasta"  aria-describedby="emailHelp">
                            </div>
                            
                            <div class="col-md-2" style="margin-top:-1%;margin-left:-10%  ;">
                                
                            <button type="submit"  value="btn_buscar" class="btn "  style="border:solid #000 1px; background: #C6EBFD"> Buscar</button> 
                            </div>    
                            <div class="col-md-2" style="margin-top:-1% ;margin-left:-3%  ;" >   
                            <button  name="btn_pdf" value="btn_pdf" class="btn "  style="border:solid #000 1px; background: #B7B8BD"> PDF</button>   
                            </div>
                            <div  style="margin-top:-1% ;margin-left:-5%  ;" class="col-md-2">
                                
                <a href="{{route('movimientos.create')}}" name="btn_nuevo" class="btn "  style="border:solid #000 1px; background: #ABFAB5">Nuevo</a>
                            </div>
                            

                        </form>
                        </div>
                    </div>
                </div> 
                    </div>

                <div class="card-body">

                    <table class="table table-striped" >
                        <th>#</th>
                        <th>Responsable</th>
                        <th>Detalle</th>
                        <th>Categoria</th>
                        <th>Tipo</th>
                        <th>Fecha</th>
                        <th>Valor</th>
                        <th>Acciones</th>
                        <?php 
                        $t_ing=0;
                        $t_egr=0;
                        $t_saldo=0;
                        ?>
                        @foreach($movimientos as $mov)
                        <?php
                        if ($mov->cat_tipo==1) {
                            $t_ing+=$mov->mov_valor;
                        }else{
                            $t_egr+=$mov->mov_valor;
                        }
                        
                       $t_saldo=$t_ing-$t_egr;                        ?>

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$mov->usu_nombre}} {{$mov->usu_apellido}}</td>
                            <td>{{$mov->mov_detalle}}</td>
                            <td>{{$mov->cat_nombre}}</td>
                            
                            @if($mov->cat_tipo==1)
        <td>Ingreso</td>
        @else
        <td>Egreso</td>
        @endif 
                            <td>{{$mov->mov_fecha}}</td>
                            <td>{{number_format($mov->mov_valor,2)}} $</td>
                            <td>
                                <div class="row">
                    
            <a  href="{{route('movimientos.edit',$mov->mov_id)}}" class="btn " style="border:solid #000 1px;background:#85ADFF;">  Editar</a>
        
            <form  style="margin-left: 1%" action="{{route('movimientos.destroy',$mov->mov_id)}}" method="POST" onsubmit="return confirm('desea eliminar?')">
            @csrf
            <!-- <a href="" class="btn btn-danger">Eliminar</a> -->
                <button  class="btn "  style="border:solid #000 1px;background:#FFB3AE" >eliminar</button>
            </form>
                </div>
                            </td>
                        </tr>
                        
                    @endforeach   
                    <tr>
                        <th colspan="2">Totales:</th>
                        <th>Ingreso:{{number_format($t_ing,2)}} $</th>
                        <th>Egreso:{{number_format($t_egr,2)}} $</th>
                        <th>Saldo:{{number_format($t_saldo,2)}} $</th>
                    </tr>                 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
