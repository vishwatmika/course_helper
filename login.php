<?php
session_start();
include "connection.php";
include "header.php";
  $user=$_POST['id'];
  $pass=$_POST['pass'];
  $query="SELECT * FROM sign WHERE user='$user'";
  $result=mysqli_query($conn,$query);
  $count=mysqli_num_rows($result);
  if ($count>0)
  {
      $row=$result->fetch_assoc();
      if($row['pass']==$pass)
          {
            $_SESSION['user']=$row['user'];
            header("Location: home.php");
          }
      else
      {
        echo "<div class='card bg-dark text-white center'>";
        echo "incorrect password or userid..";
        echo "</div>";
      }
  }
  else
  {
      echo "<div class='card bg-dark text-white center'>";
      echo "userid not found.";
      echo "</div>";
      die(mysqli_error($conn));
  }
?>
</body>
</html>
