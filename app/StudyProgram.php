<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class StudyProgram extends Model
{
    protected $table = 'study_programs';

    protected $fillable = [
        'name', 'pre-requisite',
        'description', 'duration', 'active'

    ];


    protected $timestamp = false;

    public function Store(Request $req){

        $this->name = $req->name;
        $this->pre_requisite  = $req->pre_requisite;
        $this->description  = $req->description;
        $this->duration  = $req->duration ;
        $this->action  = $req->active ;
        $this->save();

        

    }

    


}
