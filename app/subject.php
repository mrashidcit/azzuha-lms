<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{


    public function questions(){
        return $this->hasMany('App\Question');
    }


}
