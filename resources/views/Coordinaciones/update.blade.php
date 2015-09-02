@extends('app')
@section('content')
		<div class="container">
			<div class="row">
				<div class="col‐md‐10 col‐md‐offset‐1">

				<div class="panel panel-default">
				<div class="panel-heading">Editar {{$coordinaciones->Nombre_Coordinacion}}</div>
				<div class="panel-body">
					{!! Form::model($coordinaciones, ['route' => 'coordinacion.update', 'method' => 'put', 'novalidate']) !!}
						{!! Form::hidden('id', $coordinaciones->id) !!}

							@include('coordinaciones.plantilla.plantillas')
			
						<div class="form‐group">
						{!! Form::submit('Enviar', ['class' => 'btn btn‐success ' ] ) !!}
						</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection