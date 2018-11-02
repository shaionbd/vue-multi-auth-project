<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

	public function category(){
		return $this->hasOne('App\Category', 'id', 'category_id');
	}

	public function subcategory(){
		return $this->hasOne('App\SubCategory', 'id', 'subcategory_id');
	}

	public function lessons(){
		return $this->hasMany('App\Lesson', 'course_id', 'id');
	}

	public function certificate(){
        return $this->hasOne('App\Certificate', 'course_id', 'id');
    }

    public function enrollCourses(){
        return $this->hasMany('App\StudentEnrollCourse', 'course_id', 'id');
    }

    public function saveCourses(){
        return $this->hasMany('App\StudentSaveCourse', 'course_id', 'id');
    }

    public function community(){
        return $this->hasOne('App\Community', 'course_id', 'id');
    }

    public function teacher(){
    	return $this->belongsTO('App\Teacher');
    }
}
