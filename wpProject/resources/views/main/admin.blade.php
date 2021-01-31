@extends('students.layout')

@section('content')
	  @include('main.header')
@section('content')

<div >
	<form action="adminpanel" class="container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
  </form>
   
</div>

<script>
	function test($){
     if('')
}

</script>
@section('content')
	  @include('main.creator') 