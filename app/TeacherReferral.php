<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherReferral extends Model
{
    public function teacher(){
    	return $this->belongsTO('App\Teacher');
    }
}
