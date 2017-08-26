<?php

namespace App\Http\Controllers;

use App\subject;
use Illuminate\Http\Request;

class subjectController extends Controller
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
    //
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('add-subject');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $audio = new subject();
    $audio->name = $request->name;
    $audio->description = $request->description;
    $audio->save();
    return redirect('view-subjects');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\subject  $subject
  * @return \Illuminate\Http\Response
  */
  public function show(subject $subject)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\subject  $subject
  * @return \Illuminate\Http\Response
  */
  public function edit(subject $subject,$id)
  {
    $corse= $subject->find($id);
    // return $corse;
    return view('edit-subject',['id' => $corse->id, 'name' => $corse->name, 'description' => $corse->description]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\subject  $subject
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, subject $subject)
  {
    $record = $subject->find($request->id);
    $record->name = $request->name;
    $record->description = $request->description;
    $record->save();
    return redirect('view-subjects');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\subject  $subject
  * @return \Illuminate\Http\Response
  */
  public function destroy(subject $subject,$id)
  {
    $record = $subject->find($id);
    $record->delete();
    return back();
  }
}
