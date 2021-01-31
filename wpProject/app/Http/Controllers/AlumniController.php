<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Alumni;
class AlumniController extends Controller
{


    public function Alumni_list(){
       $alumnis = Alumni::latest()->paginate(200);
       return view('alumnis.Alumni_list', compact('alumnis'));
    }

     public function Alumni_edit_update_list(){
         $alumnis = Alumni::latest()->paginate(200);
       return view('alumnis.Alumni_edit_update_list', compact('alumnis'));
    }
    
	 public function Alumni_create(){

    	return view('alumnis.Alumni_create');
    }

    public function store(Request $request){
      $request->validate([
        'name'=>'required',
        'student_id' => 'required',
        'batch'=>'required',
        'session'=>'required',
        'status'=>'required'
      ]);

      Alumni::create($request->all());

      return redirect()->route('students.index')->with('success', 'Profile Created Successflly!');
    }

   

    public function edit(Alumni $alumni){
 		return view('alumnis.Alumni_edit', compact('alumni'));
 	}


 	public function update(Request $request, Alumni $alumni){
 		$request->validate([
    		'name'=>'required',
        'student_id' => 'required',
        'batch'=>'required',
        'session'=>'required',
        'status'=>'required'
    	]);

 		
    	$alumni->update($request->all());

    	return redirect()->route('students.index')->with('success', 'Profile Updated Successflly!');
 	}

 	public function destroy(Alumni $alumni){

 		$alumni->delete();
 		return redirect()->route('students.index')->with('success', 'Profile Deleted Successflly!');
 	}
}
