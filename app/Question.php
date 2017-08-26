<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Question extends Model
{
    protected $table = 'questions';

    protected $fillable = [
        'subject_id', 'question', 'a', 'b', 'c', 'd', 'correct_option'
    ];

    public function subject(){
        return $this->belongsTo('App\subject');
    }



    public function store(Request $req){

        //dd($req->all());

        // Storing Questions into Table
        $question = Question::create([
            'subject_id' => $req->subject_id ,
            'question' => $req->question ,
            'a' => $req->a ,
            'b' => $req->b ,
            'c' => $req->c ,
            'd' => $req->d ,
            'correct_option' => $req->correct_option ,

        ]);

    }
}
