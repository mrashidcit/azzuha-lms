<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{

    protected $table = 'subjects';

    protected $fillable = [
        'name', 'description'
    ];




    public function questions(){
        return $this->hasMany('App\teacher_subjects', 't_id');
    }

    


}
