<?php

include 'connection.inc.php';

function exists($name){
    global $connect;
    $query = "SELECT website from Company_details";
    $result = @mysqli_query($connect, $query);
    //$names = mysqli_fetch_array($result, mysqli_num);

    while($user = @mysqli_fetch_assoc($result)){
        if($user['website']==$name){
          return true;
        }
    }
    return false;
}

function check($name, $password){
    global $connect;
    $query = "SELECT password from Company_details where website='$name'";
    $result = @mysqli_query($connect, $query);
    $user = @mysqli_fetch_assoc($result);

    //$password = md5($password);
    if($user['password']==$password)
        return true;
    return false;
}

if(isset($_POST['username']) && isset($_POST['pass'])){
    $flag=0;
    $name = $_POST['username'];
    $query = "select HRname from Company_details where website ='$name'";
    $result = mysqli_query($connect,$query);
    $hrname = @mysqli_fetch_assoc($result);
    $hrname = $hrname['HRname'];
    $password = $_POST['pass'];
    if(!empty($name) && !empty($password)){
        if(exists($name)){
            if(check($name, $password)){
                $_SESSION['hrname']=$hrname;
                $_SESSION['compass'] = $password;
                $_SESSION['website'] = $name;
                header('Location: ../Dashboards/company.php');
            }
            else{
                $flag=1;
                $_SESSION['flagc']=$flag;
                header('Location: clogin.php');
            }
        }
        else
            header('Location: clogin.php');
    }
    else{
        header('Location: clogin.php');
    }
}
else{
    header('Location: clogin.php');
}


?>