<!DOCTYPE html>
<html>
<head>
	<title>cosmetic</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href= " <?php echo bootstrap ?>/assets/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href=" <?php echo style ?>/assets/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo js ?>/assets/vendors/bootstrap/js/jquery-3.3.1.min.js">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo datepickercss ?>/assets/vendors/bootstrap/css/datepicker.css">
	<script type="text/javascript" src="<?php echo mainjs ?>/assets/vendors/bootstrap/js/main.js"></script>
	<script type="text/javascript" src="<?php echo btdatepickerjs ?>/assets/vendors/bootstrap/js/bootstrap-datepicker.js"></script>
	<?php wp_head() ?>
	<body>
		<header>
			<div class="container">
				<div class="top_header">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-12">

						</div>
						<div class="col-md-6 col-sm-6 col-12">
							<div class="text-center">
								<h3>DAVROE OFFICIAL WEBSITE</h3>
								<p>FREE SHIPPING <span>inside Australia for orders over $50!</span> </p>
								<p>PURCHASE DAVROE IN THE USA<span>www.davroeus.com</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="header_wrapper">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-12">
							
						</div>
						<div class="col-md-6 col-sm-6 col-12">
							<div class="img_wrapper">
								<a href="<?php the_permalink (); ?>"><img src="<?php bloginfo('template_directory') ?> /assets/images/davroe.png"></a>
							</div>
						</div>
					</div>
				</div>	
				<div class="nav_menu">
					<nav class="navbar navbar-expand-lg navbar-light bg-light sp-slider">
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<?php wp_nav_menu( array(
								'theme_location'  => 'topmenu',
								'container'       => 'false',
								'menu_class' => 'top-menu',
								'menu_id'    => 'top-menu',
								) ); ?> 
								<form class="form-inline my-2 my-lg-0" action="<?php bloginfo ('url'); ?>/" method="GET" role="form">
									<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="s" id="">
									<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
								</form>
							</div>
						</nav>

					</div>
				</div>
			</header>