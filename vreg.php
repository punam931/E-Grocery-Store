<?php
$servername = "localhost";
$Username = "Username";
$Address="Address";
$GST_NO.="GST_NO.";
$Contact_No.="Contact_No";
$Email="Email";
$Password = "Password";
$Confirm_Password="Confirm_Password";

// Create connection
$conn = mysqli_connect($servername, $Username,$Address,$GST_NO.,$Contact_No.,$Email,$Password='',$Confirm_Password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
