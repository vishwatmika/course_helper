<?php
session_start();
include "connection.php";
include "header.php";
    $name=$_POST['name'];
    $id=$_POST['id'];
    $cont=$_POST['pno'];
    $mail=$_POST['mail'];
    $pass=$_POST['pass'];
    $conf=$_POST['cnf'];
    $temp='true';
    $query="SELECT * FROM sign";
    $result=mysqli_query($conn,$query);
      if($result->num_rows > 0)
      {
        while ($row=$result->fetch_assoc())
        {
          if($row['user']==$id)
            $temp='false';
        }
      }
      if (($pass==$conf)&&($temp=='true'))
      {
        $query="INSERT INTO `sign`(`name`, `user`, `phone`, `mail`, `pass`) VALUES  ('$name','$id','$cont','$mail','$pass')";
        if(mysqli_query($conn,$query))
        {
            echo "<div class='card bg-dark text-white center'>";
            echo "<h1>"."Welcome ". $name."</h1>";
            echo "</div>";
            $_SESSION['user']=$id;
            echo "<a class='logpro' href='pic.php'>SET YOUR PROFILE</a>";
        }
      }
      elseif (($pass==$conf)&&($temp=='false'))
      {
          echo "<div class='card bg-dark text-white center'>";
          echo("User ID should be unique");
          echo "</div>";
      }
      else
      {
          echo "<div class='card bg-dark text-white center'>";
          echo "both passwords do not match!!!";
          echo "</div>";
      }
    mysqli_close($conn);
  ?>
  <br>
</body>
</html>
