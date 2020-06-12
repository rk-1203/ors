<?php

include '../logins/connection.inc.php';
$user_id = $_SESSION['user_id'];
$query = "select * from Placed where student_id = '$user_id'";
$query_run = @mysqli_query($connect,$query);
if(mysqli_num_rows($query_run)>0)
{
    echo '<script type="text/javascript">'; 
    echo 'alert("Sorry..You are already Placed.You cant apply further");'; 
    echo 'window.location.href = "../Dashboards/student.php";';
    echo '</script>';
}
  //header("Location:congrats.php");
  $abc = strtolower($_POST['sbtype']);
  if(!empty($abc) and ($abc!= "intern" and $abc!= "ftt"))
  {
    echo '<script type="text/javascript">'; 
    echo 'alert("Invalid Profile/Type combination");'; 
    echo 'window.location.href = "../Dashboards/student.php";';
    echo '</script>'; 
  }
include "outdsn.php";

?>