@extends('students.layout')
@section('content')
	  @include('main.header')
@section('content')
<div >
     <style >
   	.EU_tble_clr{
   		color: white;
   	}
   	.eu_tble_txt{
   		color: white;
   		margin-left: 520px;
   	}

   </style>
    <h2 class="eu_tble_txt">List of Club Members</h2>
<br>
 <center><div class="table-wrapper" style="width: 800px">
  	<div class="md-card-content" style="height:362px;overflow-y:scroll">

	<table border="2" width="780" class="EU_tble_clr"> 
		<tr>
			<th> Student ID </th>
			<th> Full Name </th>
			<th> Batch </th>
			<th> Position </th>
			<th> Action </th>
		</tr>

		@foreach ($students as $student)
		<tr style="text-align: center;"> 
			<td>{{$student->student_id}} </td>
			<td>{{$student->name}} </td>
			<td>{{$student->batch}} </td>
			<td>{{$student->position}} </td>
			<td>
				<center><button type="submit" > <a href="{{ route('students.edit', $student->id)}}" style="text-decoration:none;"> Edit </a> </button>
				<form action="{{ route('students.destroy', $student->id)}}" method="POST">
										
					@csrf
                    @method('DELETE') 

					<button type="submit" > Delete </button>
				</form></center>
			</td>
		</tr>
		@endforeach 

	</table>
	 </div>
</div></center>
<br>

</div>
@section('content')
	  @include('main.creator') 