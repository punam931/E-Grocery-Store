<?php
session_start();

include("includes/db.php");
include("functions/functions.php");
if(!isset($_SESSION['customer_email']))
{
  $g="select * from selected_vendor";
  $r=mysqli_query($con,$g);
            while ($row=mysqli_fetch_assoc($r))
            {
             $_SESSION["v_id"]=$row['v_id'];
            }
}
//echo $_SESSION['v_id'];
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
                 <a href="#" class="btn btn-success btn-mm">
                                            <?php 
                      if(!isset($_SESSION['customer_email'])){
                        echo " Welcome Guest";
                      }
                      else{
                        echo"".$_SESSION['customer_email']."";
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
                  <a href="cart.php">Cart </a>
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
                 	<li>
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
                 	<li class="active">
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
                        <li> Cart </li>
                    </ul>
                    </div><!--col-md-12 stop-->
                    <div class="col-md-9" id="cart">
                        <div class="box">
                        <form action="cart.php" method="post" enctype="multipart-form-data">
                      <h1>Shopping Cart</h1>
                      <?php
                      $ip_add=getUserIP();
                      $select_cart="select * from cart where ip_add='$ip_add'";
                      $run_cart=mysqli_query($con,$select_cart);
                      $count=mysqli_num_rows($run_cart);
                 ?>
  <p class="text-muted">currently you have <?php echo $count  ?> items in your cart</p>
                            <div class="table-responsive"><!--table-responsive start-->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Quantity(gm/kg)</th>
                                            <th>Unit Price</th>
                                            <th colspan="1">Delete</th>
                                            <th colspan="1">Sub total</th>

                                        </tr>
                                    </thead>
                                    <tbody>
          <?php
            $g_v="select * from selected_vendor";
            $rv=mysqli_query($con,$g_v);
            while ($row=mysqli_fetch_assoc($rv))
            {
              $v_name=$row['Username'];
             $i=$row['v_id'];
           }
                                        $total=0;
                                        while ($row=mysqli_fetch_array($run_cart)) {
                                          $pro_id=$row['p_id'];
                                          $pro_qty=$row['qty'];
                                          $p_qty=$row['q_qty'];

$sele_cart="select * from cart where ip_add='$ip_add' ";
$run_c=mysqli_query($con,$sele_cart);

while ($row_c=mysqli_fetch_array($run_c)) 
{
  $qty=$row_c['qty'];
  $p_qty=$row_c['q_qty'];

        $get_product="select * from products where product_id='$pro_id'";
        $run_pro=mysqli_query($con,$get_product);
        while ($row=mysqli_fetch_array($run_pro)) 
        {
        $p_price=$row['product_price'];
        $p_title=$row['product_title'];
            $p_img1=$row['product_img1'];
            if ($p_qty=="---") {
             $sub_total= ($row['product_price'])* $pro_qty;
                $total+=$sub_total;
            }
            else if ($p_qty=="500gm") {
               $sub_total= ($row['product_price']/2)* $pro_qty;
            $total+=$sub_total;
            // $product_price=$p_price/2;
              }
            else if($p_qty="250gm") 
            {
               $sub_total= ($row['product_price']/4)* $pro_qty;
              $total+=$sub_total;
            // $product_price=$p_price/4;
             }else
              { 
                $sub_total= $row['product_price']* $pro_qty;
                $total+=$sub_total;
                // $product_price=$row['product_price'];
              }
  ?>                                


                                        <tr>
                                          <td><?php echo  $p_title ?></td>
                                    <td><a></a></td>
                                    
                                    <td><?php echo  $pro_qty ?></td> 
                                    <td><?php echo  $p_qty ?></td>
                                    <td><?php echo  $p_price ?></td>
                                    <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id?>"></td>
                                    <td><?php echo $sub_total ?></td>
                                        </tr>
                                        <?php }}}

                                        ?>     
                                    </tfoot>
                                </table>

                            </div><!--table-responsive end-->
                            <BR><P></P>
                           
                            <div class="box-footer">
                                <div class="pull-left"><!--pull-left start-->
                                    <h4>Total Price</h4>                                    
                                </div><!--pull-left end-->
                                <div class="pull-right">
                                    <h4> INR <?php echo $total ;?></h4>
                                </div> 
                                
                            </div>
                             <BR> <BR><P></P><br>
                            <div class="box-footer">
                                <div class="pull-left"><!--pull-left start-->
                                    <a href="shop.php" class="btn btn-default">
                                        <i class="fa fa-chevron-left"></i>continue shopping
                                    </a>                                    
                                </div><!--pull-left end-->
                                <div class="pull-right">
                                    <button class="btn btn-default" type="submit" name="update" value="update cart">
                                        
                                        <i class="fa fa-refresh">update cart</i>
                                    </button>
                                    <a href="checkout.php" class="btn btn-primary">Proceed to Checkout<i class="fa fa-chevron-right"></i></a>


                                </div>
                                
                            </div>
                        </form>
                        </div>
                      <?php 
                         function update_cart()
                         {
                          global $con;
                          if (isset($_POST['update'])) {
                            foreach ($_POST['remove'] as $remove_id) {
                              $delete_product="delete from cart where p_id='$remove_id'";
                              $run_del=mysqli_query($con,$delete_product);
                              if ($run_del) {
                                echo "<script>window.open('cart.php','_self')</script>";
                              }
                            }
                          }
                         }
                echo @$up_cart=update_cart();
                      ?>
                        <div id="row same-height-row"><!--row same-height-row start-->
      <div class="col-md-3 col-sm-6">
          <div class="box same-height headline"><!--row same-height-headline start-->
              <h3 class="text-center">You may also like these products from our store .
              best quality,best price </h3>
          </div><!--row same-height-headline stop-->
      </div>
      <div class="center-responsive col-md-3">
          <div class="product same-height">
              <a href="">
                  <img src="admin_area/product_images/bas_rice.jpg" class="img-responsive">
              </a>
              <div class="text">
                  <h3><a href="details.php">Best Quality Rice </a></h3>
                  <p class="price">INR 200 per kg</p>
              </div>
          </div>
      </div>

      <div class="center-responsive col-md-3">
          <div class="product same-height">
              <a href="">
                  <img src="admin_area/product_images/aata2.png" class="img-responsive">
              </a>
              <div class="text">
                  <h3><a href="details.php">Best Quality Aata</a></h3>
                  <p class="price"><?php echo $total?></p>
              </div>
          </div>
      </div>
      <div class="center-responsive col-md-3">
          <div class="product same-height">
              <a href="">
                  <img src="admin_area/product_images/bis1.png" class="img-responsive">
              </a>
              <div class="text">
                  <h3><a href="details.php">Dark Chocolate Fantasy</a></h3>
                  <p class="price">INR 30</p>
              </div>
          </div>
      </div>
  </div><!--row same-height-row stop-->
                    </div><!--col-md-9 end-->

                    <div class="col-md-3"><!--col-md-3 start-->
                        <div class="box" id="order-summary">
                            <div class="box-header">
                                <h3>Order Summary</h3>
                            </div>
                            <p class="text-muted">
                            Shipping and additional costs are calculated based on the values you have entered</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                      <tr>
                                        <td>  Vendor id: </td>
                                        <th> <?php echo $i; ?></th>
                                      </tr>
                                      <tr>
                                        <td>Vendor Name:</td>
                                        <th>
                                            <?php echo $v_name; ?>
                                        </th>
                                      </tr>
                                        <tr>
                                            <td>Order Subtotal</td>
                                            <th>INR <?php echo $total;?></th>
                                        </tr>
                                        <tr>
                                            <td>Shipping and Handling</td>
                                            <th>INR 5</th>
                                        </tr>
                                          <tr class="Total">
                                          <td>Total</td>
                                          <th>INR <?php echo $total;?></th>
                                        </tr>
                                  </tbody>    
                            </table>
                        </div>
                        
                    </div>
                
</div><!--container stop-->
</div><!--content end-->
<!--footer start-->
    <?php
        include("includes/footer.php");
    ?>
        <!--footer stop-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>

</html>