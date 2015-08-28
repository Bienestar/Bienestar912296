@extends('app')
@section('content')
		<div class="container">
			<div class="row">
				<div class="col‐md‐10 col‐md‐offset‐1">

				<div class="panel panel-default">
				<div class="panel-heading">Editar {{$eventos->Nombre_Evento}}</div>
				<div class="panel-body">
					{!! Form::model($eventos, ['route' => 'evento.update', 'method' => 'put', 'novalidate']) !!}
						{!! Form::hidden('id', $eventos->id) !!}

							@include('Eventos.plantilla.plantilla')
			
						<div class="form‐group">
						{!! Form::submit('Enviar', ['class' => 'btn btn‐success ' ] ) !!}
						</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection