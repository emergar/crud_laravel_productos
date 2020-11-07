@extends('layouts.plantilla')

@section('titulo','Productos :: Listado')

@section('contenido')

<div class="container mt-3">
	<div class="row">
		<div class="col-md-12">
			
			<div class="card">	
				<div class="card-header">
					<strong>Lista de Productos</strong>
					<a href="{{ route('productos.create') }}" class="	btn btn-success btn-sm pull-right">Registrar</a>		
				</div>
			</div>

			<table class="table table-sm table-striped">
				<thead class="table-drak">
					<th scope="col">Id</th>
					<th scope="col">Nombre</th>
					<th scope="col">Precio</th>
					<th scope="col">Ver</th>
					<th scope="col">Editar</th>
					<th scope="col">Eliminar</th>
				</thead>
				<tbody>
					@foreach( $lista as $item )
						<tr>
							<td>{{ $item->id }}</td>
							<td>{{ $item->nombre }}</td>
							<td>{{ $item->precio }}</td>
							<td><a href="{{ route('productos.show', $item->id) }}" class="btn btn-sm btn-dark">Ver</a></td>
							<td><a href="{{ route('productos.edit', $item->id) }}" class="btn btn-sm btn-info">Editar</a></td>
							<td>
								<form method="POST" action="{{ route('productos.destroy', $item->id) }}">	
									@method('DELETE')
									@csrf
									<button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
								</form>
							</td>	
						</tr>
					@endforeach
				</tbody>
			</table>
			{{ $lista->render() }}

		</div>
	</div>

</div>

@endsection