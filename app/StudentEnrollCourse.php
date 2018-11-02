<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentEnrollCourse extends Model
{
    public function student(){
    	return $this->belongsTO('App\Student');
    }
}
