<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comission extends Model
{	
	protected $table='comissions';
    protected $fillable=[];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
