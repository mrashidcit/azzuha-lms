<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Semester extends Model
{

    protected $table = "semesters";

    protected  $fillable = [
        'name', 'year', 'status'
    ];

    public $timestamps = false;

    // Checking that is there any semester
    // already entered in the table called before Store
    public function checkDuplicateBeforeStore(Request $request){
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

        if ($count > 0){
            return false; // means no duplicates
        } 
        
        return true; // means record already exist
        

    }

    // Checking that is there any semester
    // already entered in the table called before Update
    public function isDuplicate(Request $request){
        // Checking that Particular Semester is Already
        // Exist or not
        $count = Semester::where('name', $request->name)
                    ->where('year', $request->year)->count();
        
        
        if ($count > 0){
            return true; // means session already exist
        } 
        
        return false; // no duplicate
        

    } // end isDuplicate()

    // Checking that is there any semester
    // already entered in the table called before Update
    public function checkDuplicateBeforeUpdate(Request $request, $id){
        // Checking that Particular Semester is Already
        // Exist or not
        $count = Semester::where('name', $request->name)
                    ->where('year', $request->year)->count();
        
        // If more than 0 then
        // return with duplicate error message 
        if ($count > 0){
            return redirect()->route('semesters.edit', ['id' => $id])
            ->with('duplicate', 'Semester Already Exist!');

        }

        if ($count > 0){
            return false; // means no duplicates
        } 
        
        return true; // means record already exist
        

    }

    // Store Semester Record in Table
    public function store(Request $request){

        $this->checkDuplicateBeforeStore($request);

        $semester = new Semester();

        $semester->name = $request->name;
        $semester->year = $request->year;
        $semester->status = $request->status;

        $semester->save();
       
    }

    // Update Existing Record in Table
    public function updateSemester(Request $request, $id ){

        $this->checkDuplicateBeforeUpdate($request, $id);
        
        $this->name = $request->name;
        $this->year = $request->year;
        $this->status = $request->status;
        $this->update();

    }


}
