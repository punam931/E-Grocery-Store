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
<link rel="stylesheet" href="style2.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity=" " crossorigin="anonymous">
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
                        echo "Welcome: ".$_SESSION['customer_email']."";
                      }
                       ?>
                 </a>
                 <a href="#">Shopping cart total price: INR <?php totalPrice(); ?>, Total Items <?php item(); ?>
                 </a>
            </div><!-- col-md-6 stop-->
            <div class="col-md-6">
                <ul class="menu">
                    <li>
                        <a href="customer_registration.php">Register</a>
                    </li>
                    <li>
                        <?php
                        if(!isset($_SESSION['customer_email'])){
                            echo "<a href='checkout.php'>My Account</a>";
                        }else{
                            echo "<a href='customer/my_account.php?my_order'>My Account</a>";
                        }
                        ?>
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
                        <a href="vendor_l.php" class="btn btn-success btn-mm">
                             I Want to Buy</a>
                    </li>
                    <li>
                        <a href="v.php" class="btn btn-success btn-mm">
                      I Want To Sell</a>
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
                    <i  class="fa fa-search"></i>
                </button>
    </div><!--nav navbar-header stop-->

  <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse start-->
                <div class="padding-nav">
                 <ul class="nav navbar-nav navbar-left">
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li >
                        <a href="shop.php">Shop</a>
                    </li>
                    <li >
                        <?php
                        if(!isset($_SESSION['customer_email'])){
                            echo "<a href='checkout.php'>My Account</a>";
                        }else{
                            echo "<a href='customer/my_account.php?my_order'>My Account</a>";
                        }
                        ?>
                    </li>
                    <li >
                        <a href="cart.php">Shopping Cart</a>
                    </li>
                    
                    <li >
                        <a href="contactus.php">Contact Us</a>
                    </li>
                    
                 </ul>                  
                </div>

                <a href="cart.php" class="btn btn-primary navbar-btn right">
                    <i class="fa fa-shopping-cart"> </i>
                    <span><?php item(); ?> Items in cart</span>
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
        <div class="container"><!--Container start-->
  <img src="" style="width:100%">

        <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse start-->
                 
                    <form class="navbar-form" method="get" action="vendor_l.php">
                    <div class="header">
                        <center>
        <h1>
            <font color="white">Search your shop</font><br>
        </h1>
        <div class="form-box">
    <input type="text" name="user_query" placeholder="Search" class="form-control" required="" >
    <button type="submit" value="Search your shop" name="search" class="btn btn-primary">
                            <i class="fa fa-search"></i>
    </button>
    </center>
</div></div></form></div></div></body>
                    </span>
                    </div>
                     
                     </form>
                    </div>
                </div>   
        </div><!--Container end-->

		<div id="advantage"><!--advantage start-->
	<div class="container"><!--container start-->
		<div class="same-height-row"><!--same-height-row start-->
			<div class="col-sm-4"><!--col-sm-4 start-->
				<div class="box same-height"><!--box same-height start-->
			       <div class="icon">
				      <i class="fa fa-heart"></i>
			        </div>
			<h3><a href="#">BEST PRICES</h3>
				<p>You can check on all others shops about the prices and then compare with us.</p>
		</div><!--box same-height end-->
	</div><!--col-sm-4 end-->
	<div class="col-sm-4"><!--col-sm-4 start-->
		<div class="box same-height"><!--box same-height start-->
			<div class="icon">
				<i class="fa fa-heart"></i>

</div>
<h3><a href="#">100% satisfaction</h3>
	<p>yeaahh you will be satisfied with the delivery.</p>
</div><!--box same-height end-->
</div><!--col-sm-4 end-->
<div class="col-sm-4"><!--col-sm-4 start-->
	<div class="box same-height"><!--box same-height start-->
		<div class="icon">
			<i class="fa fa-heart"></i>
		</div>
		<h3><a href="#">WE LOVE OUR CUSTOMERS</h3>
			<p>We are knows to provide best possible service ever</p>
		</div><!--box same-height end-->
	</div><!--col-sm-4 end-->

</div><!--same height row end-->
</div><!--container end-->
</div><!--advantage end-->
<div id="hot"><!--hot start-->
	<div class="box">
		<div class="container">
			<div class="col-md-12">
				<h2>Latest This Week</h2>
				</div>
			</div>
	    </div>
    </div>
	</div><!--hot end-->
	<div id="content" class="container">
		<div class="row">
			<?php
			getPro();
			?>
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