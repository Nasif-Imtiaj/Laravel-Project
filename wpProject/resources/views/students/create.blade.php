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

<div > 
	<style type="text/css">
		.cr_text{
			color: white;
		}
	</style>

	<br>
		<br><center><h2 class="cr_text">Please fill up the following form to register as a Member</h2></center>
		
		<br>
		<br>
		<br>
	<form action="{{route('students.store')}}" method="POST">
 	 	@csrf
 	
 	    <label for="id" style="margin-left: 449px" class="cr_text">Student ID:</label>
		 <input type="text" name="student_id" placeholder="(XXX-XXX-XXX)"> 
		
		<br>
		 <label for="id" style="margin-left: 450px" class="cr_text">Full Name:</label>
		 <input type="text" name="name" placeholder="Full Name">
		
		<br>
          <label for="id" style="margin-left: 481px" class="cr_text">Batch: </label>
		  <input type="text" name="batch" placeholder="Batch">
        
		<br>
           <label for="id" style="margin-left: 466px" class="cr_text">Position:</label>
		  <input type="text" name="position" placeholder="Position">
        
		<br>
		<br>
		<br>
		<br>
		
		<button type="submit" style="margin-left: 580px">Register</button>
		
    
	</form>

	<br>
		
		
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>





</div>
@section('content')
	  @include('main.creator') 