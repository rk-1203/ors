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

    <!-- css stylesheets -->
    <link href="../HomePage/css/bootstrap.min.css" rel="stylesheet">
    <link href="../HomePage/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
    
		function show(shown ,hide1,hide2,hide3,hide4)
		{
			document.getElementById(shown).style.display="block";
			document.getElementById(hide1).style.display="none";
			document.getElementById(hide2).style.display="none";
			document.getElementById(hide3).style.display="none";
			document.getElementById(hide4).style.display="none";
			//document.getElementById(hide5).style.display="none";
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
    padding:80px 220px 120px 270px;
  }
  .pg3{
    padding:80px 250px 90px 270px;
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
<body data-spy="scroll" data-target=".navbar" data-offset="50">
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
            <li style="padding:0px 5px;"><a href=../developers/developers.php>Developers</a></li>
            <li style="padding:0px 5px;"><a href="#">Contact Us</a></li>
			<li style="padding:0px 5px;" class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" style="font-size:16px; color:white;"></i>Admin</a>
              <ul class="dropdown-menu">
                <li><a href="#" onclick = "return show('page1','page2','page3','page4')">Dashboard</a></li>
                <li><a href="#" onclick = "return show('page2','page1','page3','page4')">Change Password</a></li>
                <li><a href="../Admin/comappr.php">Company Approval</a></li>
                <li><a href="#" onclick = "return show('page3','page1','page4','page2')">View Student Details</a></li>
                <li><a href="../Admin/notify.php">Notifications</a></li>
                <li><a href="#" onclick = "return show('page4','page1','page3','page2')">Results</a></li>
                <li><a href="../logouts/logout.php">Log out</a></li>
              </ul>
            </li>
          </ul>
        </div> <!-- /.nav-collapse -->
      </div> <!-- /.container -->
    </div> <!-- /.navbar -->
    
    <div class = "bg">
      <div class = "pg1" id = "page1">
        <p>Welcome Admin</p>
        <form action = "adchpass.php" method = "POST">
      </div>
      <div class = "pg2" id = "page2" style="display : none; ">
        <div class = "chpass">
        <form action = "chpass.php" method = "POST">
        <label >Change Password</label><br />
        <input type = "password" name = "oldpass" placeholder = "   Old Password "style="font-size:20px;border:2px solid grey">
        <br />
        <input type = "password" name = "newpass" placeholder = "   New Password "style="font-size:20px;border:2px solid grey">
        <br />
        <input type = "password" name = "conpass" placeholder = "   Confirm Password "style="font-size:20px;border:2px solid grey">
        <br />
        <button class="button button1">Submit</button><br>
        </form>
        </div>
      </div>
<!--<nav class="navbar navbar-inverse" role="navigation" data-spy="affix" data-offset-top="700">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
     <a style="padding:15px 0px 5px 0px; font-size : 25px;" class="navbar-brand" href="../HomePage/index.html">Online Campus Recuitment</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="#myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li style="padding:0px 5px;"><a href="#section1">View Applied</a></li>
          <li style="padding:0px 5px;"><a href="#section2">Search New</a></li>
          <li style="padding:0px 5px;"><a href="#section3">Results</a></li>
          <li style="padding:0px 5px;"><a href="#page1">Dashboard</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>    -->
<div id="page3" class="pg3" style="display : none; ">
  <!--<div class = "pg3" id = "page2">-->
        <div class = "chpass2">
        <form action = "../Admin/std_det.php" method = "POST">
        <label style="color:black;">View Student Details</label>
        <h3 style="text-align:left"><b>View By Department</b></h3>
        <select name="dept" style = "font-size:20px;">
            <option disabled selected>Department</option>
    		<option value="Computer Science And Engineering">Computer Science And Engineering</option>
    		<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
    		<option value="Electrical Engineering">Electrical Engineering</option>
    		<option value="Mechanical Engineering">Mechanical Engineering</option>
    		<option value="Civil Engineering">Civil Engineering</option>
    		<option value="Metallurgical & Material Engineering">Metallurgical & Materials Engineering</option>
    		<option value="Chemical Engineering">Chemical Engineering</option>
    		<option value="Architecture And Planning">Architecture And Planning</option>
        </select>
        <br />
        <h3 style="text-align:left"><b>View By Year</b></h3>
        <select  name = "year" id = "year" style = "font-size:20px;" onmousedown="if(this.options.length>8){this.size=8;}"  onchange='this.size=0;' onblur="this.size=0;"></select>
        <script>
            var start = 2010;
            var end = new Date().getFullYear();
            var options = "";
            for(var year = start ; year <=end; year++){
              options += "<option>"+ year +"</option>";
            }
            document.getElementById("year").innerHTML = options;
        </script>
        <br />
        <button class="button button1">Submit</button><br>
        </form>
        </div>
</div>
<div id="page4" class="pg3" style="display : none; ">
  <!--<div class = "pg3" id = "page2">-->
        <div class = "chpass2">
        <form action = "../Admin/results.php" method = "POST">
        <label style="color:black;">Results</label>
        <h3 style="text-align:left"><b>View By Department</b></h3>
        <select name="dept1" style = "font-size:20px;">
            <option disabled selected>Department</option>
    		<option value="Computer Science And Engineering">Computer Science And Engineering</option>
    		<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
    		<option value="Electrical Engineering">Electrical Engineering</option>
    		<option value="Mechanical Engineering">Mechanical Engineering</option>
    		<option value="Civil Engineering">Civil Engineering</option>
    		<option value="Metallurgical & Material Engineering">Metallurgical & Materials Engineering</option>
    		<option value="Chemical Engineering">Chemical Engineering</option>
    		<option value="Architecture And Planning">Architecture And Planning</option>
        </select>
        <br />
        <h3 style="text-align:left"><b>View By Year</b></h3>
        <select  name = "year1" id = "year1" style = "font-size:20px;" onmousedown="if(this.options.length>8){this.size=8;}"  onchange='this.size=0;' onblur="this.size=0;"></select>
        <script>
            var start = 2010;
            var end = new Date().getFullYear();
            var options = "";
            for(var year = start ; year <=end; year++){
              options += "<option>"+ year +"</option>";
            }
            document.getElementById("year1").innerHTML = options;
        </script>
        <br />
        <button class="button button1">Submit</button><br>
        </form>
        </div>
</div>
</div>
    
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../HomePage/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
