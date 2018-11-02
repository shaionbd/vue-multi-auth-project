<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function course(){
    	return $this->belongsTO('App\Course');
    }

    public function category(){
    	return $this->belongsTO('App\Category');
    }

    public function courses(){
    	return $this->hasMany('App\Course', 'category_id', 'id');
    }
}
