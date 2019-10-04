<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function banks(){
    	return $this -> hasOne("App/Bank");
    }
}
