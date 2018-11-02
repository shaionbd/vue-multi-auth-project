<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCertificate extends Model
{
    public function student(){
    	return $this->belongsTO('App\Student');
    }

    public function certificate(){
    	return $this->belongsTO('App\Certificate');
    }
}
