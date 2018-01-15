<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
	public function login(){
		return view('auth.login');
	}

	public function doLogin(Request $request){
		$afterlogin = true;
	    $credentials = [
	        'email' => $request['email'],
	        'password' => $request['password'],
	    ];

        Auth::attempt($credentials);
        if (Auth::check()) {
            return redirect()->action('HomeController@index');
        }else{
            $error = "Wrong email or password!";
            return view('auth.login')->with('error', $error);
        }

        return redirect()->action('HomeController@index');
	}

	public function logout(){
        Auth::logout();
        return redirect('/');
	}

	public function register(){
		return view('auth.register');
	}

	public function doRegister(Request $request){		
        $user = User::orderBy('created_at', 'desc')->get();

        if($user != null){
            // $lastid = (int) substr($user->id, -3);
            $lastid = count($user);
        }else{
            $lastid = 0;
        }
        $newid = $lastid + 1;
        $newid = sprintf('%03u', $newid);
        $id = 'US' . $newid;

        $content = new User();
        
        $content->id = $id;
        $content->role = 'user';
        $content->nama = $request->get('nama');
        $content->telepon = $request->get('telepon');
        $content->email = $request->get('email');
        $content->password = bcrypt($request->get('password'));

        $content->save();

		return view('auth.register');
	}
}
