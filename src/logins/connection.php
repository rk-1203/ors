<?php
    $host = "localhost";
    $user = "ritesh1203";
    $connect = mysqli_connect($host,$user,"") or die("Error connecting to Server");
    $sql = mysqli_select_db($connect,"ors") or die("Error connecting to database");
?>