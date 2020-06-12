<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Multi Step Form with Progress Bar using jQuery and CSS3</title>
  <link rel="stylesheet" href="css/reset.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script>

    function required()  
    {  
      var i = document.forms["msform"]["id"].value;
      var p = document.forms["msform"]["pass"].value;
      var cp = document.forms["msform"]["cpass"].value;
      var fn = document.forms["msform"]["fname"].value;
      var mn = document.forms["msform"]["mname"].value;
      var ln = document.forms["msform"]["lname"].value;
      var g = document.forms["msform"]["gender"].value;
      var e = document.forms["msform"]["email"].value;
      var c = document.forms["msform"]["contact"].value;
      var ct = document.forms["msform"]["city"].value;
      var a = document.forms["msform"]["address"].value;
      var d = document.forms["msform"]["dob"].value;
      var m = document.forms["msform"]["matric"].value;
      var et = document.forms["msform"]["enter"].value;
      var cl = document.forms["msform"]["clg"].value;
      var c1 = document.forms["msform"]["cg1"].value;
      var c2 = document.forms["msform"]["cg2"].value;
      var c3 = document.forms["msform"]["cg3"].value;
      var c4 = document.forms["msform"]["cg4"].value;
      var flag=0;
      if (i == ""||p == ""||cp == ""||fn == ""||mn == ""||ln == ""||g == ""||e == ""||c == ""||ct == ""||a == ""||d == ""||m == ""||et == ""||cl == ""||c1 == ""||c2 == ""||c3 == ""||c4 == "")  
      {  
        flag=1;
        
      }
      if(i.match())
      if(flag==1)
      {
        alert("All fields are necessary, Please enter all fields!!");  
        return false;  
      }
      else
      {  
        alert('Code has accepted : you can try another');  
        return true;   
      }
    }  
  </script>
</head>

<body>
  <!-- multistep form -->
  <form id="msform" action="index.php" method=POST>
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
      <input type="text" name="id" value="<?php if(isset($_POST['id'])) echo $_POST['id']; ?>" placeholder="College ID" required/>
      <input type="password" name="pass" value="<?php if(isset($_POST['pass'])) echo $_POST['pass']; ?>" placeholder="Password" />
      <input type="password" name="cpass" value="<?php if(isset($_POST['cpass'])) echo $_POST['cpass']; ?>" placeholder="Confirm Password" />
      <!--<input type="button" name="next" class="next action-button" onclick="required()" value="Next" />-->
      <button type="button" name="next" class="next action-button" >Next</button>
    </fieldset>
    <fieldset>
      <h2 class="fs-title">Personal Details</h2>
      <h3 class="fs-subtitle">This is step 2</h3>
      <input type="text" name="fname" value="<?php if(isset($_POST['fname'])) echo $_POST['fname']; ?>" placeholder="First Name" />
      <input type="text" name="mname" value="<?php if(isset($_POST['lname'])) echo $_POST['lname']; ?>" placeholder="Middle Name" />
      <input type="text" name="lname" value="<?php if(isset($_POST['lname'])) echo $_POST['lname']; ?>" placeholder="Last Name" />
      <select value="<? php if(isset($_POST['gender'])) echo $_POST['gender']; ?>"name="gender">
        <option value="M">Male</option>
        <option value="F">Female</option>
      </select>
      <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="Email" />
      <input type="text" name="contact" value="<?php if(isset($_POST['contact'])) echo $_POST['contact']; ?>" placeholder="Contact No" />
      <input type="text" name="city" value="<?php if(isset($_POST['city'])) echo $_POST['city']; ?>" placeholder="City" />
      <textarea name="address" placeholder="Address"><?php if(isset($_POST['address'])) echo $_POST['address']; ?></textarea>
      <input type="text" name="dob" value="<?php if(isset($_POST['dob'])) echo $_POST['dob']; ?>" placeholder="Date of Birth" class="textbox-n" onfocus="(this.type='date')"  id="date"> 
      <input type="button" name="previous" class="previous action-button" value="Previous" />
      <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title">Academic Details</h2>
      <h3 class="fs-subtitle">Last Step</h3>
      <input type="text" name="matric" value="<?php if(isset($_POST['matric'])) echo $_POST['matric']; ?>" placeholder="10th Aggregrate Percentage" />
      <input type="text" name="enter" value="<?php if(isset($_POST['enter'])) echo $_POST['enter']; ?>" placeholder="12th Aggregrate Percentage" />
      <input type="text" name="clg" value="<?php if(isset($_POST['clg'])) echo $_POST['clg']; ?>" placeholder="College Name" />
      <input type="text" name="yop" value="<?php if(isset($_POST['yop'])) echo $_POST['yop']; ?>" placeholder="Year of Passing" />
      <input type="text" name="dept" value="<?php if(isset($_POST['dept'])) echo $_POST['dept']; ?>" placeholder="Department" />
      <input type="text" name="cg1" value="<?php if(isset($_POST['cg1'])) echo $_POST['cg1']; ?>" placeholder="Semester 1 CGPA" />
      <input type="text" name="cg2" value="<?php if(isset($_POST['cg2'])) echo $_POST['cg2']; ?>" placeholder="Semester 2 CGPA" />
      <input type="text" name="cg3" value="<?php if(isset($_POST['cg3'])) echo $_POST['cg3']; ?>" placeholder="Semester 3 CGPA" />
      <input type="text" name="cg4" value="<?php if(isset($_POST['cg4'])) echo $_POST['cg4']; ?>" placeholder="Semester 4 CGPA (if any)" />
      <input type="button" name="previous" class="previous action-button" value="Previous" />
      <!--<input type="submit" name="submit" class="submit action-button" onclick="required()" value="Submit" />-->
      <button name="submit" name="submit" class="next action-button" onclick="required()">Submit</button>
    </fieldset>
  </form>
  <script src='js/jquery.min.js'></script>
  <script src='js/jquery.easing.min.js'></script>
  <script src="js/index.js"></script>

</body>
</html>


<!-- check for required in each field

1.first write a function and a button validate and if it returns true then display a button submit wich will finally submit the form
-->
<!--document.write('<button class="next action-button" onclick="required()">Click me</button>')-->