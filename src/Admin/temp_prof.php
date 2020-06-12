<?php

include "../logins/connection.inc.php";

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
<body data-spy="scroll" data-target=".navbar" data-offset="50" style = "background-image: url('https://ak4.picdn.net/shutterstock/videos/1143424/thumb/1.jpg' );height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;">
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
              echo " Admin"; ?></a>
              <ul class="dropdown-menu">
                <li><a href="../Dashboards/admin.php">Dashboard</a></li>
                <li><a href="../logouts/logout.php">Log out</a></li>
              </ul>
            </li>
          </ul>
        </div> <!-- /.nav-collapse -->
      </div> <!-- /.container -->
    </div> <!-- /.navbar -->
      <div>
    			<?php
      		//foreach ($_SESSION as $key => $value) {
            //echo "Key: $key; Value: $value\n";}
        	//$h=$_SESSION['hrname'];
        	$w=$_POST['website'];
        	echo $w;
        	$query = "select * from temp_Company_details where website='".$w."'";
        	$result=mysqli_query($connect,$query);
          if(mysqli_num_rows($result)==0)	
            echo"company not found in database";
          $row = mysqli_fetch_assoc($result) ;
          //foreach ($row as $key => $value) {
            //echo "Key: $key; Value: $value\n";}
            
          //$query = "select * from HR_details where HRname='".$h."'";
        	//$result=mysqli_query($connect,$query);
          //if(mysqli_num_rows($result)==0)	
            //echo"company not found in database";
          //$row1 = mysqli_fetch_assoc($result) ;
          //foreach ($row1 as $key => $value) {
            //echo "Key: $key; Value: $value\n";}
            ?><!--
      		<div class="pic"  id="info1" style="margin-left:300px;margin-top:210px;">
      			<img src="/Project/Student/photos/<?php echo $_SESSION['user_id'].'.jpeg';?>" style=" max-width: 100%;max-height: 100%;border-radius:10px;">
      			<h3><?php echo $row['name'];?></h3>
      			<a href="c_updt.php"><button style="border:1px solid grey;" class="button button2">UPDATE INFO</button></a>
      		</div>-->
      		<div style="float:left;width:730px">
        		<div class="w3-container"  style="float:left;margin-left:250px;margin-top:120px">
        		  <h2>HR Details</h2></br>
              <p><i class="fa fa-user-circle fa-fw w3-margin-right w3-large w3-text-teal" aria-hidden="true"></i><b>NAME : </b><?php echo " ".$row['HRname'];?></p>
              <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><b>EMAIL : </b><?php echo " ".$row['email'];?></p>
              <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><b>CONTACT : </b><?php echo " ".$row['contact'];?></p>
              <p><i class="fa fa-linkedin-square fa-fw w3-margin-right w3-large w3-text-teal" aria-hidden="true"></i><b>LINKEDIN PROFILE : </b><?php echo " ".$row['linkedin'];?></p>
              <hr>
            </div>
          </div>
          <div class="w3-container" style="float:left;margin-top:120px;margin-left:-10px;margin-right:300px">
            <h2>Company Details</h2></br>
            <p><i class="fa fa-building-o fa-fw w3-margin-right w3-large w3-text-teal"></i><b>COMPANY NAME : </b><?php echo " ".$row['name'];?></p>
            <p><i class="fa fa-globe fa-fw w3-margin-right w3-large w3-text-teal"></i><b>WEBSITE : </b><?php echo " ".$row['website'];?></p>
            <p><i class="fa fa-id-badge fa-fw w3-margin-right w3-large w3-text-teal"></i><b>PROFILE : </b><?php echo" ".$row['profile'];?></p>
            <p><i class="fa fa-gift fa-fw w3-margin-right w3-large w3-text-teal"></i><b>OFFERINGS : </b><?php echo" ".$row['offerings'];?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal" aria-hidden="true"></i><b>ADDRESS : </b><?php echo " ".$row['address'];?></p>
            <p><i class="fa fa-map-marker fa-fw w3-margin-right w3-large w3-text-teal" aria-hidden="true"></i><b>CITY : </b><?php echo " ".$row['city'];?></p>
            <hr>
          </div>
  </div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../HomePage/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>