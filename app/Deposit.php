<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
	protected $table='deposits';
    protected $fillable=[];

    public function bill(){
    	return $this->belongdTo('App\Bill');
    }
}
