@extends('students.layout')
@section('content')
    @include('main.header') 
@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

/* Create two equal columns that sits next to each other */
.column {
  -ms-flex: 50%; /* IE 10 */
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
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
.type_img_g{
  border: 1px solid #ddd; /* Gray border */
  border-radius: 4px;  /* Rounded border */
  padding: 5px; /* Some padding */
  width: 150px; /* Set a small width */
  height: 150px;
}
.type_img_g:hover{
 
  box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
}
.type_h_g{
  color: white;
}
</style>
</head>
<body>

<!-- Header -->
 <center><div class="header" id="myHeader">
  <h2 class="type_h_g">Welcome to the Gallery</h2>
  <button class="btn" onclick="memories()">Memories</button>
  <button class="btn active" onclick="contests()">Contests</button>
  <button class="btn" onclick="achivements()">Achivements</button>
</div></center>

<!-- Photo Grid -->
<center><div class="row"> 
  <div class="column">

    <a href=# id="Href1"><img src="image1.jpg" id="Image1" class="type_img_g"></a>
    <a href=# id="Href2"><img src="image2.jpg" id="Image2" class="type_img_g"></a>
    <a href=# id="Href3"><img src="image3.jpg" id="Image3" class="type_img_g"></a>
    <a href=# id="Href4"><img src="image4.jpg" id="Image4" class="type_img_g"></a>
    <a href=# id="Href5"><img src="image5.jpg" id="Image5" class="type_img_g"></a>
   
  </div>
  <div class="column">
    <a href=# id="Href6"><img src="image6.jpg" id="Image6" class="type_img_g"></a>
    <a href=# id="Href7"><img src="image7.jpg" id="Image7" class="type_img_g"></a>
    <a href=# id="Href8"><img src="image8.jpg" id="Image8" class="type_img_g"></a>
    <a href=# id="Href9"><img src="image9.jpg" id="Image9" class="type_img_g"></a>
    <a href=# id="Href10"><img src="image10.jpg" id="Image10" class="type_img_g"></a>
  </div>  
  <div class="column">
     <a href=# id="Href11"><img src="image11.jpg" id="Image11" class="type_img_g"></a>
    <a href=# id="Href12"><img src="image12.jpg" id="Image12" class="type_img_g"></a>
    <a href=# id="Href13"><img src="image13.jpg" id="Image13" class="type_img_g"></a>
    <a href=# id="Href14"><img src="image14.jpg" id="Image14" class="type_img_g"></a>
    <a href=# id="Href15"><img src="image15.jpg" id="Image15" class="type_img_g"></a>
    
  </div>
  <div class="column">
    <a href=# id="Href16"><img src="image16.jpg" id="Image16" class="type_img_g"></a>
    <a href=# id="Href17"><img src="image17.jpg" id="Image17" class="type_img_g"></a>
    <a href=# id="Href18"><img src="image18.jpg" id="Image18" class="type_img_g"></a>
    <a href=# id="Href19"><img src="image19.jpg" id="Image19" class="type_img_g"></a>
    <a href=# id="Href20"><img src="image20.jpg" id="Image20" class="type_img_g"></a>
  </div>
</div></center>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
function memories()
  {
    for(i=1;i<=20;i++){
    document.getElementById("Image"+i).src = ("Memories/pic ("+i+").jpg");
    document.getElementById("Href"+i).href = ("Memories/pic ("+i+").jpg");
                }
  }
  function contests()
  {
     for(i=1;i<=20;i++){
    document.getElementById("Image"+i).src = ("Contests/pic ("+i+").jpg");
    document.getElementById("Href"+i).href = ("Contests/pic ("+i+").jpg");
                }
    
  }
  function achivements()
  {
    for(i=1;i<=20;i++){
    document.getElementById("Image"+i).src = ("Achivements/pic ("+i+").jpg");
    document.getElementById("Href"+i).href = ("Achivements/pic ("+i+").jpg");
                }

  }

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for(i=1;i<=20;i++){
    document.getElementById("Image"+i).src = ("Contests/pic ("+i+").jpg");
    document.getElementById("Href"+i).href = ("Contests/pic ("+i+").jpg");
                }
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
</div>
@section('content')
    @include('main.creator') 