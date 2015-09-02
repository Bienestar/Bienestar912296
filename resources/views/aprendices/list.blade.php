@extends('app')
@section('content')
	<div class="container">
		<div class="row">
		{!! Form::open(['route' => 'aprendiz/search', 'method' => 'post', 'novalidate', 'class' => 'form‐inline']) !!}
			<div class="form‐group">
				<label for="exampleInputName2">Nombre Aprendiz</label>
				<input type="text" class="form‐control" name = "Nombre" >
						

				<button type="submit" class="btn btn-primary">Buscar</button>
				<a href="{{ route('aprendiz.index') }}" class="btn btn-success">Todo</a>
				<a href="{{ route('aprendiz.create') }}" class="btn btn-success">Nuevo Aprendiz</a>
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
			<th>Eps</th>
			<th>Ficha Caracterizacion</th>
			</tr>
		</thead>
	<tbody>
	@foreach($aprendices as $Aprendiz)
		<tr>
			<td>{{ $Aprendiz->NumeroIdentificaion_Aprendiz}}</td>
			<td>{{ $Aprendiz->TipoDoc_Aprendiz }}</td>
			<td>{{  $Aprendiz->Nombre_Aprendiz }}</td>
			<td>{{	$Aprendiz->Apellido_Aprendiz }}</td>
			<td>{{	$Aprendiz->Direccion_Aprendiz }}</td>
			<td>{{	$Aprendiz->Telefono_Aprendiz }}</td>
			<td>{{	$Aprendiz->Genero_Aprendiz }}</td>
			<td>{{	$Aprendiz->Email_Aprendiz }}</td>
			<td>{{	$Aprendiz->Contraseña_Aprendiz }}</td>
			<td>{{	$Aprendiz->Eps }}</td>
			<td>{{	$Aprendiz->Fk_FichaCaracterizacion }}</td>
		<td>
			<a class="btn btn-primary" href="{{ route('Aprendiz.edit' , ['id' => $Aprendiz->id]) }}" >Editar</a>
			<a class="btn btn-danger" href="{{ route('Aprendiz/destroy', ['id' => $Aprendiz->id]) }}" >Eliminar</a>
		</td>
		</tr>
	@endforeach
	</tbody>
	
	</table>
	 
           
      
	</div>
</div>
@endsection