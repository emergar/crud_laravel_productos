@extends('layouts.plantilla')

@section('titulo','Productos :: Registrar')

@section('contenido')

<div class="container mt-3">
		<div class="row">
			<div class="col-md-12">			
				<div class="card">
					<div class="card-header">
						<strong>Registrar Producto</strong>
					</div>
					<div class="card-body">	
					<form method="POST" action="{{ route('productos.store') }}">
						@method('POST')
						@csrf
						<div class="form-group">
							<label for="txtnombre">Nombre</label>
							<input type="text" class="form-control" id="txtnombre" name="txtnombre" value="">
						</div>			
						<div class="form-group">
							<label for="txtprecio">Precio</label>
							<input type="text" class="form-control" id="txtprecio" name="txtprecio" value="">
						</div>	
						<button type="submit" class="btn btn-info">Registrar</button>										
					</form>

				</div>
			</div>
			
		</div>
	</div>
	
</div>

@endsection