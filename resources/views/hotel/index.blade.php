@extends('layout.template')

@section('header', 'hidden')

@section('nav')
<!-- Begin Nav -->
	<nav class="dark">
		<div class="col-xs-6">
			<div id="logo">
				<span class="brand"><a href="{{ URL::to('/') }}">Hotelia</a></span>
			</div>
		</div>
		<div class="col-xs-6">
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
<!-- End Nav -->
@stop

@section('content')
<!-- Begin Content -->
<div id="body-content">
	<div id="breadcumb">
		<ul>
		  <li>Daftar Hotel</li>
		</ul>
	</div>
	<section>
		<div class="row">
		<!-- Begin Side Nav -->
			<div class="col-md-3">
				<div id="sidenav">
					<h4>Filter</h4>
					<div class="filter">
						<div class="title">
							<h5>Negara</h5>
						</div>
						<div class="body">
							<label><input type="radio" name="country"> Asia</label>
							<label><input type="radio" name="country"> Eropa</label>
							<label><input type="radio" name="country"> Indonesia</label>
						</div>
					</div>
					<div class="filter">
						<div class="title">
							<h5>Type</h5>
						</div>
						<div class="body">
							<label><input type="checkbox"> Hotel</label>
							<label><input type="checkbox"> Viilla</label>
							<label><input type="checkbox"> Home Stay</label>
						</div>
					</div>
					<div class="filter">
						<div class="title">
							<h5>Jumlah Orang</h5>
						</div>
						<div class="body">
							<label><input type="radio" name="people"> 1 Orang</label>
							<label><input type="radio" name="people"> 2 Orang</label>
							<label><input type="radio" name="people"> 3 Orang</label>
							<label><input type="radio" name="people"> 4 Orang</label>
						</div>
					</div>
					<button class="btn btn-block btn-primary">Filter</button>
				</div>
			</div>
		<!-- End Side Nav -->

		<!-- Begin Grid Content -->
			<div class="col-md-9">
				<div id="grid-content">
					<div class="row">
						<div id="head">
							<div class="pull-left">Total Hotel : {{ count($content) }} Hotel</div>
							<div class="pull-right">
								Sort By
								<select name="sort" class="form-control w-auto">
									<option value="0">- Select -</option>
									<option value="1">Harga</option>
									<option value="2">Popular</option>
								</select>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						@foreach($content as $key => $value)
							<div class="col-md-3">
								<a href="{{ URL::to('hotel/' . $value->id) }}">
									<div class="item overlay">
										<div class="content">
											<h4>{{ $value->nama }}</h4>
											<img src="{{ asset('img/hotel/') }}" alt="">
											<div class="description">
												<h5>ID : {{ $value->id }}</h5>
												<h5>Alamat : {{ $value->alamat }}</h5>
											</div>
										</div>
										<div class="detail">Detail</div>
									</div>
								</a>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		<!-- End Grid Content -->
		</div>
	</section>
</div>
<!-- End Content -->
@stop