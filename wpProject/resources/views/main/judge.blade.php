@extends('students.layout')

@section('content')
@section('content')
	  @include('main.header') 
<div>
	<style>
		.text_1{
			color: white;
		}
		.text_des{
			color: white;
			font-size: 20px;
		}

		.img_type2{
			border: 1px solid white; 
           border-radius: 4px;  
           background-color: white;
			width: 100px;
			height: 30px;
			margin-left: 40px;
		}
		.img_type2:hover{
		 box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
		}
	</style>
	<p class="text_des">An online judge is an online system to test programs in programming contests. They are also used to practice for such contests.

The system can compile and execute your code, and test your code with pre-constructed data. Submitted code may be run with restrictions, including time limit, memory limit, security restriction and so on. The output of the code will be captured by the system, and compared with the standard output. The system will then return the result.

When mistakes were found in a standard output, the submission will be unsuccessful. You must correct any errors in the code, and resubmit for re-judgement.</p>

	

	<h3 class="text_1">List of judges:</h3>
	
	<div>
	<div class="row">
		<a href="https://atcoder.jp/home" ><img src="Judge logo/atc.png" class="img_type2"></a>
		<a href="https://codeforces.com" ><img src="Judge logo/cf.png" class="img_type2"></a>
		<a href="https://www.codechef.com/" ><img src="Judge logo/cc.png" class="img_type2"></a>
		<a href="https://lightoj.com/auth/login" ><img src="Judge logo/loj.png" class="img_type2"></a>
		<a href="https://www.hackerearth.com/" ><img src="Judge logo/he.png" class="img_type2"></a>
		<a href="https://www.hackerrank.com/" ><img src="Judge logo/hr.png" class="img_type2"></a>
		<a href="https://toph.co/" ><img src="Judge logo/toph.png" class="img_type2"></a>
		<a href="https://www.spoj.com/" ><img src="Judge logo/spoj.png" class="img_type2"></a>
	</div>
	<div class="row">
		<a href="https://uva.onlinejudge.org/" ><img src="Judge logo/uva.png" class="img_type2"></a>
		<a href="https://cses.fi/" ><img src="Judge logo/cses.png" class="img_type2"></a>
		<a href="http://poj.org/" ><img src="Judge logo/poj.png" class="img_type2"></a>
		<a href="https://devskill.com/Home" ><img src="Judge logo/devskill.png" class="img_type2"></a>
		
		
	</div>
	<br>
	<br>
	
    </div>

   <h3 class="text_1">Top Programmers of our university in regular contest judges(hover over the images):</h3>
      @section('content')
          @include('main.top_list')
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<br>
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
