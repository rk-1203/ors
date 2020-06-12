<?php

if($_SESSION['flag']==0)
    echo "<script type='text/javascript'> alert('Fill In All The Required Fields');</script>";

else
    echo "<script type='text/javascript'> alert('The Vacancy Already Exists in Database');</script>";

//header('Location: ../Dashboards/company.php');

?>