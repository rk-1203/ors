

<!DOCTYPE html>

<html>

	<head>
		
		<link rel="stylesheet" href="../HomePage/css/bootstrap.min.css"/>		<!-- Bootstrap -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>	<!-- Font-Awesome-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="main.css"/>
<link rel="stylesheet" type="text/css" href="animate.css"/>
		<script> 
		$(document).ready(function() {
		$("#me").addClass("animated slideInUp");
		$("#aquib").addClass("animated slideInDown");
		$("#roshan").addClass("animated slideInDown");
		});
		</script> 
	</head>
	






	<body>
		 <div class="navbar navbar-fixed-top navbar-inverse"  role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#b-menu-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a  class="navbar-brand" href="../HomePage/index.html">Online Campus Recuitment</a>
        </div>
        <div class="collapse navbar-collapse" id="b-menu-1">
          <ul class="nav navbar-nav navbar-right">
            <li style="padding:0px 5px;"><a href="../HomePage/index.html">Home</a></li>
            <li style="padding:0px 5px;"><a href="developers.php">Developers</a></li>
            <li style="padding:0px 5px;"><a href="#">Contact Us</a></li>
            <li style="padding:0px 5px;" class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Sign Up <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="..\Student\register.php"><p class = "blk">Student</p></a></li>
                <li><a href="..\Company\register.php"><p class = "blk">Company</p></a></li>
              </ul>
            </li>
			<li style="padding:0px 5px;" class="dropdown">
			        <?php?>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Log In <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="..\logins\slogin.php">Student</a></li>
                <li><a href="..\logins\clogin.php">Company</a></li>
                <li><a href="..\logins\alogin.php">Administrator</a></li>
              </ul>
            </li>
          </ul>
        </div> <!-- /.nav-collapse -->
      </div> <!-- /.container -->
    </div> <!-- /.navbar -->
	<div class="container-fluid">
	
		<div class="row dev">
			<div class="col-xs-12">
			<div class="col-xs-4" id="aquib">
			<div class="left-well">
			<a href="https://www.facebook.com/rishabh.mittal.121"><img src="../Student/photos/rishuprof.jpg" class=" center-block" width="300px"  /></a>
			<h1>RISHABH</h1>
			<div class="row">
		<div class="col-xs-offset-2 col-xs-8">
		<div class="pawan-body">
		<table class='table table-responsive' style="margin-top:20px; text-align:center;">
			<thead>
				<tr>
				<th  style="background: #222; color:#eee; font-size:30px; text-align:center;">Developer</th>
				</tr>
			</thead>
			<tbody>
			<tr><td>PURSUING BACHELOR'S DEGREE IN COMPUTER SCIENCE & TECHNOLOGY</td></tr>
			<tr><td>MALAVIYA NATIONAL INSTITUTE OF TECHNOLOGY, JAIPUR</td></tr>
			</tbody>
		</table>
		</div>
		</div>
		</div>
			</div>
			</div>
			<div class="col-xs-4" id="me">
			<div class="middle-well">
			<a href="https://www.facebook.com/RiteshKumar.1203"><img src="../Student/photos/ritesh.jpg" class="center-block" width="300px"height="400px" /></a>
			<h1>RITESH</h1>
			<div class="row">
		<div class="col-xs-offset-2 col-xs-8">
		<div class="pawan-body">
		<table class='table table-responsive' style="margin-top:20px; text-align:center;">
			<thead>
				<tr>
				<th  style="background: #222; color:#eee; font-size:30px; text-align:center;">Developer</th>
				</tr>
			</thead>
			<tbody>
			<tr><td>PURSUING BACHELOR'S DEGREE IN COMPUTER SCIENCE & TECHNOLOGY</td></tr>
			<tr><td>MALAVIYA NATIONAL INSTITUTE OF TECHNOLOGY, JAIPUR</td></tr>
			</tbody>
		</table>
		</div>
		</div>
		</div>
			</div>
			</div>
			<div class="col-xs-4" id="roshan">
			<div class="right-well">
			<a href="https://www.facebook.com/naresh.jain.739978"><img src="../Student/photos/2015ucp1509.jpeg" class=" center-block"  width="300px" //></a>
			<h1>NARESH</h1>
			<div class="row">
		<div class="col-xs-offset-2 col-xs-8">
		<div class="pawan-body">
		<table class='table table-responsive' style="margin-top:20px; text-align:center;">
			<thead>
				<tr>
				<th  style="background: #222; color:#eee; font-size:30px; text-align:center;">Developer</th>
				</tr>
			</thead>
			<tbody>
			<tr><td>PURSUING BACHELOR'S DEGREE IN COMPUTER SCIENCE & TECHNOLOGY</td></tr>
			<tr><td>MALAVIYA NATIONAL INSTITUTE OF TECHNOLOGY, JAIPUR</td></tr>
			</tbody>
		</table>
		</div>
		</div>
		</div>
			</div>
			</div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		</div>
	</div>
	</body>

</html>