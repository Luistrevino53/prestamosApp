<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

   protected $table='users';
   protected $fillable=['name', 'first_name', 'last_name', 'address', 'state', 'city', 'suburb', 'zip_code', 'phone', 'cel_phone', 'email', 'password', 'type', 'zone_id'];

   public function zone(){
        return $this->hasOne('App\Zones');
   }
   public function comission(){
        return $this->hasMany('App\Comission');
   }
   public function customers(){
        return $this->hasMany('App\Customer');
   }
}
