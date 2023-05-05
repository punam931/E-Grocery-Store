<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>
<?php
if (isset($_GET['pro_id'])) {
  $pro_id=$_GET['pro_id'];
  $get_product="select * from products where product_id='$pro_id'";
  $run_product=mysqli_query($con,$get_product);
  $row_product=mysqli_fetch_array($run_product);
  $p_cat_id=$row_product['p_cat_id'];
  $p_title=$row_product['product_title'];
  $p_price=$row_product['product_price'];
  $p_desc=$row_product['product_desc'];
  $p_img1=$row_product['product_img1'];
  $p_img2=$row_product['product_img2'];

  $get_p_cat="select * from product_categories where p_cat_id='$p_cat_id'";
  $run_p_cat=mysqli_query($con,$get_p_cat);
  $row_p_cat=mysqli_fetch_array($run_p_cat);
  $p_cat_id=$row_p_cat['p_cat_id'];
  $p_cat_title=$row_p_cat['p_cat_title'];
}
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
            			<a href="customer_registration.php">Register</a>
            		</li>

            		<li>
            			<a href="checkout.php">My Account</a>
            		</li>
<?php
                  if(!isset($_SESSION['customer_email'])){
                    echo "<a href='checkout.php'>Login</a>";
                  }
                  else{
                    echo"<a href='logout.php'>Logout</a>";
                  }

                  ?>
                <li>
                        <a href="vendor_l.php" class="btn btn-success btn-sm">
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
                 	<li >
                 		<a href="index.php">Home</a>
                 	</li>
                 	<li class="active">
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
					<span> <?php item(); ?> Items in cart</span>
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
                        <li> Shop </li>
                        <li ><a href="shop.php?p_cat=<?php echo $p_cat_id;?>">
                          <?php echo $p_cat_title ?>
                        </a>
                       </li>
                      <li><?php echo $p_title ?></li>                        
                    </ul>
                    
                </div><!--col-md-12 stop-->
                <div class="col-md-3"><!--col-md-3-->
                   <?php
                   include("includes/sidebar.php"); 
                   ?> 
                </div>
                <div class="col-md-9">
                    <div class="row" id="productmain">
                        <div class="col-sm-6"><!--col-sm-6--slider start-->
                            <div id="mainimage">
                                <div id="mycarousel" class ="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class ="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1" ></li>
                    
                </ol>
                <div class="carousel-inner"><!--carousel-inner start-->
                    <div class="item active">
                        <center>
                            <img src="admin_area/product_images/<?php echo $p_img1 ?>" class="img-responsive">
                        </center>
                    </div>
             

                    <div class="item">
                        <center>
            <img src="admin_area/product_images/<?php echo $p_img2 ?>" class="img-responsive">
                    </center>
    
            </div><!--carousel-inner end-->
            <a href="#mycarousel" class="left carousel-control" data-slide="prev">
                <span class ="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">previous</span>
            </a>

            <a href="#mycarousel" class="right carousel-control" data-slide="next">
                <span class ="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">next</span>
            </a>

        </div>
    </div>
 </div><!--col-sm-6--slider end-->
 
<!--<div class="col-xs-4">
    <a href="#" class="thumb">
        <img src="admin_area/product_images/sugar1.jpg" class="img-responsive">
    </a>
</div>
<div class="col-xs-4">
    <a href="#" class="thumb">
        <img src="admin_area/product_images/sugar2.jpg" class="img-responsive">
    </a>
</div>

<div class="col-xs-4">
    <a href="#" class="thumb">
        <img src="admin_area/product_images/sugar3.jpg" class="img-responsive">
    </a>
</div>
-->
</div>
  <div class="col-md-6">
    <div class ="box"><!--Box Start-->
        <h1 class="text-center"><?php  echo $p_title ?></h1>
        <?php 
         addCart();
        ?>
        <form action ="details.php?add_cart=<?php echo $pro_id ?>" method="post" class="form-horizontal"><!--Form start-->
            <div class="form-group"><!--form-group start-->
                <label class="col-md-5 control-label">product quantity</label>
                <div class="col-md-7"><!--col-md-7-->
                    <select name="product_qty" class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        </select>
                    </div><!--col-md-7 stop-->
</div><!--form-group stop-->
<div class="form-group">
    <label class="col-md-5 control-label">Product Quantity<br> in gm/kg</label>
    <div class="col-md-7">
        <select name="product_q_qty" class="form-control">
           <option>---</option>
           <option>250 gm</option>
           <option>500gm</option>
           <option>1kg</option>
              <option>2kg</option> 
                <option>3kg</option>
                 <option>4kg</option>
                  <option>5kg</option>             
        </select>
    </div>
</div>
<p class="price"><center>INR <?php echo $p_price; ?></center></p>
<p class="text-center buttons">
    <button class="btn btn-primary" type="submit">
        <i class="fa fa-shopping-cart"></i> Add To Cart
    </button>
</p>
</form><!--form end-->
</div><!--box end-->
</div>
<div id="row same-height-row"><!--row same-height-row start-->
      <div class="col-md-3 col-sm-6">
          <div class="box same-height headline"><!--row same-height-headline start-->
              <h3 class="text-center">You may also like these products from our store .
              best quality,best price </h3>
          </div><!--row same-height-headline stop-->
      </div>
      <?php
         $get_product="select * from products order by 1 LIMIT 0,3";
         $run_product=mysqli_query($con,$get_product);
         while ($row=mysqli_fetch_array($run_product)) {
           $pro_id=$row['product_id'];
           $product_title=$row['product_title'];
           $product_price=$row['product_price'];
           $product_img1=$row['product_img1'];
           
           echo "<div class='center-responsive col-md-3 col-sm-6'>
           <div class='product same-height'>
           <a href='details.php?pro_id=$pro_id'>
          <img src='admin_area/product_images/$product_img1' class='img-responsive'>
           </a>
           <div>
           <h3><a href='details.php?pro_id=$pro_id'><center> $product_title</center></a></h3>
           <p class='price'><center>INR $product_price </center></p>
           
           </div>
           </div>
           </div>";
         }
      ?>
        </div><!--row same-height-row stop-->
</div>

</div><!--container end-->
</div><!--content end-->
<!--footer start-->
    <?php
        include("includes/footer.php");
    ?>
        <!--footer stop-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>

</html>