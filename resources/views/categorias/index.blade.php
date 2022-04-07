@extends('layouts.app')
@section('content')
<div class="contanier">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-9">

							<label style="font-family: cursive;font-size: 25px;margin-left:40% ;">Lista de Categorias</label>
						</div>
						<div class="col-md-3">

							<a style="margin-left:1%;margin-top:2%;border:solid #000 1px; background: #ABFAB5 " href="{{route('categorias.create')}}" class="btn ">Nueva</a>
						</div>

					</div>
				</div>
				<div class="card-body">


					<table class="table table-striped">
						<th>#</th>
						<th>Nombre</th>
						<th>Tipo</th>
						<th>Acciones</th>
						@foreach($categorias as $cat)

						<tr>

							<td>{{$loop->iteration}}</td>
							<td>{{$cat->cat_nombre}}</td>
							@if($cat->cat_tipo==1)
							<td>Ingreso</td>
							@else
							<td>Egreso</td>
							@endif
							<td>
								<div class="row">

									<a href="{{route('categorias.edit',$cat->cat_id)}}" style="border:solid #000 1px;background:#85ADFF;" class="btn"> Editar</a>

									<form style="margin-left: 1%" action="{{route('categorias.destroy',$cat->cat_id)}}" method="POST" onsubmit="return confirm('desea eliminar?')">
										@csrf
										<!-- <a href="" class="btn btn-danger">Eliminar</a> -->
										<button class="btn "  style="border:solid #000 1px;background:#FFB3AE">eliminar</button>
									</form>
								</div>

							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>

		</div>

	</div>


</div>
@endsection