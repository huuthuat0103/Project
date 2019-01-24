<?php
/*
 Template Name: home
 */
 ?>
 <?php get_header() ?>
 <section>
 	<article>
 		<div class="container">
 			<div class="row">
 				<div class="col-md-8 col-sm-12 col-12">
 					<div class="slider_bar">
 						<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
 							<div class="carousel-inner">
 								<div class="carousel-item active">
 									<img class="d-block w-100" src="<?php bloginfo('template_directory') ?> /assets/images/sp-1.jpg" alt="First slide">
 								</div>
 								<div class="carousel-item">
 									<img class="d-block w-100" src="<?php bloginfo('template_directory') ?> /assets/images/sp-2.jpg" alt="Second slide">
 								</div>
 								<div class="carousel-item">
 									<img class="d-block w-100" src="<?php bloginfo('template_directory') ?> /assets/images/sp3.jpg" alt="Third slide">
 								</div>
 							</div>
 						</div>
 					</div>
 					<div class="image_content">
 						<div class="row">
 							<div class="col-md-6 col-sm-6 col-12">
 								<img class="image_content_left" src="<?php bloginfo('template_directory') ?> /assets/images/im-1.jpg">
 							</div>
 							<div class="col-md-6 col-sm-6 col-12">
 								<img class="image_content_right" src="<?php bloginfo('template_directory') ?> /assets/images/im-2.jpg">
 							</div>
 						</div>
 					</div>
 				</div>
 				<div class="col-md-4 col-sm-6 col-12">
 					<div class="side_slide">
 						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
 							<div class="carousel-inner">
 								<div class="carousel-item active">
 									<img class="d-block w-100" src="<?php bloginfo('template_directory') ?> /assets/images/lp-1.jpg" alt="First slide">
 								</div>
 								<div class="carousel-item">
 									<img class="d-block w-100" src="<?php bloginfo('template_directory') ?> /assets/images/lp-1.jpg" alt="Second slide">
 								</div>
 								<div class="carousel-item">
 									<img class="d-block w-100" src="<?php bloginfo('template_directory') ?> /assets/images/lp-1.jpg" alt="Third slide">
 								</div>
 							</div>
 							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
 								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
 								<span class="sr-only">Previous</span>
 							</a>
 							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
 								<span class="carousel-control-next-icon" aria-hidden="true"></span>
 								<span class="sr-only">Next</span>
 							</a>
 						</div>
 					</div>
 				</div>
 			</div>
 			<?php get_template_part('category')  ?>
 		</div>
 	</div>
 </article>
</section>

<?php get_footer() ?>