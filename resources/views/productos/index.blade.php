@extends('layouts.plantilla')

@section('titulo','Productos :: Listado')

@section('contenido')

<div class="container mt-3">
	<div class="row">
		<div class="col-md-12">
			
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
							<td><a href="{{ route('productos.show', $item->id) }}" class="btn btn-sm btn-dark">Ver</td>
							<td><a href="{{ route('productos.edit', $item->id) }}" class="btn btn-sm btn-info">Editar</td>
							<td>Eliminar</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{{ $lista->render() }}

		</div>
	</div>

</div>

@endsection