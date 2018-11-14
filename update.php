<?php
session_start();
include "connection.php";
include "header.php";
  if(!isset($_SESSION['user']))
  {
    header("Location: index.php");
  }
  else {
    $user=$_SESSION['user'];
    echo "<div class='card bg-dark text-white center'>";
    $up_pic=$_FILES['pic']['name'];
    $temp=$_FILES['pic']['tmp_name'];
    move_uploaded_file($temp,"pics/".$up_pic);
    $up_name=$_POST['name'];
    $up_mail=$_POST['mail'];
    if($up_pic!="")
    {
    $query="UPDATE `sign` SET `name`='$up_name',`mail`='$up_mail',`img`='$up_pic' WHERE user='$user'";
    $result=mysqli_query($conn,$query);
    }
    else {
      $query="UPDATE `sign` SET `name`='$up_name',`mail`='$up_mail' WHERE user='$user'";
      $result=mysqli_query($conn,$query);
    }
    header("location: home.php");
    //$result=mysqli_query($conn,$query);
  }
