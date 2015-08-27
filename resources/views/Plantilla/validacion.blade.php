
	@if ($errors->any())
	<div class="alert alert-danger" role="alert">
		<p>Verificar los campos insertados</p>
		<ul>
			@foreach($errors->all() as $error)

				<li>{{ $error}}</li>
			@endforeach
		</ul>
	@endif
</div>