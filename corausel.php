-->
<div class="container" id="slider"><!--Container start-->
             <div class="col-md-12"><!--col-md-12 Start-->
             	<div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel-slide start-->
             		
             			<li data-target="myCarousel" data-slide-to="0" class="active"></li>
             			
             			
             			
             			<div class="carousel-inner"><!-- carousel-inner start-->
             				<?php
             				$get_slider="select * from slider LIMIT 0,1";
             				$run_slider= mysqli_query($con,$get_slider);
                            
             				while($row=mysqli_fetch_array($run_slider))
             				{
             					$slider_name=$row['slider_name'];
             					$slider_image=$row['slider_image'];

             					echo "<div class='item active'>
             					<img src='admin_area/slider_images/$slider_image'>
             					</div>
             					
             				}

             				?>

             				
             				
             			</div><!-- carousel-inner stop-->
             			
             	</div><!-- carousel-slide stop-->	
             </div>	<!--col-md-12 End-->	
		</div><!--Container end