<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    public function qa(){
    	return $this->hasMany('App\CommunityQA', 'community_id', 'id');
    }
}
