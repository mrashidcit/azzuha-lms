<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class StudentSubject extends Model
{
    protected $table = 'student_subjects';

    protected $fillable = [
        'student_id', 'subject_id'
    ];


    public function store(Request $request){

        $this->student_id = $request->student_id;
        $this->subject_id = $request->subject_id;

        $this->save();



    }

    
}
