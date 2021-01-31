<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Alumni;
use App\Models\admin;

class StudentController extends Controller
{
    // Other files
    public function index(){
		$students = Student::latest()->paginate(10);
    $alumnis = Alumni::latest()->paginate(10);
		return view('students.index', compact('students'));
	}

    public function members(){
         
        return view('students.members');
    }
     public function register(){
         
        return view('students.register');
    }

    //main
    public function slider(){
         
        return view('main.slider');
    }
    public function adminpanel(Request $request){

        return view('main.adminpanel');
    }
   public function header(){
         
        return view('main.header');
    }
  public function gallery(){
         
        return view('main.gallery');
    }
     public function judge(){
         
        return view('main.judge');
    }
    public function guide(){
         
        return view('main.guide');
    }
    public function admin(){
         
        return view('main.admin');
    }
    public function adminform(){
         
        return redirect()->route('main.adminpanel')->with('success', 'Profile Created Successflly!');
    }
    
   


    
    
    //Student 

 public function clubmembers(){
     $students = Student::latest()->paginate(200);
       return view('students.clubmembers', compact('students'));
    }

    public function EUmemberslist(){
         $students = Student::latest()->paginate(200);
       return view('students.EUmemberslist', compact('students'));
    }
     public function create(){
        return view('students.create');
    }

     public function store(Request $request){
    	$request->validate([
    		'name'=>'required',
    		'student_id' => 'required',
    		'batch'=>'required'
    	]);

    	Student::create($request->all());

    	return redirect()->route('students.index')->with('success', 'Profile Created Successflly!');
    }
    
      public function edit(Student $student){
 		return view('students.edit', compact('student'));
 	}


 	public function update(Request $request, Student $student){
 		$request->validate([
    		'name'=>'required',
    		'student_id' => 'required',
    		'batch'=>'required'
    	]);

 		
    	$student->update($request->all());

    	return redirect()->route('students.index')->with('success', 'Profile Updated Successflly!');
 	}
 	public function destroy(Student $student){

 		$student->delete();
 		return redirect()->route('students.index')->with('success', 'Profile Deleted Successflly!');
 	}


 




}
