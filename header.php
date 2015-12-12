<!DOCTYPE html>
<html style="margin-top:0!important;">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<title><?php bloginfo('title')?></title>
	<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,400italic,500,500italic,700,800' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="/image/x-icon"/>
	<?php wp_head()?>

</head>

<body class="no-js">

	<div class="wrapper">
	
		<nav>
				<div class="mobile-menu-toggle" id="mobile-menu-toggle">
					<?php get_template_part('img/inline', 'mobilemenu.svg'); ?>
				</div>

			<div class="top-bar">

				<div class="container">

					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<?php get_template_part('img/inline', 'logo.svg'); ?>
						</a>
					</div>

					<div class="vision-statement">
						<span>
							A vision for fostering sustainable development and a more efficient means of conducting business affairs in order to reduce poverty in rural communities in Burkina Faso. <p>Join us today and be part of the change you want to see in the world!</p>
						</span>
					</div>

				</div>
			</div>
			<div class="nav-links-bar">

				<ul class="nav-links">
					<div id="close-mobile-menu"><?php get_template_part('img/inline', 'close.svg'); ?></div>
			
					<?php if(strpos(get_site_url(), '/fr') > 0): ?>
						<li>Ce Que Nous Sommes<a href="<?php echo get_site_url(); ?>/about"></a></li>
						<li>Notre Approche<a href="<?php echo get_site_url(); ?>/approach"></a></li>
						<li>Our Services<a href="<?php echo get_site_url(); ?>/services"></a></li>
						<li>Contact Us<a href="<?php echo get_site_url(); ?>/contact"></a></li>
						<li>Get Involved<a href="<?php echo get_site_url(); ?>/getinvolved"></a></li>
					<?php else: ?>
						<li>Who We Are<a href="<?php echo get_site_url(); ?>/about"></a></li>
						<li>Our Approach<a href="<?php echo get_site_url(); ?>/approach"></a></li>
						<li>Our Services<a href="<?php echo get_site_url(); ?>/services"></a></li>
						<li>Contact Us<a href="<?php echo get_site_url(); ?>/contact"></a></li>
						<li>Get Involved<a href="<?php echo get_site_url(); ?>/getinvolved"></a></li>
					<?php endif; ?>
				</ul>

			</div>

		</nav>

		<?php if (!is_front_page()): ?>

			<div class="header-banner">
				<div class="container header-banner-container">
					<h1 class="page-title"><?php the_title(); ?></h1>
				</div>
				<div class="background-cover"></div>
			</div>

		<?php endif; ?>