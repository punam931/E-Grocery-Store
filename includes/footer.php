<div id="footer"><!--footer start-->
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 start-->
				<h4>Pages</h4>
				<ul>
					<li><a href="cart.php">Shopping Cart</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="shop.php">Shop</a></li>
					<li><a href="customer/my_account.php">My Account</a></li>
				</ul>
				<hr>
				<h4>User Section</h4>
				<ul>
					<li><a href="checkout.php">Login</a></li>
					<li><a href="customer_registration.php">Register</a></li>
				</ul>
				<hr class="hidden-md hidden-lg hidden-sm">
			</div><!--col-md-3 col-sm-6 end-->


<div class="col-md-3 col-sm-6">
	<h4>Top Product Categories</h4>
	<ul>
		<?php
	
		$get_p_cats="select * from product_categories";
		$run_p_cats=mysqli_query($con,$get_p_cats);
		while ($row_p_cat=mysqli_fetch_array($run_p_cats))
		{
			$p_cat_id=$row_p_cat['p_cat_id'];
			$p_cat_title=$row_p_cat['p_cat_title'];
			echo "<li> <a href='shop.php?p_cat=$p_cat_id'> $p_cat_title </a></li>";

		}
		?>
	</ul>
	<hr class="hidden-md hidden-lg">

</div>
	
	<div class="col-md-3 col-sm-6">
		<h4>Where to find us</h4>
		<p>
		<br>office.gpnashik@dtemaharashtra.gov.in
			<br>+91 253 2461221
		</p> 
		<a href="contact.php">Go to contact us page</a>

<hr class="hidden-md hidden-lg">
</div>
<div class="col-md-3 col-sm-6">
	<h4>Get the news</h4>
	<p class="text-muted">
	Chehedi,Samangoan Road,Nashik-Road.
</p>
	<form action="" method="post">
		<div class="input-group">
			<input type="text" name="email" class="form-control">
			<span class="input-group-btn">
				<input type="submit" class="btn btn-default" value="subscribe">
			</span>
		</div>
	</form>
	<hr>
	<h4>Stay In Touch</h4>
	<p class="social">
		<a href="#"><i class="fa fa-facebook"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="#"><i class="fa fa-instagram"></i></a>
		<a href="#"><i class="fa fa-envelope"></i></a>
	</p>
	</div><!--col-md--3 col-sm-6 end-->
</div>
</div>
</div><!--footer end-->
<div id="copyright"><!--copyright section start-->
	<div class="container">
		<div class="col-md-6">
			<p class="pull-left">
				&copy;2019 govt poly nsk
			</p>
	</div>
	<div class="col-md-6">
		<p class="pull-right">
		   templete by: govt poly nashik
		</p>
	</div>


</div>
</div>