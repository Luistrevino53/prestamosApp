<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{	
	protected $table='customers';
    protected $fillable=['name','staff_id','first_name', 'last_name', 'address', 'state', 'city', 'suburb', 'zip_code', 'phone', 'cel_phone'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function bills(){
    	return $this->hasMany('App\Bill');
    }
    public function endorsments(){
    	return $this->hasMany('App\Endorsment');
    }
    
}
