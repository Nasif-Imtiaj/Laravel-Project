@extends('students.layout')

@section('content')
@section('content')
	  @include('main.header') 
<div>
	<style>
		.text_guide_1{
          color:white;
          text-decoration:none;
		}
		.text_guide_2{
			color: white;
			text-decoration: none;
			
		}
		.text_guide_2:hover{
			box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
			
		}
		.img_type_guide_1{
			border: 1px solid white; 
           border-radius: 4px;  
           background-color: white;
			width: 100;
			height: 30px;
			margin-left: 40px;
		}
		.img_type_guide_1:hover{
			box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
		}
		.img_type_guide_2{
			 border-radius: 50%;
			
           background-color: white;
			width: 80;
			height: 80px;
			margin-left: 40px;
		}
		.img_type_guide_2:hover{
			box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
		}
	</style>
	<center><h3 class="text_guide_1">Welcome to the guide page you will find lots of resources to learn and start of your competitive carrer</h3></center>

	<h3 class="text_guide_1">-List of websites:</h3>
	<div class="row">
	<a href="https://www.geeksforgeeks.org/" ><img src="Guide pics/gfg.png" class="img_type_guide_1"></a>
	<a href="https://cp-algorithms.com/" ><img src="Guide pics/ca.png" class="img_type_guide_1"></a>
     </div>

    <h3 class="text_guide_1">-List of Youtube Channels:</h3>
	<div class="row">
		<a href="https://www.youtube.com/channel/UCZCFT11CWBi3MHNlGf019nw" ><img src="Guide pics/abdul bari.jpg" class="img_type_guide_2"></a>
		<a href="https://www.youtube.com/user/tusharroy2525" ><img src="Guide pics/tr.jpg" class="img_type_guide_2"></a>
		<a href="https://www.youtube.com/channel/UCN_pqF_Y6IObpxapaQPHWZg" ><img src="Guide pics/bacs.jpg" class="img_type_guide_2"></a>
		<a href="https://www.youtube.com/user/thenewboston" ><img src="Guide pics/nb.jpg" class="img_type_guide_2"></a>
		
	</div>
	<br>
	<h3 class="text_guide_1">-Blogs on competitive programming by top programmers:</h3>
	
	<center><div >
	<h4 class="text_guide_1">By Shajala Shohag(SUST) : <a href="https://github.com/ShahjalalShohag/How-To-Practice" class="text_guide_2">click</a></h4> 
	<h4 class="text_guide_1">By Mostafa Saad Ibrahim(Huawei) : <a href="https://codeforces.com/blog/entry/65133" class="text_guide_2">click</a></h4> 
	<h4 class="text_guide_1">By Huang I-Wen(Taipei) : <a href="https://codeforces.com/blog/entry/16599" class="text_guide_2">click</a></h4> 
	<h4 class="text_guide_1">By Vishwesh Shrimali() : <a href="https://www.geeksforgeeks.org/how-to-prepare-for-acm-icpc/" class="text_guide_2">click</a></h4> 
</div></center>

</div>

@section('content')
	  @include('main.creator') 
