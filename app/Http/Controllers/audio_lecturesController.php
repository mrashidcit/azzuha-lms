<?php

namespace App\Http\Controllers;

use App\audio_lectures;
use Illuminate\Http\Request;

class audio_lecturesController extends Controller
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
    public function create()
    {
        return view('add-audio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // return $request->name;
      $audio = new audio_lectures();
      $audio->name = $request->name;
      $audio->description = $request->description;
      $audio->date = $request->date;

      $path = $request->file('audio_file')->store('audio');
      $audio->file_path = $path;
      $request->audio_file->move(public_path('audio'), $path);
      $audio->save();
      return redirect('view-audio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\audio_lectures  $audio_lectures
     * @return \Illuminate\Http\Response
     */
    public function show(audio_lectures $audio_lectures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\audio_lectures  $audio_lectures
     * @return \Illuminate\Http\Response
     */
    public function edit(audio_lectures $audio_lectures,$id)
    {
      // return $audio_lectures;
      // return $id;
      $corse= audio_lectures::find($id);
        return view('edit-audio',['id' => $corse->id, 'name' => $corse->name, 'description' => $corse->description]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\audio_lectures  $audio_lectures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, audio_lectures $audio_lectures)
    {
      // return $request->id;
      $corse= audio_lectures::find($request->id);
      $corse->name = $request->name;
      $corse->description = $request->description;

      // if(request()->start_date != ''){
      //   $corse->start_date = request()->start_date;
      // }
      if($request->date != ''){
        $corse->date = $request->date;
      }

    if($request->file('audio_file') != ''){
      $path = $request->file('audio_file')->store('audio');
      $corse->file_path = $path;
      $request->audio_file->move(public_path('audio/'), $path);
    }
// return $corse;
    $corse->save();
    return redirect('view-audio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\audio_lectures  $audio_lectures
     * @return \Illuminate\Http\Response
     */
    public function destroy(audio_lectures $audio_lectures,$id)
    {
      $corse= audio_lectures::find($id);
      $corse->delete();
      return back();
    }
}
