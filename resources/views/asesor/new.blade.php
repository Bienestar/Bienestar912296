@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		    {!! Form::open (['route'=> 'asesor.store', 'method'=> 'post', 'novalidate'])!!}
		     <div class="form-group">
		    {!! Form::label('NumeroIdentificacion', 'Numero Identificacion')!!}
		    {!! Form::text('NumeroIdentificacion_Asesor', null,['class'=> 'form-control', 'placeholder'=> '956595456'])!!}
		</div>
		    <div class="form-group">
		    {!! Form::label('Tipo', 'Tipo Documento')!!}
		    {!! Form::text('TipoDoc_Asesor', null,['class'=> 'form-control', 'placeholder'=> 'T.I'])!!}
		</div>
		<div class="form-group">
		    {!! Form::label('Nombre', 'Nombre')!!}
		    {!! Form::text('Nombre_Asesor', null,['class'=> 'form-control', 'placeholder'=> 'Angel'])!!}
		</div>
		<div class="form-group">
		    {!! Form::label('Apellido', 'Apellido')!!}
		    {!! Form::text('Apellido_Asesor', null,['class'=> 'form-control', 'placeholder'=> 'Perez'])!!}
		</div>
		 <div class="form-group">
		    {!! Form::label('Direccion', 'Direccion')!!}
		    {!! Form::text('Direccion_Asesor', null,['class'=> 'form-control', 'placeholder'=> 'kR 322 # 34-3'])!!}
		</div>
		 <div class="form-group">
		    {!! Form::label('Telefono', 'Telefono')!!}
		    {!! Form::text('Telefono_Asesor', null,['class'=> 'form-control', 'placeholder'=> '546465'])!!}
		</div>
		 <div class="form-group">
		    {!! Form::label('Genero', 'Genero')!!}
		    {!! Form::select('Genero_Asesor', array,['M'=> 'Masculino', 'F'=> 'Femenino'])!!}
		</div>
		 <div class="form-group">
		    {!! Form::label('Email', 'Email')!!}
		    {!! Form::text('Email_Asesor', null,['class'=> 'form-control', 'placeholder'=> 'erika@hotmail.com'])!!}
		</div>
		  <div class="form-group">
		    {!! Form::label('Contraseña', 'Contraseña')!!}
		    {!! Form::text('Contraseña_Asesor', null,['class'=> 'form-control', 'placeholder'=> '123456'])!!}
		</div>
		<div class="form-group">
		    {!! Form::label('Cargo', 'Cargo')!!}
		    {!! Form::select('Cargo_Asesor', array,['Psicolog@'=> 'Psicologo', 'Capellan'=> 'Capellan', 'Trabajador@ Social'=> 'Trabajador Social', 'Intructores Area Cultura'=> 'Instructor Area Cultura', 'Enferme@'=> 'Enfermeria'])!!}
		</div>
		 	
		
		<div class="form-group">
			{!! Form::submit('Enviar', ['class'=> 'btn btn-success'])!!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
</div>
@endsection