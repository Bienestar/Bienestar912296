@extends('app')
@section('content')
	<div class="container">
		<div class="row">
<<<<<<< HEAD
		{!! Form::open(['route' => 'lugar.index', 'method' => 'GET', 'novalidate', 'class' => 'form‐inline', 'role' => 'search']) !!}
			<div class="navbar-form navbar-left">

				<label for="exampleInputName2">Nombre del lugar</label>
				{!! Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Capilla']) !!}
				<button type="submit" class="btn btn-primary">Buscar</button>
			
=======
		{!! Form::open(['route' => 'lugar/search', 'method' => 'post', 'novalidate', 'class' => 'form‐inline']) !!}
			<div class="form‐group">
				<label for="exampleInputName2">Nombre del lugar</label>
				<input type="text" class="form‐control" name = "Nombre" >
						

				<button type="submit" class="btn btn-primary">Buscar</button>
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
				<a href="{{ route('lugar.index') }}" class="btn btn-success">Todo</a>
				<a href="{{ route('lugar.create') }}" class="btn btn-success">Nuevo Lugar</a>
				</div>
		{!! Form::close() !!}
	<br>
	
	<table class="table table-striped">
		<thead>
			<tr>
			<th>Nombre</th>
<<<<<<< HEAD
			<th>Archivo</th>
			<th>Evidencia</th>
=======
			<th>Tipo</th>
			<th>Descripcion</th>
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
		
			</tr>
		</thead>
	<tbody>
	@foreach($lugares as $lugar)
		<tr>
			<td>{{ $lugar->Nombre_Lugar }}</td>
			<td>{{ $lugar->Tipo_Lugar }}</td>
<<<<<<< HEAD
			<td>{{ $lugar->Descripcion }}</td>
			<td>
			<a class="btn btn-primary" href="{{ route('lugar.edit' , ['id' => $lugar->id]) }}" >Editar</a>
			<a class="btn btn-danger" href="{{ route('lugar/destroy', ['id' => $lugar->id]) }}" >Eliminar</a>
			</td>
=======
			<td>{{	$lugar->Descripcion }}</td>
		<td>
			<a class="btn btn-primary" href="{{ route('lugar.edit' , ['id' => $lugar->id]) }}" >Editar</a>
			<a class="btn btn-danger" href="{{ route('lugar/destroy', ['id' => $lugar->id]) }}" >Eliminar</a>
		</td>
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
		</tr>
	@endforeach
	</tbody>
	
	</table>
	 
<<<<<<< HEAD
           {!! $lugares->render()!!}
=======
           
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
      
	</div>
</div>
@endsection