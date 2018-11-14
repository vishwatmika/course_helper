<?php
  session_start();
  include 'header.php';
  include 'connection.php';
  $user=$_SESSION['user'];
  $add_cor=$_POST['course'];
  $query="SELECT * FROM sign WHERE user='$user'";
  $result=mysqli_query($conn,$query);
  $row=$result->fetch_assoc();
  $course=explode(" ",$row['course']);
  foreach ($add_cor as $select)
  {
    if (!in_array($select,$course))
    {
      array_push($course,$select);
    }
  }
  $up_course=implode(" ",$course);
  $query="UPDATE `sign` SET `course`='$up_course' WHERE user='$user'";
  $result=mysqli_query($conn,$query);
  header("location: home.php")
?>
