
<!DOCTYPE html>
<!--PHP login System by WEBDEVTRICK (https://webdevtrick.com) -->
<html>
<head>
<meta charset="utf-8">
<title>Registration | Webdevtrick.com</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('db.php');
if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);
    $address = stripslashes($_REQUEST['address']);
    $address = mysqli_real_escape_string($con,$address); 
    $gst = stripslashes($_REQUEST['gst']);
    $gst = mysqli_real_escape_string($con,$gst); 
    $contact_no = stripslashes($_REQUEST['contact_no']);
    $contact_no = mysqli_real_escape_string($con,$contact_no); 
    $email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username,address,gst,contact_no,  email,password, trn_date)
VALUES ('$username','$address','$gst','$contact_no','$email', '".md5($password)."', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
	<form class="login" action="" method="post">
    <h1 class="login-title">Register | Webdevtrick.com</h1>
		<input type="text" class="login-input" name="username" placeholder="Username" required /><br>
        <input type="text" class="login-input" name="address" placeholder="Address" required /><br>
        <input type="text" class="login-input" name="gst" placeholder="Gst.no" required /><br>
        <input type="text" class="login-input" name="contact_no" placeholder="Contact.No" required /><br>
    <input type="text" class="login-input" name="email" placeholder="Email Adress"><br>
    <input type="password" class="login-input" name="password" placeholder="Password"><br>
    <input type="submit" name="submit" value="Register" class="login-button">
  <p class="login-lost">Already Registered? <a href="login.php">Login Here</a></p>
  </form>
 
<?php } ?>
</body>
</html>