@extends('layouts.app')
@section('content')

<div class="" style="font-family: cursive;font-size: 25px;margin-left:40% ;widows:250px ;">Nueva Categoria</div>
<form action="{{route('categorias.store')}}" method="POST">
	@csrf
  
  <div class="" style="width:250px;margin-left: 40%;">
    <label  class="form-label">Nombre de la categoria</label>
    <input  type="text" class="form-control " id="cat_nombre" name="cat_nombre" required autocomplete="cat_nombre" autofocus aria-describedby="emailHelp">
     
  </div>
  
  <label  class="form-label" for="validationCustom04" style="margin-left:40%;">Tipo de la categoria</label>
  <select class="form-check @error('cat_tipo') is-invalid @enderror" style="width:250px;margin-left: 40%;" id="cat_tipo" name="cat_tipo" aria-label="Default select example" id="validationCustom04" required>
  <option selected disabled value="">Seleccione un tipo </option>
  <option value="1">Ingreso</option>
  <option value="2">Egreso</option>
  
</select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
<br>

  <button type="submit" style="width:250px;margin-left: 40%;border:solid #000 1px; background: #C6EBFD" class="btn "  >Guardar</button>
</form>

@endsection