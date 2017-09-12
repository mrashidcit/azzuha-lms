<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{

    protected $table = "semesters";

    protected  $fillable = [
        'name', 'year', 'status'
    ];

    public $timestamps = false;


}
