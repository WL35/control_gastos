@extends('layouts.app')
@section('content')

<div class="" style="font-family: cursive;font-size: 25px;margin-left:40% ;widows:250px ;">Nuevo Movimiento</div>
<form action="{{route('movimientos.store')}}" method="POST" style="margin-top:10px ;">

	@csrf
  
  <div class="" style="width:250px;margin-left: 40%;">
    <?php
    $hdate=date('Y-m-d');
    ?>
    <label  class="form-label">Detalle del Movimiento</label>
    <input  type="text" class="form-control " id="mov_detalle" name="mov_detalle" required autocomplete="mov_detalle" autofocus aria-describedby="emailHelp">

     <label  class="form-label">Valor del Movimiento</label>
    <input  type="number" class="form-control " id="mov_valor" name="mov_valor" required autocomplete="mov_valor" autofocus aria-describedby="emailHelp">
  
   <label  class="form-label">Ingrese una fecha</label>
    <input  type="date" class="form-control " id="mov_fecha" value="{{$hdate}}" name="mov_fecha" required autocomplete="mov_fecha" autofocus aria-describedby="emailHelp">
  </div>
  <div class="" style="width:250px;margin-left: 40%;">
    <label for="validationCustom04" class="form-label">Tipo de categoria</label>
    <select name="cat_id" class="form-control" id="validationCustom04" required>
      <option selected disabled value="">Elija una opcion</option>
          @foreach($categorias as $cat)
          @if($cat->cat_tipo==1)
          <option value="{{$cat->cat_id}}">{{$cat->cat_nombre}} (Ingreso)</option>
          @else
          <option value="{{$cat->cat_id}}">{{$cat->cat_nombre}} (Egreso)</option>
          @endif

          @endforeach
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
</div>
<br>

  <button type="" style="width:250px;margin-left: 40%;" class="btn btn-primary">Guardar</button>
     
</form>

@endsection