@extends('layouts.plantilla')

@section('titulo','Productos :: Editar')

@section('contenido')

<div class="container mt-3">

	<div class="row">
		<div class="col-md-12">			
			<div class="card">
				<div class="card-header">
					<strong>Editar Producto</strong>
				</div>
				<div class="card-body">
					<form method="POST" action="{{ route('productos.update', $datos->id) }}">
						@method('PUT')
						@csrf
						<div class="form-group">
							<label for="txtid">Id</label>
							<input type="text" class="form-control" id="txtid" name="txtid" value="{{ $datos->id }}" readonly>
						</div>
						<div class="form-group">
							<label for="txtnombre">Nombre</label>
							<input type="text" class="form-control" id="txtnombre" name="txtnombre" value="{{ $datos->nombre}}">
						</div>			
						<div class="form-group">
							<label for="txtprecio">Precio</label>
							<input type="text" class="form-control" id="txtprecio" name="txtprecio" value="{{ $datos->precio}}">
						</div>	
						<button type="submit" class="btn btn-info">Editar</button>										
					</form>

				</div>
			</div>
			
		</div>
	</div>
	
</div>


@endsection