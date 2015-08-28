@extends('app')
@section('content')
	<div class="container">
		<div class="row">
		{!! Form::open(['route' => 'novedad.index', 'method' => 'GET', 'novalidate', 'class' => 'form‐inline' ,'role' => 'search']) !!}
			<div class="navbar-form navbar-left">
				<label for="exampleInputName2">Tipo Novedad</label>

				{!! Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Estado']) !!}
				
						

				<button type="submit" class="btn btn-primary">Buscar</button>
				<a href="{{ route('novedad.index') }}" class="btn btn-success">Todo</a>
				<a href="{{ route('novedad.create') }}" class="btn btn-success">Crear una novedad</a>
				</div>
		{!! Form::close() !!}
	<br>
	
	<table class="table table-striped">
		<thead>
			<tr>
			<th>Tipo de novedad</th>
			<th>Descripcion</th>
			<th>Asesor</th>
			
		
			</tr>
		</thead>
	<tbody>
	@foreach($novedades as $novedad)
		<tr>
			<td>{{ $novedad->Tipo_Novedad }}</td>
			<td>{{ $novedad->Descripcion }}</td>
			<td>{{ $novedad->Fk_IdAsesor }}</td>

		<td>
			<a class="btn btn-primary" href="{{ route('novedad.edit' , ['id' => $novedad->id]) }}" >Editar</a>
			<a class="btn btn-danger" href="{{ route('novedad/destroy', ['id' => $novedad->id]) }}" >Eliminar</a>
		</td>
		</tr>
	@endforeach
	</tbody>
	
	</table>
	 
           {!! $novedades->render() !!}
      
	</div>
</div>
@endsection