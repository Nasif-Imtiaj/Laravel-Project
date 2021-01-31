@extends('students.layout')

@section('content')
	  @include('main.header')
@section('content')

<div style="margin-left: 200px">

    <style>
   	 .alumni_txt{
       color: white;
       margin-left: 330px;
   	 }
   </style>
  
	 <h2 class="alumni_txt">List of Alumnis</h2>

	<style>
		.alu_t{
       color: white;
		}
	</style>
		<br>
	  <div class="table-wrapper" style="width: 800px">
  	<div class="md-card-content" style="height:380px;overflow-y:scroll">


	<table border="2" width="780" class="alu_t">
		<tr>
			<th> Student ID </th>
			<th> Full Name </th>
			<th> Batch </th>
			<th> Session </th>
			<th> Status </th>
		</tr>

		@foreach ($alumnis as $alumni)
		<tr style="text-align: center;"> 
			<td>{{$alumni->student_id}} </td>
			<td>{{$alumni->name}} </td>
			<td>{{$alumni->batch}} </td>
			<td>{{$alumni->session}} </td>
			<td>{{$alumni->status}} </td>
		</tr>
		@endforeach 

	</table>
</div>
</div>
</div>
@section('content')
	  @include('main.creator') 