@extends('app')
@section('content')
	<div class="container">
		<div class="row">
		{!! Form::open(['route' => 'evidencia/search', 'method' => 'post', 'novalidate', 'class' => 'form‐inline' ]) !!}
			<div class="form‐group">
				<label for="exampleInputName2">Nombre del lugar</label>
				<input type="text" class="form‐control" name = "Nombre" >
						

				<button type="submit" class="btn btn-primary">Buscar</button>
				<a href="{{ route('evidencia.index') }}" class="btn btn-success">Todo</a>
				<a href="{{ route('eviencia.create') }}" class="btn btn-success">Subir evidencia </a>
				</div>
		{!! Form::close() !!}
	<br>
	
	<table class="table table-striped">
		<thead>
			<tr>
			<th>Nombre</th>
			<th>Tipo</th>
			<th>Descripcion</th>
		
			</tr>
		</thead>
	<tbody>
	@foreach($evidencias as $evidencia)
		<tr>
			<td>{{ $evidencia->Nombre_Lugar }}</td>
			<td>{{ $evidencia->Tipo_Lugar }}</td>
			<td>{{	$evidencia->Descripcion }}</td>
		<td>
			<a class="btn btn-primary" href="{{ route('evidencia.edit' , ['id' => $evidencia->id]) }}" >Editar</a>

		</td>
		</tr>
	@endforeach
	</tbody>
	
	</table>
	 
           
      
	</div>
</div>
@endsection