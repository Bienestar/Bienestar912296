	<div class="form-group">
		{!! Form::label('nombre','Nombre del evento') !!}
		{!! Form::text('Nombre_Evento', null,['class' => 'form-control', 'placeholder' => 'Bazar']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('fechai', 'Fecha de Inicio') !!}
		{!! Form::date('FechaIncio_Evento', \Carbon\Carbon::now(),['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('fechaf', 'Fecha de Finalizacion') !!}
		{!! Form::date('FechaFinalizacion_Evento', \Carbon\Carbon::now(),['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('dir', 'Direccion') !!}
		{!! Form::text('Direccion_Evento',null , ['class' => 'form-control', 'placeholder' => 'Auditorio']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('res', 'Restricciones') !!}
		{!! Form::text('Restricciones',null , ['class' => 'form-control', 'placeholder' => 'Camiseta Blanca']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('c', 'Cupos') !!}
		{!! Form::number('Cupos_Envento',null , ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('des', 'Descripcion') !!}
		{!! Form::text('Descripcion_Envento',null , ['class' => 'form-control', 'placeholder' => 'Evento para jovenes de 13 años']) !!}
	</div>

    <div class="form-group">
		{!! Form::label('des', 'Estado') !!}
		{!! Form::select('Estado_Evento', array('A' => 'Activo', 'S' => 'Suspendido'), 'A',['class' => 'form-control']) !!}
	</div>



						
					