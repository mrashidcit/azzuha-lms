<?php

namespace App\Http\Controllers;

use App\Semester;
use Illuminate\Http\Request;
use App\Http\Requests\Semester\StoreSemester;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semesters = Semester::all();

        // dd($semesters->all());
        return view('admin.semester.index',
                compact('semesters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.semester.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSemester $request)
    {
        $semester = new Semester;
        
        $semester->store($request); 

        return redirect()->route('semesters.create')
            ->with('status', 'Successfully Saved!');

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
        $semester = Semester::find($id);

        return view('admin.semester.edit', 
            compact('semester'));
        // return "Edit the Semeseter";
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
        $semester = Semester::find($id);

        $status = $semester->isDuplicateBeforeUpdate($request);

        // dd($status);
        
        // Checking Duplication
        // if status = false then this condition will be true
        if ($status){

            return redirect()
                ->route('semesters.edit', ['id' => $id])
                ->with('duplicate' , "Semester Already Exist!");

        }

        // Now Updating Semester Info.
        $semester->updateSemester($request, $id);        
        

        $success = 'Successfully Updated';

        // dd($semester);
        
        return redirect()
                ->route('semesters.edit', ['id' => $id])
                ->with('success' , $success);
             
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        
        $semester = Semester::find($id);
        $semester->delete();
        return back()
            ->with('success', 'Successfully Deleted!');
        
    }
}
