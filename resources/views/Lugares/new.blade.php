@extends('app')

@section('content')

<div class="container">
	<div class="row">
	<div class="col‐md‐10 col‐md‐offset‐1">

	<div class="panel panel-default">
<<<<<<< HEAD
				<div class="panel-heading">Crear Nuevo Lugar</div>
				<div class="panel-body">

				@include('Plantilla.validacion')
				{!! Form::open(['route' => 'lugar.store', 'method' => 'post', 'novalidate']) !!}
						
							@include('lugares.plantilla.plantilla')

						<div class="form‐group">
								{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
						</div>
				{!! Form::close() !!}

				</div>
	</div>
	</div>
=======
				<div class="panel-heading">Nuevo Lugar</div>
				<div class="panel-body">

				@include('Plantilla.validacion')
	{!! Form::open(['route' => 'lugar.store', 'method' => 'post', 'novalidate']) !!}
			
				@include('lugares.plantilla.plantilla')

			<div class="form‐group">
					{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
			</div>
	{!! Form::close() !!}

		</div>
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	</div>
</div>
@endsection
