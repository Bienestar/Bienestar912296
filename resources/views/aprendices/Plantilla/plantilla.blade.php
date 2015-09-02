	<div class="form-group">
						{!! Form::label('NumeroIdentifiacion','Numero Identificacion ') !!}
						{!! Form::text('NumeroIdentificacion_Aprendiz', null,['class' => 'form-control', 'placeholder' => '9802154785']) !!}
						
						</div>

						<div class="form-group">
						{!! Form::label('TipoDocumento', 'Tipo Documento') !!}
						{!! Form::text('TipoDoc_Aprendiz',null,['class' => 'form-control', 'placeholder' => 'T.I']) !!}
							
						</div>

						<div class="form-group">
						{!! Form::label('nombre', 'Nombre') !!}
						{!! Form::text('Nombre_Aprendiz',null , ['class' => 'form-control', 'placeholder' => 'Ana Tulia']) !!}
							
						</div>

							<div class="form-group">
						{!! Form::label('apellido', 'Apellido Aprendiz') !!}
						{!! Form::text('Apellido_Aprendiz',null,['class' => 'form-control', 'placeholder' => 'Perez']) !!}
							
						</div>

							<div class="form-group">
						{!! Form::label('direccion', 'Direccion') !!}
						{!! Form::text('Direccion_Aprendiz',null,['class' => 'form-control', 'placeholder' => ' kr 123 # 45-54']) !!}
							
						</div>
							<div class="form-group">
						{!! Form::label('telefono', 'Telefono') !!}
						{!! Form::text('Telefono_Aprendiz',null,['class' => 'form-control', 'placeholder' => ' 5692531']) !!}
							
						</div>

							<div class="form-group">
						{!! Form::label('genero', 'Genero') !!}
						{!! Form::select('Genero_Aprendiz',array('M' => 'Masculino', 'F' => 'Femenino')) !!}
							
						</div>

						<div class="form-group">
						{!! Form::label('email', 'Email') !!}
						{!! Form::text('Email_Aprendiz',null,['class' => 'form-control', 'placeholder' => ' AnaTulia@example.com']) !!}
							
						</div>

						<div class="form-group">
						{!! Form::label('contraseña', 'Contraseña') !!}
						{!! Form::text('Contraseña_Aprendiz',null,['class' => 'form-control', 'placeholder' => ' ********']) !!}
							
						</div>

						<div class="form-group">
						{!! Form::label('eps', 'Eps') !!}
						{!! Form::text('Eps',null,['class' => 'form-control', 'placeholder' => ' SaludTotal']) !!}
							
						</div>


						<div class="form-group">
						{!! Form::label('Fk_ficha', 'Ficha Caracterizacion') !!}
						  {!! Form::select('Fk_IdFicha_Caracterizacion', $FichaCaracterizacion, null ,['class' => 'form-control']) !!}
							
						</div>








						