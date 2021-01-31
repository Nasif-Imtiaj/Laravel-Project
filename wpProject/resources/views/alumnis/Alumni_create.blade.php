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
		.alu_text{
			color: white;
		}
	</style>
	<br>
		<br><center><h2 class="alu_text">Please fill up the following form to register as an Alumni</h2></center>
		<br>
		<br>
		<br>
		<br>
	<form action="{{route('alumnis.store')}}" method="POST">
 	 	@csrf
 	 	<label for="id" style="margin-left: 449px" class="alu_text">Student ID:</label>
		 <input type="text" name="student_id" placeholder="(XXX-XXX-XXX)"> 
		
		<br>
		 <label for="id" style="margin-left: 450px" class="alu_text">Full Name:</label>
		 <input type="text" name="name" placeholder="Full Name">
		
		<br>
          <label for="id" style="margin-left: 481px" class="alu_text">Batch: </label>
		  <input type="text" name="batch" placeholder="Batch">
		<br>
		  <label for="id" style="margin-left: 470px" class="alu_text">Session: </label>
		  <input type="text" name="session" placeholder="Session">
 		<br>
 		  <label for="id" style="margin-left: 480px" class="alu_text">Status: </label>
		  <input type="text" name="status" placeholder="Status">
		<br><br>	<br>
		<br>
		<button type="submit" style="margin-left: 580px">Register</button>

	</form>
	

	
		
		
		
		<br>
		<br>
		<br>
		<br>


</div>
@section('content')
	  @include('main.creator') 