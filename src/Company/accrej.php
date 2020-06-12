<?php

include '../logins/connection.inc.php';

if(isset($_POST))
{
    $type = $_POST['accrej'];
    //echo $type;
    if($type == "acc")
    {
        $job_id = $_POST['job_id'];
        $job_id = (int)$job_id;
        $std_id = $_POST['std_id'];
        //echo "$job_id $std_id";
        $query = "insert into Results values ('".$job_id."','".$std_id."')";
        mysqli_query($connect,$query);
        $query = "delete from Applied where student_id = '".$std_id."' and job_id = ".$job_id;
        mysqli_query($connect,$query);
        echo '<script type="text/javascript">'; 
        echo 'alert("Succesfully selected");'; 
        echo 'window.location.href = "viewpost.php";';
        echo '</script>';
    }
}

?>
