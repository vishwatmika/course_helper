<?php
  session_start();
  $name=$_SESSION['user'];
  include 'header.php';
  include 'connection.php';
?>
<div class="card bg-dark text-white center">
  <h2>Add Courses</h2>
  <form action="addcor.php" method="post">
  <table class="table table-dark table-striped block">
    <thead>
      <tr>
        <th>Course</th>
        <th>Description</th>
        <th>Select</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>PHP</td>
        <td>Learn Web Developement using HTML, CSS, JS with PHP.</td>
        <td><input type="checkbox" name="course[]" value="PHP"></td>
      </tr>
      <tr>
        <td>Android</td>
        <td>Make Interactive Apps for your android devices.</td>
        <td><input type="checkbox" name="course[]" value="ANDROID"></td>
      </tr>
      <tr>
        <td>JAVA</td>
        <td>Learn the most popular language of all time.</td>
        <td><input type="checkbox" name="course[]" value="JAVA"></td>
      </tr>
      <tr>
        <td>Ethical Hacking</td>
        <td>Be a hacker.. Not a Cracker..</td>
        <td><input type="checkbox" name="course[]" value="HACKING"></td>
      </tr>
      <tr>
        <td>Python</td>
        <td>Go with the Trend.. Learn Python</td>
        <td><input type="checkbox" name="course[]" value=PYTHON></td>
      </tr>
      <tr>
        <td>C/C++</td>
        <td>Start your coding with the mother of languages.</td>
        <td><input type="checkbox" name="course[]" value="C/C++"></td>
      </tr>
    </tbody>
  </table>
</div>
<div class="card bg-dark text-white center">
  <input type="submit" value="Add">
</form>
</div>
