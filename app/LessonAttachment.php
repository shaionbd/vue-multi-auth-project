<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LessonAttachment extends Model
{
    public function lesson(){
    	return $this->belongsTO('App\Lesson');
    }
}
