@extends('app')
@section('content')
		<div class="container">
			<div class="row">
				<div class="col‐md‐10 col‐md‐offset‐1">

				<div class="panel panel-default">
				<div class="panel-heading">Editar </div>
				<div class="panel-body">


					{!! Form::model($citas, ['route' => 'cita.update', 'method' => 'put', 'novalidate']) !!}
						{!! Form::hidden('id', $citas->id) !!}

						<div class="form-group">
								
						{!! Form::label('date','Fecha') !!}
						{!! Form::text('Fecha_Cita', null,['class' => 'form-control']) !!}
						
						</div>

						<div class="form-group">
						{!! Form::label('hora', 'Hora') !!}
						<input type="text" name="Hora_Cita" class="form-control">
							
						</div>
						<div class="form-group">
								
						{!! Form::label('date','Estado') !!}
						{!! Form::text('Estado_Cita', null,['class' => 'form-control']) !!}
						</div>



						

						<div class="form-group">
						{!! Form::label('Nombre', 'Nombre') !!}
						{!! Form::text('Fk_IdAprendiz', null,['class' => 'form-control']) !!}
												
						</div>


						<div class="form-group">
						{!! Form::label('Lugar', 'Lugar') !!}
						{!! Form::text('Fk_IdLugar', null,['class' => 'form-control']) !!}
												
						</div>


						<div class="form-group">
						{!! Form::label('Nombrea', 'Nombre del asesor') !!}
						{!! Form::text('Fk_IdAsesor', null,['class' => 'form-control']) !!}
												
						</div>

			
						<div class="form‐group">
						{!! Form::submit('Enviar', ['class' => 'btn btn‐success ' ] ) !!}
						</div>
			
					
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection