@extends('app')
@section('content')
	<div class="container">
		<div class="row">
		{!! Form::open(['route' => 'encuesta/search', 'method' => 'post', 'novalidate', 'class' => 'form‐inline']) !!}
			<div class="form‐group">
				<label for="exampleInputName2">Fecha</label>
				<input type="text" class="form‐control" name = "Fecha" >
						

				<button type="submit" class="btn btn-primary">Buscar</button>
				<a href="{{ route('encuesta.index') }}" class="btn btn-success">Todo</a>
				<a href="{{ route('encuesta.create') }}" class="btn btn-success">Nueva encuesta</a>
				</div>
		{!! Form::close() !!}
	<br>
	
	<table class="table table-striped">
		<thead>
			<tr>
			<th>Fecha</th>
			<th>Numero de hermanos</th>
			<th>Motivo de la consulta</th>
			<th>Numero de embarazos</th>
			<th>Motivo de la consulta</th>
			<th>Numero de abortos</th>
			<th>Genero</th>
			</tr>
		</thead>
	<tbody>
	@foreach($encuestas as $encuesta)
		<tr>
			<td>{{ $encuesta->Fecha_Encuesta }}</td>
			<td>{{ $encuesta->NumHermanos_Encuesta }}</td>
			<td>{{ $encuesta->MotivoConsullta_Encuesta }}</td>
			<td>{{ $encuesta->NumEmbarazos_Encuesta }}</td>
			<td>{{ $encuesta->NumAbortos_Encuesta }}</td>
			<td>{{ $encuesta->Genero_Encuesta }}</td>
		<td>
			<a class="btn btn-danger" href="{{ route('encuesta/destroy', ['id' => $encuesta->id]) }}" >Eliminar</a>
		</td>
		</tr>
	@endforeach
	</tbody>
	
	</table>
	 
      
	</div>
</div>
@endsection