@extends('app')
@section('content')
	<div class="container">
		<div class="row">
		{!! Form::open(['route' => 'ProgramaFormacion/search', 'method' => 'post', 'novalidate', 'class' => 'form‐inline']) !!}
			<div class="form‐group">
				<label for="exampleInputName2">Programa Formacion</label>
				<input type="text" class="form‐control" name = "Nombre" >
						

				<button type="submit" class="btn btn-primary">Buscar</button>
				<a href="{{ route('ProgramaFormacion.index') }}" class="btn btn-success">Todo</a>
				<a href="{{ route('ProgramaFormacion.create') }}" class="btn btn-success">Nuevo Programa Formacion</a>
				</div>
		{!! Form::close() !!}
	<br>
	
	<table class="table table-striped">
		<thead>
			<tr>
			<th>Nombre Programa Formacion</th>
			<th>Nombre Coordinacion</th>
			
			
			
			</tr>
		</thead>
	<tbody>
	@foreach($ProgramaFormaciones as $ProgramaFormacion)
		<tr>
			<td>{{ $ProgramaFormacion->Nombre_Programa }}</td>
			<td>{{ $ProgramaFormacion->FK_IdCoordinacion }}</td>
			
		<td>
			<a class="btn btn-primary" href="{{ route('ProgramaFormacion.edit' , ['id' => $ProgramaFormacion->id]) }}" >Editar</a>
			<a class="btn btn-danger" href="{{ route('ProgramaFormacion/destroy', ['id' => $ProgramaFormacion->id]) }}" >Eliminar</a>
		</td>
		</tr>
	@endforeach
	</tbody>
	
	</table>
	 
           
      
	</div>
</div>
@endsection