	<div class="form-group">
		{!! Form::label('nombre','Nombre del archivo') !!}
		{!! Form::text('Nombre_Evidencia', null,['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('evidencia', 'Archivo') !!}
		{!! Form::file('Archivo_Evidencia',['class' => 'form-control']) !!}						
	</div>

	<div class="form-group">
		{!! Form::label('nombre', 'Aprendiz') !!}
		{!! Form::select('Fk_IdAprendiz_Actividad', $aprendiz , ['class' => 'form-control', ]) !!}				
	</div>

						
					