@extends('app')
@section('content')
	<div class="container">
		<div class="row">
		{!! Form::open(['route' => 'fichaCaracterizacion/search', 'method' => 'post', 'novalidate', 'class' => 'form‐inline']) !!}
			<div class="form‐group">
				<label for="exampleInputName2">Ficha Caracterizacion</label>
				<input type="text" class="form‐control" name = "Nombre" >
						

				<button type="submit" class="btn btn-primary">Buscar</button>
				<a href="{{ route('fichaCaracterizacion.index') }}" class="btn btn-success">Todo</a>
				<a href="{{ route('fichaCaracterizacion.create') }}" class="btn btn-success">Nueva Ficha Caracterizacion</a>
				</div>
		{!! Form::close() !!}
	<br>
	
	<table class="table table-striped">
		<thead>
			<tr>
			<th>Numero Ficha</th>
			<th>Fecha Inicio</th>
			<th>Fecha Fin</th>
			<th>Programa Formacion</th>
			
			</tr>
		</thead>
	<tbody>
	@foreach($fCaracterizacion as $FichaCaracterizacion)
		<tr>
			<td>{{ $FichaCaracterizacion->Numero_Ficha}}</td>
			<td>{{ $FichaCaracterizacion->FechaInicio_Ficha }}</td>
			<td>{{ $FichaCaracterizacion->FechaFin_Ficha }}</td>
			<td>{{ $FichaCaracterizacion->Fk_IdProgramaFormacion}}</td>
			
		<td>
			<a class="btn btn-primary" href="{{ route('fichaCaracterizacion.edit', ['id' => $FichaCaracterizacion->id]) }}" >Editar</a>
			<a class="btn btn-danger" href="{{ route('fichaCaracterizacion/destroy', ['id' => $FichaCaracterizacion->id]) }}" >Eliminar</a>
		</td>
		</tr>
	@endforeach
	</tbody>
	
	</table>
	 
           
      
	</div>
</div>
@endsection