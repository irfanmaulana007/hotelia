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
	<header>
		<nav style="position: relative;">
			<div class="col-xs-3">
				<div id="logo">	
					<span class="brand">Hotelia</span>
				</div>				
			</div>
			<div class="col-xs-9">
				<div id="nav" class="pull-right">
					<ul>
						<li class="nav-item"><a href="paket_liburan.html" class="btn btn-link">Paket Liburan</a></li>
						<li class="nav-item"><a href="daftar_wisata.html" class="btn btn-link">Daftar Wisata</a></li>
						<li class="nav-item"><a href="jadwal_tour.html" class="btn btn-link">Jadwal Tour</a></li>
						<li class="nav-item"><a href="faq.html" class="btn btn-link">FAQ</a></li>
						<li class="nav-item"><a href="wishlist.html" class="btn btn-link">Wishlist</a></li>
						<li class="nav-item"><a href="{{ URL::to('login') }}" class="btn btn-link">Login</a></li>
						<li class="nav-item"><a href="{{ URL::to('register') }}" class="btn btn-link">Register</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<br><br><br><br>
		<div class="row" style="background-color: #337ab7; padding: 20px 0;">
			<div class="col-sm-5 col-sm-offset-1">
				<h3>Hotelia</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus quam autem id, rerum laboriosam! Ipsum accusamus cum blanditiis, nihil sunt voluptatibus, voluptas, nemo iusto optio ratione quia quaerat temporibus modi?</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem suscipit eum amet similique aspernatur aut facilis. Velit sapiente a, odit quod ipsam et libero soluta rem in, quo. Reprehenderit, corrupti.</p>
			</div>
			<div class="col-sm-5">
				@yield('form')
			</div>
		</div>
	</header>
	<!-- End Header -->
</body>
</html>