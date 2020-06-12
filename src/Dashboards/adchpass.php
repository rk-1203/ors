<?php
    
      include "../logins/connection.inc.php";
      $corpass = $_SESSION['adpass'];
      $oldpass = $_POST['oldpass'];
      $newpass = $_POST['newpass'];
      $conpass = $_POST['conpass'];
      $_SESSION['chpflag']=1;
      //if(($newpass != $conpass) or empty($newpass) or empty($conpass))
        //echo 'Invalid Details.Re-enter';
      //echo "Hello";
      if($oldpass !=$corpass)
      {
        echo "<script>alert('Sorry!!Wrong Old Password Entered..Logging out for Security reasons');window.location.href='../logouts/logout.php';
        </script>";
      }
      else if(($newpass == $conpass) and !empty($newpass) and !empty($conpass))
      {
      	$newwpass = $newpass;
      	$newpass = md5($newpass);
        $user_id = $_SESSION['adm_name'];
        $query = "Update Admin set password = '$newpass' where username = '$user_id'";
        if($query_run = mysqli_query($connect,$query))
        {
            //echo 'Changed Succesfully';
            //$_SESSION['chpflag'] = 0;
            $_SESSION['adpass'] = $newwpass;
            echo "<script>alert('Password Changed Succesfully');window.location.href='admin.php';
        </script>";
            
            //header("Location:student.php");
        }
        else {
          echo "<script>alert('Error changing Password..');window.location.href='admin.php';
        </script>";
      }}
      else {
        echo "<script>alert('Error changing password..');window.location.href='admin.php';
        </script>";
      }
      
?>