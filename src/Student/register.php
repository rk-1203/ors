<?php include "../logins/connection.inc.php"?> 
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Student Registeration </title>
  <link rel="stylesheet" href="css/reset.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- multistep form -->
  <form id="msform" action="register.php" method="POST" enctype="multipart/form-data" >
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Account Setup</li>
      <li>Personal details</li>
      <li>Academic Details</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
      <h2 class="fs-title">Create your account</h2>
      <h3 class="fs-subtitle">This is step 1</h3>
      <input type="text" name="id" value="<?php if(isset($_POST['id'])) echo $_POST['id']; ?>" placeholder="College ID" /><span>
      <?php
        if(isset($_POST['submit']))
          $i = $_POST['id'];
          $p = $_POST['pass'];
          $cp = $_POST['cpass'];
          $fn = $_POST['fname'];
          $mn = $_POST['mname'];
          $ln = $_POST['lname'];
          $g = $_POST['gender'];
          $e = $_POST['email'];
          $c = $_POST['contact'];
          $ct = $_POST['city'];
          $a = $_POST['address'];
          $d = $_POST['dob'];
          $m = $_POST['matric'];
          $et = $_POST['enter'];
          $y = $_POST['yop'];
          $dp = $_POST['dept'];
          $c1 = $_POST['cg1'];
          $flag=0;
        
        if(isset($_POST['id']) && (empty($_POST['id']) || !preg_match("/[0-9]{4}[a-zA-Z]{3}[0-9]{4}/",$i)|| strlen($i)!=11))
        {
          $flag=1;
          echo 'Not a valid ID';
        }
      ?></span>
      <input type="password" name="pass" placeholder="Password" />
      <input type="password" name="cpass" placeholder="Confirm Password" /><span>
      <?php
        if(isset($_POST['pass']) || isset($_POST['cpass']))
        {
          if(strlen($p)<8)
          {
            $flag=1;
            echo 'Password criteria not met!!';
          }
          else if(strcmp($p,$cp)!=0)
          {
            $flag=1;
            echo 'Passwords must match !!';
          }/*
          else if(!preg_match("/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/",$i))
          {
            $flag=1;
            echo 'Password must contain one numeric and a special character !!';
          }*/
        }
      ?></span><br>
      <!--<input type="button" name="next" class="next action-button" onclick="required()" value="Next" />-->
      <button type="button" name="next" class="next action-button" >Next</button>
    </fieldset>
    <fieldset>
      <h2 class="fs-title">Personal Details</h2>
      <h3 class="fs-subtitle">This is step 2</h3>
      <input type="text" name="fname" value="<?php if(isset($_POST['fname'])) echo $_POST['fname']; ?>" placeholder="First Name" /><span>
      <?php 
        if(isset($_POST['fname']) && (empty($_POST['fname']) ||  !preg_match("/^[a-zA-Z]*$/",$fn)))
        {
          $flag=1;
          echo 'Not a valid First Name';
        }
      ?></span>
      <input type="text" name="mname" value="<?php if(isset($_POST['mname'])) echo $_POST['mname']; ?>" placeholder="Middle Name" /><span>
      <?php
        if(isset($_POST['mname']) && !empty($_POST['mname']) && !preg_match("/^[a-zA-Z]*$/",$mn))
        {
          $flag=1;
          echo 'Not a valid Middle Name';
        }
      ?></span>
      <input type="text" name="lname" value="<?php if(isset($_POST['lname'])) echo $_POST['lname']; ?>" placeholder="Last Name" /><span>
      <?php
        if(isset($_POST['lname']) && !empty($_POST['lname']) && !preg_match("/^[a-zA-Z]*$/",$ln))
        {
          $flag=1;
          echo 'Not a valid Last Name';
        }
      ?></span>
      <select name="gender">
        <option disabled selected>Gender</option>
				<option value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=='Male') echo "selected='selected'";?>>Male</option>
				<option value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=='Female') echo "selected='selected'";?>>Female</option>
      </select><span>
      <?php 
        if(isset($_POST['submit']) && $_POST['gender']!="Male" && $_POST['gender']!="Female")
        {
          $flag=1;
          echo 'Select an option';
        }
      ?></span>
      <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="Email" /><span>
      <?php 
        if(isset($_POST['email']) && (empty($_POST['email']) || !preg_match("/[a-z]*@[a-z]*.[a-z]*/",$e)))
        {
          $flag=1;
          echo 'Not a valid email Address';
        }
      ?></span>
      <input type="text" name="contact" maxlength="10" value="<?php if(isset($_POST['contact'])) echo $_POST['contact']; ?>" placeholder="Contact No" /><span>
      <?php 
        if(isset($_POST['contact']) && (empty($_POST['contact']) || !preg_match("/[0-9]*/",$c)|| strlen($c)!=10))
        {
          $flag=1;
          echo 'Not a valid contact number';
        }
      ?></span>
      <input type="text" name="city" value="<?php if(isset($_POST['city'])) echo $_POST['city']; ?>" placeholder="City" /><span>
      <?php 
        if(isset($_POST['city']) && (empty($_POST['city']) ||  !preg_match("/^[a-zA-Z]*$/",$fn)))
        {
          $flag=1;
          echo 'Not a valid City Name';
        }
      ?></span>
      <textarea name="address" placeholder="Address"><?php if(isset($_POST['address'])) echo $_POST['address']; ?></textarea><span>
      <?php 
        if(isset($_POST['address']) && empty($_POST['address']))
        {
          $flag=1;
          echo 'This field is required';
        }
      ?></span>
      <input type="text" name="dob" value="<?php if(isset($_POST['dob'])) echo $_POST['dob']; ?>" placeholder="Date of Birth" class="textbox-n" onfocus="(this.type='date')"  id="date"><span>
      <?php 
        if(isset($_POST['dob']) && empty($_POST['dob']))
        {
          $flag=1;
          echo 'This field is required';
        }
      ?></span>
      <input type="button" id="loadFileXml" value="Upload Profile Photo" onclick="document.getElementById('myfile').click();" />
      <input type="file" name="myfile"id = "myfile" style = "display:none;"/></br></br>
      <!--<label for="myfiles">Upload Profile Photo</label><span></br></br>--><span>
      <?php 
        if(isset($_POST['submit']) && $_FILES['file_upload']['error'] == UPLOAD_ERR_NO_FILE)
        {
          $flag=1;
          echo 'Please upload your Profile Picture';
        }
      ?></span></br>
      <input type="button" name="previous" class="previous action-button" value="Previous" />
      <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title">Academic Details</h2>
      <h3 class="fs-subtitle">Last Step</h3>
      <input type="text" name="matric" value="<?php if(isset($_POST['matric'])) echo $_POST['matric']; ?>" placeholder="10th Aggregrate Percentage" /><span>
      <?php 
        if(isset($_POST['matric']) && (empty($_POST['matric']) ||  !preg_match("/([0-9]{2}\.[0-9]{1,2})|([0-9]{2})/",$m)))
        {
          $flag=1;
          echo 'Not valid marks';
        }
      ?></span>
      <input type="text" name="enter" value="<?php if(isset($_POST['enter'])) echo $_POST['enter']; ?>" placeholder="12th Aggregrate Percentage" /><span>
      <?php 
        if(isset($_POST['enter']) && (empty($_POST['enter']) ||  !preg_match("/([0-9]{2}\.[0-9]{1,2})|([0-9]{2})/",$et)))
        {
          $flag=1;
          echo 'Not valid marks';
        }
      ?></span>
      <input type="text" name="clg" value="Malaviya National Institue of Technology Jaipur" placeholder="College Name" readonly/>
      <input type="text" name="yop" value="<?php if(isset($_POST['yop'])) echo $_POST['yop']; ?>" placeholder="Year of Passing" /><span>
      <?php 
        $curyear = date("Y");
        $stry = (string)$curyear;
        if(isset($_POST['yop']) && (empty($_POST['yop']) ||  !preg_match("/[2-9]{1}[0-9]{3}/",$stry) || $y<$curyear || strlen($y)!=4))
        {
          $flag=1;
          echo 'Not a valid Year of Passing';
        }
      ?></span>
      <select name="dept">
        <option disabled selected>Department</option>
				<option value="Computer Science And Engineering" <?php if(isset($_POST['dept']) && $_POST['dept']=='Computer Science And Engineering') echo "selected='selected'";?>>Computer Science And Engineering</option>
				<option value="Electronics and Communication Engineering" <?php if(isset($_POST['dept']) && $_POST['dept']=='Electronics and Communication Engineering') echo "selected='selected'";?>>Electronics and Communication Engineering</option>
				<option value="Electrical Engineering" <?php if(isset($_POST['dept']) && $_POST['dept']=='Electrical Engineering') echo "selected='selected'";?>>Electrical Engineering</option>
				<option value="Mechanical Engineering" <?php if(isset($_POST['dept']) && $_POST['dept']=='Mechanical Engineering') echo "selected='selected'";?>>Mechanical Engineering</option>
				<option value="Civil Engineering" <?php if(isset($_POST['dept']) && $_POST['dept']=='Civil Engineering') echo "selected='selected'";?>>Civil Engineering</option>
				<option value="Metallurgical & Material Engineering" <?php if(isset($_POST['dept']) && $_POST['dept']=='Metallurgical & Materials Engineering') echo "selected='selected'";?>>Metallurgical & Materials Engineering</option>
				<option value="Chemical Engineering" <?php if(isset($_POST['dept']) && $_POST['dept']=='Chemical Engineering') echo "selected='selected'";?>>Chemical Engineering</option>
				<option value="Architecture And Planning" <?php if(isset($_POST['dept']) && $_POST['dept']=='Architecture And Planning') echo "selected='selected'";?>>Architecture And Planning</option>
      </select><span>
      <?php 
        if(isset($_POST['submit']) && $_POST['dept']!="Computer Science And Engineering" && $_POST['dept']!="Electronics and Communication Engineering" && $_POST['dept']!="Electrical Engineering" && $_POST['dept']!="Mechanical Engineering" && $_POST['dept']!="Metallurgical & Materials Engineering" && $_POST['dept']!="Civil Engineering" && $_POST['dept']!="Civil Engineering" && $_POST['dept']!="Chemical Engineering" && $_POST['dept']!="Architecture And Planning" )
        {
          $flag=1;
          echo 'Select an option';
        }
      ?></span>
      <input type="text" name="cg1" value="<?php if(isset($_POST['cg1'])) echo $_POST['cg1']; ?>" placeholder="Current CGPA" /><span>
      <?php 
        if(isset($_POST['cg1']) && (empty($_POST['cg1']) || !preg_match("/([0-9]{1}\.[0-9]{1,2})|([0-9]{1})/",$c1)))
        {
          $flag=1;
          echo 'Enter Current CGPA';
        }
      ?></span>
      <input type="button" id="loadFileXml" value="Upload Resume" onclick="document.getElementById('res').click();" />
      <input type="file" style="display:none;"  id = "res" name="res"/>
      <!--<label for="r class="btn btn-primary btn-block btn-outlined"-->
      <?php 
        if(isset($_POST['submit']) && $_FILES['file_upload']['error'] == UPLOAD_ERR_NO_FILE)
        {
          $flag=1;
          echo 'Please upload your Resume';
        }
      ?></span></br>
      <input type="button" name="previous" class="previous action-button" value="Previous" />
      <!--<input type="submit" name="submit" class="next action-button" value="Submit" onclick= "required()" />-->
      <button name="submit" type="submit" class="next action-button" >Submit</button>
    </fieldset>
  </form>
  <script src='js/jquery.min.js'></script>
  <script src='js/jquery.easing.min.js'></script>
  <script src="js/index.js"></script>

</body>
</html>

<?php
  if($flag==0 && isset($_POST['submit']))
  {
    //session_start();
    $flags=0;
  	$connect=@mysqli_connect('localhost','ritesh1203','');
  	if(!@mysqli_select_db($connect,'ors'))
  	  echo 'NOT CONNECTED<br>';
  	else
  	  echo 'CONNECTED<br>';
  		//$myfile=($_POST['myfile']);
  		//echo $_POST['id'];
  		$query="select * from Student_details where college_id='".$i."';";
  		$result=@mysqli_query($connect,$query);
  		//echo mysqli_num_rows($result);
  		if(@mysqli_num_rows($result)>0)
  		{
  			echo '<font color="red"><center>You have already been registerd...In case of conflict Please contact the Administrator</center></font><br>';
  			$flags=1;
  		}	
  		if($flags!=1)
  		{
  		  //echo $temp;
  		  //echo "**************";
  			$type=$_FILES['myfile']['type'];
  			//echo $type;
  			//echo "--------------";
  			if($type=='image/png' or $type=='image/jpeg' or $type=='image/jpg')
  			{
  			  	$tmpfile=$_FILES['myfile']['tmp_name'];
				    $location= "photos/".$i;
    				move_uploaded_file($tmpfile,$location.".jpeg");
    				echo "<center><b>Uploaded</b></center><br>";
  			}
  			else
  			{
  			  //echo $type;
  			  echo '<center><font color="red">PHOTO NOT UPLOADED...ONLY .PNG AND .JPEG SUPPORTED </font></center><br>';
  			  //header("location:register.php");
  			}
  			
  			$type=$_FILES['res']['type'];
  			if($type=='text/pdf' or $type=='application/pdf')
  			{
  			  	$tmpfile=$_FILES['res']['tmp_name'];
				    $location= "resume/".$i;
    				move_uploaded_file($tmpfile,$location.".pdf");
    				echo "<center><b>Uploaded</b></center><br>";
  			}
  			else
  			{
  			  //echo $type;
  			  echo '<center><font color="red">RESUME NOT UPLOADED ...ONLY .PDF SUPPORTED</font></center><br>';
  			  //header("location:register.php");
  			}
  		}
  		if($flags==0)
  		{
  			$_SESSION['username']=$fn;
  			$_SESSION['id']=$i;
  			$_SESSION['password']=$p;
  			$i=strtolower($i);
  			$query="INSERT INTO Student_details values ('".$i."', '".$p."', '".$fn."', '".$mn."', '".$ln."', '".$g."', '".$e."', '".$c."', '".$ct."', '".$a."', '".$d."', '".$m."', '".$et."', '".$y."', '".$dp."', '".$c1."')";
  			@mysqli_query($connect,$query);
  			//header("location:reg_success.php");
  		}
  	}
?>

<!--problem in uploading photo and redirecting to header locaation and null data insertion in databse-->