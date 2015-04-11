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
				<label class="box-label home-box-label">About Us</label>
				<span class="home-span">
					TilgrY is a social venture that mobilizes resources in rural communities to impact women’s social and economic conditions, in order to reach sustainable development of entire communities in Burkina Faso.
				</span>
			</div>


		</div>
	
	</main>

<?php get_footer(); ?>
