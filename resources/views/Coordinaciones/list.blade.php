@extends('app')
@section('content')
	<div class="container">
		<div class="row">
		{!! Form::open(['route' => 'coordinacion/search', 'method' => 'post', 'novalidate', 'class' => 'form‐inline']) !!}
			<div class="form‐group">
				<label for="exampleInputName2">Coordinacion</label>
				<input type="text" class="form‐control" name = "Nombre" >
						

				<button type="submit" class="btn btn-primary">Buscar</button>
				<a href="{{ route('coordinacion.index') }}" class="btn btn-success">Todo</a>
				<a href="{{ route('coordinacion.create') }}" class="btn btn-success">Nueva Coordinacion</a>
				</div>
		{!! Form::close() !!}
	<br>
	
	<table class="table  table-condensed table-striped table-bordered">
		<thead>
			<tr>
			<th>Nombre Coordinacion</th>
			
			
			</tr>

		</thead>
	<tbody>
	@foreach($coordinaciones as $coordinacion)
		<tr>
			<td>{{ $coordinacion->Nombre_Coordinacion }}</td>
			
		<td>
			<a class="btn btn-primary" href="{{ route('coordinacion.edit' , ['id' => $coordinacion->id]) }}" >Editar</a>
			<a class="btn btn-danger" href="{{ route('coordinacion/destroy', ['id' => $coordinacion->id]) }}" >Eliminar</a>
		</td>
		</tr>
	@endforeach
	</tbody>
	
	</table>
	 
           
      
	</div>
</div>
@endsection