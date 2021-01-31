@extends('students.layout')

@section('content')
@section('content')
	  @include('main.header') 

<div >
	
	  <style>
	  	.type_font{
          
	  		color:white;
	  		width: 600px;
  			height: 100px;
  			
	  	}
	  </style>
	  <br>
	  <br>
	<center>
	 	<h2 class="type_font"><br>Welcome to the official website of Metropolitan Universtiy ACM Club</h2></center>
	  <br>
	  <br>
	 @section('content')
 @include('main.slider')
	 
 <br>
 <br>
    <style type="text/css">
    	.type_judge{
    	 border-radius: 50%;
    	 width:200px;
    	 height: 200px;
    	 margin-left: 300px;
    	}
        .type_judge:hover{
            box-shadow: 0 0 10px 10px rgba(0, 140, 186, 0.5);
        }

    	.type_guide{
    	 border-radius: 50%;
    	 width:200px;
    	 height: 200px;
    	 margin-left: 250px;
    	}
        .type_guide:hover{
            box-shadow: 0 0 10px 10px rgba(0, 140, 186, 0.5);
        }
    	.type_events{
    	 border-radius: 50%;
    	 width:200px;
    	 height: 200px;
    	 margin-left: 250px;
    	}
    	.txt_1{
    		color:white;
    		text-decoration:none;
    		margin-left:300px;
    		font-size: 25px;
	  		
    	}
    	.txt_2{
    		color:white;
    		text-decoration:none;
    		margin-left:230px;
    		font-size: 25px;
	  		
    	}
    	.txt_3{
    		color:white;
    		text-decoration:none;
    		margin-left:260px;
    		font-size: 25px;
	  		
    	}
    </style>
    <br>
	 
	 <div class="row">
	 <a href="judge" ><img src="judge.jpg" class="type_judge"></a>
	 <a href="guide" ><img src="guide.png" class="type_guide"></a>
	
   
    </div>
     <div class="row">
     <a href="judge" class="txt_1">Learn about judges</a>
     <a href="guide" class="txt_2">Roadmap to ACM Glory</a>
     </div>
	<br>

   </div>

  </div>

@section('content')
	  @include('main.creator') 
