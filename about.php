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
                        <a href="v_name.html" class="btn btn-success btn-mm">
                      I Want to Buy
                 </a>
                    </li>
                    <li>
                        <a href="v.php" class="btn btn-success btn-mm">
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
                 	<li class="active" >
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
                        <li> About Us </li>
                    </ul>
                    </div><!--col-md-12 stop-->
</div>
</div>
<div class="container text-center">
<h2>WHAT DRIVES US</h2>
      <h3>Belive that</h3>
      <div class="col-md-8 col-md-offset-2">
        <div class="red-border"></div>
        <p class="ct-u-size22 ct-u-fontWeight300 marginTop40">Logistics in e-commerce mainly concerns fulfillment. Online markets and retailers have to find the best possible way to fill orders and deliver products. Small companies usually control their own logistic operation because they do not have the ability to hire an outside company. Most large companies hire a fulfillment service that takes care of a company's logistic needs</p>
        <!-- <a class="ct-u-marginTop60 btn btn-solodev-red btn-fullWidth-sm ct-u-size19" href="#">Learn More</a> -->


</body>
</html>