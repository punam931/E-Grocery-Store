<?php
session_start();
include("includes/db.php");
$trnk="delete from cart ";
 $run_hh=mysqli_query($con,$trnk);
 
 $trunk="delete from selected_vendor";
 $run_tr=mysqli_query($con,$trunk);

 $id="";
 $name="No vendor selected";

  $ins="INSERT into selected_vendor(v_id,Username) values('$id','$name')";
  $runn=mysqli_query($con,$ins);
session_destroy();
echo"<script>window.open('index.php','_self')</script>";


?>