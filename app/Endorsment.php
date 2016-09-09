<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endorsment extends Model
{
	protected $table='endorsments';
    protected $fillable=[];

    public function customer(){
    	return $this->belongsTo('App\Customer');
    }
    
}
