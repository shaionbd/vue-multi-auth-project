<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommunityQA extends Model
{
    public function student(){
    	return $this->belongsTO('App\Student');
    }

    public function community(){
    	return $this->belongsTO('App\Community');
    }
}
