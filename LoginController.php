<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

	public function login(Request $request)
	{
		$email = $request->email;
		$password = $request->password;
		$db = DB::table('users')->where('email', $email)->first();
		if($db->email == $email && $db->password == $password){
			$request->session()->put('user_id', $db->id);
			return redirect('dashboard');
		}else{
			Session::flash ( 'message', "Invalid Credentials , Please try again." );
            return Redirect::back ();
		}	
	}
	public function logout(Request $request)
	{
		$request->session()->forget('user_id');
		Session::flash ( 'message', "Logout Successful." );
        
		return redirect('/');
	}
}