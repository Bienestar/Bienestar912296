						<div class="form-group">
						{!! Form::label('NumeroFicha','Numero Ficha') !!}
						{!! Form::text('Numero_Ficha', null,['class' => 'form-control', 'placeholder' => ' 982452']) !!}
						
						</div>

						<div class="form-group">
						{!! Form::label('Fecha', 'Fecha Inicio') !!}
						{!! Form::date('FechaInicio_Ficha', \Carbon\Carbon::now()); !!}
							
						</div>

						<div class="form-group">
						{!! Form::label('Fecha F', 'Fecha Fin') !!}
						{!! Form::date('FechaFin_Ficha', \Carbon\Carbon::now()); !!}
							
						</div>

						<div class="form-group">
						{!! Form::label('Programa', 'Programa Formacion') !!}
						 {!! Form::select('Fk_IdProgramaFormacion', $programaFormacion, null ,['class' => 'form-control']) !!}
							
						</div>


