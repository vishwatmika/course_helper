<?php
session_start();
include "connection.php";
include "header.php";
  if(!isset($_SESSION['user']))
  {
    header("Location: index.php");
  }
  else {
    $user="SELECT * FROM sign WHERE user='$_SESSION[user]'";
    $result=mysqli_query($conn, $user);
    $row=$result->fetch_assoc();
    echo "<div class='card bg-dark text-white center'>";
    echo "WELCOME ".$row['name']."!!!";
    echo "<br>";
    echo "</div>";
    echo "<div class='card bg-dark text-white center'>";
    $path='pics/'.$row['img'];
    echo "<img src='$path' width='100px' alt='not available'>"."<hr>";
    echo "Name: ". $row['name']."<hr>";
    echo "E-mail: ".$row['mail']."<hr>";
    echo "User ID: ".$row['user']."<hr>";
    echo "</div>";
  }
?>
<body>
  <br>
  <div class="navbar navbar-expand-sm bg-dark navbar-dark center">
    <a class="col-sm-4 white" href="edit.php">EDIT</a>
    <a class="col-sm-4 white" href="courses.php">COURSES</a>
    <a class="col-sm-4 white" href="logout.php">LOG OUT</a>
</div>
</body>
</html>
