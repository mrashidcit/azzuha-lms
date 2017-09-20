<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    //

    public function subjects(){
        return $this->belongsToMany('App\subject', 'student_subjects', 'subject_id', 'student_id');

    }
}
