<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\course_outline;
class CourseOutlineController extends Controller
{

  public function __construct()
  {
    return $this->middleware('auth');
  }

  public function create()
  {
    return view('add-course');
  }

  public function store()
  {
    // return $data->name;
    $corseOutline = new course_outline();

    $corseOutline->name = request()->name;
    $corseOutline->description = request()->description;
    $corseOutline->start_date = request()->start_date;
    $corseOutline->end_date = request()->end_date;

    $path = request()->file('co_file')->store('courseOutline');
    $corseOutline->file_path = $path;
    request()->co_file->move(public_path('images\courseOutline'), $path);
    $corseOutline->save();
    return redirect('view-corse');
    // return $data->name;
  }

  public function destroy($id)
  {
      $corse= course_outline::find($id);
      $corse->delete();
      return back();
  }

  public function edit($id)
  {
    $corse= course_outline::find($id);
      return view('edit-course',['id' => $corse->id, 'name' => $corse->name, 'start_date' => $corse->start_date, 'end_date' => $corse->start_date, 'description' => $corse->description]);
  }

  public function update()
  {
    $corse= course_outline::find(request()->id);
    $corse->name = request()->name;
    if(request()->description != ''){
      $corse->description = request()->description;
    }
    if(request()->start_date != ''){
      $corse->start_date = request()->start_date;
    }
    if(request()->end_date != ''){
      $corse->end_date = request()->end_date;
    }

  if(request()->file('co_file') != ''){
    $path = request()->file('co_file')->store('courseOutline');
    $corse->file_path = $path;
    request()->co_file->move(public_path('images\courseOutline'), $path);
  }

  $corse->save();
  return redirect('view-corse');

  }


}
