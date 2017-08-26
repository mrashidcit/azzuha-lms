<?php

namespace App\Http\Controllers;

use App\students;
use App\User;
use Illuminate\Http\Request;


class studentController extends Controller
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
       $students = students :: get();
      return view('view-students', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $emailExist = user::where('email' , '=' , $request->email)->get();

        if(!empty($emailExist[0]['id'])){
          // echo '<script>alert("email is already exist");</script>';
          return view('add-student')->with('error', $request->email);
          // return view('add-student',['error' => '1' ]);
        }
        else{
          //add students
          $record = new students();
          $record->first_name = $request->first_name;
          $record->last_name = $request->last_name;
          $record->email = $request->email;
          $record->password = $request->password;
          $record->gender = $request->gender;
          if($request->file('image_file') != ''){
            $path = $request->file('image_file')->store('images/students');
            $record->file_path = $path;
            $request->image_file->move(public_path('images/students/'), $path);
          }
          $record->save();
          if($record->id){
            //add email pass
            $recordUser = new user();
            $recordUser->email = $record->email;
            $recordUser->name = $record->first_name.' '.$record->last_name;
            $recordUser->user_type = 3;
            $recordUser->password = bcrypt($record->password);
            $recordUser->save();
          }

          return redirect('view-students');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(students $students,$id)
    {
      $data= $students->find($id);
        return view('edit-student',['id' => $data->id, 'first_name' => $data->first_name, 'last_name' => $data->last_name, 'email' => $data->email, 'password' => $data->password, 'gender' => $data->gender]);
        // return view('edit-student',['id' => $data->id, 'first_name' => $data->first_name, 'last_name' => $data->last_name, 'email' => $data->email, 'password' => $data->password, 'gender' => $data->gender]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, students $students)
    {
      $record = $students->find($request->id);
      $record->first_name = $request->first_name;
      $record->last_name = $request->last_name;
      $record->email = $request->email;
      $record->password = $request->password;
      $record->gender = $request->gender;
      if($request->file('image_file') != ''){
        $path = $request->file('image_file')->store('images/students');
        // return $path;
        $record->file_path = $path;
        $request->image_file->move(public_path('images/students/'), $path);
      }
      $record->save();
      return redirect('view-students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(students $students, $id)
    {
      $data= $students->find($id);
      $data->delete();
      return back();
    }
}
