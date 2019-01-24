<?php
/*
 Template Name: category
 */
 ?>

 <?php 
 get_header();
 ?>
 <section>
 	<article>
 		<div class="container">
 			<div class="product">
 				<div class="title-product">
 					<h3 class="text-center">
 						Products available at the store
 					</h3>
 				</div>
 				<div class="row">

 					<?php 
 					$args = array(
										'post_status' => 'publish', // Ch? l?y nh?ng bài vi?t du?c publish
										'post_type' => 'post', // L?y nh?ng bài vi?t thu?c post, n?u l?y nh?ng bài trong 'trang' thì d? là page 
										'showposts' => 8, // s? lu?ng bài vi?t
										'cat' => 9, // l?y bài vi?t trong chuyên m?c có id là 1
									);
									?>
									<?php $getposts = new WP_query($args); ?>
									<?php global $wp_query; $wp_query->in_the_loop = true; ?>
									<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
										<div class="col-md-3 col-sm-6 col-12">
											<div class="product-img">
												<?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' =>'thumnail') ); ?>
												
												<div class="hover">
													<div class="overlay">
														<div class="excerpt">
															<div class="title"><h5><?php the_title(); ?></h5></div>
															<div class="content-excerpt">
																<p>
																	<?php the_excerpt(); ?>
																</p>
															</div>
														</div>
														
														<div class="btn">
															<div class="by">
																<a href="#exampleModal" type="video" class="btn-primary" data-toggle="modal"><button>MUA NGAY</button></a>
															</div>
															<div class="detail">
																<a href="<?php the_permalink (); ?>"><button>CHI TIẾT</button></a>
															</div>

														</div>
													</div>
												</div>
												
											</div>
											<div class="text-center product-title">
												<a href="<?php the_permalink (); ?>"><span><?php the_title(); ?></span></a>
											</div>
											<div class="text-center price">
												<?php echo get_post_meta( get_the_id(), 'gia_ban', true ); ?>
											</div>
										</div>
										
									<?php endwhile; wp_reset_postdata(); ?>

									
								</div>
							</div>
						</div>
					</article>
				</section>
				<div class="modal-content">
					<div class="modal fade modal-by" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content modal-sp">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<div class="modal-body modal-bys">
									<div class="form-by">
										<h4 class="text-center">QUÝ KHÁCH HÃY ĐẶT HÀNG</h4>
										<?php 
										$args = array(
													'post_status' => 'publish', // Ch? l?y nh?ng bài vi?t du?c publish
													'post_type' => 'post', // L?y nh?ng bài vi?t thu?c post, n?u l?y nh?ng bài trong 'trang' thì d? là page 
													'showposts' => 1, // s? lu?ng bài vi?t
													'cat' => 10, // l?y bài vi?t trong chuyên m?c có id là 1
													

												);
												?>
												<?php $getposts = new WP_query($args); ?>
												<?php global $wp_query; $wp_query->in_the_loop = true; ?>
												<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
													<?php the_content(); ?>
												<?php endwhile; wp_reset_postdata(); ?>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<?php 
						get_footer();
						?>