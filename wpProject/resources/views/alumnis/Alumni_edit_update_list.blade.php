@extends('students.layout')
@section('content')
	  @include('main.header')
@section('content')
<div style="margin-left: 200px">
	<style>
		.eu_alu_t{
       color: white;
		}
		 .eu_alumni_txt{
       color: white;
       margin-left: 350px;
   	 }
	
   	
   </style>
  
	 <h2 class="eu_alumni_txt">List of Alumnis</h2>
	<br>
  		<div class="table-wrapper" style="width: 820px">
  			<div class="md-card-content" style="height:362px;overflow-y:scroll">
			<table border="2" width="800"class="eu_alu_t">
			<tr>
			<th> Student ID </th>
			<th> Full Name </th>
			<th> Batch </th>
			<th> Session </th>
			<th> Status </th>
			<th> Action </th>
				</tr>

				@foreach ($alumnis as $alumni)
				<tr style="text-align: center;"> 
					<td>{{$alumni->student_id}} </td>
				<td>{{$alumni->name}} </td>
				<td>{{$alumni->batch}} </td>
				<td>{{$alumni->session}} </td>
				<td>{{$alumni->status}} </td>
				<td>
				<center><button type="submit" > <a href="{{ route('alumnis.edit', $alumni->id)}}"style="text-decoration:none;"> Edit </a> </button>
				<form action="{{ route('alumnis.destroy', $alumni->id)}}" method="POST">				
					@csrf
                    @method('DELETE') 

					<button type="submit" > Delete </button></center>
					</form>
				</td>
				</tr>
				@endforeach 

			</table>
			</div>
		</div>
	</br>
</div>


@section('content')
	  @include('main.creator') 
