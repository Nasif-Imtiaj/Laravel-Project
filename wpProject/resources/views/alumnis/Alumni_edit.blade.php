@extends('students.layout')
@section('content')
	  @include('main.header')
@section('content')
@if ($errors->any())
    <div  >
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<div>
	<form action="{{route('alumnis.update',$alumni->id) }}" method="POST">
 	 	@csrf
 	 	@method('PUT')
 	 	
		Alumni ID:<input type="text" name="student_id" placeholder="Student ID (XXX-XXX-XXX)" value="{{$alumni->student_id}}"> 
		<br>
		Alumni Name:<input type="text" name="name" placeholder="Full Name"
		 value="{{$alumni->name}}">
		<br>

		Alumni Batch: <input type="text" name="batch" placeholder="Batch" value="{{$alumni->batch}}">
	   <br>

	    Alumni Session:<input type="text" name="session" placeholder="Batch" value="{{$alumni->session}}">
	   <br>
        Alumni Status:<input type="text" name="status" placeholder="Batch" value="{{$alumni->status}}">
	   <br>


		<br> <br>
		<button type="submit" >Update</button>

		


	</form>

</div>