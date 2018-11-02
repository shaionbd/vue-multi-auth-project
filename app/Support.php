<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    public function teacher(){
    	return $this->belongsTO('App\Teacher');
    }

    public function student(){
    	return $this->belongsTO('App\Student');
    }
}
