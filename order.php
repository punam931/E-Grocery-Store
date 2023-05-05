<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>
<?php
if(isset($_GET['c_id']))
{
$customer_id=$_GET['c_id'];
}
$ip_add=getUserIp();
$status="Pending";
$invoice_no=mt_rand();
$select_v="select * from selected_vendor";
$run_y=mysqli_query($con,$select_v);
while ($row_y=mysqli_fetch_array($run_y)) 
{
  $v_id=$row_y['v_id'];
  $v_n=$row_y['Username'];
}
$select_cart="select * from cart where ip_add='$ip_add'";
$run_cart=mysqli_query($con,$select_cart);

while ($row_cart=mysqli_fetch_array($run_cart)) 
{
	$pro_id=$row_cart['p_id'];
	$qty=$row_cart['qty'];
	$p_qty=$row_cart['q_qty'];

	$get_product="select * from products where product_id='$pro_id'";
	$run_pro=mysqli_query($con,$get_product);

	while ($row_pro=mysqli_fetch_array($run_pro)) 
	{
		$p_price=$row_pro['product_price'];
		if ($p_qty=="500gm") {
			$product_price=$p_price/2;
		}
		else if ($p_qty="250gm") {
			$product_price=$p_price/4;
		}else
		{
			$product_price=$row_pro['product_price'];
		}
	   $sub_total=$product_price * $qty;
	   $insert_cust="insert into customer_order
	   (customer_id,vend_id,product_id,due_amount,invoice_no,qty,p_qty,order_date,order_status)values('$customer_id','$v_id','$pro_id','$sub_total','$invoice_no','$qty','$p_qty',NOW(),'$status')
	   ";


	   $run_cust=mysqli_query($con,$insert_cust);
	  /* $insert_pending_order="insert into pending_order (customer_id,invoice_no,product_id,qty,p_qty,order_status) values('$customer_id','$invoice_no','$pro_id','$qty','$p_qty','$status')";

	   $run_pending_order=mysqli_query($con,$insert_pending_order);*/
	   $delete_cart="delete from cart where ip_add='$ip_add'";
	   $run_del=mysqli_query($con,$delete_cart);
	   echo"<script>alert('your order has been submitted,Thanks')</script>";
	   echo"<script>window.open('customer/my_account.php?my_order','_self')</script>";
	}
}
?>