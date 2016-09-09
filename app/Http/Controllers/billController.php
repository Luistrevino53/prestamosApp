<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use DB;
use App\Http\Requests;

class billController extends Controller
{
	public function index(){ 
		return back();
	}

    public function store(Request $request){
    	$bill= new Bill;
    	$bill->customer_id=$request->input('id');
    	$bill->amount=$request->input('amount');
    	$bill->amount_temp=$request->input('amount');
    	$bill->start_date= date('Y/m/d H:i:s');
    	$bill->completed=0;
    	$bill->notes=$request->input('note');
    	$bill->save();
    	DB::table('customers')
    			->where('id', $request->input('id'))
    			->update(['completed_bill' => 1]);
    	return redirect()->route('customer.index')->with('success', 'Cliente Guardado');
    }
}
