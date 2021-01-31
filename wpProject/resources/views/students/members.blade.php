@extends('students.layout')
@section('content')
	  @include('main.header')

@section('content')

<div >
   <style>
   	 .mem_txt{
       color: white;
   	 }
   </style>
   <br>
    <br>
	   <center><h2 class="mem_txt">Click on the type of list you would like to view</h2></center>
	<div class="row">
		<style >
			.type_p_1{
				
				margin-top: 50px;
				margin-left: 300px;
				width:200px;
				height:200px;
			}
			.type_p_2{
				margin-left: 200px;
				width:200px;
				height:200px;
			}
		</style>

		<img src="/member_pic.png" class="type_p_1" > </td>

		<img src="/alumni_pic.jpg" class="type_p_2"></td>
	</div>
		
	<br>
    <br>
    <div class="row">
    	<style >
			.type_text_1{
				margin-top: 100px;
				margin-left: 375px;
				width:200px;
				height:200px;
				color: white;
				font-size: 20px;

			}
			.type_text_1:hover{
				box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);

			}
			.type_text_2{
				margin-top: 100px;
				margin-left: 355px;
				width:200px;
				height:200px;
				color: white;
				font-size: 20px;
			}
			.type_text_2:hover{
				box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);

			}
		</style>

			<a href='clubmembers' style="text-decoration:none;" class="type_text_1"> Club </a>
			<a href='Alumni_list' style="text-decoration:none;" class="type_text_2">  Alumni </a> 
	</div>
<br>
<br>
		<br>
<br>
		
			
		
		


<br>
<br>
</div>

	
@section('content')
	  @include('main.creator') 