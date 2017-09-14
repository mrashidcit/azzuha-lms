<?php

namespace App\Http\Controllers;

use App\StudyProgram;
use Illuminate\Http\Request;
use App\Http\Requests\StudyProgram\StoreStudyProgram;

// use App\StudyProgram;

class StudyProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studyPrograms = StudyProgram::all();

        return view('study-program.index', 
                compact('studyPrograms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('study-program.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudyProgram $request)
    {
        $studyProgram = new StudyProgram;

        // dd('in store');

        $studyProgram->store($request);

        return redirect()
            ->route('studyprograms.create')
            ->with('success', 'Successfully Saved!');

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
        $studyProgram = StudyProgram::find($id);

        

        return view('study-program.edit', compact('studyProgram'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStudyProgram $request, $id)
    {
        // dd('in update');
        $studyProgram = StudyProgram::find($id);

        $studyProgram->updateRecord($request);

        return back()
            ->with('success', 'Successfully Updated!');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studyProgram = StudyProgram::find($id);
        $studyProgram->delete();
        return back()
            ->with('success', 'Successfully Deleted!');
    }
}
