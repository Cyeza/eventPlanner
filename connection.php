<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="event_planning";


if(!$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))

{
die("failed to connect");

}


?>