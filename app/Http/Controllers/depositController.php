<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deposit;
use DB;
use App\Http\Requests;

class depositController extends Controller
{
    public function index(){ 
		return back();
	}

//falta ifs
	public function store(Request $request){
		$id=$this->getIdBill($request->input('id'));
		$ids;
		$temp;
		$completed;
		foreach ($id as $x) {
			$ids=$x->id;
			$temp=$x->amount_temp;
			$completed=$x->completed;
		}
		if($completed==0){
			if($temp!=0){
				$deposit= new Deposit;
				$deposit->bill_id=$ids;
				$deposit->amount=$request->input('amount');
				$deposit->start_date= date('Y/m/d H:i:s');
				$deposit->notes = $request->input('note');
				$deposit->save();
				DB::table('bills')
						->where('id', $ids)
						->update(['amount_temp' => ($temp-$request->input('amount'))]);
				return redirect()->route('customer.index')->with('success', 'Cliente Guardado');
			}else{
				DB::table('bills')
						->where('id', $ids)
						->update(['completed'=>1]);
				return redirect()->route('customer.index')->with('success', 'Cliente Guardado');
			}
		}else{
			return redirect()->route('customer.index')->with('success', 'Cliente Guardado');
		}
		

	}
	function getIdBill($id){
		$bill=DB::table('bills')
					->select('id', 'amount_temp', 'completed')
					->where('id', $id)
					->where('completed', 0)
					->orderBy('id', 'asc')
					->limit(1)
					->get();
		return $bill;
	}

	function getDeposits(Request $request){
		$id=$request->input('id');
		$ibill;
		$bill=DB::table('bills')
					->where('customer_id', $id)
					->select('id')
					->where('completed', 0)
					->orderBy('id', 'asc')
					->limit(1)
					->get();
		foreach ($bill as $x) {
			$ibill=$x->id;
		}
		$deposits=DB::table('deposits')
						->where('bill_id', $ibill)
						->select('amount', 'start_date', 'notes')
						->get();
		return response()->json($deposits);
	}
}
