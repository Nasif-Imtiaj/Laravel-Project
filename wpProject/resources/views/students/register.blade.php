@extends('students.layout')
@section('content')
	  @include('main.header')

@section('content')

<div >
	<br>
	<br>
	<style>
		.re_txt{
			color: white;
		}
	</style>
<center><h2 class="re_txt">Please select the type of registration you want to do</h2></center>

	<div class="row">
		<style >
			.type_p_1{
				margin-top: 70px;
				margin-left: 400px;
				width:100px;
				height:100px;
			}
			.type_p_2{
				margin-top: 100px;
				margin-left: 200px;
				width:100px;
				height:100px;
			}
		</style>
		<img src="/member-icon.jpg" class="type_p_1" > </td>

		<img src="/alumni-icon.png" class="type_p_2"></td>
	</div>
	
	<br>
	<div class="row">
    	<style >
			.type_text_1{
				
				margin-top: 100px;
				margin-left: 390px;
				width:200px;
				height:200px;
				color: white;
				font-size: 20px;
				text-decoration:none
			}
			.type_text_1:hover{
				box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);

			}
			.type_text_2{
			
				margin-top: 100px;
				margin-left: 195px;
				width:200px;
				height:200px;
				color: white;
				font-size: 20px;
				text-decoration:none
			}
			.type_text_2:hover{
				box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);

			}
		</style>

			<a href='create' class="type_text_1"> New Member </a>
			<a href='Alumni_create' class="type_text_2">  New Alumni </a> 
	</div>
<br>
<br>
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