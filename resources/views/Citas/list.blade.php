@extends('app')
@section('content')
	<div class="container">
		<div class="row">
		{!! Form::open(['route' => 'cita.index', 'method' => 'GET', 'novalidate', 'class' => 'form‐inline' ,'role' => 'search']) !!}
			<div class="navbar-form navbar-left">
				<label for="exampleInputName2">Fecha</label>

				{!! Form::text('fecha',null,['class' => 'form-control', 'placeholder' => '23']) !!}
				
						

				<button type="submit" class="btn btn-primary">Buscar</button>
				<a href="{{ route('cita.index') }}" class="btn btn-success">Todo</a>
				<a href="{{ route('cita.create') }}" class="btn btn-success">Crear Cita</a>
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
	 
           {!! $citas->render() !!}
      
	</div>
</div>
@endsection