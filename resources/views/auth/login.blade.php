@extends('layout.auth')

@section('form')
	<h3>Login</h3>
	<form method="POST">
        {{ csrf_field() }}
		<div class="form-group">
		 	<div class="input-group">
		   		<span class="input-group-addon"><i class="fa fa-user"></i></span>
		    	<input type="text" class="form-control" name="email" placeholder="Email">
		 	</div>
		</div>
		<div class="form-group">
		 	<div class="input-group">
		   		<span class="input-group-addon"><i class="fa fa-lock"></i></span>
		    	<input type="password" class="form-control" name="password" placeholder="Password">
		 	</div>
		</div>
		<div class="form-group">
		 	<a href="{{ URL::to('') }}" class="pull-right txt-white"> Forgot Password?</a>
		</div>
		<br>
		<div class="form-group">
		 	<label><input type="checkbox"> Remember me</label>
		</div>
		<div class="form-group">
		 	<button class="btn btn-lg btn-block btn-warning">Log In</button>
		</div>
		<div class="form-group">
		 	Not a hotelia member? <a href="{{ URL::to('register') }}" class="txt-white">Register Now</a>
		</div>
	</form>
@stop