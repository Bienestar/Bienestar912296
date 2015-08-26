@extends('app')
@section('content')
	<div class="container">
		<div class="row">
		{!! Form::open(['route' => 'encuesta/search', 'method' => 'post', 'novalidate', 'class' => 'form‐inline']) !!}
			<div class="form‐group">
				<label for="exampleInputName2">Documento del aprendiz</label>
				<input type="text" class="form‐control" name = "Doc_A" >
						

				<button type="submit" class="btn btn-primary">Buscar</button>
				<a href="{{ route('encuesta.index') }}" class="btn btn-success">Todo</a>
				<a href="{{ route('encuesta.create') }}" class="btn btn-success">Nueva encuesta</a>
				</div>
		{!! Form::close() !!}
	<br>
	
	<table class="table table-striped">
		<thead>
			<tr>
			<th>Nombre</th>
			<th>Existencia</th>
			<th>Descripcion</th>
			</tr>
		</thead>
	<tbody>
	@foreach($articulos as $articulo)
		<tr>
			<td>{{ $articulo->Nombre }}</td>
			<td>{{ $articulo->Existencia }}</td>
			<td>{{ $articulo->Descripcion }}</td>
		<td>
			<a class="btn btn-primary" href="{{ route('articulo.edit' , ['id' => $articulo->id]) }}" >Editar</a>
			<a class="btn btn-danger" href="{{ route('articulo/destroy', ['id' => $articulo->id]) }}" >Eliminar</a>
		</td>
		</tr>
	@endforeach
	</tbody>
	
	</table>
	 
            {!! $articulos->render() !!}
      
	</div>
</div>
@endsection