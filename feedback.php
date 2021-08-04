<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{% static 'css/index.css' %}">

    <link rel="stylesheet" href="{% static 'star-ratings/css/star-ratings.css' %}">
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
    <title>Feedback</title>
<style>
    .mySlides img {
   width: 100%;
  }
  
  /* Slideshow container */
  .slideshow-container {
    width: 100%;
    height: 90vh;
  overflow: hidden;
    position: relative;
    margin: auto;
  }
  
  /* Next & previous buttons */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    background-color: rgba(0, 0, 0, .4);
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }
  
  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
  }
  
  /* Caption text */
  .mySlides   .text {
    color: #f2f2f2;
    box-sizing: border-box;
    background-color: rgba(0, 0, 0, .8);
    font-size: 17px;
    padding: 20px 12px;
    border-radius: 10px 60px 10px 60px;
    position: absolute;
    top:200px;
    width: 60%;
    left: 20%;
    margin: 0px auto;
    text-align: center;
  }
  
  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  
  
  /* Fading animation */
  .fadada {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }
  
  @-webkit-keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  
  @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  
  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .prev, .next{font-size: 11px}
  }
  @media only screen and (max-width: 600px) {
  .text {
      font-size: 12px !important;
      width: 70% !important;
      left: 15%;
      right: 15%;
  }
  .slideshow-container {
    height: 50vh !important;
  }
  }
  @media only screen and (max-width: 600px) {
    .slideshow-container {
    height: 50vh !important;
  }
  }
  
  
  
  
          .form-control {
              height: 41px;
              background: #ffffff;
              box-shadow: none !important;
              border: none;
           
          }
          .form-control:focus {
              background: #e2e2e2;
          }
          .form-control, .btn {        
              border-radius: 3px;
          }
          .bookingform {
         
            background-color:#7a7b85 ;
  
              background-image:url("bgform.jpg");
              background-size: 100%;
              }
          .bookingform form {
              color: rgb(226, 226, 226);
              border-radius: 3px;
              margin-bottom: 15px;
              background:transparent;
              box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
              padding: 30px;
          }
          .bookingform h2  {
              color: rgb(255, 255, 255);
              text-shadow:1px 1px 1px #000;
              font-weight: bold;
              margin-top: 0;
          }
          .bookingform p  {
              color: rgb(255, 255, 255);
              text-shadow:1px 1px 1px #000;
              font-weight: bold;
              margin-top: 0;
          }
          .bookingform hr  {
              margin: 0 -30px 20px;
          }    
          .bookingform .form-group {
              margin-bottom: 20px;
          }
         
          .bookingform .row div:first-child {
              padding-right: 10px;
          }
          .bookingform .row div:last-child {
              padding-left: 10px;
          }
          .bookingform .btn {        
              font-size: 16px;
              font-weight: bold;
              background: #ffffff;
              color: #474787;

              border: none;
              min-width: 140px;
          }
          .bookingform .btn:hover, .bookingform .btn:focus {
              background: #2389cd !important;
              outline: none;
          }
          
         
         /*===========================
         Most For the Frequently asked questions
  ===========================*/
  
  /*===========================
         ABOUT For the Frequently asked questions
  ===========================*/
  .about-area {
    padding-top: 10px;
    padding-bottom: 100px;
    position: relative; }
    .about-area .about-title .sub-title {
      font-size: 18px;
      font-weight: 400;
      color: #0067f4;
      text-transform: uppercase; }
      @media (max-width: 767px) {
        .about-area .about-title .sub-title {
          font-size: 16px; } }
    .about-area .about-title .title {
      font-size: 30px;
      padding-top: 10px; 
  
      }
  
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .about-area .about-title .title {
          font-size: 26px; } }
      @media (max-width: 767px) {
        .about-area .about-title .title {
          font-size: 22px; } }
    .about-area .about-accordion .accordion .card {
      border: 0;
      background: none; }
      .about-area .about-accordion .accordion .card .card-header {
        padding: 0;
        border: 0;
        background: none;
        margin-top: 40px; }
        .about-area .about-accordion .accordion .card .card-header a:hover {
          text-decoration: none;
        }
        .about-area .about-accordion .accordion .card .card-header a {
          font-size: 18px;
          font-weight: 500;
          color: #000;
          display: block;
          position: relative;
          padding-right: 20px; }
          @media only screen and (min-width: 992px) and (max-width: 1199px) {
            .about-area .about-accordion .accordion .card .card-header a {
              font-size: 16px; } }
          @media (max-width: 767px) {
            .about-area .about-accordion .accordion .card .card-header a {
              font-size: 16px; } }
          .about-area .about-accordion .accordion .card .card-header a::before {
            content: '\2719';
            font-family: 'LineIcons';
            position: absolute;
            top: 50%;
            right: 0;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%); }
        .about-area .about-accordion .accordion .card .card-header .collapsed::before {
          content: '\271E'; }
      .about-area .about-accordion .accordion .card .card-body {
        padding: 20px 0px 0px 20px  ; }
    .about-area .about-image img {
      width: 100%; }
      *{
      max-width: 100%;
    }
    body {
      background-color: #e9ecef;
      font-family: 'Poppins', serif;
      max-width: 100%;
      width: 100%;
      height: 100%;
    }

    a {
      text-decoration: none;
      color: black;
    }

    a:hover {
      color: grey;
      text-decoration: none;
    }

    .row {
      grid-row-gap: 15px;

    }

    #forsermons.row {
      grid-row-gap: 15px;
      margin-left: 10%;
      margin-right: 10%;

    }

    p {
      color: #000;
    }
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


html {
    font-size: 72.5%;
    font-family: 'Roboto', sans-serif;
}
#navbar{
  font-family: 'Roboto', sans-serif;}
        @media screen and (max-width:100%){
        #search_form, #profile, .upload{
     display: none;
     
        }
    }


li {
    list-style: none;
}

a {
    text-decoration: none;
}


.header{
    border-bottom: 1px solid #E2E8F0;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 1.5rem;
    background-color: #474787;
}

.hamburger {
    display: none;
}

.bar {
    display: block;
    width: 25px;
    height: 3px;
    margin: 5px auto;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    background-color: #101010;
}

.nav-menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-item {
    margin-left: 5rem;
}

.nav-link{
    font-size: 1.6rem;
    font-weight: 400;
    color: #fff;
}

.nav-link:hover{
  text-decoration: underline solid #fff 2px;
  text-underline-offset:0.5em ;
  transition: .5s;
  background-color: none;
}

.nav-logo {
    font-size: 2.1rem;
    font-weight: 500;
    color: #482ff7;
}

@media only screen and (max-width: 768px) {
    .nav-menu {
        position:fixed;
        left: -100%;
        top: 5rem;
        flex-direction: column;
         z-index: 2000;
        background-color: #474787;
        width: 100%;
        border-radius: 10px;
        text-align: center;
        transition: 0.3s;
        box-shadow:
            0 10px 27px rgba(0, 0, 0, 0.05);
    }

    .nav-menu.active {
        left: 0;
    }

    .nav-item {
        margin: 2.5rem 0;
    }

    .hamburger {
        display: block;
        cursor: pointer;
    }

    .hamburger.active .bar:nth-child(2) {
        opacity: 0;
    }

    .hamburger.active .bar:nth-child(1) {
        -webkit-transform: translateY(8px) rotate(45deg);
        transform: translateY(8px) rotate(45deg);
    }

    .hamburger.active .bar:nth-child(3) {
        -webkit-transform: translateY(-8px) rotate(-45deg);
        transform: translateY(-8px) rotate(-45deg);
    }
}
.footer {
      background-color: #474787;
      padding: 20px 0;
    }

    .footer-col {
      width: 25%;
      padding: 0 15px;
    }

    .footer-col h4 {
      font-size: 18px;
      color: #ffffff;
      text-transform: capitalize;
      margin-bottom: 10px;
      margin-top: 20px;
      font-weight: 500;
      position: relative;
    }

    .footer-col h4::before {
      content: '';
      position: absolute;
      left: 0;
      bottom: -10px;
      background-color: #474787;
      height: 2px;
      box-sizing: border-box;
      width: 50px;
    }

    .footer-col ul li:not(:last-child) {
      margin-bottom: 10px;
    }

    .footer-col ul li a {
      font-size: 16px;
      text-transform: capitalize;
      color: #ffffff;
      text-decoration: none;
      font-weight: 300;
      color: #ffffff;
      display: block;
      transition: all 0.3s ease;
    }

    .footer-col ul li a:hover {
      color: #ffffff;
      padding-left: 8px;
    }

    .footer-col .social-links a {
      display: inline-block;
      height: 40px;
      width: 40px;
      background-color: rgba(255, 255, 255, 0.2);
      margin: 0 10px 10px 0;
      margin-top: -5px;
      text-align: center;
      line-height: 40px;
      border-radius: 50%;
      color: #ffffff;
      transition: all 0.5s ease;
    }

    .footer-col .social-links a:hover {
      color: #24262b;
      background-color: #ffffff;
    }

    /*responsive*/
    @media(max-width: 767px) {
      .footer-col {
        width: 50%;
        margin-bottom: 30px;
      }
    }

    @media(max-width: 574px) {
      .footer-col {
        width: 100%;
      }
    }

    .bottom {
      align-items: bottom;
      margin-top: 20px;
      margin-bottom: -10px;

    }

    .bottom center a {
      color: #ffffff;
      text-decoration: none;

    }

    .bottom center a:hover {
      text-decoration: underline;
    }

    .bottom center span {
      color: #fff;
    }
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
/*button{
    float:right;
  padding:6px 10px;
  margin-top:0px;
  margin-right:16px;
  background:sky blue;
  font-size:17px;
  border:none;
  cursor:pointer;
  color:#fff;
}*/
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
       <button bgcolor="blue" style=" float:right;
  padding:6px 10px;
  margin-top:0px;
  margin-right:16px;
  background:sky blue;
  font-size:17px;
  border:none;
  cursor:pointer;
  height: 40px;
  color:#fff;">Search</button>
     
     
     
     </form>

    </div>  
       </div>
    <section id="about" class="about-area">
        <div class="container-fluid ">
            <div class="row justify-content-center align-items-center">
                   
                <div class="col-10 col-md-5  ">
                    <div class="bookingform">
                    <form action="" method="post">
                        <h2>Give Us Feedback</h2>
                    <p>Please Fill for any inquiry or further information </p>
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col"><input type="text" class="form-control" name="groom" placeholder="First Name" required="required"></div>
                            <div class="col"><input type="text" class="form-control" name="bride" placeholder="Last Name" required="required"></div>
                        </div>        	
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" required="required">
                    </div>
                    <div class="form-group">
                        <textarea  class="form-control" rows="4" name="confirm_password" placeholder="Type here....." required="required"></textarea>
                    </div>        
                    <div class="form-group text-center">
                        <a href="payRent.html"><button type="submit" class="btn btn-primary btn-lg">Send</button></a>
                    </div>
                    </form>
                        
                    </div> <!-- faq image -->
                </div>
                <div class="col-11 col-md-6  ">
                        <div class="faq-content mt-45">
                            <div class="about-title">
                              
                                <h4 class="title">Frequently Asked Questions <br> About Our Services</h4>
                            </div> <!-- faq title -->
                            <div class="about-accordion">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                    <div class="card">
                                            <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Who is allowed to request for event planning</a>
                                        </div>
    
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p class="text">At Event planner company, we welcome everyone who need a better plan for a certain his or her event </p>
                                            </div>
                                        </div> 
                                    </div> <!-- card -->
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Can everyone request for a certain decoration?</a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p class="text">Definitely yes, anyone who needs a certain decoration can definitely send us the pictures of how she or he wants the decoration will look like and we decorate accordingly! </p>
                                            </div>
                                        </div>
                                    </div> <!-- card -->
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Are all event planned paid the same  </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p class="text">No, all events can't e piad because they never consume the same amount of money.
                                                </p>
                                            </div>
                                        </div>
                                    </div> <!-- card -->
                                    <div class="card">
                                        <div class="card-header" id="headingFore">
                                            <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">Which events cost high?</a>
                                        </div>
                                        <div id="collapseFore" class="collapse" aria-labelledby="headingFore" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p class="text">Weddings and some big conferences cost high compared on the other events</p>
                                            </div>
                                        </div>
                                    </div> <!-- card -->
                                   
                                </div>
                            </div> <!-- faq accordion -->
                        </div> <!-- faq content -->
                        </div>
    
                    </div> 
                    
                   
            </div> <!-- row -->
        </div>
    </section>
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
    <script type="text/javascript" src="{% static 'star-ratings/js/dist/star-ratings.min.js' %}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cndjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script> 
    <script >
        const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");
    const navLink = document.querySelectorAll(".nav-link");
    
    hamburger.addEventListener("click", mobileMenu);
    navLink.forEach(n => n.addEventListener("click", closeMenu));
    
    function mobileMenu() {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    }
    
    function closeMenu() {
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
    }
    </script>
    <div style="background-color:black">
<footer>  
  <p style="text-align: center; color:white; padding: 5%; font-size: 14px">&#169Event Planner, 2021 by Diane<p>
</footer>
</div>
</body>
</html>