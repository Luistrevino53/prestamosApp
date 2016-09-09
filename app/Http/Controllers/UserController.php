<?php
session_start();
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\Http\Requests;

class UserController extends Controller
{	//login de usuarios
    public function showStaff(){
    	$users=User::all()->where('type', 'like', 'Staff');
    	return response()->json($users);
    }

    public function showSupervisor(){
    	$users=User::all()->where('type', 'like', 'Supervisor');
    	return response()->json($users);
    }

    public function index(){
    	return view('home');
    }
}
