<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    

    public function subjects(){

        return $this->belongsToMany('App\teacher_subjects', 't_id');
    }
}
