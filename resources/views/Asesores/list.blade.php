@extends('app')
@section('content')
	<div class="container">
		<div class="row">
		{!! Form::open(['route' => 'aprendiz/search', 'method' => 'post', 'novalidate', 'class' => 'form‐inline']) !!}
			<div class="form‐group">
				<label for="exampleInputName2">Nombre Aprendiz</label>
				<input type="text" class="form‐control" name = "Nombre" >
						

				<button type="submit" class="btn btn-primary">Buscar</button>
				<a href="{{ route('asesor.index') }}" class="btn btn-success">Todo</a>
				<a href="{{ route('asesor.create') }}" class="btn btn-success">Nuevo Lugar</a>
				</div>
		{!! Form::close() !!}
	<br>
	
	<table class="table table-striped">
		<thead>
			<tr>
			<th>Numero Identificacion</th>
			<th>Tipo Documento</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Direccion</th>
			<th>Telefono</th>
			<th>Genero</th>
			<th>Email</th>
			<th>Contraseña</th>
			<th>Cargo</th>
			</tr>
		</thead>
	<tbody>
	@foreach($asesors as $Asesor)
		<tr>
			<td>{{ $Asesor->NumeroIdentificaion_Asesor}}</td>
			<td>{{ $AAsesor->TipoDoc_Asesor }}</td>
			<td>{{	$Asesor->Nombre_Asesor }}</td>
			<td>{{	$Asesor->Apellido_Asesor }}</td>
			<td>{{	$Asesor->Direccion_Asesor }}</td>
			<td>{{	$Asesor->Telefono_Asesor }}</td>
			<td>{{	$Asesor->Genero_Asesor }}</td>
			<td>{{	$Asesor->Email_Asesor }}</td>
			<td>{{	$Asesor->Contraseña_Asesor }}</td>
			<td>{{	$Asesor->Cargo_Asesor }}</td>
		<td>
			<a class="btn btn-primary" href="{{ route('Asesor.edit' , ['id' => $Asesor->id]) }}" >Editar</a>
			<a class="btn btn-danger" href="{{ route('Asesor/destroy', ['id' => $Asesor->id]) }}" >Eliminar</a>
		</td>
		</tr>
	@endforeach
	</tbody>
	
	</table>
	 
           
      
	</div>
</div>
@endsection