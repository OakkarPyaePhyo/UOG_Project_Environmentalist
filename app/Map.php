<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    public function events(){
    	return $this -> hasMany("App/Event");
    }
}
