<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCompleteLesson extends Model
{
    public function student(){
    	return $this->belongsTO('App\Student');
    }

    public function lesson(){
    	return $this->belongsTO('App\Lesson');
    }
}
