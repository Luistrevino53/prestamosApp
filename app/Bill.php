<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{	
	protected $table='bills';
    protected $fillable =[];

    public function customer(){
    	return $this->belongsTo('App\Customer');
    }
    public function deposits(){
    	return $this->hasMany('App\Deposit');
    }
    
}
