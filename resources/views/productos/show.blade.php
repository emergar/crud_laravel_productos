@extends('layouts.plantilla')

@section('titulo','Productos :: Ver')

@section('contenido')

<div class="container mt-3">

	<div class="row">
		<div class="col-md-12">

			<div class="card">
				<div class="card-header">
					<strong>Ver Producto</strong>
				</div>
				<div class="card-body">
					<p><strong>Id:</strong>{{ $datos->id }} </p>
					<p><strong>Nombre:</strong>{{ $datos->nombre }} </p>
					<p><strong>Precio:$</strong>{{ $datos->precio }} </p>
				</div>
			</div>
			
		</div>
	</div>
	
</div>


@endsection