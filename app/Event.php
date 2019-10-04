<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function maps(){
    	return $this -> belongsTo("App/Map");
    }
}
