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
            </div><!-- col-md-6 stop-->
            <div class="col-md-6">
            	<ul class="menu">
            		<li>
            			<a href="../v.php">Register</a>
            		</li>

            		<li>
            			<a href="../login.php">Login</a>
            		</li>
            		 <li>
                        <a href="vendor_l.php" class="btn btn-success btn-sm">
                      I Want to Buy
                 </a>
                    </li>
                    <li>
                        <a href="v.php" class="btn btn-success btn-sm">
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
                <div class="col-sm-2">
                </div>

                <div class="col-md-9"><!--col-md-3 start-->
                    <div class="box"><!--box start-->
                        <div class="box-header"><!--box-header-start-->
                        	<center>
                                <h2>Vendor Registration</h2>
                                
                            </center>
				<form action="" method="POST">
					<div class="form-group">
					  <label>Vendor Name</label><br>
                            <input size="90" id="border" class=varchar type="text" name="Username"  required="" >
                            </div>

                             <div class="form-group">
                                <label> Address</label><br>
                            <input size="90" class=varchar type="text" name="Address" required="" >
                            </div>
                             <div class="form-group">
                                <label> GST No.</label><br>
                            <input size="90" class=varchar type="text" name="gst"  required="" >
                            </div>

                             <div class="form-group">
                                <label>Contact number</label><br>
                            <input size="90" class="int" type="text" name="Contact_No" required="">
                            </div>
                          
                            <div class="form-group">
                                <label> Vendor Email</label><br>
                            <input size="90" class="varchar" type="Email" name="Email"  required="" >
                            </div>

                            <div class="form-group">
                                <label> Vendor Password</label><br>
                            <input size="90" class="varchar" type="Password" name="Password"  required="">
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label><br>
                            <input size="90" class="varchar" type="Password" name="Confirm_Password"  required="">
                            </div>
</br>
					<div class="wthree-text" font align="center">
						<label class="anim" >
							<input type="checkbox" class="checkbox" required="">I Agree To The Terms & Conditions
						</label>
						<div class="clear"> </div>
					</div>
					<div class="kkk" font align="center" >
					<input type="submit"  name="submit" value="Submit" id="Submit"></div>
				</form>
				<div font align="center">
				<p>Already have an Account? <a href="Vlogin.html"> Login Now!</a></p>
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
$Address = $_POST['Address'];
$gst = $_POST['gst'];
$contact_no = $_POST['contact_no'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Confirm_Password = $_POST['Confirm_Password'];
if($Username !=''||$Email !=''){
//Insert Query of SQL
$query = mysqli_query($connection,"insert into registration(Username,Address,gst, contact_no, Email, Password, Confirm_Password) values ('$Username','$Address','$gst', '$contact_no', '$Email', '$Password', '$Confirm_Password')");

}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection); // Closing Connection with Server
?>

</body>
</html>