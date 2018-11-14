<?php
  session_start();
  $user=$_SESSION['user'];
  include 'connection.php';
  $name=$_FILES['pic']['name'];
  $temp=$_FILES['pic']['tmp_name'];
  move_uploaded_file($temp,"pics/".$name);
  $course=$_POST['course'];
  $cour=implode(" ",$course);
  $query="UPDATE `sign` SET `img`='$name',`course`='$cour' WHERE user='$user'";
  $result=mysqli_query($conn,$query);
  header("Location: home.php");
?>
