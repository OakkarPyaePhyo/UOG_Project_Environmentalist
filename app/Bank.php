<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    public function accounts(){
    	return $this -> belongsTo("App/Account");
    }
}
