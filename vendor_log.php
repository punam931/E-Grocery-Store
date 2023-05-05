
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

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity=" " crossorigin="anonymous">
</HEAD>
<style type="text/css">
body{
	 font-family: Arial, Helvetica, sans-serif;
  }
  .Submit: hover{
  	color: black;
  }
.varchar{
 	color: #C0C0C0;
}
  form{
  	font-size: 15px;


  }
  .kkk:
  {
  	align-self: center;
  }
  
  hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
label{
	text box-sizing:  : 50px;

}
</style>
<body>
	<div id="top"><!--top bar starting-->
       <div class="container"><!--container start-->
            <div class="col-md-6 offer"><!-- col-md-6 start-->
                 <a href="#" class="btn btn-success btn-sm">
                      Welcome Guest
                 </a>
                 <a href="#">Shopping cart total price:INR 100,Total Items 2
                 </a>
            </div><!-- col-md-6 stop-->
            <div class="col-md-6">
            	<ul class="menu">
            		<li>
            			<a href="../v.php">Register</a>
            		</li>

            		<li>
            			<a href="../checkout.php">My Account</a>
            		</li>

            		<li>
            			<a href="../cart.php"> Go to cart</a>
            		</li>

            		<li>
            			<a href="../login.php">Login</a>
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
                        <li><a href="home.php">Home</a></li>
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
                                <h2>Vendor login</h2>
                                
                            <br><br>
				<form action="" method="POST">
					<div class="form-group">
					  <label>Vendor Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <input align="center" size="20" id="border" class=varchar type="text" name="Username"  required="" >
                            </div>

                             
                            <div class="form-group">
                                <label> Vendor Password</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <input align="center" size="20" class="varchar" type="Password" name="Password"  required="">
                            </div>

                           </center>
</br>
					<div class="wthree-text" font align="center">
						
						<div class="clear"> </div>
					</div>
					<div class="kkk" font align="center" >
					<input type="submit"  name="submit" value="Submit" id="Submit"></div>
				</form>
                <br>
				<div font align="center">
				<p>Don't have an Account? <a href="v.php"> Register Now!</a></p>
			</div>
			</div>
			</div>
                        </form>
                    </div>
                    </div><!--box close-->
                </div><!--col-md-3 close-->

                </div><!--container stop-->
</div>
		
	<!-- //main -->

<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection,"ecom"); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$Username = $_POST['Username'];
$Password = $_POST['Password'];
if($Username !=''||$Password !=''){
//Insert Query of SQL
$query = mysqli_query($connection,"insert into vlog(Username, Password) values ('$Username','$Password')");

}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection); // Closing Connection with Server
?>

</body>
</html>