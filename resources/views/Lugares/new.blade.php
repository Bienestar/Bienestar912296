@extends('app')

@section('content')

<div class="container">
	<div class="row">
	<div class="col‐md‐10 col‐md‐offset‐1">

	<div class="panel panel-default">
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
	</div>
</div>
@endsection
