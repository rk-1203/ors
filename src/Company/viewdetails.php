<?php
include '../logins/connection.inc.php';
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
              echo " ".$_SESSION['website']; ?></a>
              <ul class="dropdown-menu">
                <li><a href="../Dashboards/company.php">Dashboard</a></li>
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

$vbprof = strtolower($_POST['vbprof']);
$vbtype = strtolower($_POST['vbtype']);

$website = $_SESSION['website'];

if(isset($_POST))
{
    $name = $_POST['ID'];
    $name = (int)$name;
    if($name>0)
    {
    //echo $name;
    //echo $_SESSION['user_id'];
    $query = "select * from Applied where job_id=".$name;
    $query_run = @mysqli_query($connect, $query);
    if(@mysqli_num_rows($query_run)>0)
    {
        ?>
        <table class="data-table">
        <?php echo '<p style = "text-align:center;color:#fff;">Students Applied'?>
        <thead>
            <tr>
                <th>student id</th>
                <th>Name</th>
                <th>Details</th>
                <th>accept</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while($row = mysqli_fetch_assoc($query_run))
        {
            $sid = $row['student_id'];
            $qry = "select fname as name from Student_details where college_id = '$sid'";
            $qry_run = mysqli_query($connect , $qry);
            $row1 = mysqli_fetch_assoc($qry_run);
            $name = $row1['name'];
            echo "<tr>
                    <td>".$sid."</td>
                    <td>".$name."</td>
                    <td>
                    <form action=".'"checkstprof.php" method = "POST">'."
                    <input type=".'"submit" style="color:black;height:100%;width:100%;background-color: #ffffff;" value="View" name = "'.$sid.'">
                    <input type="hidden" name="ID" value="'.$sid.'"/>
                    </td>
                    <td>
                    </form>
                    <form action = "accrej.php" method = "POST">
                    <input type = "submit" style="color:black;height:100%;width:100%;background-color: #ffffff;" value="Accept" name = "a">
                    <input type = "hidden" name = "accrej" value = "acc">
                    <input type = "hidden" name = "job_id" value = "'.$_POST['ID'].'">
                    <input type = "hidden" name = "std_id" value = "'.$sid.'">
                    </form>
                    </td>';

        }?>
        </tbody>
        </table>
    <?php
    }
    else
        echo '<p style = "text-align:center;color:#fff;">Sorry.. No Results Found.';
    
  }
}?>

      </div>
    </div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../HomePage/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>