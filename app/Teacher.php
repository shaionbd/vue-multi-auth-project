<?php

namespace App;

use App\Notifications\TeacherResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Tymon\JWTAuth\Contracts\JWTSubject;

class Teacher extends Authenticatable implements JWTSubject
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
        $this->notify(new TeacherResetPassword($token));
    }

    public function languages(){
        return $this->hasMany('App\TeacherLanguage', 'teacher_id', 'id');
    }

    public function socialMedia(){
        return $this->hasOne('App\TeacherSocialMedia', 'teacher_id', 'id');
    }

    public function notifications(){
        return $this->hasMany('App\TeacherNotification', 'teacher_id', 'id');
    }

    public function referrals(){
        return $this->hasMany('App\TeacherReferral', 'teacher_id', 'id');
    }

    public function courses(){
        return $this->hasMany('App\Course', 'assign_teacher', 'id');
    }

    public function certificates(){
        return $this->hasMany('App\Certificate', 'teacher_id', 'id');
    }

    public function supports(){
        return $this->hasMany('App\Support', 'teacher_id', 'id');
    }

    public function setting(){
        return $this->hasOne('App\TeacherSetting', 'teacher_id', 'id');
    }
}
