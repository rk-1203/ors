<?php

include "../logins/connection.inc.php";
if(isset($_POST))
{
if($_POST['type']=='Accept')
{
  $web = $_POST['website'];
  $query = "select * from temp_Company_details where website='$web'";
  $query_run = mysqli_query($connect, $query) or die("Sorry...");
  
  $row = mysqli_fetch_assoc($query_run);
  
  $w = $row['website'];
  $p = $row['password'];
  $name = $row['name'];
  $prof = $row['profile'];
  $off = $row['offerings'];
  $c = $row['city'];
  $a = $row['address'];
  $hrname = $row['HRname'];
  $e =$row['email'];
  $contact = $row['contact'];
  $ln = $row['linkedin'];
  
  $query ="INSERT INTO Company_details values ('".$w."', '".$p."', '".$name."', '".$prof."', '".$off."', '".$c."', '".$a."', '".$hrname."')";
  $query_run = mysqli_query($connect,$query) or die("Sorryy...");
  
  $query ="INSERT INTO HR_details values ('".$hrname."', '".$e."', '".$contact."', '".$ln."')";
  $query_run = mysqli_query($connect,$query) or die("Sorryyy...");
  
  if($_POST['recapp'] == "yes")
  {
  	echo "<script> alert('Succesfully Approved'); window.location.href('comappr.php');</script>";
  }
  }

$query ="DELETE FROM temp_Company_details where website='$web'";
$query_run = mysqli_query($connect,$query) or die("Sorryyyy...");

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
    <div class = "bg">
      <div class = "pg1" id = "page1">
        <?php


include '../logins/connection.inc.php';

//$user_id = $_SESSION['adm_name'];

$year = $_POST['year1'];
$dept = $_POST['dept1'];

$query = "select CONCAT(fname , ' ', mname , ' ', lname) as Name , college_id as ID, dept, company, profile, type from Student_details, Jobs, Placed where Placed.student_id=college_id and Jobs.job_id = Placed.job_id";



$query_run = @mysqli_query($connect, $query) or die("Sorry");
$i =0;

while($row = mysqli_fetch_assoc($query_run)){
	if($row['dept'] == $dept and substr($row['ID'], 0, 4)==(string)$year)
        $i=1;
}

$query_run = @mysqli_query($connect, $query) or die("Sorry");

if(@mysqli_num_rows($query_run)>0 and $i == 1)
{
    ?>
    <table class="data-table">
    <?php echo '<p style = "text-align:center;color:#fff;">Results'?>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Company</th>
            <th>Profile</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody>
    <?php
    while($row = mysqli_fetch_assoc($query_run)){
        $i=$i+1;
        //echo '<p style = "text-align:center;color:#fff;">'.$dept.' '.$row['dept'];
        if($row['dept'] == $dept and substr($row['ID'], 0, 4) == (string)$year)
        {
        	
	        echo "<tr>
	                <td>".$row['ID']."</td>
	                <td>".$row['Name']."</td>
	                <td>".$row['company']."</td>
	                <td>".$row['profile']."</td>
	                <td>".$row['type'].'</td>
	             </tr>';
        }
    
    }
    ?>
    </tbody>
    </table>
    <?php
}
else
    echo '<p style = "text-align:center;color:#fff;">Sorry...No Results Found!!!';

?>
      </div>
    </div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../HomePage/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>