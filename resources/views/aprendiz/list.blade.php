@extends('app')

@section('content')
<div class="container">
	<div class="row">
		    {!! Form::open (['route' => 'aprendiz/search', 'method'=> 'post', 'novalidate', 'class'=> 'form-inline']) !!}
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
								<th>Eps</th>
							
							</tr>
						</thead>
					<tbody>
						@foreach($aprendices as $aprendiz)
							<tr>
								<td>{{ $aprendiz->NumeroIdentificacion_Aprendiz }}</td>
								<td>{{ $aprendiz->TipoDoc_Aprendiz}}</td>
								<td>{{ $aprendiz->Nombre_Aprendiz }}</td>
								<td>{{ $aprendiz->Apellido_Aprendiz }}</td>
								<td>{{ $aprendiz->Direccion_Aprendiz}}</td>
								<td>{{ $aprendiz->Telefono_Aprendiz }}</td>
								<td>{{ $aprendiz->Genero_Aprendiz }}</td>
								<td>{{ $aprendiz->Email_Aprendiz }}</td>
								<td>{{ $aprendiz->Contraseña_Aprendiz }}</td>
								<td>{{ $aprendiz->Eps }}</td>

									<td> 
										<a class= "btn btn-primary btn-xs" href="{{ route('aprendiz.edit', ['id'=> $aprendiz->id] )}}" >Editar</a>
										<a class= "btn btn-danger btn-xs" href="{{ route('aprendiz/destroy', ['id'=> $aprendiz->id] )}}" >Eliminar</a>
									</td>
							</tr>
						@endforeach
					</tbody>
				</table>
		
	</div>
</div>

@endsection
