<?php

include "../logins/connection.inc.php";

$prof = strtolower($_POST['pnprof']);
$type = strtolower($_POST['pntype']);
$cgpa = $_POST['pncgpa'];
//$limit = $_POST['pnlimit'];
//echo $cgpa;
$website = $_SESSION['website'];

$_SESSION['flag']=0;

if(!empty($prof) && !empty($type) && !empty($cgpa)){
    if(($type == "intern" || $type == "ftt") and is_numeric($cgpa))
    {
    $query = "select * from Jobs where profile='$prof' and type='$type' and company='$website'";
    
    $query_run = @mysqli_query($connect, $query);
    
    if(mysqli_num_rows($query_run)>0){
        
        $_SESSION['flag']=1;
        //header('Location: error.php');
        
    }
    else{
        
        $query = "Insert into Jobs(company, profile, type, limits, cgpa) values('".$website."', '".$prof."', '".$type."', '".$limit."', '".$cgpa."')" ;
        
        $query_run = @mysqli_query($connect, $query);
        $_SESSION['flag']=2;
        //header('Location: ../Dashboards/comapny.php');
        
    }
    }
    else
    {
        $_SESSION['flag']=3;
    }
    }
else
    $_SESSION['flag']=-1;

header('Location: ../Dashboards/company.php#section2');

?>
