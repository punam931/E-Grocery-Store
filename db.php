<!--PHP login System by WEBDEVTRICK (https://webdevtrick.com) -->
<?php
$con = mysqli_connect("localhost","root","","register");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>