<?php
/*
 * Template Name: Home Page
 * Description: Just the main page.
 */
?>

<!-- if on the home page, call the 'home' header -->
<?php get_header(); ?>

	<main>

	<?php 
		// loads different slider numbers based on if it's the dev site or live site
		$thisURL = get_site_url();
		$contain = strpos($thisURL, "macarthur");

		if($contain ==! 0){
			echo do_shortcode("[metaslider id=4]"); 
		} else {
			echo do_shortcode("[metaslider id=21]"); 
		}
	?>

		<div class="container home-container">

			<div class="box home-box about-box">.
				<label class="box-label home-box-label">About Us<?php get_template_part('img/inline', 'edge.svg'); ?></label>
				<span class="home-span">TilgrY is a social venture that mobilizes resources in rural communities to impact women’s social and economic conditions, in order to reach sustainable development of entire communities in Burkina Faso.</span>
				<a href="<?php echo get_site_url(); ?>/about" class="learn-more">Learn More About Us</a>
			</div>

		</div>

		<div class="cta-bar first-cta-bar">
			<div class="container cta-container">
				<div class="four columns">
					<a class="cta-button involved-cta-button" href="<?php echo get_site_url(); ?>/donate">Help Support Us</a>
				</div>
				<div class="eight columns">
					<h2>Help us change lives in Burkina Faso.</h2>
				</div>
			</div>
			<div class="background-cover"></div>
		</div>

		<div class="container home-container">

			<div class="box home-box aims-box">.
				<label class="box-label home-box-label">Our Aims<?php get_template_part('img/inline', 'edge.svg'); ?></label>
				<div class="row">
					<div class="four columns">
						<span>Expand access to financial services.</span>
						<div class="aim-icon aim-icon-1">
							<?php get_template_part('img/inline', 'dollar.svg'); ?>
						</div>
						<p>The traditional financial institutions have literally omitted the women in general and rural women in particular. Our role is to open access to financial services for women through loans, credits and savings that are adapted to their needs and conditions.</p>
					</div>
					<div class="four columns">
						<span>Boost economic development.</span>
						<div class="aim-icon aim-icon-2">
							<?php get_template_part('img/inline', 'tools.svg'); ?>
						</div>
						<p>The traditional financial institutions have literally omitted the women in general and rural women in particular. Our role is to open access to financial services for women through loans, credits and savings that are adapted to their needs and conditions.</p>
					</div>
					<div class="four columns">
						<span>Reduce poverty &amp; enhance lives.</span>
						<div class="aim-icon aim-icon-3">
							<?php get_template_part('img/inline', 'heart.svg'); ?>
						</div>
						<p>The traditional financial institutions have literally omitted the women in general and rural women in particular. Our role is to open access to financial services for women through loans, credits and savings that are adapted to their needs and conditions.</p>
					</div>
				</div>				
				<a href="<?php echo get_site_url(); ?>/approach" class="learn-more">Learn More About Our Approach</a>
			</div>

		</div>

		<div class="cta-bar second-cta-bar">
			<div class="container cta-container">
				<div class="eight columns">
					<h2>There are plenty of ways to help.</h2>
				</div>
				<div class="four columns">
					<a class="cta-button donate-cta-button" href="<?php echo get_site_url(); ?>/donate">Get Involved Today.</a>
				</div>
			</div>
		</div>
	
		<div class="container home-container">

			<div class="box home-box work-box">.
				<label class="box-label home-box-label">Our Work<?php get_template_part('img/inline', 'edge.svg'); ?></label>

				<div class="row">
					<div class="six columns">
						<p>
							The traditional financial institutions in Burkina Faso have literally omitted the women in general and rural women in particular, making it difficult for them to pursue entreprenurial and personal ventures they feel passionate about. TilgrY provides a variety of growing services to help women improve their quality of living. They include: 
						</p>
						<ul class="work-list">
							<li>&#8212; microfinancing options</li>
							<li>&#8212; savings accounts</li>
							<li>&#8212; technical &amp; material support</li>
						</ul>
					</div>

					<div class="six columns work-image">
					
					</div>
				</div>
				
				<a href="<?php echo get_site_url(); ?>/services" class="learn-more">Learn More About Our Work</a>
			</div>

		</div>

	</main>

<?php get_footer(); ?>
