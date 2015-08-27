@extends('app')
@section('content')
	<div class="container">
		<div class="row">
		{!! Form::open(['route' => 'cita/search', 'method' => 'post', 'novalidate', 'class' => 'form‐inline']) !!}
			<div class="form‐group">
				<label for="exampleInputName2">Nombre del Aprendiz</label>
				<input type="text" class="form‐control" name = "Nombre" >
						

				<button type="submit" class="btn btn-primary">Buscar</button>
				<a href="{{ route('cita.index') }}" class="btn btn-success">Todo</a>
				<a href="{{ route('cita.create') }}" class="btn btn-success">Solicitar Cita</a>
				</div>
		{!! Form::close() !!}
	<br>
	
	<table class="table table-striped">
		<thead>
			<tr>
			<th>Fecha</th>
			<th>Hora</th>
			<th>Estado</th>
			<th>Aprendiz</th>
			<th>Lugar</th>
			<th>Asesor</th>
		
			</tr>
		</thead>
	<tbody>
	@foreach($citas as $cita)
		<tr>
			<td>{{ $cita->Fecha_Cita }}</td>
			<td>{{ $cita->Hora_Cita }}</td>
			<td>{{ $cita->Estado_Cita }}</td>
			<td>{{ $cita->Fk_IdAprendiz }}</td>
			<td>{{ $cita->Fk_IdLugar }}</td>
			<td>{{ $cita->Fk_IdAsesor }}</td>
		<td>
			<a class="btn btn-primary" href="{{ route('cita.edit' , ['id' => $cita->id]) }}" >Editar</a>
			<a class="btn btn-danger" href="{{ route('cita/destroy', ['id' => $cita->id]) }}" >Eliminar</a>
		</td>
		</tr>
	@endforeach
	</tbody>
	
	</table>
	 
           
      
	</div>
</div>
@endsection