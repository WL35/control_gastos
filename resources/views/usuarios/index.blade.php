@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			
		



<div class="card">
	<div class="card-header">
		<div class="row">
			
			<div class="col-md-9">
				
		<label style="font-family: cursive;font-size: 25px;margin-left:2% ;text-align: center;">Lista de Usuarios</label>
			</div>
			<div class="col-md-3">
<a href="{{route('usuarios.create')}}"  class="btn "  style="border:solid #000 1px; background: #ABFAB5">Nuevo Usuario </a>
				
			</div>
		</div>

		
	</div>
	<div class="card-body">
		
<table class="table table-striped">
	<th>#</th>
	<th>Nombre de Usuario</th>
	<th>nombre</th>
	<th>apellido</th>
	<th>cedula</th>
	@foreach($users as $u)
	<tr>
		<td>{{$loop->iteration}}</td>
		<td>{{$u->usu_usuario}}</td>
		<td>{{$u->usu_nombre}}</td>
		<td>{{$u->usu_apellido}}</td>
		<td>{{$u->usu_cedula}}</td>
	</tr>
	@endforeach
</table>
	</div>

</div>
	</div>
	</div>
	
</div>
@endsection




