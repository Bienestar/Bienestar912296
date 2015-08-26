@extends('app')

@section('content')

<div class="container">
	<div class="row">
	<div class="col‐md‐10 col‐md‐offset‐1">

	<div class="panel panel-default">
				<div class="panel-heading">Crear nueva encuesta</div>
				<div class="panel-body">

					@include('Plantilla.validacion')

					{!! Form::open(['route' => 'encuesta.store', 'method' => 'post', 'novalidate']) !!}
				
						<div class="form-group">
						 {!! Form::label('Fecha', 'Fecha', ['class' => 'col-md-4 control-label']) !!}
						 {!! Form::date('Fecha_Encuesta', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
								
						</div>	
										

						<div class="form-group"> 
						{!! Form::label('NumeroH', 'Numero de hermanos', ['class' => 'col-md-4 control-label']) !!}
							
						{!! Form::number('NumHermanos_Encuesta',null , ['class' => 'form-control', 'placeholder' => '2']) !!}	
						</div>	
							
						
						
						<div class="form-group">
						{!! Form::label('Motivo','Motivo de la consulta' ,['class' => 'col-md-4 control-label']) !!}

						{!! Form::text('MotivoConsullta_Encuesta', null, ['class' => 'form-control', 'placeholder' => 'Problema Familiar']) !!}	
						</div>
					
					

						<div class="form-group">
						{!! Form::label('NumeroEm','Numero de embarazos',['class' => 'col-md-4 control-label']) !!}
						{!! Form::number('NumEmbarazos_Encuesta', '0',['class' => 'form-control', 'placeholder' => '1']) !!}	
							</div>	
						
					

						<div class="form-group">
						{!! Form::label('NumeeroAb', 'Numero de abortos',['class' => 'col-md-4 control-label']) !!}
						{!! Form::number('NumAbortos_Encuesta', '0', ['class' => 'form-control']) !!}
							
							
						</div>

						
						<div class="form-group">
						{!! Form::label('NumeeroAb', 'Numero de abortos',['class' => 'col-md-4 control-label']) !!}
						{!! Form::select('Genero_Encuesta', array('M' => 'Masculino', 'F' => 'Femenino') ,['class' => 'form-control']) !!}
							
							
						</div>

			<div class="form‐group">
					{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
			</div>
	{!! Form::close() !!}

		</div>
	</div>
</div>
@endsection
