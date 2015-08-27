@extends('app')
@section('content')
		<div class="container">
			<div class="row">
				<div class="col‐md‐10 col‐md‐offset‐1">

				<div class="panel panel-default">
				<div class="panel-heading">Editar {{$lugares->Nombre_Lugar}}</div>
				<div class="panel-body">
					{!! Form::model($lugares, ['route' => 'lugar.update', 'method' => 'put', 'novalidate']) !!}
						{!! Form::hidden('id', $lugares->id) !!}

							@include('lugares.plantilla.plantilla')
			
						<div class="form‐group">
						{!! Form::submit('Enviar', ['class' => 'btn btn‐success ' ] ) !!}
						</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection