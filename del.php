<?php
session_start();
include 'header.php';
include 'connection.php';
$user=$_SESSION['user'];
$query="SELECT * FROM sign WHERE user='$user'";
$result=mysqli_query($conn,$query);
$row=$result->fetch_assoc();
$course= explode(" ",$row['course']);?>
<div class="card bg-dark text-white center">
  <h2>Your Courses</h2>
  <table class="table table-dark table-striped block center">
    <tbody>
      <form action="delete.php" method="post">
      <?php foreach ($course as $select) {?>
        <tr>
          <td><?php echo $select."</td>";
          echo "<td><input type='checkbox' name='del[]' value='$select'>"?>
          <td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<div class="card bg-dark text-white center">
  <input type="submit" value="DELETE">
</div>
