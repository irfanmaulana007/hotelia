@extends('layout.auth')

@section('form')
	<h3>Register</h3>
	<form method="POST">
        {{ csrf_field() }}
		<div class="form-group">
		 	<div class="input-group">
		   		<span class="input-group-addon"><i class="fa fa-user"></i></span>
		    	<input type="text" class="form-control" name="nama" placeholder="Nama" required>
		 	</div>
		</div>
		<div class="form-group">
		 	<div class="input-group">
		   		<span class="input-group-addon"><i class="fa fa-phone"></i></span>
		    	<input type="text" class="form-control" name="telepon" placeholder="telepon" required>
		 	</div>
		</div>
		<div class="form-group">
		 	<div class="input-group">
		   		<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
		    	<input type="text" class="form-control" name="email" placeholder="Email" required>
		 	</div>
		</div>
		<div class="form-group">
		 	<div class="input-group">
		   		<span class="input-group-addon"><i class="fa fa-lock"></i></span>
		    	<input type="password" class="form-control" name="password" placeholder="Password" required>
		 	</div>
		</div>
		<div class="form-group">
		 	By creating a hotelia account, I have read and agree to the <a href="{{ URL::to('') }}" class="txt-white">Terms & Conditions</a> and <a href="{{ URL::to('') }}" class="txt-white">Privacy Policy</a>
		</div>
		<div class="form-group">
		 	<button class="btn btn-lg btn-block btn-warning">Agree and Register</button>
		</div>
		<div class="form-group">
		 	Already a member? <a href="{{ URL::to('register') }}" class="txt-white">Log In</a>
		</div>
	</form>
@stop