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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
                 <a href="#" class="btn btn-success btn-mm">
                                            <?php 
                      if(!isset($_SESSION['customer_email'])){
                        echo " Welcome Guest";
                      }
                      else{
                        echo"Welcome: ".$_SESSION['customer_email']."";
                      }


                      ?>
                 </a>
                
            </div><!-- col-md-6 stop-->
            <div class="col-md-6">
            	<ul class="menu">
            		<li>
            			<a href="customer_registration.php">Register</a>
            		</li>

            		<li>
            			<a href="checkout.php">My Account</a>
            		</li>
                    
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    
                    <li>
                        <a href="vendor_l.php" class="btn btn-success btn-mm">
                      I Want to Buy
                 </a>
                    </li>
                    <li>
                        <a href="v_login.php" class="btn btn-success btn-mm">
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
                 	<li >
                 		<a href="index.php">Home</a>
                 	</li>
                 	<li >
                 		<a href="shop.php">Shop</a>
                 	</li>
                 	<li >
                 		<a href="customer/my_account.php">MY Account</a>
                 	</li>
                 	<li >
                 		<a href="cart.php">Shopping Cart</a>
                 	</li>
                 	<li >
                 		<a href="about.php">About Us</a>
                 	</li>
                 	<li class="active">
                 		<a href="services.php">Services</a>
                 	</li>
                 	<li >
                 		<a href="contactus.php">Contact Us</a>
                 	</li>
                 	
                 </ul>					
				</div>


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
                        <li> Services </li>
                    </ul>
                    </div><!--col-md-12 stop-->
</div>
</div>
 <div class="container">
 <div class="container">
                    <div class="content-wrapper">
                        <div class="contact-us-wrapper">
                <div class="row">
                <div class="col-sm-4">
                    <p><center><b>COMPLETE SECURITY</b></center></p>
              <img src="images/s2.jpg" class="img-responsive" >  &nbsp  &nbsp  &nbsp
              <p style=" text-align: justify;">
                                      
                                    The objectives of an integrated security system are to detect intruders with a high degree of reliability and then to deter and delay them until an effective response can be accomplished. </p>
                           </div>

                
                <div class="col-sm-4">
                <p><center><b>INSTANT SERVICE</b></center></p>
                <img src="../ecom/images/s4neww.png" class="img-responsive">&nbsp  &nbsp  &nbsp
                <p style="text-align: justify;">
            
Instant messaging offers fast, convenient communication and expands the possibilities for customer service. It can be a valuable business tool, especially in e-commerce</p>

</div>
                
                <div class="col-sm-4">
                    <p><center><b>CASH ON Admin</b></center></p>
                <img src="../ecom/images/s3new.jpg" class="img-responsive"> &nbsp
                <p style="text-align: justify;">The sale of goods by mail order where payment is made on Admin rather than in advance. If the goods are not paid for, they can be returned to the retailer.</p>
            </div>
        </div>
    </div>
  </div>
</div>
  
  <!--footer start-->
    <?php
        include("includes/footer.php");
    ?>

        <!--footer stop-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>