@extends('students.layout')
@section('content')
    @include('main.header') 
@section('content')

<!DOCTYPE html>
<html>
<head>


  <style type="text/css">
    .type_img_g{
border: 1px solid #ddd; /* Gray border */
  border-radius: 4px;  /* Rounded border */
  padding: 5px; /* Some padding */
  width: 150px; /* Set a small width */
}
.type_img_g:hover{
 
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
    /* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
  </style>
  <center><div class="header" id="myHeader">
  <p>Welcome to the Gallery</p>
  <button class="btn" onclick="memories()">Memories</button>
  <button class="btn active" onclick="contests()">Contests</button>
  <button class="btn" onclick="achivements()">Achivements</button>
</div></center>
<img src="image1.jpg" id="myImage" />
</head>
<body>
<script type="text/javascript">

  function memories()
  {
    document.getElementById("myImage").src = "Memories/pic (1).jpg";
    
  }
  function contests()
  {
    document.getElementById("myImage").src = "Contests/pic (1).jpg";
  }
  function achivements()
  {
    document.getElementById("myImage").src = "Achivements/pic (1).jpg";
  }
  
</script>

</body>
</html>


@section('content')
    @include('main.creator') 