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
	<style>

  body, html {
    height: 100%;
    margin: 0;
}
   table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
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
    padding:100px 0px ;
    font-size: 30px;
  }
  .bg{
    background-image:url("../HomePage/slide/back7.jpg" );
    background-position: center;
    background-size: cover;
    height:100%;
  }
  h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
	}

	table td {
			transition: all .5s;
	}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:nth-child(even) td {
			background-color: #508abb;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}

</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<script src="http://code.jquery.com/jquery-latest.js"></script>
	
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
                <li><a href="../Dashboards/student.php">Dashboard</a></li>
                <li><a href="../logouts/logout.php">Log out</a></li>
              </ul>
            </li>
          </ul>
        </div> <!-- /.nav-collapse -->
      </div> <!-- /.container -->
    </div> <!-- /.navbar -->
    <div class = "bg">
      <div class = "pg1" id = "page1">
        <?php


$rbprof = strtolower($_POST['rbprof']);
$rbtype = strtolower($_POST['rbtype']);



$user_id = $_SESSION['user_id'];
$query = "select * from Placed where student_id = '$user_id'";
$query_run = @mysqli_query($connect,$query);
if(mysqli_num_rows($query_run)>0)
  header("Location:congrats.php");

if(!empty($rbprof) && !empty($rbtype))
    $query = "select company as Company, profile as Profile, type as Type , Jobs.job_id from Jobs, Results where student_id='$user_id' and Results.job_id=Jobs.job_id and profile='$rbprof' and type='$rbtype'";
else if(!empty($rbtype))
    $query = "select company as Company, profile as Profile, type as Type , Jobs.job_id from Jobs, Results where student_id='$user_id' and Results.job_id=Jobs.job_id and type='$rbtype'";
else if(!empty($rbprof))
    $query = "select company as Company, profile as Profile, type as Type , Jobs.job_id from Jobs, Results where student_id='$user_id' and Results.job_id=Jobs.job_id and profile='$rbprof'";
else
    $query = "select company as Company, profile as Profile, type as Type , Jobs.job_id from Jobs, Results where student_id='$user_id' and Results.job_id=Jobs.job_id";

$query_run = @mysqli_query($connect, $query);

if(@mysqli_num_rows($query_run)>0)
{
    ?>
    <table class="data-table">
      <?php echo '<p style = "text-align:center;color:#fff;">Results'?>
    <thead>
        <tr>
            <th>Company</th>
            <th>Profile</th>
            <th>Type</th>
            <th>Accept</th>
            <th>Ignore</th>
        </tr>
    </thead>
    <tbody>
    <?php
    while($row = mysqli_fetch_assoc($query_run)){
        echo "<tr>
                <td>".$row['Company']."</td>
                <td>".$row['Profile']."</td>
                <td>".$row['Type'].'</td>
                <td>
                <form action = "congrats.php" method = "POST">
                <input type="submit" style="color:black;height:100%;width:100%;background-color: #ffffff;" value="Accept" onclick="return confirm('."'Once You accept it. You wont be eligible for any more vacancies Further!!!'".');" >
                <input type = "hidden" name = "job_id" value = "'.$row['job_id'].'">
                <input type = "hidden" name = "std_id" value = "'.$user_id.'">
                </form>
                </td>
                <td>
                <input type=button style="color:black;height:100%;width:100%;background-color: #ffffff;" value="Ignore">
                </td>
             </tr>';
    
    }
    ?>
    </tbody>
    </table>
    <?php
}
else
    echo '<p style = "text-align:center;color:#fff;">Sorry.. No results Found.'

?>
      </div>
    </div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../HomePage/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>