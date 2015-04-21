<?php
/*
 * Template Name: Standard Page
 * Description: Will be used for contact page, about page, and any other static page. 
 */
?>

<?php get_header(); ?>

    <main class="page-main">

	    <div class="container page-container">
	 
			<?php the_post(); ?>

	 		<div class="box page-box">

	 			<?php the_content(); ?>

	 			<?php 
	 				$slug = $post->post_name;
	 				if($slug == "donate") : ?> 

	 				<h4 class="donate-header">How would you like to donate?</h4>

	 				<div class="row donate-options">
	 					<div class="six columns">
	 						
	 						<?php get_template_part("img/inline", "paypal.svg")?>
	 						<h3>PayPal</h3>
	 						<a href="#" class="donate-button">Click to Donate</a>
	 						<span>You will be taken to PayPal's site where you can donate securely.</span>
	 					</div>
	 					<div class="six columns">
	 	
	 						<?php get_template_part("img/inline", "mail.svg")?>
	 						<h3>By Mail</h3>
	 						<a href="#" class="donate-button">See a Map</a>
	 						<span>Mail your contributions to <br>123 ABC Lane, Marshall, MN 56258</span>

	 					</div>
	 				</div>

	 			<?php endif; ?>


	 		</div>

		</div>

    </main>

<?php get_footer() ?>
