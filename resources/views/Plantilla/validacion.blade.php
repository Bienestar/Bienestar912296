
	@if ($errors->any())
	<div class="alert alert-danger" role="alert">
<<<<<<< HEAD
		<p>Verificar los campos insertados</p>
=======
		<p>Verifique los campos</p>
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
		<ul>
			@foreach($errors->all() as $error)

				<li>{{ $error}}</li>
			@endforeach
		</ul>
	@endif
</div>