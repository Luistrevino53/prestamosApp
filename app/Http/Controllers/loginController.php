<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class loginController extends Controller
{
    public function showLogin(){
    	if(Auth::check()){
    		return Redirect::to('/');
    	}
    	return view('login');
    }

    public function postLogin(Request $request){
    	$data=[
    		'user' => $request->input('email'),
    		'pass' => $request->input('password')
    	];

    	$user= DB::table('users')->where('email', 'like', $data['user'])->get();
    	foreach ($user as $x) {
    		if(strcmp($x->password, $data['pass'])){
    			return Redirect::intended('/');
    		}else{
    			return Redirect::back()->with('error_message', 'Datos Invalidos')->withInput();
    		}
    	}
    }

    public function logOut(){
    	Auth::logout();
    	return Redirect::to('login')->with('error_message', 'Se a cerrado sesion correctamente');
    }
}
