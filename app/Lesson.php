<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function course(){
    	return $this->belongsTO('App\Course');
    }

    public function attachments(){
    	return $this->hasMany('App\LessonAttachment', 'lesson_id', 'id');
    }

    public function completeByStudents(){
    	return $this->hasMany('App\StudentCompleteLesson', 'lesson_id', 'id');
    }
}
