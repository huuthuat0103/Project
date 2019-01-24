<?php 
get_header();
?>

<main>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="product-detail">
					<div class="row">
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
								
								<div class="col-md-6 col-sm-12 col-12">
									<div class="product-gallery">
										<?php echo get_the_post_thumbnail( get_the_ID(), 'thumbnail', array( 'class' =>'thumnail') ); ?>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 col-12">
									<div class="product-summary">
										<div class="title">
											<h4><?php the_title(); ?></h4>
										</div>
										<div class=" price">
											<h5> Giá bán: <?php echo get_post_meta( get_the_id(), 'gia_ban', true ); ?></h5>
										</div>
										<p>
											<?php the_excerpt(); ?>
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="border"></div>
						<div class="col-md-12 col-sm-12">
							<div class="product-describe">
								<h4 class="text-center"><?php the_title(); ?></h4>
								<p><?php the_content(); ?></p>
							</div>
						</div>

					<?php endwhile;?>
				<?php endif; ?>


				
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="widget-product">
						<div class="title"><h4>TOP 4 SẢN PHẨM BÁN CHẠY</h4> </div>
						<?php 
						$args = array(
								'post_status' => 'publish', // Ch? l?y nh?ng bài vi?t du?c publish
								'post_type' => 'post', // L?y nh?ng bài vi?t thu?c post, n?u l?y nh?ng bài trong 'trang' thì d? là page 
								'showposts' => 4, // s? lu?ng bài vi?t
								'cat' => 9, // l?y bài vi?t trong chuyên m?c có id là 1
							);
							?>
							<?php $getposts = new WP_query($args); ?>
							<?php global $wp_query; $wp_query->in_the_loop = true; ?>
							<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
								<div class="widget-new-product">
									<div class="title-widget-product">
										
										<ul>
											<li><a href="">

												<div class="content-product">
													<div class="title">
														<h6><?php the_title(); ?></h6>
													</div>
													<div class="content">
														<p>
															<?php the_excerpt(); ?>
														</p>
													</div>
												</div>
											</a></li>
										</ul>
									</div>
								</div>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>
						<div class="widget-fanpage">
							<div class="fanpage">
								<div class="title-fanpag"><h4>FANPAG CHÚNG TÔI</h4></div>
								<div class="iframe">
									<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FIZWAYCoLtd%2F%3Fhc_ref%3DARRgKO_h-zNHPepPyEW_y3q0p24iX9E77wnekAF-yHqtKwlc2G1EfWASz33gipS1GbU%26fref%3Dnf%26__xts__[0]%3D68.ARCOaAdS4GQZtjbfk_JwgzzWbFywGpWXR7-GLtkxCN1PgtN4t9gW-mDvU1VfjIu9RbJtG7LrHt5pPam5YNPBCj0S1t3ZpF45wiBd8otwwM7z95D8uyBPMLWqOoUKUisDLypuz8JKLQUOSvTC2otIITyocmyJys-APbCKuMwptpt7jc_NJxgBUkH83g%26__tn__%3DkC-R&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"  style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="product-similar">
					<div >
						<div class="product-similar-title">
							<h3 class="text-center">
								Products available at the store
							</h3>
						</div>
						<div class="row">
							<?php
							$categories = get_the_category(get_the_id());
							if ($categories) 
							{
								$category_ids = array();
								foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

								$args=array(
									'category__in' => $category_ids,
									'post__not_in' => array(get_the_id()),
									        'showposts'=>4, // Số bài viết bạn muốn hiển thị.

									    );
								$my_query = new wp_query($args);
								if( $my_query->have_posts() ) 
								{
									echo '<div>';
									while ($my_query->have_posts())
									{
										$my_query->the_post();
										?>		                		
										<div class="col-md-3 col-sm-6 col-12">
											<div class="product_img">
												<?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' =>'full') ); ?>
											</div>
											<div class="text-center title">
												<a href="<?php the_permalink (); ?>"><?php the_title(); ?></a>
											</div>
											<div class="text-center price">
												<h5><?php echo get_post_meta( get_the_id(), 'gia_ban', true ); ?></h5>
											</div>
										</div>

										<?php
									}
									echo '</div>';
								}
							}
							?>


						</div>
					</div>
				</div>

			</div>
		</main>

		<?php 
		get_footer();
		?>