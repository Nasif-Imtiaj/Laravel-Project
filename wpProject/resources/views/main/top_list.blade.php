<!DOCTYPE html>
<html>
<head>
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.desc {
  padding: 15px;
  text-align: center;
}
.img_type3{
      border: 1px solid white; 
           border-radius: 4px;  
           background-color: white;
      width: 100px;
      height: 30px;
      margin-left: 40px;
    }
    .img_type3:hover{
       box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
    }
  .img_type4{
      border: 1px solid white; 
      border-radius: 4px;  
      background-color: white;
      width: 800;
      height: 300px;
      margin-left: auto;
     margin-right: auto;

    }
</style>
</head>
<body>

<div class="row">
     <div class="dropdown">
      <img src="Judge logo/atc.png"  class="img_type3">
      <div class="dropdown-content">
      <img src="Judge list/atc_list.png"  class="img_type4">
        <div class="desc">
         <a href="https://atcoder.jp/ranking?f.Country=&f.UserScreenName=&f.Affiliation=Metropolitan+University%2C+Sylhet&f.BirthYearLowerBound=0&f.BirthYearUpperBound=9999&f.RatingLowerBound=0&f.RatingUpperBound=9999&f.HighestRatingLowerBound=0&f.HighestRatingUpperBound=9999&f.CompetitionsLowerBound=0&f.CompetitionsUpperBound=9999&f.WinsLowerBound=0&f.WinsUpperBound=9999">Click to show full list</a></div>
        </div>
    </div>

    <div class="dropdown">
      <img src="Judge logo/cf.png"  class="img_type3">
      <div class="dropdown-content">
      <img src="Judge list/cf_list.png"  class="img_type4">
        <div class="desc">
         <a href="https://codeforces.com/ratings/organization/3604">Click to show full list</a></div>
        </div>
    </div>

     <div class="dropdown">
      <img src="Judge logo/cc.png"  class="img_type3">
      <div class="dropdown-content">
      <img src="Judge list/cc_list.png"  class="img_type4">
        <div class="desc">
         <a href="https://www.codechef.com/ratings/all?filterBy=Institution%3DMetropolitan%20University%2C%20Sylhet&order=asc&sortBy=global_rank">Click to show full list</a></div>
        </div>
    </div>

    <div class="dropdown">
      <img src="Judge logo/toph.png"  class="img_type3">
      <div class="dropdown-content">
      <img src="Judge list/toph_list.png"  class="img_type4">
        <div class="desc">
         <a href="https://toph.co/institutions/metropolitan.edu.rs">Click to show full list</a></div>
        </div>
    </div>
  </div>
  <br>
 
   
</div>

</body>
</html>