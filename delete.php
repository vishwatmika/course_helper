<?php
  session_start();
  include 'header.php';
  include 'connection.php';
  $user=$_SESSION['user'];
  $del_cor=$_POST['del'];
  $query="SELECT * FROM sign WHERE user='$user'";
  $result=mysqli_query($conn,$query);
  $row=$result->fetch_assoc();
  $course=explode(" ",$row['course']);
  foreach ($del_cor as $select)
  {
    if (($key = array_search($select, $course)) !== false)
    {
      unset($course[$key]);
    }
  }
  $up_course=implode(" ",$course);
  $query="UPDATE `sign` SET `course`='$up_course' WHERE user='$user'";
  $result=mysqli_query($conn,$query);
  header("location: home.php")
?>
