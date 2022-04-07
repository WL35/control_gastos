@extends('layouts.app')
@section('content')
<?php 
$ing="";
$egr="";
if($categoria->cat_tipo==1){
    $ing="selected";
}else{
    $egr="selected";
}
?>


<div style="font-family: cursive;font-size: 25px;margin-left:40% ;">Editar Categoria</div>
<br>  
<form action="{{route('categorias.update',$categoria->cat_id)}}" method="POST">
	@csrf
  
  <div class="" style="width:250px;margin-left: 40%;">
    <label  class="form-label">Nombre de la categoria</label>
    <input  type="text" class="form-control " id="cat_nombre" value="{{$categoria->cat_nombre}}" 	name="cat_nombre" required autocomplete="cat_nombre" autofocus aria-describedby="emailHelp">
     
  </div>
  
  <label  class="form-label" style="margin-left:40%;">Tipo de la categoria</label>
  <select class="form-check @error('cat_tipo') is-invalid @enderror form-control" style="width:250px;margin-left: 40%;" id="cat_tipo" name="cat_tipo" aria-label="Default select example">

	  <option disabled > Seleccione Un Tipo </option>
  	  <option {{$ing}} value="1">Ingreso</option>
      <option {{$egr}} value="2">Egreso</option>
  
</select>
<br>

  <button type="submit" style="width:250px;margin-left: 40%;border:solid #000 1px; background: #C6EBFD" class="btn "  >Guardar</button>
</form>

@endsection