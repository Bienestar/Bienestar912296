						<div class="form-group">
								
						{!! Form::label('tipo','Tipo de Novedad') !!}
						{!! Form::text('Tipo_Novedad', null,['class' => 'form-control']) !!}
						
						</div>

						<div class="form-group">
								
						{!! Form::label('desc','Descripcion') !!}
						{!! Form::text('Descripcion', null,['class' => 'form-control']) !!}
						</div>

					

							<div class="form-group">
						{!! Form::label('Nombrea', 'Nombre del asesor') !!}
						{!! Form::select('Fk_IdAsesor', $asesor, null,['class' => 'form-control']) !!}
												
						</div>
