@extends('app')
@section('content')
		<div class="container">
			<div class="row">
				<div class="col‐md‐10 col‐md‐offset‐1">

				<div class="panel panel-default">
				<div class="panel-heading">Editar </div>
				<div class="panel-body">


					{!! Form::model($novedades, ['route' => 'novedad.update', 'method' => 'put', 'novalidate']) !!}
						{!! Form::hidden('id', $novedades->id) !!}

						<div class="form-group">
						{!! Form::label('tipo','Tipo') !!}
						{!! Form::text('Tipo_Novedad', null,['class' => 'form-control']) !!}
						</div>

						<div class="form-group">
						{!! Form::label('desc','Descripcion') !!}
						{!! Form::text('Descripcion', null,['class' => 'form-control']) !!}
						</div>

			
							
						<div class="form‐group">
						{!! Form::submit('Enviar', ['class' => 'btn btn‐success ' ] ) !!}
						</div>
			
					
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection