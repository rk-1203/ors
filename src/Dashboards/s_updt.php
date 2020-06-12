<?php

include "../logins/connection.inc.php";

if(isset($_POST['update']) && $_POST['flag']==0)
{
 $_POST['flag']=-1; 
	$i=$_SESSION['user_id'];
	if(file_exists($_FILES['myfile']['tmp_name']) && is_uploaded_file($_FILES['myfile']['tmp_name'])) 
	{
    $type=$_FILES['myfile']['type'];
	  //echo $type;
		if($type=='image/png' or $type=='image/jpeg' or $type=='image/jpg')
		{
		  $tmpfile=$_FILES['myfile']['tmp_name'];
		  $location= "../Student/photos/".$i.".jpeg";
		  if (file_exists($location))
		    unlink($location);
			move_uploaded_file($tmpfile,$location);
			echo "<center><b>Uploaded</b></center><br>";
		}
		else
		{
		  // $type;
		  echo '<center><font color="red">UPLOAD ERROR...ONLY .PNG AND .JPEG SUPPORTED </font></center><br>';
		  //header("location:register.php");
		}
	}
	if(file_exists($_FILES['res']['tmp_name']) && is_uploaded_file($_FILES['res']['tmp_name'])) 
	{
		$type=$_FILES['res']['type'];
		if($type=='text/pdf' or $type=='application/pdf')
		{
		  	$tmpfile=$_FILES['res']['tmp_name'];
		    $location= "../Student/resume/".$i.".pdf";
		    if (file_exists($location))
		      unlink($location);
				move_uploaded_file($tmpfile,$location);
				echo "<center><b>Uploaded</b></center><br>";
		}
		else
		{
		  //echo $type;
		  echo '<center><font color="red">UPLOAD ERROR...ONLY .PDF SUPPORTED</font></center><br>';
		  //header("location:register.php");
		}
	}
  $fn = $_POST['fname'];
  $mn = $_POST['mname'];
  $ln = $_POST['lname'];
  $g = $_POST['gender'];
  $e = $_POST['email'];
  $c = $_POST['contact_no'];
  $ct = $_POST['city'];
  $a = $_POST['address'];
  $d = $_POST['dob'];
  $m = $_POST['matric'];
  $et = $_POST['enter'];
  $y = $_POST['yop'];
  $dp = $_POST['dept'];
  $c1 = $_POST['cg1'];
	$i=strtoupper($i);
	$query="UPDATE Student_details SET `fname`='".$fn."',`mname`='".$mn."',`lname`='".$ln."',`email`='".$e."',`sex`='".$g."',`contact_no`='".$c."',`city`='".$ct."',`address`='".$a."',`dob`='".$d."',`X_aggr`='".$m."',`XII_aggr`='".$et."',`yop`='".$y."',`dept`='".$dp."',`cg1`='".$c1."' WHERE college_id='".$_SESSION['user_id']."'";
	//$query="INSERT INTO Student_details values ('".$i."', '".$p."', '".$fn."', '".$mn."', '".$ln."', '".$g."', '".$e."', '".$c."', '".$ct."', '".$a."', '".$d."', '".$m."', '".$et."', '".$y."', '".$dp."', '".$c1."')";
	mysqli_query($connect,$query);
	echo '<script type="text/javascript">'; 
  echo 'alert("Information updated successfully..!!");'; 
  echo 'window.location.href = "../Dashboards/stprof.php";';
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
              echo " ".$_SESSION['user_id']; ?></a>
              <ul class="dropdown-menu">
                <li><a href="student.php">Dashboard</a></li>
                <li><a href="stprof.php">Profile</a></li>
                <li><a href="../logouts/logout.php">Log out</a></li>
              </ul>
            </li>
          </ul>
        </div> <!-- /.nav-collapse -->
      </div> <!-- /.container -->
    </div> <!-- /.navbar -->
    <div></br></br></br>
  			<?php
      		//foreach ($_SESSION as $key => $value) {
            //Secho "Key: $key; Value: $value\n";}
          $i=$_SESSION['user_id'];
          $connect=mysqli_connect('localhost','ritesh1203','');
        	mysqli_select_db($connect,'ors');
        	$query = "select * from Student_details where college_id='".$i."'";
        	$result=mysqli_query($connect,$query);
        	$row = mysqli_fetch_assoc($result);
        	//foreach ($row as $key => $value) {
            //echo "Key: $key; Value: $value\n";}
        	
        	$i = $row['college_id'];
          $p = $row['password'];
          //$cp = $row['cpass'];
          $fn = $row['fname'];
          $mn = $row['mname'];
          $ln = $row['lname'];
          $g = $row['sex'];
          $e = $row['email'];
          $c = $row['contact_no'];
          $ct = $row['city'];
          $a = $row['address'];
          $d = $row['dob'];
          $m = $row['X_aggr'];
          $et = $row['XII_aggr'];
          $y = $row['yop'];
          $dp = $row['dept'];
          $c1 = $row['cg1'];
          $flag=0;
        ?>
        	<div id="page" class="container">
        			<div height=900px width=600px style="border-radius:10px;"><br>
        				<center><h2>Update your Information</h2><br>
        					<form method="POST" action="s_updt.php" enctype="multipart/form-data" id="usrform">
        					<input type="text" name="fname" value="<?php echo $row['fname'];?>" placeholder="First Name" required>
    							<?php
    								//$flag=0;
    								if(!empty($row["fname"]))
    								{
    									if(!preg_match("/^[a-zA-Z ]*$/",$row['fname']))
    									{
    										echo '<font color="red">Only letters and white space allowed</font><br>';
    										$flag=1;		  
    									}
    								}	
    							?>
    							<input type="text" name="mname" value="<?php echo $row['mname'];?>" placeholder="Middle Name">
    							<?php
    								//$flag=0;
    								if(!empty($row["fname"]))
    								{
    									if(!preg_match("/^[a-zA-Z ]*$/",$row['fname']))
    									{
    										echo '<font color="red">Only letters and white space allowed</font><br>';
    										$flag=1;		  
    									}
    								}	
    							?>
    							<input type="text" name="lname" value="<?php echo $row['lname'];?>" placeholder="Last Name">
    							<?php
    								//$flag=0;
    								if(!empty($row["lname"]))
    								{
    									if(!preg_match("/^[a-zA-Z ]*$/",$row['lname']))
    									{
    										echo '<font color="red">Only letters and white space allowed</font><br>';
    										$flag=1;		  
    									}
    								}	
    							?>
    							GENDER</br></br>
    							<select name="gender" style="padding: 15px;border: 1px solid #ccc;border-radius: 3px;margin-bottom: 10px;width: 26%;box-sizing: border-box;color: #2C3E50;" required>
            				<option value="Male" <?php if( $row['sex']=='Male') echo "selected='selected'";?>>Male</option>
            				<option value="Female" <?php if($row['sex']=='Female') echo "selected='selected'";?>>Female</option>
                  </select>
    							<input type="text" name="email" value="<?php echo $row['email']; ?>" placeholder="Email" required/><span>
                  <?php 
                    if(empty($row['email']) || !preg_match("/[a-z]*@[a-z]*.[a-z]*/",$e))
                    {
                      $flag=1;
                      echo 'Not a valid email Address';
                    }
                  ?></span>
                  <input type="text" name="contact_no" maxlength="10" value="<?php echo $row['contact_no']; ?>" placeholder="Contact No" required /><span>
                  <?php 
                    if(empty($row['contact_no']) || !preg_match("/[0-9]*/",$c)|| strlen($c)!=10)
                    {
                      $flag=1;
                      echo 'Not a valid contact number';
                    }
                  ?></span>
                  <input type="text" name="city" value="<?php echo $row['city']; ?>" placeholder="City" required/><span>
                  <?php 
                    if(empty($row['city']) ||  !preg_match("/^[a-zA-Z]*$/",$fn))
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
                  ?></span>
                  </br>
                  DATE OF BIRTH</br></br>
                  <input type="date" name="dob" value="<?php echo $row['dob']; ?>" placeholder="Date of Birth" required ><span>
                  <?php 
                    if(empty($row['dob']))
                    {
                      $flag=1;
                      echo "This field is required";
                    }
                  ?></span></br></br>
    							<input type="button" id="loadFileXml" value="Upload Photo" style="padding: 15px;border: 1px solid #ccc;border-radius: 3px;margin-bottom: 10px;width: 26%;box-sizing: border-box;color: #2C3E50;" onclick="document.getElementById('myfile').click();" />
                  <input type="file" style="display:none;"  id = "myfile" name="myfile"/></br>
    							<input type="text" name="matric" value="<?php echo $row['X_aggr']; ?>" placeholder="10th Aggregrate Percentage" required/><span>
                  <?php 
                    if((empty($row['X_aggr']) ||  !preg_match("/([0-9]{2}\.[0-9]{1,2})|([0-9]{2})/",$m)))
                    {
                      $flag=1;
                      echo 'Not valid marks';
                    }
                  ?></span>
                  <input type="text" name="enter" value="<?php echo $row['XII_aggr']; ?>" placeholder="12th Aggregrate Percentage" required /><span>
                  <?php 
                    if((empty($row['XII_aggr']) ||  !preg_match("/([0-9]{2}\.[0-9]{1,2})|([0-9]{2})/",$et)))
                    {
                      $flag=1;
                      echo 'Not valid marks';
                    }
                  ?></span>
                  <input type="text" name="clg" value="Malaviya National Institue of Technology Jaipur" placeholder="College Name" readonly/>
                  <input type="text" name="yop" value="<?php echo $row['yop']; ?>" placeholder="Year of Passing" required/><span>
                  <?php
                    $curyear = date("Y");
                    $stry = (string)$curyear;
                    if((empty($row['yop']) ||  !preg_match("/[2-9]{1}[0-9]{3}/",$stry) || $y<$curyear || strlen($y)!=4))
                    {
                      $flag=1;
                      echo 'Not a valid Year of Passing';
                    }
                  ?></span>
                  <select name="dept" style="padding: 15px;border: 1px solid #ccc;border-radius: 3px;margin-bottom: 10px;width: 26%;box-sizing: border-box;color: #2C3E50;" required>
                    <option disabled selected>Department</option>
            				<option value="Computer Science And Engineering" <?php if($row['dept']=='Computer Science And Engineering') echo "selected='selected'";?>>Computer Science And Engineering</option>
            				<option value="Electronics and Communication Engineering" <?php if($row['dept']=='Electronics and Communication Engineering') echo "selected='selected'";?>>Electronics and Communication Engineering</option>
            				<option value="Electrical Engineering" <?php if($row['dept']=='Electrical Engineering') echo "selected='selected'";?>>Electrical Engineering</option>
            				<option value="Mechanical Engineering" <?php if($row['dept']=='Mechanical Engineering') echo "selected='selected'";?>>Mechanical Engineering</option>
            				<option value="Civil Engineering" <?php if($row['dept']=='Civil Engineering') echo "selected='selected'";?>>Civil Engineering</option>
            				<option value="Metallurgical & Material Engineering" <?php if($row['dept']=='Metallurgical & Materials Engineering') echo "selected='selected'";?>>Metallurgical & Materials Engineering</option>
            				<option value="Chemical Engineering" <?php if($row['dept']=='Chemical Engineering') echo "selected='selected'";?>>Chemical Engineering</option>
            				<option value="Architecture And Planning" <?php if($row['dept']=='Architecture And Planning') echo "selected='selected'";?>>Architecture And Planning</option>
                  </select><span>
                  <?php 
                    if($row['dept']!="Computer Science And Engineering" && $row['dept']!="Electronics and Communication Engineering" && $row['dept']!="Electrical Engineering" && $row['dept']!="Mechanical Engineering" && $row['dept']!="Metallurgical & Materials Engineering" && $row['dept']!="Civil Engineering" && $row['dept']!="Civil Engineering" && $row['dept']!="Chemical Engineering" && $row['dept']!="Architecture And Planning" )
                    {
                      $flag=1;
                      echo 'Select an option';
                    }
                  ?></span>
                  <input type="text" name="cg1" value="<?php if(isset($row['cg1'])) echo $row['cg1']; ?>" placeholder="Current CGPA" required/><span>
                  <?php 
                    if(empty($row['cg1']) || !preg_match("/([0-9]{1}\.[0-9]{1,2})|([0-9]{1})/",$c1))
                    {
                      $flag=1;
                      echo 'Enter Current CGPA';
                    }
                  ?></span>
                  <input type="button" id="loadFileXml" value="Upload Resume" style="padding: 15px;border: 1px solid #ccc;border-radius: 3px;margin-bottom: 10px;width: 26%;box-sizing: border-box;color: #2C3E50;" onclick="document.getElementById('res').click();" />
                  <input type="file" style="display:none;"  id = "res" name="res"/></br>
                  <?php $_POST['flag']=$flag; ?>
						      <button type="submit" class="button button2" name="update" form="usrform">Save Changes</button>
        					</form>	
        					<br>
        				</center>	
        				</div>
        		</div>
        	</div>
    
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../HomePage/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
