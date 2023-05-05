<?php
session_start();
$_SESSION['v_id']=0;

include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>vendor list</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="style2.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity=" " crossorigin="anonymous">
</head>
<body>
	
        <div id="top"><!--top bar starting-->
       <div class="container"><!--container start-->
            <div class="col-md-6 offer"><!-- col-md-6 start-->
                 <a href="#" class="btn btn-success btn-mm">
                      Welcome Guest
                 </a>
            </div><!-- col-md-6 stop-->
            
       </div><!--container stop-->   
     </div><!--top bar end-->
    <div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default start-->
        <div class="container">
            <div class="navbar-header"><!--nav navbar-header start-->
                <a class="navbar-brand home" href="index.php">
                    <img src="images/e1.png" alt="E-com" class="hidden-xs">
                    <img src="images/e2.png" alt="E-com" class="visible-xs">
                </a>
                   </div><!--nav navbar-header stop-->

  <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse start-->
                
          <div class="navbar-collapse collapse right">
                 
                    <form class="navbar-form" method="get" action="vendor_l.php">
                    <div class="input-group">
    <input type="text" name="user_query" placeholder="Search" class="form-control" required="">
    <span class="input-group-btn">
    <button type="submit" value="Search" name="search" class="btn btn-primary">
                            <i class="fa fa-search"></i>
    </button>
                    </span>
                    </div>
                     </form>
                    </div>
                </div>
                </div><!--navbar-collapse collapse stop-->
        </div>
        </div>
        <center><!-- navbar navbar-default end-->
   <form>
        <div class="row"  >
        	
        	<?php
        	 $per_page=6;
                if (isset($_GET['page'])) 
                {
                   $page=$_GET['page'];
                }else 
                {
                $page=1;
                }
        	$start_from=($page-1) * $per_page;
        	if(isset($_GET['user_query']))
        	{
            $para=$_GET['user_query'];
            
            $get_vendor="select * from registration where address OR v_name like '%$para%'order by 1 DESC LIMIT $start_from,$per_page ";

            $run_vendor=mysqli_query($con,$get_vendor);
            while ($row=mysqli_fetch_array($run_vendor)) {
              $v_id=$row['vend_id'];
              $username=$row['v_name'];
              $address=$row['address'];
              $contact_no=$row['contact_no'];
              $email=$row['email'];
              echo " 
              <div class='col-sm-4 col-md-8 center-responsive'>
              <div class='vendor'>
              <a href='shop.php?v_id=$v_id'>
              <div class='text'>
              
                <h3> <a href='shop.php?v_id=$v_id' >$username</a></h3>
                <p class='text'>$address </p>
                <p class='text'>  $contact_no</p>
                <p class='text'>  $email</p>
                <p class='buttons'>
                <a href='shop.php?v_id=$v_id' type='submit' name='submit' class='btn btn-primary' >
                    Select Vendor
                </a>
                </p>
                

                </div>
              </div>
              </div>";
            }
        } 
        else{
        	$get_vendor="select * from registration order by 1 DESC LIMIT $start_from,$per_page ";

            $run_vendor=mysqli_query($con,$get_vendor);
            while ($row=mysqli_fetch_array($run_vendor)) {
              $v_id=$row['vend_id'];
              $username=$row['v_name'];
              $address=$row['address'];
              $contact_no=$row['contact_no'];
              $email=$row['email'];
              if (isset($_SESSION['customer_email'])) 
              {
                echo " 
              <div class='col-sm-4 col-md-8 center-responsive' align='center'>
              <div class='container'>
              <div class='product'>
              <a href='shop.php?v_id=$v_id'>
              
              <div class='text'>
                <h3> <a href='shop.php?v_id=$v_id'>  &nbsp &nbsp &nbsp &nbsp &nbsp $username</a></h3>
                <h4><p class='text'>  &nbsp &nbsp &nbsp &nbsp &nbsp $address </p></h4>
               
                <h4><p class='text'>  &nbsp &nbsp &nbsp &nbsp &nbsp $email</p></h4>
                 <h4><p class='text'>  &nbsp &nbsp &nbsp &nbsp &nbsp $contact_no</p></h4>
                <p class='buttons'> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <a href='shop.php?v_id=$v_id' type='submit' name='submit' class='btn btn-primary' >
                    Select Vendor
                </a>
                </p> </div>
              </div>
              </div>
              </div>";
              }
              else
              {
                echo " 
              <div class='col-sm-4 col-md-8 center-responsive' align='center'>
              <div class='container'>
              <div class='product'>
              <a href='checkout.php?v_id=$v_id'>
              
              <div class='text'>
                <h3> <a href='shopcheckout.php?v_id=$v_id'>  &nbsp &nbsp &nbsp &nbsp &nbsp $username</a></h3>
                <h4><p class='text'>  &nbsp &nbsp &nbsp &nbsp &nbsp $address </p></h4>
               
                <h4><p class='text'>  &nbsp &nbsp &nbsp &nbsp &nbsp $email</p></h4>
                 <h4><p class='text'>  &nbsp &nbsp &nbsp &nbsp &nbsp $contact_no</p></h4>
                <p class='buttons'> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <a href='checkout.php?v_id=$v_id' type='submit' name='submit' class='btn btn-primary' >
                    Select Vendor
                 </a>
                </p></div>
              </div>
              </div>
              </div>";
              }
              }
        }
       ?> 
     </center>

     <!--  <div class="form-group">
	<input type="submit"  name="submit" value="Shop" class="btn btn-primary form-control">
	</div>-->
</form>	
        </div>
    </form>
    <br><br><br><br><br><br><br><br>
    <?php
		include("includes/footer.php");
	?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php 
if (isset($_POST['submit']))
         {
         	 $v_id=$_GET['vend_id'];
         	$username=$_POST['v_name'];
          
         	$inset_vendor="INSERT into cart(v_id) values('$v_id')";
	
	$run_vendor=mysqli_query($con,$inset_vendor);
	
	if($run_vendor)
	{
    $_SESSION['v_id']=$v_id;
		echo "<script>alert('Vendor is selected') </script>";
	echo "<script>window.open('shop.php') </script>";
}
         }
?>