<?php

ob_start();
session_start();

$host = "Localhost";
$user = "ritesh1203";
$pass = "";
$db = 'ors';
$connect=mysqli_connect('localhost','ritesh1203','');
  	if(!mysqli_select_db($connect,$db))
  	  echo mysql_error();
 


?>