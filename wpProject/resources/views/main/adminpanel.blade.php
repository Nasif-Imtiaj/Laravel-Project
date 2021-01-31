@extends('students.layout')
@section('content')
	  @include('main.header') 
@section('content')
<div >
	<br>
	<br>
	<style>
		.admin_txt{
			color: white;
			margin-left: 400px;
		}
	</style>
	<h2 class="admin_txt">Select the type of list you would like to edit</h2>

     <div class="row">
		<style >
			.type_p_1{
				margin-top: 70px;
				margin-left: 400px;
				width:120px;
				height:120px;
			}
			.type_p_2{
				margin-top: 100px;
				margin-left: 200px;
				width:120px;
				height:120px;
			}
		</style>
		<img src="/member-edit.png" class="type_p_1" > </td>

		<img src="/alumni-edit.png" class="type_p_2"></td>
	</div>
	<br>
	<br>
	<div class="row">
    	<style >
			.type_text_1{
				
				margin-top: 100px;
				margin-left: 360px;
				width:200px;
				height:200px;
				color: white;
				font-size: 20px;
				text-decoration:none;
			}
			.type_text_1:hover{
				box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);

			}
			.type_text_2{
				
				margin-top: 100px;
				margin-left: 165px;
				width:200px;
				height:200px;
				color: white;
				font-size: 20px;
				text-decoration:none;
			}
			.type_text_2:hover{
				box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);

			}
		</style>

			<a href='EUmemberslist'  class="type_text_1"> Edit/Update Members</a>
			<a href='Alumni_edit_update_list' class="type_text_2">  Edit/Update Alumnis </a> 
	</div>

	
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