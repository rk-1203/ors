<?php

include "../logins/connection.inc.php";

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Company Registeration</title>
  <link rel="stylesheet" href="css/reset.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script>
    function rq1()
    {
      var site = document.forms["msform"]["site"].value;
      var p = document.forms["msform"]["pass"].value;
      var cp = document.forms["msform"]["cpass"].value;
      var flag1=0;
      
      if(site == "" || p == "" || cp == "")
      {
        flag1=1;
        alert('Please enter all the required fields !!.');
      }
      else 
      {
        var pat = new RegExp("^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$")
        if(p.length<8)
        {
          flag1=1;
          alert('Password criteria not met!!');
        }
        else if(p.localeCompare(cp)!=0)
        {
          flag1=1;
          alert("Passwords must match !!");
        }
        else if(p.length<8)
        {
          flag1=1;
          alert("Password must of length atleast 8 !!");
        }
        else if(pat.test(p)==false)
        {
          flag1=1;
          alert("Password must contain one numeric and a special character !!");
        }
        else
        {
          flag1=0;
          return true;
        }
      }
      return false;
    }
    
    function rq2()
    {
      var n = document.forms["msform"]["fname"].value;
      var pr = document.forms["msform"]["profile"].value;
      var off = document.forms["msform"]["offerings"].value;
      var ct = document.forms["msform"]["city"].value;
      var a = document.forms["msform"]["address"].value;
      var flag2=0;
      
      if(n == "" || pr == "" || ct == "" || off == "" || a == "")
      {
        flag2=1;
        alert('Please enter all the required fields !!.');
      }
      else
      {
        //name, city and Profile validation
        patt = new RegExp("^[a-zA-Z]*$");
        if(patt.test(n)==false || patt.test(ct)==false || patt.test(pr)==false )
        {
          flag2=1;
          alert('Wrong Name or City or Profie !!');
        }
        else
        {
          flag2=0;
          return true;
        }
        
      }
      return false;
    }
    
    function rq3()
    {
      var e = document.forms["msform"]["email"].value;
      var c = document.forms["msform"]["contact"].value;
      var l = document.forms["msform"]["linkedin"].value;
      var n = document.forms["msform"]["hname"].value;
      var flag3=0;
      
      if(e=="" || c=="" || l=="" || n=="")
      { 
        flag3=1;
        alert("Please enter all the required fields !!");
      }
      else
      {
        var patt=new RegExp("[a-z]*@[a-z]*.[a-z]*");
        if(patt.test(e) == false)
        {
          flag3=1;
          alert("Enter Valid E-mail Address !!");
        }
        else
        {
          var patt= new RegExp("[0-9]{10}");
          if(patt.test(c)==false)
          {
            flag3=1;
            alert("Enter valid Contact Details !!");
          }
          else
          {
            alert("Succesfully registered !!");
            flag3=0;
            return true; 
          }
        }
      }
      return false;
    }
    
  </script>
</head>


<body>
  <!-- multistep form -->
  <form id="msform" action="register.php" method="POST">
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Account Setup</li>
      <li>Company Profile</li>
      <li>HR Contact Details</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
      <h2 class="fs-title">Create your account</h2>
      <h3 class="fs-subtitle">This is step 1</h3>
      <input type="text" name="website" value="<?php if(isset($_POST['website'])) echo $_POST['website']; ?>" placeholder="Company Web Site" /><span>
      <?php
        if(isset($_POST['submit']))
        {
          
          $w = $_POST['website'];
          $p = $_POST['pass'];
          $cp = $_POST['cpass'];
          $name = $_POST['name'];
          $prof = $_POST['profile'];
          $off = $_POST['offerings'];
          $c = $_POST['city'];
          $a = $_POST['address'];
          $hrname = $_POST['hrname'];
          $e =$_POST['email'];
          $contact = $_POST['contact'];
          $ln = $_POST['linkedin'];
          
          
          $flag=0;
        }
        if(isset($_POST['website']) && (empty($_POST['website']) || !preg_match("/www.[a-zA-Z0-9]*.[a-zA-Z]*$/",$w)))
        {
          $flag=1;
          echo '<font color="red" size=2><center>Not a valid Website</center></font><br>';
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
            echo '<font color="red" size=2><center>Password criteria not met!!</center></font><br>';
          }
          else if(strcmp($p,$cp)!=0)
          {
            $flag=1;
            echo '<font color="red" size=2><center>Passwords must match !!</center></font><br>';
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
      <h2 class="fs-title">Company Profile</h2>
      <h3 class="fs-subtitle">This is step 2</h3>
      <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" placeholder="Company Name" /><span>
      <?php 
        if(isset($_POST['name']) && (empty($_POST['name']) ||  !preg_match("/^[a-zA-Z0-9]*$/",$name)))
        {
          $flag=1;
          echo '<font color="red" size=2><center>Not a valid Company Name</center></font><br>';
        }
      ?></span>
      
      <input type="text" name="profile" value="<?php if(isset($_POST['profile'])) echo $_POST['profile']; ?>" placeholder="Company Profile e.g. Software, Finance, Construction etc." /><span>
      <?php
        if(isset($_POST['profile']) && (empty($_POST['profile']) || !preg_match("/^[a-zA-Z]*$/",$prof)))
        {
          $flag=1;
          echo '<font color="red" size=2><center>Not a valid company profile</center></font><br>';
        }
      ?></span>
      <select name="offerings">
        <option disabled selected>Offerings</option>
				<option value="Domestic" <?php if(isset($_POST['offerings']) && $_POST['offerings']=='Domestic') echo "selected='selected'";?>>Domestic</option>
				<option value="International" <?php if(isset($_POST['offerings']) && $_POST['offerings']=='International') echo "selected='selected'";?>>International</option>
      </select><span>
      <?php 
        if(isset($_POST['submit']) && $_POST['offerings']!="Domestic" && $_POST['offerings']!="International")
        {
          $flag=1;
          echo '<font color="red" size=2><center>Select an option</center></font><br>';
        }
      ?></span>
      <input type="text" name="city" value="<?php if(isset($_POST['city'])) echo $_POST['city']; ?>" placeholder="Head Office City" /><span>
      <?php 
        if(isset($_POST['city']) && (empty($_POST['city']) || !preg_match("/^[A-Za-z]*$/",$c)))
        {
          $flag=1;
          echo '<font color="red" size=2><center>Not a valid City name</center></font><br>';
        }
      ?></span>
      <input type="text" name="address" value="<?php if(isset($_POST['address'])) echo $_POST['address']; ?>" placeholder="Head Office Address" /><span>
     <?php 
        if(isset($_POST['address']) && (empty($_POST['address'])))
        {
          $flag=1;
          echo '<font color="red" size=2><center>Invalid Address</center></font><br>';
        }
      ?></span>
      

      <input type="button" name="previous" class="previous action-button" value="Previous" />
      <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title">HR Contact Details</h2>
      <h3 class="fs-subtitle">Last Step</h3>
      <input type="text" name="hrname" value="<?php if(isset($_POST['hrname'])) echo $_POST['hrname']; ?>" placeholder="Name" /><span>
      <?php 
        if(isset($_POST['hrname']) && (empty($_POST['hrname'])))
        {
          $flag=1;
          echo '<font color="red" size=2><center>Invalid HR name</center></font><br>';
        }
      ?></span>
      <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="Company E-mail" /><span>
      <?php 
        if(isset($_POST['email']) && (empty($_POST['email']) ||  !preg_match("/[a-z]*@[a-z]*.[a-z]*/",$e)))
        {
          $flag=1;
          echo '<font color="red" size=2><center>Not valid Email</center></font><br>';
        }
      ?></span>
      
      <input type="text" name="contact" maxlength="10" value = "<?php if(isset($_POST['contact'])) echo $_POST['contact']; ?>" placeholder="Contact No" />
	    <input type="text" name="linkedin" value = "<?php if(isset($_POST['linkedin'])) echo $_POST['linkedin']; ?>" placeholder="Linkedin" />
     
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
    $flags=0;
  	$connect=mysqli_connect('localhost','ritesh1203','');
  	if(!mysqli_select_db($connect,'ors'))
  	  echo 'NOT CONNECTED<br>';
  	else
  	  echo 'CONNECTED<br>';
  		//$myfile=($_POST['myfile']);
  		//echo $_POST['id'];
  		$query="select * from Company_details where website='".$w."'";
  		$result=mysqli_query($connect,$query) or die("Sorry");
  		//echo mysqli_num_rows($result);
  		if(mysqli_num_rows($result))
  		{
  			echo '<font color="red"><center>You have already been registerd</center></font><br>';
  			$flags=1;
  		}	
  		
  		if($flags==0)
  		{
  			$query0="INSERT INTO temp_Company_details values ('".$w."', '".$p."', '".$name."', '".$prof."', '".$off."', '".$c."', '".$a."', '".$hrname."', '".$e."', '".$contact."', '".$ln."')";
  			
  			//$query="INSERT INTO Company_details values ('".$w."', '".$p."', '".$name."', '".$prof."', '".$off."', '".$c."', '".$a."', '".$hrname."')";
  			//$query1 = "INSERT INTO HR_details values('".$hrname."', '".$e."', '".$contact."', '".$ln."')";
  			//mysqli_query($connect,$query);
  			//mysqli_query($connect,$query1);
  			mysqli_query($connect,$query0);
  			$flag=-1;
  			if($flag==-1)
      {
        //echo "SuccessFully Registered...Wait for the confirmation of your Account from Admin";
        echo '<script type="text/javascript">'; 
        echo 'alert("Succesfully Requested for Registration. Waiting for approval");'; 
        echo 'window.location.href = "../HomePage/index.html";';
        echo '</script>';
      }
  			//header("location:reg_success.php");
  		}
  	}
?>
</html>


<!-- check for required in each field-->