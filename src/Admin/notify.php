<?php

include "../logins/connection.inc.php";

//echo $_POST['ID'];
if(isset($_POST['delete']))
{
  $query = "SELECT * from notifications where id=".$_POST['ID'];
  $query_run1 = mysqli_query($connect,$query) or die("Sorry...");
  if(mysqli_num_rows($query_run1)>0)
  {
    $query2 = "delete from notifications where id=".$_POST['ID'];
    $query_run = mysqli_query($connect,$query2) or die("Sorry...");
    echo '<script type="text/javascript">'; 
    echo 'alert("Notification Deleted");'; 
    echo '</script>';
  }
  $_POST['ID']='-1';
}

if(isset($_POST['add']) && isset($_POST['note']) && $flag==0)
{
  $query1 = "INSERT INTO `ors`.`notifications` (`id`, `notify`, `date`) VALUES (NULL, '".$_POST['note']."', CURRENT_TIMESTAMP)";
  echo $query1;
  $query_run2 = mysqli_query($connect,$query1) or die("Sorry...");
  unset($_POST['add']);
  unset($_POST['note']);
  $flag=-1;
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
    <div class = "bg" >
      <div class = "pg1" id = "page1" >
        <?php


include '../logins/connection.inc.php';

$query1 = "SELECT * FROM notifications";
$query_run1 = @mysqli_query($connect, $query1);

$query2 = "select * from viewAppc";
$query_run2 = @mysqli_query($connect, $query);


if(@mysqli_num_rows($query_run1)>0)
{
    ?>
    <center>
    <div style="overflow:scroll;width:1000px;height:250px;border:2px solid white;">
    <table class="data-table">
    <thead>
        <tr>
            <th>Time and Date</th>
            <th>Notification</th>
            <th>Delete</th>
        </tr> 
    </thead>
    <tbody>
    <?php
    $flag=0;
    while($row = mysqli_fetch_assoc($query_run1)){
        echo "<tr>
                <td style=".'"width:190px"'.">".$row['date']."</td>
                <td>".$row['notify'].'</td>
                <td><form action="notify.php" method = "POST">
                <input type="submit" style="color:black;height:100%;width:100%;background-color: #ffffff;" value="Delete" name ="delete">
                <input type="hidden" name="ID" value="'.$row['id'].'"/>
                </form></td>';
    }?>
    </tbody>
    </table>
    </center>
    </div>
    <?php
    }
    else
        echo '<p style = "text-align:center;color:#fff;">Sorry.. No Results Found.';
   
?>
      </div>
    
    <div class="pg1"  id = "page1" style="margin-top:-400px;margin-bottom:0px;height:200px;"> 
      <center><h2 style="z-index:10;color:white;">Add Notification</h2>
      <form method="POST" action="notify.php"  id="usrform">
        <textarea name="note" placeholder="Enter Notification" required></textarea></br></br>
        <input type="hidden" name="ID" value="<?php echo $flag; ?>"/>
        <button type="submit" class="button button2" name="add" style="padding:0px;" form="usrform">Add</button></center>
      </form>
        	
    </div>
  </div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../HomePage/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>