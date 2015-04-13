<?php
/*
 * Template Name: Home Page
 * Description: Just the main page.
 */
?>

<!-- if on the home page, call the 'home' header -->
<?php get_header()?>

	<main>

		<?php 
		    echo do_shortcode("[metaslider id=4]"); 
		?>

		<div class="container home-container">

			<div class="box home-box about-box">.
				<label class="box-label home-box-label">About Us<?php get_template_part('img/inline', 'edge.svg'); ?></label>
				<span class="home-span">
					TilgrY is a social venture that mobilizes resources in rural communities to impact women’s social and economic conditions, in order to reach sustainable development of entire communities in Burkina Faso.
				</span>
				<a href="#" class="learn-more">Learn More About Us</a>
			</div>

		</div>

		<div class="cta-bar first-cta-bar">
			<div class="container cta-container">
				<h2>Help us change lives in Burkina Faso.</h2>
				<button class="cta-button involved-cta-button">Get Involved Today.</button>
			</div>
			<div class="background-cover"></div>
		</div>

		<div class="container home-container">

			<div class="box home-box aims-box">.
				<label class="box-label home-box-label">Our Aims<?php get_template_part('img/inline', 'edge.svg'); ?></label>
				<span class="home-span">
					TilgrY is a social venture that mobilizes resources in rural communities to impact women’s social and economic conditions, in order to reach sustainable development of entire communities in Burkina Faso.
				</span>
				<a href="#" class="learn-more">Learn More About Our Approach</a>
			</div>

		</div>

		<div class="cta-bar second-cta-bar">
			<div class="container cta-container">
				<h2>Help us change lives in Burkina Faso.</h2>
				<button class="cta-button involved-cta-button">Get Involved Today.</button>
			</div>
		</div>
	
	</main>

<?php get_footer(); ?>
