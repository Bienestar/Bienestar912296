@extends('app')
@section('content')
		<div class="container">
			<div class="row">
				<div class="col‐md‐10 col‐md‐offset‐1">

				<div class="panel panel-default">
				<div class="panel-heading">Editar </div>
				<div class="panel-body">
						
						@include('Plantilla.validacion')

					{!! Form::model($citas, ['route' => 'cita.update', 'method' => 'put', 'novalidate']) !!}
						{!! Form::hidden('id', $citas->id) !!}

								@include(Citas.plantilla.plantilla)
			
						<div class="form‐group">
							{!! Form::submit('Enviar', ['class' => 'btn btn‐success ' ] ) !!}
						</div>
			
					
					{!! Form::close() !!}
			</div>
			</div>
			</div>
		</div>
	</div>
@endsection
