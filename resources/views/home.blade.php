@extends('layout.template')

@section('banner')
	<div id="greet">
		<h1>Hotelia</h1>
		<h2>Be Smart Your Choice</h2>
		<br>
		<form>
			<select name="country" id="country" class="form-control">
				<option value="0">All Country</option>
				<option value="1">Indonesia</option>
				<option value="2">Australia</option>
			</select>
			<select name="type" id="type" class="form-control">
				<option value="0">All Type</option>
				<option value="1">Hotel</option>
				<option value="2">Villa</option>
				<option value="3">Home Stay</option>
			</select>
			<select name="category" id="category" class="form-control">
				<option value="0">1 Orang</option>
				<option value="1">2 Orang</option>
				<option value="2">3 Orang</option>
				<option value="3">4 Orang</option>
			</select>
			<a href="{{ URL::to('hotel') }}"><button type="button" class="btn btn-primary">Cari Sekarang</button></a>
		</form>
	</div>
@stop

@section('content')
	<!-- Begin Company Profile -->
	<section id="short-company-profile">
		<div class="container">
			<h1>Hotelia</h1>
			<!-- Begin Short Description -->
			<p><b>Hotelia</b> adalah sebuah platform yang menyediakan jasa tempat wisata dan paket berlibur yang didirikan pada Oktober 2017. <b>Liburan Kuy</b> saat menyediakan sekitar 30 paket liburan dan 82 daftar wisata yang telah bekerja sama dalam kegiatan liburan seperti penyedia tempat tinggal (hotel, homestay, dll), kendaraan, dan juga akses wisata lainnya. <br><a href="about.html">[ lihat selengkapnya .. ]</a></p>
			<!-- End Short Description -->

			<!-- Begin Advantage -->
			<h2>Why book hotels with Hotelia?</h2>
			<div class="col-sm-6">
				<ul>
					<li>One-stop Service Gurarantee</li>
					<li>Customer focused booking and check-in process</li>
					<li>Trusted Travel Leader</li>
					<li>Secure Payment</li>
				</ul>
			</div>
			<div class="col-sm-6">
				<ul>
					<li>Convenient & reliable booking and payment systems</li>
					<li>Travel at Yout Fingertrips</li>
					<li>Manage travel bookings easily through the app, website or by phone</li>
				</ul>
			</div>
			<!-- Stop Advantage -->
		</div>
	</section>
	<!-- End Company Profile -->

	<section id="testimony">
		<div class="container">
			<h1>Testimony</h1>
			<div class="row">
				<div class="col-md-12">
					<div class="w-100 border bg-primary-dark p-20" style="height: 200px">
						<br><br>
						<h2 class="text-center">Coming Soon</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop