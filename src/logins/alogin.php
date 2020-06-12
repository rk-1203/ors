<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Log In</title>
  <link rel="stylesheet" href="css/reset.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    
  </script>
</head>

<body>
  <!-- multistep form -->
  <form id="msform" action="a_check.php" method="POST">
    <fieldset>
      <h1 class="fs-title" style="font-size: 25px">Admin Log In</h1>
      <input type="text" name="username" value = "<?php if(isset($_POST['username'])) echo $_POST['username']; ?>" placeholder="username" />
      <input type="password" name="pass" value = "<?php if(isset($_POST['pass'])) echo $_POST['pass']; ?>" placeholder="Password" />
      <input type="submit" name="submit" class="next action-button" value="Submit" onclick = "rq1()" />
    </fieldset>
  </form>
  <script src='js/jquery.min.js'></script>
  <script src='js/jquery.easing.min.js'></script>
  <script src="js.1/bootstrap.min.js"></script>
  <script src="js/index.js"></script>

</body>
</html>

<?php
  



?>
<!-- check for required in each field-->