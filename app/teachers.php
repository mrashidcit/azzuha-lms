<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    

    // return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');

    public function subjects(){

        return $this->belongsToMany('App\subject', 'teacher_subjects', 't_id', 's_id');
    }
}
