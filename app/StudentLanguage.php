<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentLanguage extends Model
{
    public function student(){
    	return $this->belongsTO('App\Student');
    }
}
