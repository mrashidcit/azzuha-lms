<?php

namespace App\Http\Controllers;

use App\Question;
use App\subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = subject::all();
        $questions = Question::paginate(3);
        $subject_id = 1; // selecteing first subject in menu by default

        return view('question.index', [
            'subjects' => $subjects,
            'subject_id' => $subject_id,
            //'questions' => $questions
        ]);
    }

    public function questionsListBySubjectId(Request $req){

        $subjects = subject::all();

        $questions = Question::
            where('subject_id', '=', $req->subject_id)
            ->get();

        return view('question.index', [
            'subjects' => $subjects,
            'questions' => $questions,
            'subject_id' => $req->subject_id // selected subject id,

        ]);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = subject::all();

        return view('question.create', ['subjects' => $subjects]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $question = $request->all();

//        dd($question);




        $question = new Question();

        $question->store($request);

        return response('Successfully Saved!');




        return redirect()->route('questions.create')->with('status', 'Successfully Saved!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
