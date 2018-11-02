<?php

namespace App;

use App\Notifications\StudentResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Tymon\JWTAuth\Contracts\JWTSubject;

class Student extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new StudentResetPassword($token));
    }

    public function languages(){
        return $this->hasMany('App\StudentLanguage', 'teacher_id', 'id');
    }

    public function socialMedia(){
        return $this->hasOne('App\StudentSocialMedia', 'teacher_id', 'id');
    }

    public function notifications(){
        return $this->hasMany('App\StudentNotification', 'teacher_id', 'id');
    }

    public function referrals(){
        return $this->hasMany('App\StudentReferral', 'teacher_id', 'id');
    }

    public function supports(){
        return $this->hasMany('App\Support', 'student_id', 'id');
    }

    public function setting(){
        return $this->hasOne('App\StudentSetting', 'student_id', 'id');
    }

    public function certificate(){
        return $this->hasMany('App\StudentCertificate', 'student_id', 'id');
    }

    public function enrollCourses(){
        return $this->hasMany('App\StudentEnrollCourse', 'student_id', 'id');
    }

    public function saveCourses(){
        return $this->hasMany('App\StudentSaveCourse', 'student_id', 'id');
    }

    public function completeLessons(){
        return $this->hasMany('App\StudentCompleteLesson', 'student_id', 'id');
    }

    public function communityQA(){
        return $this->hasMany('App\CommunityQA', 'student_id', 'id');
    }
}
