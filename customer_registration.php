<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>

<!DOCTYPE html>
<HEAD>
	<TITLE>
		Ecommerce store
	</TITLE>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/style.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</HEAD>
<body>
	<div id="top"><!--top bar starting-->
       <div class="container"><!--container start-->
            <div class="col-md-6 offer"><!-- col-md-6 start-->
                 <a href="#" class="btn btn-success btn-sm">
                      <?php 
                      if(!isset($_SESSION['customer_email'])){
                        echo " Welcome Guest";
                      }
                      else{
                        echo"Welcome: ".$_SESSION['customer_email']."";
                      }


                      ?>
                 </a>
                 <a href="#">Shopping cart total price: INR <?php totalPrice(); ?>, Total Items <?php item(); ?>
                 </a>
            </div><!-- col-md-6 stop-->
            <div class="col-md-6">
            	<ul class="menu">
            		<li>
            			<a href="../customer_registration.php">Register</a>
            		</li>

            		<li>
            			<a href="../checkout.php">My Account</a>
            		</li>
                <li>
                  <?php
                  if(!isset($_SESSION['customer_email'])){
                    echo "<a href='checkout.php'>Login</a>";
                  }
                  else{
                    echo"<a href='logout.php'>Logout</a>";
                  }

                  ?>

                </li>

                    <li>
                        <a href="v_name.html" class="btn btn-success btn-sm">
                      I Want to Buy
                 </a>
                    </li>
                    <li>
                        <a href="v_login.php" class="btn btn-success btn-sm">
                      I Want To Sell
                 </a>
                    </li>
            	</ul>

            </div>
       </div><!--container stop-->   

	</div><!--top bar end-->
	<div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default start-->
		<div class="container">
			<div class="navbar-header"><!--nav navbar-header start-->
				<a class="navbar-brand home" href="index.php">
					<img src="images/e1.png" alt="E-com" class="hidden-xs">
					<img src="images/e2.png" alt="E-com" class="visible-xs">
					
				</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-align-justify"></i>
				</button>
				<button type="button" class="navbar-toggle" data-toggle="navbar-toggle" data-target="#search">
					<span class="sr-only"></span>
				    <i	class="fa fa-search"></i>
				</button>
			</div><!--nav navbar-header stop-->
			<div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse start-->
				<div class="padding-nav">
                 <ul class="nav navbar-nav navbar-left">
                 	<li class="active" >
                 		<a href="index.php">Home</a>
                 	</li>
                 	<li >
                 		<a href="shop.php">Shop</a>
                 	</li>
                 	<li >
                 		<a href="checkout.php">MY Account</a>
                 	</li>
                 	<li >
                 		<a href="cart.php">Shopping Cart</a>
                 	</li>
                 	<li >
                 		<a href="about.php">About Us</a>
                 	</li>
                 	<li >
                 		<a href="services.php">Services</a>
                 	</li>
                 	<li >
                 		<a href="contactus.php">Contact Us</a>
                 	</li>
                 	
                 </ul>					
				</div>

				<a href="cart.php" class="btn btn-primary navbar-btn right">
					<i class="fa fa-shopping-cart"> </i>
					<span> 4 Items in cart</span>
				</a>
				<div class="navbar-collapse collapse right">
					<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
						<span class="sr-only">Toggle Search
						</span>
						<i class="fa fa-search"></i>
						
					</button>

				</div>
				<div class="collapse clearfix" id="search">
					<form class="navbar-form" method="get" action="shop.php">
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
			</div><!--navbar-collapse collapse stop-->
		</div>
		</div><!-- navbar navbar-default end-->
        <div id="content">
            <div class="container"><!--container start-->
                <div class="col-md-12"><!--col-md-12 start-->
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li> Registration </li>
                        
                    </ul>
                    
                </div><!--col-md-12 stop-->
                <div class="col-md-3"><!--col-md-3-->
                   <?php
                   include("includes/sidebar.php"); 
                   ?> 
                </div>

                <div class="col-md-9"><!--col-md-3 start-->
                    <div class="box"><!--box start-->
                        <div class="box-header"><!--box-header-start-->
                            <center>
                                <h2>Customer Registration</h2>
                                
                            </center>
                        </div><!--box-header close-->
                        <form action="customer_registration.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Customer Name</label>
                            <input type="text" name="c_name" required="" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label> Customer Email</label>
                            <input type="text" name="c_email" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label> Customer Password</label>
                            <input type="password" name="c_password" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label> Address</label>
                            <input type="text" name="c_address" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label>City</label>
                            <input type="text" name="c_city" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label>Contact number</label>
                            <input type="text" name="c_contact" class="form-control" required="">
                            </div>

                            <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fa fa-user-md"></i>Register
                            </button>
                            </div>

                            

                        </form>
                    </div>
                    </div><!--box close-->
                </div><!--col-md-3 close-->

                </div><!--container stop-->
</div>
<!--footer start-->
    <?php
        include("includes/footer.php");
    ?>
        <!--footer stop-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>

</html>

<?php 
  if (isset($_POST['submit'])) {
      $c_name=$_POST['c_name'];
      $c_email=$_POST['c_email'];
      $c_password=$_POST['c_password'];
      $c_address=$_POST['c_address'];
      $c_city=$_POST['c_city'];
      $c_contact=$_POST['c_contact'];
      // $c_ip=getUserIp();
      $insert_customer="insert into customers (customer_name,customer_email,customer_pass,customer_address,customer_city,customer_contact,customer_ip) values('$c_name','$c_email','$c_password','$c_address','$c_city','$c_contact','$c_ip')";
      $run_customer=mysqli_query($con,$insert_customer); 
      $sel_cart="select * from cart where ip_add='$c_ip'";
      $run_cart=mysqli_query($con,$sel_cart);
      $check_cart=mysqli_num_rows($run_cart);

      if ($check_cart>0) {
          $_SESSION['customer_email']=$c_email;
          echo "<script> alert('You have been registered successfully')</script>";
          echo "<script>window.open('checkout.php','_self')</script>";
      }else
      {
        $_SESSION['customer_email']=$c_email;
        echo"<script> alert('You have been registered successfully')</script>";
        echo"<script>window.open('index.php','_self')</script>";
      }
  }
?>