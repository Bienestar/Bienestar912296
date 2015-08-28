@extends('app')
@section('content')
	<div class="container">
		<div class="row">
		{!! Form::open(['route' => 'evento.index', 'method' => 'GET', 'novalidate', 'class' => 'form‐inline', 'role' => 'search']) !!}
			<div class="navbar-form navbar-left">
				<label for="exampleInputName2">Nombre del Evento</label>

				{!! Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Bazar']) !!}
				
						

				<button type="submit" class="btn btn-primary">Buscar</button>
				<a href="{{ route('evento.index') }}" class="btn btn-success">Todo</a>
				<a href="{{ route('evento.create') }}" class="btn btn-success">Crear Evento</a>
				</div>
		{!! Form::close() !!}
	<br>
	
	<table class="table table-striped">
		<thead>
			<tr>
			<th>Nombre</th>
			<th>Fecha de Inicio</th>
			<th>Fecha de Finalizacion</th>
			<th>Direccion</th>
			<th>Restricciones</th>
			<th>Cupos</th>
			<th>Descripcion</th>
			<th>Estado</th>
			
		
			</tr>
		</thead>
	<tbody>
	@foreach($eventos as $evento)
		<tr>
			<td>{{ $evento->Nombre_Evento }}</td>
			<td>{{ $evento->FechaIncio_Evento }}</td>
			<td>{{ $evento->FechaFinalizacion_Evento }}</td>
			<td>{{ $evento->Direccion_Evento }}</td>
			<td>{{ $evento->Restricciones }}</td>
			<td>{{ $evento->Cupos_Envento }}</td>
			<td>{{ $evento->Descripcion_Envento }}</td>
			<td>{{ $evento->Estado_Evento }}</td>
		<td>
			<a class="btn btn-primary" href="{{ route('evento.edit' , ['id' => $evento->id]) }}" >Editar</a>
			<a class="btn btn-danger" href="{{ route('evento/destroy', ['id' => $evento->id]) }}" >Eliminar</a>
		</td>
		</tr>
	@endforeach
	</tbody>
	
	</table>
	 
           {!! $eventos->render()!!}
      
	</div>
</div>
@endsection