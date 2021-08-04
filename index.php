<?php
session_start();


      include("connection.php");
      include("function.php");


    $user_data= check_login($con);






?>

<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css?q=1280549780">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="animate.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
	<title>my website</title>
</head>
<body>
	

<br>
<style>
*{
box-sizing:border-box;

}
body{
      
    margin:0px;
	padding:0px;
	background:#f0ffff;
	background-size:cover;
	font-family:sans-serif;
	max-width: 100%;
}
.topnav{
   margin-top:50px;
    background:linear-gradient(#f0ffff,#585e86);
    overflow:hidden
}
.topnav a{
    float:left;
	width:120px;
	display:block;
	text-align:center;
	color:#fff;
	padding:25px 20px;
	text-decoration:none;
	font-size:14px;
	text-transform:uppercase;
	font-weight:bold;
	border-right:1px solid #585e86;
}
.topnav a:hover{
    background:#000;
	border-radius:5px;
}
#myCarousel{
  width: 119%;
  margin-left: -9.8%;
  right:0%;
  
}
a.active{
    background:linear-gradient(#a60813,#000);
}
.search-container{
     float:right;
	 margin-right;
}
input[type=text]{
     padding:6px;
	 margin-top:16px
	 font-size:17px;
	 border:none;
}
button{
    float:right;
	padding:6px 10px;
	margin-top:0px;
	margin-right:16px;
	background:sky blue;
	font-size:17px;
	border:none;
	cursor:pointer;
	color:#fff;
	height: 36px;
}
button:hover{
    background:#f5cc0c;
}
@media screen and(max-width:600px){
     .topnav .search-container{
	 float:none;
	 }
	.topnav a, input[type=text],button{
	   float:none;
	   display:block;
	   text-align:left;
	   width:100%;
	   margin:0;
	   padding:14px;
	}
	input[type=text]{
	border:1px solid #ccc;
	}
	.search-container{
	width:100%;
	}
}

</style>



</head>
<body>
<h2><font face="Lucida Sans Typewriter" color="gray" size="6">E-EVENT PLANNING</font>

<div class="topnav">
       <a class="active"href="index.php">Home</a>
	   <a href="Service.php">service</a>
	   <a href="About.php">About</a>
	   <a href="feedback.php">Feedback</a>
	   <a href="log in.html">sign in</a>
	   <a href="logout.php">sign out</a>
<div class="search-container">
       <form>
	   <input type="text" placeholder="search..">
       <button bgcolor="blue">Search</button>
	   
	   
	   
	   </form>

	  </div>	
       </div>
        <div class="container" id="Home">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="igikweh.png" alt="Rose Flower" style="object-fit: cover;height:500px; width:1600px; ">
          <div class="carousel-caption">
            <h3>Wedding Event</h3>
            <p>We are best planner of your wedding event</p>
          </div>
        </div>
  
        <div class="item">
          <img src="cake.png" alt="Birthday cake" style=" object-fit: cover;width:1600px; height:500px; ">
          <div class="carousel-caption">
            <h3>Birthday Event</h3>
            <p>We make your birthday even more awesome</p>
          </div>
        </div>
      
        <div class="item">
          <img src="hall.png" alt="Watch" style="object-fit: cover;width:1600px; height:500px;">
          <div class="carousel-caption">
            <h3>Confereces </h3>
            <p>We are here to plan well your meetings and conferences</p>
          </div>
        </div>
      </div>
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="jumbotron " style="max-width: 100%;">
    <div class="row">
      <div  class="col-md-6" style="inline-size: 0 0 50%; position: relative; width: 100%;">
        <img class="img-fluid main-venue-image"
          src="decor.png" data-aos="zoom-in" data-aos-duration="7000" data-aos-delay="500" style="height: auto; width: 100%;">
        <div class="gray-box position-relative md-main-venue-content" style="margin-top: -5%;" data-aos="fade-left" data-aos-duration="15000" data-aos-delay="500">
          <h4 class="inside-boxes d-inline-block terracota-box venue-name" style="letter-spacing: 2px;
        padding: 10px 16px;
        text-transform: uppercase;background-color:#7a7b85;
        color: #fff;margin-top: -1.375em;
        margin-right: 1em;">Party Planning</h4>
          <div class="venue-description" style="white-space: pre-wrap;
        padding: 2em 2.25em 2.325em 2.25em;
        font-size: 1.1em;
        max-width: 100%;
        box-sizing: border-box;background-color:#7a7b85; color: white;
        margin-top: -5%;
        text-align: justify;
        "> All Kind of Parties
           Overview
           We plan all kind of parties
           Amazing decoration for your party
           Very affordable on good price
  
            <a href="Service.php" class="btn"
              style="background-color:#7a7b85 ; color: white; border-radius: 30px; border: 1px solid #ffffff;">
              View more</a>
          </div>
        </div>
  
      </div>
      <div class="col-md-6" style="margin-top: -6.7%; max-width: 100%;" data-aos="fade-left" data-aos-duration="9000" data-aos-delay="900">
        <div style="height:40px;">
          <!--padding to make up for removal of weekend services -->
        </div>
        <!-- <div class="text-center" style="display:none;">
          <h3 class="inside-boxes text-center mt-5 d-none d-md-inline-block gray-box">WEEKEND
            SERVICES</h3>
        </div> -->
        <img class="img-fluid mt-5 md-secondary-venue-image" src="indoor.png"
          style="height: 50%; width: 100%; ">
        <div class="gray-box position-relative md-secondary-venue-content" style="margin-top: -14%; ">
          <h4 class="inside-boxes d-inline-block terracota-box venue-name" style="letter-spacing: 2px;
        padding: 10px 16px;
        text-transform: uppercase;background-color:#7a7b85;
            color: #fff;margin-top: 1.375em;
              /* margin-left: 1em; */
            margin-right: 1em;">Top Event Planner</h4>
  
          <div class="venue-description"
          style="white-space: pre-wrap;
          padding: 2em 2.25em 2.325em 2.25em;
          font-size: 1.1em;
          max-width: 100%;
          box-sizing: border-box;background-color:#7a7b85; color: white;
          margin-top: -5%;
          text-align: justify;
          "
        >
        Event Planner
        Overview
        Plan ahead your event
        Own the whole event till the end
        Very Available all the time 
        We are very affordable
            <a href="Service.php" class="btn"
              style="background-color:#7a7b85 ; color: white; border-radius: 30px; border: 1px solid #ffffff;">View More
              </a>
          </div>
        </div>
      </div>
  
    </div>
  </div>

	  
<div style="background-color:black">
<footer>	
	<p style="text-align: center; color:white; padding: 5%; font-size: 14px">&#169Event Planner, 2021 by Diane<p>
</footer>
</div>
</body>
</html>