<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherLanguage extends Model
{
    public function teacher(){
    	return $this->belongsTO('App\Teacher');
    }
}
