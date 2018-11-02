<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    public function teacher(){
    	return $this->belongsTO('App\Teacher');
    }

    public function studentCertificates(){
    	return $this->hasMany('App\StudentCertificate', 'certificate_id', 'id');
    }
}
