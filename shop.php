<?php
//starting session
session_start();
$_SESSION["v_id"]="";
if (isset($_GET['v_id']))
  {
     $v_id=$_GET['v_id'];
     $_SESSION["v_id"]=$v_id;
  }
  // echo "Session :".$_SESSION['v_id'];
?>
<?php
include("includes/db.php");
include("functions/functions.php");
?>
<?php
/*
$(window).unload(function()
{
  $del="delete from selected_vendor";
 $run_del=mysqli_query($con,$del);
});*/
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
                        echo $_SESSION['customer_email'];
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
                  <a href="cart.php">Cart</a>
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
            <i  class="fa fa-search"></i>
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
    <input type="text" name="user_query" placeholder="Search your product" class="form-control" required="">
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
                        
                    </ul>
                    
                </div><!--col-md-12 stop-->
                <div class="col-md-3"><!--col-md-3-->
          
        <?php  
                   if (isset($_GET['v_id'])){
                   $ve_id=$_GET['v_id'];
            $get_v="select v_name from registration where vend_id like '$ve_id'";
            $run_v=mysqli_query($con, $get_v);
            while ($row=mysqli_fetch_assoc($run_v)){
             $v_name=$row["v_name"];
             echo "
                <p><h4><b>vendor id :$ve_id </b></h3></p>
                <p><h4><b>vendor :$v_name </b></h3></p>
                "; 
        
           $get="select * from selected_vendor ";
            $run=mysqli_query($con, $get);
             while ($row=mysqli_fetch_assoc($run))
             {
             $v=$row["v_id"];
             }

        if (isset($_SESSION['customer_email'])) 
        {
        $in_v="UPDATE selected_vendor SET v_id ='$ve_id', Username ='$v_name' WHERE v_id='$v'";
        $r_v=mysqli_query($con,$in_v);   
        }
        else
        {
        $inset_vv="update selected_vendor(v_id,Username) values('$ve_id','$v_name')";
        $run_vv=mysqli_query($con,$inset_vv);
        if($run_vv)
          {
           echo "<script>alert('Vendor Selected Successfully') </script>";
           // echo "<script>window.open('shop.php') </script>";
          }//if
        }
     }//while
        }//if
        if ($_SESSION["v_id"]==0) {
          echo "
          <a href='vendor_l.php' class='btn btn-primary btn-mm navbar-btn'>
          -> -> ->
          <i class='fa fa-user'> </i>
          Select Vendor
          </a>
          ";
          }
   ?>

            <?php
                   include("includes/sidebar.php");
            ?>
                </div>
                <div class="col-md-9"><!--col-md-9 start-->
                    <?php
                      if(!isset($_GET['p_cat']))
                      {
                        if (!isset($_GET['cat_id']) && !isset($_GET['p_cat'])) 
                        {
                            echo "<div class='box'>
                            <h1>Shop</h1>           
                            <b> Select Vendor for continue Shopping......</b>
                            </div>";
                        }
                      }
                     ?>

    <div class="row"><!--row start-->
    <?php
        global $param;
      if (!isset($_GET['p_cat'])) 
      {
            if(!isset($_GET['cat_id']))
            {


                 $per_page=6;
                if (isset($_GET['page'])) 
                {
                   $page=$_GET['page'];
                }else 
                {
                $page=1;
                }
            $start_from=($page-1) * $per_page;
    
      /*    if ( isset($_GET['user_query']) && isset($_SESSION['v_id']))
             {
              $param=$_GET['user_query'];
              $get_vv="select * from selected_vendor ";
              $run_vv=mysqli_query($con,$get_vv);
            while ($row=mysqli_fetch_array($run_vv))
            {
              $v_id=$row['v_id'];
              $v_name=$row['Username'];
            }
            $get_product="select * from products where vend_id like'$v_id' AND product_title like '%$param%' ";
            $run_pro=mysqli_query($con,$get_product);
            while ($row=mysqli_fetch_array($run_pro)) {
              $pro_id=$row['product_id'];
              $product_title=$row['product_title'];
              $product_price=$row['product_price'];
              $pro_img1=$row['product_img1'];
              echo " 
              <div class='col-md-4 col-sm-6 center-responsive'>
              <div class='product'>
              <a href='details.php?pro_id=$pro_id'>
              <img src='admin_area/product_images/$pro_img1' class='img-responsive'>
              </a>
              <div class='text'>
                <h3> <a href='details.php?pro_id=$pro_id'>$product_title</a></h3>
                <p class='price'> INR $product_price </p>
                <p class='buttons'>
                <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
                <a href='details.php?pro_id=$pro_id' class='btn btn-primary'> 
                <i class='fa fa-shopping-cart'> </i>
                 Add To Cart
                </a>
                </p>
              </div>
              </div>
              </div>";
             }  
            } 
             else*/ if (!isset($_GET['user_query']) && isset($_GET['v_id']))
            {    //1st condition
              $get_vv="select * from selected_vendor";
              $run_vv=mysqli_query($con,$get_vv);
                while ($row=mysqli_fetch_array($run_vv))
                 {
                  $v_id=$row['v_id'];
                  $v_name=$row['Username'];
                 }
            $get_product="select * from products where vend_id like '$v_id' order by 1 DESC LIMIT  $start_from,$per_page ";
            $run_pro=mysqli_query($con,$get_product);
            while ($row=mysqli_fetch_array($run_pro)) {
              $pro_id=$row['product_id'];
              $product_title=$row['product_title'];
              $product_price=$row['product_price'];
              $pro_img1=$row['product_img1'];
              if(!isset($_SESSION['customer_email'])) {
                echo " 
              <div class='col-md-4 col-sm-6 center-responsive'>
              <div class='product'>
              <a href='$pro_id'>
              <img src='admin_area/product_images/$pro_img1' class='img-responsive'>
              </a>
              <div class='text'>
                <h3> <a href='checkout.php?pro_id=$pro_id'>$product_title</a></h3>
                <p class='price'> INR $product_price </p>
                <p class='buttons'>
                <a href='checkout.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
                <a href='checkout.php?pro_id=$pro_id' class='btn btn-primary'> 
                <i class='fa fa-shopping-cart'> </i>
                 Add To Cart
                </a>
                </p>
              </div>
              </div>
              </div>";
              }else{
               echo " 
              <div class='col-md-4 col-sm-6 center-responsive'>
              <div class='product'>
              <a href='details.php?pro_id=$pro_id'>
              <img src='admin_area/product_images/$pro_img1' class='img-responsive'>
              </a>
              <div class='text'>
                <h3> <a href='details.php?pro_id=$pro_id'>$product_title</a></h3>
                <p class='price'> INR $product_price </p>
                <p class='buttons'>
                <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
                <a href='details.php?pro_id=$pro_id' class='btn btn-primary'> 
                <i class='fa fa-shopping-cart'> </i>
                 Add To Cart
                </a>
                </p>
              </div>
              </div>
              </div>";  
              }
              }
            }//1st condition ends
             else if (isset($_GET['user_query']) )
            {
 //2nd condition: when user query sets 
            $param=$_GET['user_query'];
            
         $get_product="select * from products where product_title like '%$param%'order by 1 DESC LIMIT $start_from,$per_page ";
            
            $run_pro=mysqli_query($con,$get_product);
            while ($row=mysqli_fetch_array($run_pro)) {
              $pro_id=$row['product_id'];
              $product_title=$row['product_title'];
              $product_price=$row['product_price'];
              $pro_img1=$row['product_img1'];
  //2nd condition :when no vendor selected then no redirection on details.php      
              if ($_SESSION["v_id"]==0) 
              {
                echo " 
              <div class='col-md-4 col-sm-6 center-responsive'>
              <div class='product'>
              <a href='shop.php?pro_id=$pro_id'>
              <img src='admin_area/product_images/$pro_img1' class='img-responsive'>
              </a>
              <div class='text'>
                <h3> <a href='shop.php?pro_id=$pro_id'>$product_title</a></h3>
                <p class='price'> INR $product_price </p>
                <p class='buttons'>
                <a href='shop.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
                <a href='shop.php?pro_id=$pro_id' class='btn btn-primary'> 
                <i class='fa fa-shopping-cart'> </i> 
                 Add To Cart
                </a>
                </p>

                </div>
              </div>
              </div>";
              }
  //2nd condition : when vendor is selected            
              else
              {       //if is not set login ,isset vendor then redirect to login page
              if (!isset($_SESSION['customer_email'])) {
                echo " 
              <div class='col-md-4 col-sm-6 center-responsive'>
              <div class='product'>
              <a href='$pro_id'>
              <img src='admin_area/product_images/$pro_img1' class='img-responsive'>
              </a>
              <div class='text'>
                <h3> <a href='checkout.php?pro_id=$pro_id'>$product_title</a></h3>
                <p class='price'> INR $product_price </p>
                <p class='buttons'>
                <a href='checkout.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
                <a href='checkout.php?pro_id=$pro_id' class='btn btn-primary'> 
                <i class='fa fa-shopping-cart'> </i>
                 Add To Cart
                </a>
                </p>
              </div>
              </div>
              </div>";
              }else{     //if isset vendor , login then redirect to details.php
               echo " 
              <div class='col-md-4 col-sm-6 center-responsive'>
              <div class='product'>
              <a href='details.php?pro_id=$pro_id'>
              <img src='admin_area/product_images/$pro_img1' class='img-responsive'>
              </a>
              <div class='text'>
                <h3> <a href='details.php?pro_id=$pro_id'>$product_title</a></h3>
                <p class='price'> INR $product_price </p>
                <p class='buttons'>
                <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
                <a href='details.php?pro_id=$pro_id' class='btn btn-primary'> 
                <i class='fa fa-shopping-cart'> </i>
                 Add To Cart
                </a>
                </p>
              </div>
              </div>
              </div>";  
              }
            }
          }
        }//2nd condition ends
  //3rd condition starts
        else if ($_SESSION['v_id']!=0)
          {
            $a=$_SESSION['v_id'];
             $g_p="select * from products where v_id='$a' order by 1 DESC LIMIT $start_from,$per_page ";
            $r_p=mysqli_query($con,$g_p);
            while($row=mysqli_fetch_array($r_p)) {
              $pro_id=$row['product_id'];
              $product_title=$row['product_title'];
              $product_price=$row['product_price'];
              $pro_img1=$row['product_img1'];
              if (!isset($_SESSION['customer_email'])) 
           {
                echo " 
              <div class='col-md-4 col-sm-6 center-responsive'>
              <div class='product'>
              <a href='$pro_id'>
              <img src='admin_area/product_images/$pro_img1' class='img-responsive'>
              </a>
              <div class='text'>
                <h3> <a href='checkout.php'>$product_title</a></h3>
                <p class='price'> INR $product_price </p>
                <p class='buttons'>
                <a href='checkout.php' class='btn btn-default'>View Details</a>
                <a href='checkout.php' class='btn btn-primary'> 
                <i class='fa fa-shopping-cart'> </i>
                 Add To Cart
                </a>
                </p>
              </div>
              </div>
              </div>";
              }else
              {
               echo " <div class='col-md-4 col-sm-6 center-responsive'>
              <div class='product'>
              <a href='details.php?pro_id=$pro_id'>
              <img src='admin_area/product_images/$pro_img1' class='img-responsive'>
              </a>
              <div class='text'>
                <h3> <a href='details.php?pro_id=$pro_id'>$product_title</a></h3>
                <p class='price'> INR $product_price </p>
                <p class='buttons'>
                <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
                <a href='details.php?pro_id=$pro_id' class='btn btn-primary'> 
                <i class='fa fa-shopping-cart'> </i>
                 Add To Cart
                </a>
                </p>
              </div>
              </div>
              </div>";  
              }
            }
          }//3rd condition ends
          else //4th condition starts
            {
            //3rd condition: when no vendor selected
            $get_product="select * from products order by 1 DESC LIMIT $start_from,$per_page ";
            
            $run_pro=mysqli_query($con,$get_product);
            while ($row=mysqli_fetch_array($run_pro)) {
              $pro_id=$row['product_id'];
              $product_title=$row['product_title'];
              $product_price=$row['product_price'];
              $pro_img1=$row['product_img1'];
                      if (!isset($_SESSION['customer_email'])) 
           {
                echo " 
              <div class='col-md-4 col-sm-6 center-responsive'>
              <div class='product'>
              <a href='$pro_id'>
              <img src='admin_area/product_images/$pro_img1' class='img-responsive'>
              </a>
              <div class='text'>
                <h3> <a href='checkout.php'>$product_title</a></h3>
                <p class='price'> INR $product_price </p>
                <p class='buttons'>
                <a href='checkout.php' class='btn btn-default'>View Details</a>
                <a href='checkout.php' class='btn btn-primary'> 
                <i class='fa fa-shopping-cart'> </i>
                 Add To Cart
                </a>
                </p>
              </div>
              </div>
              </div>";
              }else{     //if isset vendor , login then redirect to details.php
              
                if ($_SESSION["v_id"]==0 ) 
              {

                echo " 
              <div class='col-md-4 col-sm-6 center-responsive'>
              <div class='product'>
              <a href='shop.php?pro_id=$pro_id'>
              <img src='admin_area/product_images/$pro_img1' class='img-responsive'>
              </a>
              <div class='text'>
                <h3> <a href='shop.php?pro_id=$pro_id'>$product_title</a></h3>
                <p class='price'> INR $product_price </p>
                <p class='buttons'>
                <a href='vendor_l.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
                <a href='vendor_l.php?pro_id=$pro_id' class='btn btn-primary'> 
                <i class='fa fa-shopping-cart'> </i> 
                 Add To Cart
                </a>
                </p> </div>
              </div>
              </div>";
              }else
              {

               echo " 
              <div class='col-md-4 col-sm-6 center-responsive'>
              <div class='product'>
              <a href='details.php?pro_id=$pro_id'>
              <img src='admin_area/product_images/$pro_img1' class='img-responsive'>
              </a>
              <div class='text'>
                <h3> <a href='details.php?pro_id=$pro_id'>$product_title</a></h3>
                <p class='price'> INR $product_price </p>
                <p class='buttons'>
                <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
                <a href='details.php?pro_id=$pro_id' class='btn btn-primary'> 
                <i class='fa fa-shopping-cart'> </i>
                 Add To Cart
                </a>
                </p>
              </div>
              </div>
              </div>";  
              }
            }

            }//4th condition ends
}
          
    ?>
    </div><!--row end-->

<center>
    <ul class="pagination">
     <?php
     if ($_SESSION["v_id"]!=0 && isset($_GET['user_query'])) 
     {
      $_SESSION["v_id"]=$v_id;
      $query="select * from products where vend_id LIKE '$v_id' AND product_title like '%$param%' ";
      $result=mysqli_query($con,$query);
      $total_record=mysqli_num_rows($result);
      $total_pages=ceil($total_record/$per_page);
      echo "<li> <a href='shop.php?page=1'>".'First Page'." </a></li>"; 
       for($i=1;$i<=$total_pages;$i++)
       {
        echo "<li> <a href='shop.php?page=".$i."'>".$i."</a></li>";
       };
       echo "
       <li> <a href='shop.php?page=$total_pages'>".'First Page'." </a></li>";

            }
     elseif(!isset($_GET['user_query']))
      {
        $query="select * from products";
      $result=mysqli_query($con,$query);
      $total_record=mysqli_num_rows($result);
      $total_pages=ceil($total_record/$per_page);
      echo "<li> <a href='shop.php?page=1'>".'First Page'." </a></li>"; 
       for($i=1;$i<=$total_pages;$i++)
       {
        echo "<li> <a href='shop.php?page=".$i."'>".$i."</a></li>";
       };
       echo "
       <li> <a href='shop.php?page=$total_pages'>".'First Page'." </a></li>";

      }else{
      $query="select * from products where product_title like '%$param%'";
      $result=mysqli_query($con,$query);
      $total_record=mysqli_num_rows($result);
      $total_pages=ceil($total_record/$per_page);
      echo "<li> <a href='shop.php?page=1'>".'Previous'." </a></li>"; 
       for($i=1;$i<=$total_pages;$i++)
       {
        echo "<li> <a href='shop.php?user_query=".$param."&page=".$i."'>".$i."</a></li>";
       };
       echo "
       <li> <a href='shop.php?user_query=".$param."&page=$total_pages'>".'Next page'." </a></li>";
       }
       }
    }   
      ?>
    </ul>
</center>    

  <?php
    getPcatPro();
    getCatPro();
  ?>
  
</div><!--col-md-9 stop-->
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