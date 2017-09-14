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


    public $timestamps = false;

    public function Store(Request $req){

        $this->name = $req->name;
        $this->pre_requisite  = $req->pre_requisite;
        $this->description  = $req->description;
        $this->duration  = $req->duration ;
        // $this->action  = $req->active ;
        $this->save();


    }

    public function UpdateRecord(Request $req){

        $this->name = $req->name;
        $this->pre_requisite  = $req->pre_requisite;
        $this->description  = $req->description;
        $this->duration  = $req->duration ;
        // $this->action  = $req->active ;
        $this->update();

    }

    


}
