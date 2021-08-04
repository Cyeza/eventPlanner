<?php
session_start();

if(isset($_SESSION['user_id']))
{

	unset($_SESSION['user_id']);
}

header("location:login.php")

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<h1>WELCOME TO OUR SITE OF E-EVENT PLANNING</h1>
</body>
</html>