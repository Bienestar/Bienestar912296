@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		    {!! Form::open (['route'=> 'aprendiz.store', 'method'=> 'post', 'novalidate'])!!}
		     <div class="form-group">
		    {!! Form::label('NumeroIden', 'Numero Identificacion')!!}
		    {!! Form::text('NumeroIdentificacion_Aprendiz', null,['class'=> 'form-control', 'placeholder'=> '956595456'])!!}
		</div>
		    <div class="form-group">
		    {!! Form::label('Tipo', 'Tipo Documento')!!}
		    {!! Form::text('TipoDoc_Aprendiz', null,['class'=> 'form-control', 'placeholder'=> 'T.I'])!!}
		</div>
		<div class="form-group">
		    {!! Form::label('Nombre', 'Nombre')!!}
		    {!! Form::text('Nombre_Aprendiz', null,['class'=> 'form-control', 'placeholder'=> 'Ana'])!!}
		</div>
		<div class="form-group">
		    {!! Form::label('Apellido', 'Apellido')!!}
		    {!! Form::text('Apellido_Aprendiz', null,['class'=> 'form-control', 'placeholder'=> 'Perez'])!!}
		</div>
		 <div class="form-group">
		    {!! Form::label('Direccion', 'Direccion')!!}
		    {!! Form::text('Direccion_Aprendiz', null,['class'=> 'form-control', 'placeholder'=> 'kR 322 # 34-3'])!!}
		</div>
		 <div class="form-group">
		    {!! Form::label('Telefono', 'Telefono')!!}
		    {!! Form::text('Telefono_Aprendiz', null,['class'=> 'form-control', 'placeholder'=> '546465'])!!}
		</div>
		 <div class="form-group">
		    {!! Form::label('Genero', 'Genero')!!}
		    {!! Form::select('Genero_Aprendiz', array,['M'=> 'Masculino', 'F'=> 'Femenino'])!!}
		</div>
		 <div class="form-group">
		    {!! Form::label('Email', 'Email')!!}
		    {!! Form::text('Email_Aprendiz', null,['class'=> 'form-control', 'placeholder'=> 'erika@hotmail.com'])!!}
		</div>
		  <div class="form-group">
		    {!! Form::label('Contraseña', 'Contraseña')!!}
		    {!! Form::text('Contraseña_Aprendiz', null,['class'=> 'form-control', 'placeholder'=> '123456'])!!}
		</div>
		 	
		
		<div class="form-group">
			{!! Form::submit('Enviar', ['class'=> 'btn btn-success'])!!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
</div>
@endsection
