<?php
session_start();

      include("connection.php");
      include("function.php");


      if($_SERVER['REQUEST_METHOD'] == "POST")
      {

      //SOMETHING WAS POSTED

        $user_name=$_POST['user_name'];
        $password=$_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //save to database
            $user_id=random_num(20);

            $query="insert into signup (user_id,user_name,password)values('$user_id','$user_name','$password')";

            mysqli_query($con, $query );

            header("location:login.php");
            die;



        }else
        {
         echo"please enter some valid information!"; 

        }

      }



?>

<html>
<head>
<title>Signup</title>
<style>
  
 body{
    margin: 0;
    padding: 0;
    background: url(background.png);
    background-size:cover;
    background-position:center;
    font-family: sans-serif;
}
.loginbox{
    width: 320px;
    height: 420px;
    background: #000;
    color: #fff;
    top: 57%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding:70px 30px;
}
.piclog{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
  
}
h1{
    margin:0;
    padding:0;
    text-align:center;
    font-size22px;
}
.loginbox p{
    margin:0;
    padding:0;
    font-weight:bold;
}
.loginbox input{
    width:100%;
    margin-bottom:20px;
}
.loginbox input[type="text"], input[type="password"]
{
    border:none;
    border-bottom:1px solid #fff;
    background:transparent;
    outline:none;
    height:40px;
    color:#fff;
    font-size:16px;

}
.loginbox input[type="submit"]
{
    border:none;
    outline:none;
    height:40px;
    background:#fb2525;
    color:#fff;
    font-size:18px;
    border-radius:20px;
}
.loginbox input[type="submit"]:hover
{
    cursor:pointer;
    background:#ffc107;
    color:#000;

}
.loginbox a{
    text-decoration:none;
    font-size:12px;
    line-height:20px;
    color:darkgrey;
}
.loginbox a:hover{
    color:#ffc107;
}
.body 
{
  background: 
}

</style>
</head>
<body>
  <h1>WELCOME TO OUR SITE OF E-EVENT PLANNING</h1>
<h1>This platform assist planner in managing event activities online</h1>
     <div class="loginbox">      
     <img src="piclog.png" class="piclog">
          <h1>Signup</h1>
          <form method="post">
              <p>User name</p>          
              <input id="text" type="text" name="user_name" placeholder="Enter Username">
              <p>Password</p>          
              <input id="text" type="password" name="password" placeholder="Enter Password">
              <input id="button" type="submit" value="Signup">
              <a href="#">Forget your password</a><br>
              <a href="login.php">Click here to login</a>
          </form>         
     </div> 
</body>
</html>