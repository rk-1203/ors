<?php

include 'connection.inc.php';

function exists($id){
    global $connect;
    $query = "SELECT username from Admin";
    $result = @mysqli_query($connect, $query);
    //$ids = mysqli_fetch_array($result, mysqli_num);

    while($user = @mysqli_fetch_assoc($result)){
        if($user['username']==$id){
          return true;
        }
    }
    return false;
}

function check($id, $password){
    global $connect;
    $query = "SELECT password from Admin where username='$id'";
    $result = @mysqli_query($connect, $query);
    $user = @mysqli_fetch_assoc($result);

    $password = md5($password);
    if($user['password']==$password)
        return true;
    return false;
}

if(isset($_POST['username']) && isset($_POST['pass'])){
    $id = $_POST['username'];
    $password = $_POST['pass'];
    $flag=0;
    if(!empty($id) && !empty($password)){
        if(exists($id)){
            if(check($id, $password)){
                //$query = "select fname as Name from Student_details where '$id'=college_id";
                //$result = @mysqli_query($connect, $query);
                //$user = mysqli_fetch_assoc($result);
                $_SESSION['adm_name']=$id;
                //$_SESSION['user_id']=$id;
                $_SESSION['adpass']=$password;
                header('Location: ../Dashboards/admin.php');
            }
            else{
                //echo  "THE PASSWORD IS INCORRECT. TRY AGAIN.";
                //echo "<script type= 'text/javascript'> alert('$msg');</script>";
                //$flag=1;
                //$_SESSION['flag']=$flag;
                echo '<script type="text/javascript">'; 
                echo 'alert("Incorrect Username/Password Combination");'; 
                echo 'window.location.href = "alogin.php";';
                echo '</script>';
                //echo "<script type= 'text/javascript'> alert('The Password is incorrect');</script>";
                
                //header('Location: slogin.php');
            }
        }
        else
        {
            echo '<script type="text/javascript">'; 
            echo 'alert("Incorrect Username");'; 
            echo 'window.location.href = "alogin.php";';
            echo '</script>';
        }
    }
    else{
        echo '<script type="text/javascript">'; 
        echo 'alert("Incorrect Username/Password Combination");'; 
        echo 'window.location.href = "alogin.php";';
        echo '</script>';
}
}
else{
    header('Location: alogin.php');
}


?>