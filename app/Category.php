<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function course(){
    	return $this->belongsTO('App\Course');
    }

    public function courses(){
    	return $this->hasMany('App\Course', 'category_id', 'id');
    }

    public function subcategories(){
    	return $this->hasMany('App\SubCategory', 'category_id', 'id');
    }
}
