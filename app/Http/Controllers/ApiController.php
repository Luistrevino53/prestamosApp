<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class ApiController extends Controller
{
    public function getAllCustomers(){
    	$customers=DB::table('customers')
    						->join('users', 'customers.staff_id', '=', 'users.id')
    						//->join('bills', 'bills.customer_id', '=', 'customers.id')
    						->select('customers.id','customers.name as cname', 'customers.first_name as capellidop', 'customers.last_name as capellidom', 'users.name as uname', 'users.first_name as uapellidop', 'users.last_name as uapellidom', 'customers.address', 'customers.city', 'customers.suburb', 'customers.zip_code', 'customers.state', 'customers.completed_bill')
    						->get();
    	foreach ($customers as $x) {
    		$x->bill=$this->bills($x->id, $x->completed_bill);
    	}
    	return response()->json($customers);
    }
    public function getDeposits($id){
    	$bill=DB::table('deposits')
    				->where('deposits.bill_id', '=', $id)
    				->get();
    	return response()->json($bill);
    }	
    /*public function customer($id){
    	$customer=DB::('customers')
    				->join('users', 'customers.staff_id', '=', 'users.id')
    				->join('endorsments', 'endorsments.customer_id', '=', 'customers.id')
    				->join('bills', 'bills.customer_id', '=', 'customers.id')
    				->select('customers.name as cname', 'customers.first_name as capellidop', 'customers.last_name as capellidop','customers.address as caddres', 'customers.city as ccity', 'customers.suburb as csuburb', 'customers.zip_code as czip_code', 'customers.state as cstate','users.name as uname', 'users.first_name as uapellidop', 'users.last_name as uapellidop', 'bills.amount_temp', 'bills.amount', 'endorsments.name as ename', 'endorsments.first_name as eapellidop', 'endorsments.last_name as eapellidop','endorsments.address as eaddres', 'endorsments.city as ecity', 'endorsments.suburb as esuburb', 'endorsments.zip_code as ezip_code', 'endorsments.state as estate')
    				->where('customers.id', '=', $id)
    				->get();
    	return response()->json($customer);
    }*/
    public function bills($id, $c){
	if($c==1){
		$bill=DB::table('bills')
					->select('start_date', 'amount_temp')
					->where('id', $id)
					->orderBy('id', 'asc')
					->limit(1)
					->get();
		return $bill;

	}else{
		return false;
	}
}
}

