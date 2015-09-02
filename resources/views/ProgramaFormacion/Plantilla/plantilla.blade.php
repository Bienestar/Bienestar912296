						<div class="form-group">
						{!! Form::label('Nombre','Nombre Programa de Formacion') !!}
						{!! Form::text('Nombre_Programa', null,['class' => 'form-control', 'placeholder' => 'Analisis y Desarrollo de Sistemas de Informacion']) !!}
						
						</div>
						<div class="form-group">
						{!! Form::label('FK_Coordinacion', 'Coordinacion') !!}
						 {!! Form::select('FK_IdCoordinacion', $Coordinacion, null ,['class' => 'form-control']) !!}
							
						</div>

						