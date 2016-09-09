<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Customer;

use App\Http\Requests;

class CustomerController extends Controller
{
	public function index(){ 
		return back();
	}
    public function store(Request $request){
    	$user=Auth::user();
    	$customer=new Customer;
    	$customer->name=$request->input('name');
    	$customer->staff_id=1;
    	$customer->first_name=$request->first_name;
    	$customer->last_name=$request->last_name;
    	$customer->address=$request->address;
    	$customer->state=$request->state;
    	$customer->city=$request->city;
    	$customer->suburb=$request->suburb;
    	$customer->zip_code=$request->zip_code;
    	$customer->phone=$request->phone;
    	$customer->cel_phone=$request->cel_phone;
    	$customer->save();
    	return redirect()->route('customer.index')->with('success', 'Cliente Guardado');
    }
}
