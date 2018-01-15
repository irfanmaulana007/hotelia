<!DOCTYPE html>
<html>
<head>
	<title>Hotelia</title>

	<!-- CSS Plugins -->
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">

	<!-- JS Plugins -->
	<script src="{{ asset('plugins/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<script src="{{ asset('js/nav.js') }}"></script>
</head>
<body>
	<!-- Begin Header -->
	<header class="@yield('header')">
		<nav>
			<div class="col-xs-3">
				<div id="logo">	
					<span class="brand"><a href="{{ URL::to('/') }}">Hotelia</a></span>
				</div>				
			</div>
			<div class="col-xs-9">
				<div id="nav" class="pull-right">
					<ul>
						<li class="nav-item"><a href="{{ URL::to('hotel') }}" class="btn btn-link">Daftar Hotel</a></li>
						<li class="nav-item">|</li>
						@if(!Auth::check())
							<li class="nav-item"><a href="{{ URL::to('login') }}" class="btn btn-link">Login</a></li>
							<li class="nav-item"><a href="{{ URL::to('register') }}" class="btn btn-link">Register</a></li>
						@else
							@if(Auth::user()->role == 'admin')
								<li class="nav-item"><a href="{{ URL::to('master') }}" class="btn btn-link">Master</a></li>
							@endif
							<li class="nav-item"><a href="{{ URL::to('logout') }}" class="btn btn-link">Logout</a></li>
						@endif
					</ul>
				</div>
			</div>
		</nav>

		@yield('banner')
	</header>
	<!-- End Header -->

	@yield('nav')

	<!-- Begin Content -->
	<div id="body-content">
		<!-- Content Here -->
		@yield('content')

		
	</div>
	<!-- End Content -->

	<footer>
		<p class="text-center">&copy;Copyright Hotelia 2018. All Right Reserved.</p>
	</footer>
</body>
</html>