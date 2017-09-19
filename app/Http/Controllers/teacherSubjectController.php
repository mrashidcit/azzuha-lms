<?php

namespace App\Http\Controllers;

use App\teacher_subjects;
use Illuminate\Http\Request;
use App\subject;
use App\teachers;


class teacherSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
       return $this->middleware('auth');
     }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      $subjects = subject :: get();
      $teachers = teachers :: get();
      return view('assign-subject', ['teachers' => $teachers, 'subjects' => $subjects, 'teacher_id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $record = new teacher_subjects();
        $record->t_id = $request->t_id;
        $record->s_id = $request->s_id;
        $record->save();
        return redirect('view-teachers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\teacher_subjects  $teacher_subjects
     * @return \Illuminate\Http\Response
     */
    public function show(teacher_subjects $teacher_subjects, $t_id)
    {

        
        $data = \DB::table('teacher_subjects')
            ->join('teachers', 'teacher_subjects.t_id', '=', 'teachers.id')
            ->join('subjects', 'teacher_subjects.s_id', '=', 'subjects.id')
            ->select('teacher_subjects.*', 'teachers.first_name','teachers.last_name', 'subjects.name')
            ->where('teachers.id', $t_id)
            ->get();
        // return $data;
        return view('view-teacher-subjects', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\teacher_subjects  $teacher_subjects
     * @return \Illuminate\Http\Response
     */
    public function edit(teacher_subjects $teacher_subjects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\teacher_subjects  $teacher_subjects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teacher_subjects $teacher_subjects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\teacher_subjects  $teacher_subjects
     * @return \Illuminate\Http\Response
     */
    public function destroy(teacher_subjects $teacher_subjects, $id)
    {
        $record = $teacher_subjects->find($id);
        $record->delete();
        return back();
    }
}
