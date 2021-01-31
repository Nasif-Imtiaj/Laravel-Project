@extends('students.layout')

@section('content')
	  @include('main.header')
@section('content')

<div  style="margin-left:200px">
   
   <style >
   	.tble_clr{
   		color: white;
   	}
   	.tble_txt{
   		color: white;
   		margin-left: 320px;
   	}

   </style>
   <h2 class="tble_txt">List of Club Members</h2>
<br>
   <div class="table-wrapper" style="width: 800px" >
  	<div class="md-card-content" style="height:380px;overflow-y:scroll">
  	  <table class="uk-table">
      
		<table border="2" width="780" class="tble_clr">
			<tr>
				<th> Student ID </th>
				<th> Full Name </th>
				<th> Batch </th>
				<th> Position</th>
			</tr>
       
       

			@foreach ($students as $student)
			<tr style="text-align: center;"> 
				<td>{{$student->student_id}} </td>
				<td>{{$student->name}} </td>
				<td>{{$student->batch}} </td>
				<td>{{$student->position}} </td>
			
			</tr>
		@endforeach 
		 </tr>
       
    </table>
  </div>
</div>
	


	

	

</div>
@section('content')
	  @include('main.creator') 