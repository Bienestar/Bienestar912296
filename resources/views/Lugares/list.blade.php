@extends('app')
@section('content')
	<div class="container">
		<div class="row">
		{!! Form::open(['route' => 'lugar/search', 'method' => 'post', 'novalidate', 'class' => 'form‐inline']) !!}
			<div class="form‐group">
				<label for="exampleInputName2">Nombre del lugar</label>
				<input type="text" class="form‐control" name = "Nombre" >
						

				<button type="submit" class="btn btn-primary">Buscar</button>
				<a href="{{ route('lugar.index') }}" class="btn btn-success">Todo</a>
				<a href="{{ route('lugar.create') }}" class="btn btn-success">Nuevo Lugar</a>
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
	@foreach($lugares as $lugar)
		<tr>
			<td>{{ $lugar->Nombre_Lugar }}</td>
			<td>{{ $lugar->Tipo_Lugar }}</td>
			<td>{{	$lugar->Descripcion }}</td>
		<td>
			<a class="btn btn-primary" href="{{ route('lugar.edit' , ['id' => $lugar->id]) }}" >Editar</a>
			<a class="btn btn-danger" href="{{ route('lugar/destroy', ['id' => $lugar->id]) }}" >Eliminar</a>
		</td>
		</tr>
	@endforeach
	</tbody>
	
	</table>
	 
           
      
	</div>
</div>
@endsection