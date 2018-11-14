<?php
session_start();
if(empty($_SESSION['user']))
{
?>
<html>
<head>
  <title>web</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <style>
  body
  {
    background: url("pics/back.gif");
  }
  .center
  {
    text-align: center;
    margin-top: 5%;
    color: white;
    text-decoration: none;
  }
  .middle
  {
    margin: 5% 10% 5% 16%;
  }
  .back
  {
    width: 45%;

  }
  </style>
  <script>
    function valid()
    {
        var pass=document.forms['sign']['pass'].value;
        var conf=document.forms['sign']['cnf'].value;
        if(pass==cnf)
        {
          alert('passwords do not match!!!');
          return false;
        }
        else
        {
          return true;
        }
    }
  </script>
</head>
<body>
  <div class="container-fluid">
    <div class="navbar navbar-expand-sm bg-dark navbar-dark center">
      <div class="col-sm-4"><a class="center" href="home.php">Home</a></div>
      <div class="col-sm-4"><a class="center" href="course.html">Courses</a></div>
      <div class="col-sm-4"><a class="center" href="contact.html">Contact Us</a></div>
    </div>
  <div class="row middle">
  <div class="card bg-dark text-white back">
    <div class="card-header">
    <h3>Log In</h3>
  </div>
  <div class="card-body">
    <form method="post" action="login.php">
      User ID<br>
      <input type="text" name="id"><br>
      Password<br>
      <input type="password" name="pass"><br>
    </div>
    <div class="card-footer">
      <input type="submit" value="Log In">
    </form>
  </div>
  </div>
  <div class="card bg-dark text-white back">
  <div class="card-header">
    <h3>Sign Up</h3>
  </div>
  <div class="card-body">
    <form name="sign" method="post" action="sign.php" onsubmit="return valid()">
      Name<br>
      <input type="text" name="name"><br>
      User ID<br>
      <input type="text" name="id"><br>
      Phone Number<br>
      <input type="tel" name="pno"><br>
      Email-id<br>
      <input type="email" name="mail"><br>
      Password<br>
      <input type="password" name="pass"><br>
      Confirm Password<br>
      <input type="password" name="cnf"><br>
    </div>
    <div class="card-footer">
      <input type="submit" value="Sign Up">
    </form>
  </div>
  </div>
</div>
</div>
</body>
<?php }
else
{
  header("Location: home.php");
}
?>
