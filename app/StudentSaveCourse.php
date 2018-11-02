<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentSaveCourse extends Model
{
    public function student(){
    	return $this->belongsTO('App\Student');
    }
}
