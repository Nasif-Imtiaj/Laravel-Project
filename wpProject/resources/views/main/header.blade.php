@extends('students.layout')

@section('content')


	<style >
	 	html,body{
	 		background-color: 133558;
	 	}
	 </style>
	 <style link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	 </style> 
	
<div >

	  <style >
	 	.type_logo{
	 		 
  			  border: 2px solid #ddd;
  			  border-radius: 4px; 
	 	}
	 	.type_text{
	 		color:white;
	 		font-size: 20px;
	 		padding-left: 10px;
	 		
	 	}
	 	.type_text:hover{
	 		 box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
	 	}
	 	.lay_txt{
	 		color:white;
	 		font-size: 20px;
	 		padding-left: 10px;
	 		text-decoration: none;
	 	}
	 	.lay_txt:hover{
	 		 box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
	 	}
	 	.lay_txt1{
	 		color:white;
	 		text-decoration: none;
	 		margin-left: 550px;
	 	}
	 	.lay_txt2{
	 		color:white;
	 		text-decoration: none;
	 		margin-top: 60px;
	 		margin-left: 1150px;
	 	}
	 	.lay_txt2:hover{
	 		 box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
	 	}

	 </style>
     <div class="row">
	  <img src="/Logo.jpg" width="70" height="50" class="type_logo"> 
	  <a href='index' style="text-decoration:none;" class="type_text">  Home </a> 
	  <a href='members' style="text-decoration:none;" class="type_text"> Members </a>
      <a href='register' style="text-decoration:none;" class="type_text"> Register </a>
	  <a href='gallery' style="text-decoration:none;" class="type_text"> Gallery </a>
	  <a href='login' style="text-decoration:none;" class="type_text"> Admin </a>
	  @guest
                           
                        @else
                          
                           		<a id="navbarDropdown" class="lay_txt" href="adminpanel" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('Admin Panel')}}
                                </a>
                                <a class="lay_txt1" >Admin:
                                    {{ Auth::user()->name }}
                                </a>
                      
                               
                                    <a class="lay_txt2"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
                            
                        @endguest
	 
     
               
                
            
                      
               	 
	</div>
		
	<hr>

   
      	
</div>

<script >
	console.log("hello world");
</script>