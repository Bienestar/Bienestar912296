<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bienestar</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
<<<<<<< HEAD
				<a class="navbar-brand" href="#">Bienestar</a>
=======
				<a class="navbar-brand" href="#">Laravel</a>
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
<<<<<<< HEAD
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('cita') }}">Citas</a></li>
					<li><a href="{{ url('lugar') }}">Crear lugar</a></li>
					<li><a href="{{ url('evidencia') }}">Evidencia</a></li>
					<li><a href="{{ url('evento') }}">Eventos</a></li>
					<li><a href="{{ url('novedad') }}">Novedades</a></li>
					
				</ul>
				</ul>
					
=======
					<li><a href="{{ url('/') }}">Home</a></li>
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
<<<<<<< HEAD
						<li><a href="{{ url('/auth/login') }}">Iniciar sesion</a></li>
						<li><a href="{{ url('/auth/register') }}">Registrar</a></li>
=======
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
