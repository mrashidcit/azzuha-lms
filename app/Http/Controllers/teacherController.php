<?php

namespace App\Http\Controllers;

use App\teachers;
use Illuminate\Http\Request;
use App\User ;

class teacherController extends Controller
{

  public function __construct()
  {
    return $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $teachers = teachers :: get();
      return view('view-teachers', 
          ['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-teacher');
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
        return view('add-student')->with('error', $request->email);
      }
      else{

        $record = new teachers();
        $record->first_name = $request->first_name;
        $record->last_name = $request->last_name;
        $record->email = $request->email;
        $record->password = $request->password;
        $record->gender = $request->gender;
        if($request->file('image_file') != ''){
          $path = $request->file('image_file')->store('images/teachers');
          
          // return $path;
          $record->file_path = $path;
          $request->image_file->move(public_path('images/teachers/'), $path);
        }
        $record->save();

        if($record->id){
          $recordUser = new user();
          $recordUser->email = $record->email;
          $recordUser->name = $record->first_name.' '.$record->last_name;
          $recordUser->user_type = 2;
          $recordUser->password = bcrypt($record->password);
          $recordUser->save();
        }

        return redirect('view-teachers');
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function show(teachers $teachers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function edit(teachers $teachers,$id)
    {
      $data= $teachers->find($id);
        return view('edit-teacher',['id' => $data->id, 'first_name' => $data->first_name, 'last_name' => $data->last_name, 'email' => $data->email, 'password' => $data->password, 'gender' => $data->gender]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teachers $teachers)
    {
      $record = $teachers->find($request->id);
      $record->first_name = $request->first_name;
      $record->last_name = $request->last_name;
      $record->email = $request->email;
      $record->password = $request->password;
      $record->gender = $request->gender;
      if($request->file('image_file') != ''){
        $path = $request->file('image_file')->store('images/teachers');

        // return $path;
        $record->file_path = $path;
        $request->image_file->move('images/teachers/', $path);
      }
      $record->save();
      return redirect('view-teachers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function destroy(teachers $teachers, $id)
    {
      $data= $teachers->find($id);
      $data->delete();
      return back();
    }
}
