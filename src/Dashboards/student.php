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
    
		function show(shown ,hide1,hide2,hide3,hide4,hide5)
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
    padding:80px 0px ;
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
            <li style="padding:0px 5px;"><a href="../developers/developers.php">Developers</a></li>
            <li style="padding:0px 5px;"><a href="#">Contact Us</a></li>
			<li style="padding:0px 5px;" class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" style="font-size:16px; color:white;"></i><?php
              echo " ".$_SESSION['user_id']; ?></a>
              <ul class="dropdown-menu">
                <li><a href="#" onclick = "return show('page1','page2','page3','page4','page5','page6')">Dashboard</a></li>
                <li><a href="stprof.php" >Profile</a></li>
                <li><a href="#" onclick = "return show('page2','page1','page3','page4','page5','page6')">Change Password</a></li>
                <li><a href="#" onclick = "return show('page3','page1','page2','page4','page5','page6')">View Applied</a></li>
                <li><a href="#" onclick = "return show('page4','page1','page3','page2','page5','page6')">Search New Vacancy</a></li>
                <li><a href="#" onclick = "return show('page5','page1','page3','page4','page2','page6')">Results</a></li>
                <li><a href="../logouts/logout.php">Log out</a></li>
              </ul>
            </li>
          </ul>
        </div> <!-- /.nav-collapse -->
      </div> <!-- /.container -->
    </div> <!-- /.navbar -->
    
    <div class = "bg">
      <div class = "pg1" id = "page1">
        <p>Welcome <?php echo $_SESSION['username']?></p>
        
        <center><div id="sidebar" style="color:white;border:2px solid black;width:50%;height:30%;background-image: url('http://hddesktopwallpapers.in/wp-content/uploads/2015/06/Plain-Wallpapers-HD-A21.jpg' );background-size: 100% 300%;background-repeat: no-repeat;">
    			<div class="box1">
    				
    				<h2 style="font-size:30px; font-family:'comic sans';">Announcement</h2>
    				<ul>
    					<marquee style="height: 235px;" behavior="scroll" direction="up" scrollamount="2" onMouseOver="this.stop()" onMouseOut="this.start()">
    						
    							<?php
    							$query="select * from notifications";
                	$query_run=@mysqli_query($connect,$query);
                	$num=mysqli_num_rows($query_run);
    							for($i=0;$i<$num;$i++)
    							{
    							  $row1=mysqli_fetch_array($query_run);
    							?> 
    							<div style="font-size:15px"><?php //echo $row1['date']->format('Y-m-d');
  
    							echo '<li style="text-align:center">'.date($row1['date']).' : </li>'; 
    							?>
    							<p style="font-family:'Times New Roman';"><?php echo '<li style="text-align:center">'.$row1['notify'].'</li>'; ?>  </p>
    							</div>
    						<?php
    						}     
    						?>
    				</marquee>	
    				</ul>
    			</div>
    		</div></center>
      </div>
      <div class = "pg2" id = "page2" style="display : none; ">
        <div class = "chpass">
        <form action = "chpass.php" method = "POST">
        <label >Change Password</label><br />
        <input type = "text" name = "oldpass" placeholder = "   Old Password "style="font-size:20px;border:2px solid grey">
        <br />
        <input type = "text" name = "newpass" placeholder = "   New Password "style="font-size:20px;border:2px solid grey">
        <br />
        <input type = "text" name = "conpass" placeholder = "   Confirm Password "style="font-size:20px;border:2px solid grey">
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
        <form action = "../Student/viewapp.php" method = "POST">
        <label style="color:black;">View Applied Vacancy</label>
        <h3 style="text-align:left"><b>View By Profile</b></h3>
        <input type = "text" name = "vbprof" placeholder = "   Profile "style="font-size:20px;border:2px solid grey">
        <br />
        <h3 style="text-align:left"><b>View By Type</b></h3>
        <input type = "text" name = "vbtype" placeholder = "   Type(Intern/FTT) "style="font-size:20px;border:2px solid grey">
        <br />
        <button class="button button1">Submit</button><br>
        </form>
        </div>
</div>
<div id="page4" class="pg3" style="display : none; ">
  <!--<div class = "pg3" id = "page2">-->
        <div class = "chpass2">
        <form action = "../Student/searchnew.php" method = "POST">
        <label style="color:black;">Search New Vacancy</label>
        <h3 style="text-align:left"><b>Search By Profile</b></h3>
        <input type = "text" name = "sbprof" placeholder = "   Profile "style="font-size:20px;border:2px solid grey">
        <br />
        <h3 style="text-align:left"><b>Search By Type</b></h3>
        <input type = "text" name = "sbtype" placeholder = "   Type(Intern/FTT) "style="font-size:20px;border:2px solid grey">
        <br />
        <button class="button button1">Submit</button><br>
        </form>
        </div>
</div>
<div id="page5" class="pg3" style="display : none; ">
  <!--<div class = "pg3" id = "page2">-->
        <div class = "chpass2">
        <form action = "../Student/results.php" method = "POST">
        <label style="color:black;">Results</label>
        <h3 style="text-align:left"><b>Results By Profile</b></h3>
        <input type = "text" name = "rbprof" placeholder = "   Profile "style="font-size:20px;border:2px solid grey">
        <br />
        <h3 style="text-align:left"><b>Results By Type</b></h3>
        <input type = "text" name = "rbtype" placeholder = "   Type(Intern/FTT) "style="font-size:20px;border:2px solid grey">
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
