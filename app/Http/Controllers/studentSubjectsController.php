<?php

namespace App\Http\Controllers;

use App\studentSubjects;
use Illuminate\Http\Request;
use App\students;
use App\subject;
use App\User;
class studentSubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
      $students = students :: get();
      return view('assign-student-subject', ['students' => $students, 'subjects' => $subjects, 'student_id' => $id]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $record = new studentSubjects();
      $record->st_id = $request->st_id;
      $record->s_id = $request->s_id;
      $record->save();
      return redirect('view-students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\studentSubjects  $studentSubjects
     * @return \Illuminate\Http\Response
     */
    public function show(studentSubjects $studentSubjects, $st_id)
    {
      $data = \DB::table('student_subjects')
          ->join('students', 'student_subjects.st_id', '=', 'students.id')
          ->join('subjects', 'student_subjects.s_id', '=', 'subjects.id')
          ->select('student_subjects.*', 'students.first_name','students.last_name', 'subjects.name')
          ->where('students.id', $st_id)
          ->get();
      // return $data;
      return view('view-student-subjects', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\studentSubjects  $studentSubjects
     * @return \Illuminate\Http\Response
     */
    public function edit(studentSubjects $studentSubjects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\studentSubjects  $studentSubjects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, studentSubjects $studentSubjects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\studentSubjects  $studentSubjects
     * @return \Illuminate\Http\Response
     */
    public function destroy(studentSubjects $studentSubjects, $id)
    {
      $record = $studentSubjects->find($id);
      $record->delete();
      return back();
    }


    public function custom_data()
    {
      $record = new user();
      $record->email = 'shahzad@gmail.com';
      $record->name = 'shahzad';
      $record->type = 2;
      $record->password = bcrypt('123123');
      $record->save();
      return $record;

    }
}
