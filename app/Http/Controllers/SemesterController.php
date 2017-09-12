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
        
        // Checking that Particular Semester is Already
        // Exist or not
        $count = Semester::where('name', $request->name)
                    ->where('year', $request->year)->count();
        
        // If more than 0 then
        // return with duplicate error message 
        if ($count > 0){
            return redirect()->route('semesters.create')
            ->with('duplicate', 'Semester Already Exist in This Year!');

        }

        // dd($semester);

        $semester = new Semester();

        $semester->name = $request->name;
        $semester->year = $request->year;
        $semester->status = $request->status;

        $semester->save();

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
