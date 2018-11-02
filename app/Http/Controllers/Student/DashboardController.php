<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Config;
use JWTAuth;
use JWTAuthException;

use App\Student;
use App\StudentEnrollCourse;
use App\StudentSaveCourse;

class DashboardController extends Controller
{

	/**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
 
        Config::set('jwt.user', "App\Student");
        Config::set('auth.providers.users.model', \App\Student::class);
    }

    public function getCounter(){

    	$counter = [];
    	$counter['active_courses'] = StudentEnrollCourse::where('student_id', auth('api')->user()->id)->where('is_complete', 0)->count();

    	$counter['saved_courses'] = StudentSaveCourse::where('student_id', auth('api')->user()->id)->where('is_saved', 1)->count();

    	$counter['complete_courses'] = StudentEnrollCourse::where('student_id', auth('api')->user()->id)->where('is_complete', 1)->count();

    	return response()->json([
    		'counter' => $counter
    	]);
    }
}
