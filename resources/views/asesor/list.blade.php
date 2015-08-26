@extends('app')

@section('content')
<div class="container">
	<div class="row">
		    {!! Form::open (['route' => 'asesor/search', 'method'=> 'post', 'novalidate', 'class'=> 'form-inline']) !!}
		    <div class="form-group">
		    	<label for="exampleInputName2">Nombre</label>
		    	<input type="Text" class="form-control" name="name">
		    </div>
			
			<button type="submit" class="btn btn-default" >Buscar</button>
			<a href= "{{ route ('aprendiz.index') }}" class="btn btn-primary">All</a>
				<a href="{{ route ('aprendiz.create') }}" class="btn btn-primary">Crear</a>
				{!! Form::close() !!}
				<br>
				<table class="table table-condensed table-striped table-bordered">
						<thead>
							<tr>
								<th>Numero Identificacion</th>
								<th>Tipo Documento</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Direccion</th>
								<th>Telefono </th>
								<th>Genero</th>
								<th>Email</th>
								<th>Contraseña</th>
								<th>Cargo</th>
							
							</tr>
						</thead>
					<tbody>
						@foreach($asesors as $asesor)
							<tr>
								<td>{{ $asesor->NumeroIdentificacion_Aprendiz }}</td>
								<td>{{ $asesor->TipoDoc_Aprendiz}}</td>
								<td>{{ $asesor->Nombre_Aprendiz }}</td>
								<td>{{ $asesor->Apellido_Aprendiz }}</td>
								<td>{{ $asesor->Direccion_Aprendiz}}</td>
								<td>{{ $asesor->Telefono_Aprendiz }}</td>
								<td>{{ $asesor->Genero_Aprendiz }}</td>
								<td>{{ $asesor->Email_Aprendiz }}</td>
								<td>{{ $asesor->Contraseña_Aprendiz }}</td>
								<td>{{ $asesor->Eps }}</td>

									<td> 
										<a class= "btn btn-primary btn-xs" href="{{ route('asesor.edit', ['id'=> $asesor->id] )}}" >Editar</a>
										<a class= "btn btn-danger btn-xs" href="{{ route('asesor/destroy', ['id'=> $asesor->id] )}}" >Eliminar</a>
									</td>
							</tr>
						@endforeach
					</tbody>
				</table>
		
	</div>
</div>

@endsection
