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
        <?php foreach ($course as $select) {?>
          <tr>
            <td><?php echo $select ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
<div class="navbar navbar-expand-sm bg-dark navbar-dark center">
<a class="col-sm-4 white" href="add.php">ADD</a>
<a class="col-sm-4 white" href="del.php">DELETE</a>
<a class="col-sm-4 white" href="home.php">PROFILE</a>
</div>
