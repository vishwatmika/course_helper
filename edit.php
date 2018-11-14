<?php
session_start();
include "connection.php";
include "header.php";
  if(!isset($_SESSION['user']))
  {
    header("Location: index.php");
  }
  else {
    echo "<div class='card bg-dark text-white center'>";
    $query="SELECT * FROM sign WHERE user='$_SESSION[user]'";
    $result=mysqli_query($conn, $query);
    $row=$result->fetch_assoc();
    $path='pics/'.$row['img'];
    $name=$row['name'];
    $mail=$row['mail'];
    $id=$row['user'];
    ?>
    <form action="update.php" method="post" enctype="multipart/form-data">
      <?php
        echo "<img src='$path' width='100px'>"."<input type='file' name='pic'><hr>";
        echo "Name: "."<input type='text' name='name' value='$name'><hr>";
        echo "E-mail: "."<input type='text' name='mail' value='$mail'><hr>";
        echo "User ID: ".$id."<hr>";
        echo "<input type='submit' value='Done'>";
      echo "</form>";
      echo "</div>";
  }
?>
