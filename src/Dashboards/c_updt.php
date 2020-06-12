<?php

include "../logins/connection.inc.php";

if(isset($_POST['update']) && $_POST['flag']==0)
{
    //foreach ($row1 as $key => $value) {
        //echo "Key: $key; Value: $value</br>";}
    
    $name = $_POST['name'];
    $prof = $_POST['profile'];
    $off = $_POST['off'];
    $ct = $_POST['city'];
    $a = $_POST['address'];
    $hrname = $_POST['HRname'];
    $e =$_POST['email'];
    $c = $_POST['contact'];
    $ln = $_POST['linkedin'];
	$query1="UPDATE Company_details SET `name`='".$name."',`profile`='".$prof."',`offerings`='".$off."',`city`='".$ct."',`address`='".$a."',`HRname`='".$hrname."' WHERE website='".$_SESSION['website']."'";
	$query2="UPDATE HR_details SET `HRname`='".$hrname."',`email`='".$e."',`contact`='".$c."',`linkedin`='".$ln."' WHERE HRname='".$_SESSION['hrname']."'";
	//$query="INSERT INTO Student_details values ('".$i."', '".$p."', '".$fn."', '".$mn."', '".$ln."', '".$g."', '".$e."', '".$c."', '".$ct."', '".$a."', '".$d."', '".$m."', '".$et."', '".$y."', '".$dp."', '".$c1."')";
	mysqli_query($connect,$query1);
	mysqli_query($connect,$query2);
	$_SESSION['hrname']=$hrname;
	echo '<script type="text/javascript">'; 
    echo 'alert("Information updated successfully..!!");'; 
    echo 'window.location.href = "../Dashboards/cprof.php";';
    echo '</script>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Script Tutorials" />
    <meta name="description" content="Responsive Websites Using BootStrap - demo page">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Welcome to Online Recruitment System</title>
    <link href="/Project/HomePage/css/style4.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css stylesheets -->
    <link href="../HomePage/css/bootstrap.min.css" rel="stylesheet">
    <link href="../HomePage/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
    
		function show(shown,hide1,hide2,hide3,hide4,hide5)
		{
			document.getElementById(shown).style.display="block";
			document.getElementById(hide1).style.display="none";
			document.getElementById(hide2).style.display="none";
			document.getElementById(hide3).style.display="none";
			document.getElementById(hide4).style.display="none";
			document.getElementById(hide5).style.display="none";
			return false;
		}
	</script>
	<script>
  $(function(){

    $('.navbar-right li').click(function(){ 
      $(this).addClass('active').siblings().removeClass('active');
    }); 
  })
</script>
	<style>

  body, html {
    height: 100%;
    margin: 0;
}
  .fit { /* set relative picture size */
    max-width: 100%;
    max-height: 100%;
  }
  .center {
    display: block;
    margin: auto;
  }
  ul.dropdown-menu{
  background-color: gray;
}
  .pg1{
    padding:250px 0px ;
    text-align: center;
    font-size: 70px;
  }
  .chpass{
    font-size:50px;
    box-sizing: border-box;
    font-family: courier;
    width:100%;
    border: 3px solid black;
    padding: 40px 35px 45px 35px;
    text-align: center;
  }
  .chpass2{
    font-size:50px;
    box-sizing: border-box;
    font-family: courier;
    width:100%;
    border: 3px solid black;
    padding: 25px 35px 42px 35px;
    text-align: center;
  }
  .pg2{
    padding:80px 220px 150px 270px;
  }
  .pg3{
    padding:80px 250px 100px 270px;
    color:white;
  }
  .bg{
    background-image:url("../HomePage/slide/back7.jpg" );
    background-position: center;
    background-size: cover;
    height:100%;
  }
  .button1{
    background-color: grey;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 25px;
    margin: 4px 2px;
    cursor: pointer;
    width: 100%;
    font-family: courier;
    border : 2px solid black;
  }
  .affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
  .navbar {
    border-radius: 0;
    margin-bottom: 0px;
}

  .affix ~ .container-fluid {
     position: relative;
     top: 50px;
  }

</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" style = "background-image: url('https://ak4.picdn.net/shutterstock/videos/1143424/thumb/1.jpg' );background-size: 100% 300%;background-repeat: no-repeat;">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" language="JavaScript">
  function set_body_height() { // set body height = window height
    $('body').height($(window).height());
  }
  $(document).ready(function() {
    $(window).bind('resize', set_body_height);
    set_body_height();
  });
</script>
	
    <!-- fixed navigation bar -->
	
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#b-menu-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a style="padding:15px 0px 5px 0px; font-size : 25px;" class="navbar-brand" href="../HomePage/index.html">Online Campus Recuitment</a>
        </div>
        <div class="collapse navbar-collapse" id="b-menu-1">
          <ul class="nav navbar-nav navbar-right">
            <li style="padding:0px 5px;"><a href="../HomePage/index.html">Home</a></li>
            <li style="padding:0px 5px;"><a href="#">Developers</a></li>
            <li style="padding:0px 5px;"><a href="#">Contact Us</a></li>
			<li style="padding:0px 5px;" class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" style="font-size:16px; color:white;"></i><?php
              echo " ".$_SESSION['website']; ?></a>
              <ul class="dropdown-menu">
                <li><a href="company.php">Dashboard</a></li>
                <li><a href="cprof.php">Profile</a></li>
                <li><a href="../logouts/logout.php">Log out</a></li>
              </ul>
            </li>
          </ul>
        </div> <!-- /.nav-collapse -->
      </div> <!-- /.container -->
    </div> <!-- /.navbar -->
    <div></br></br></br>
  		<?php
        $h=$_SESSION['hrname'];
        $w=$_SESSION['website'];
        $query = "select * from Company_details where HRname='".$h."' and website='".$w."'";
        $result=mysqli_query($connect,$query);
        if(mysqli_num_rows($result)==0)	
        {
            echo"company not found in database";
        }
        $row = mysqli_fetch_assoc($result) ;
        //foreach ($_SESSION as $key => $value) {
            //echo "Key: $key; Value: $value</br>";} echo "</br>";
            
        $query = "select * from HR_details where HRname='".$h."'";
        $result=mysqli_query($connect,$query);
        if(mysqli_num_rows($result)==0)	
           echo"company not found in database";
        $row1 = mysqli_fetch_assoc($result) ;
        //foreach ($row1 as $key => $value) {
            //echo "Key: $key; Value: $value</br>";}
        
        $name = $row['name'];
        $prof = $row['profile'];
        $off = $row['offerings'];
        $ct = $row['city'];
        $a = $row['address'];
        $hrname = $row1['hrname'];
        $e =$row1['email'];
        $c = $row1['contact'];
        $ln = $row1['linkedin'];
        $flag=0;
        ?>
	    <div id="page" class="container">
			<div height=900px width=600px style="border-radius:10px;"><br>
    			<center><h2>Update Company Information</h2><br>
    			<form method="POST" action="c_updt.php"  id="usrform">
        			<input type="text" name="name" value="<?php echo $row['name'];?>" placeholder="Company Name" required>
        			<?php
        				$flag=0;
        				if(!empty($row["name"]))
        				{
        					if(!preg_match("/^[a-zA-Z ]*$/",$row['name']))
        					{
        						echo '<font color="red">Only letters and white space allowed</font><br>';
        						$flag=1;		  
        					}
        				}	
        			?>
        			<input type="text" name="profile" value="<?php echo $row['profile'];?>" placeholder="Profile">
        			<?php
        				$flag=0;
        				if(!empty($row["profile"]))
        				{
        					if(!preg_match("/^[a-zA-Z ]*$/",$row['profile']))
        					{
        						echo '<font color="red">Only letters and white space allowed</font><br>';
        						$flag=1;		  
        					}
        				}	
        			?>
        			OFFERING</br></br>
        			<select name="off" style="padding: 15px;border: 1px solid #ccc;border-radius: 3px;margin-bottom: 10px;width: 26%;box-sizing: border-box;color: #2C3E50;" required>
            				<option value="Domestic" <?php if( $row['off']=='Domestic') echo "selected='selected'";?>>Domestic</option>
            				<option value="International" <?php if($row['off']=='International') echo "selected='selected'";?>>International</option>
                    </select>
                    <input type="text" name="city" value="<?php echo $row['city']; ?>" placeholder="City" required/><span>
                    <?php 
                        if(empty($row['city']) ||  !preg_match("/^[a-zA-Z]*$/",$ct))
                        {
                          $flag=1;
                          echo 'Not a valid City Name';
                        }
                    ?></span>
                    <textarea name="address" placeholder="Address" required><?php echo $row['address']; ?></textarea><span>
                    <?php 
                        if(empty($row['address']))
                        {
                          $flag=1;
                          echo 'This field is required';
                        }
                    ?></span></br>
                    <h2>Update HR Information</h2></br>
                    <input type="text" name="HRname" value="<?php echo $row['HRname'];?>" placeholder="Name" required>
        			<?php
        				$flag=0;
        				if(!empty($row["HRname"]))
        				{
        					if(!preg_match("/^[a-zA-Z ]*$/",$row['HRname']))
        					{
        						echo '<font color="red">Only letters and white space allowed</font><br>';
        						$flag=1;		  
        					}
        				}	
        			?>
        			<input type="text" name="email" value="<?php echo $row1['email']; ?>" placeholder="Email" required/><span>
                    <?php 
                    if(empty($row1['email']) || !preg_match("/[a-z]*@[a-z]*.[a-z]*/",$e))
                    {
                      $flag=1;
                      echo 'Not a valid email Address';
                    }
                    ?></span>
                    <input type="text" name="contact" maxlength="10" value="<?php echo $row1['contact']; ?>" placeholder="Contact No" required /><span>
                    <?php 
                        if(empty($row1['contact']) || !preg_match("/[0-9]*/",$c)|| strlen($c)!=10)
                        {
                          $flag=1;
                          echo 'Not a valid contact number';
                        }
                    ?></span>
                    <?php $_POST['flag']=$flag; ?>
                    <input type="text" name="linkedin" value="<?php echo $row1['linkedin']; ?>" placeholder="Linkedin profile" required /></br>
                    <button type="submit" class="button button2" name="update" form="usrform">Save Changes</button>
                </form><br>
        		</center>	
            </div>
        </div>
    </div>
    
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../HomePage/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
