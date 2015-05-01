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
	 						<span>You will be taken to PayPal's site where you can donate securely. You'll have the option to pay by credit/debit card or PayPal account.</span>
	 					</div>
	 					<div class="six columns">
	 	
	 						<?php get_template_part("img/inline", "mail.svg")?>
	 						<h3>By Mail</h3>
	 						<a href="https://www.google.com/maps/place/513+Village+Dr,+Marshall,+MN+56258/@44.45526,-95.769859,17z/data=!3m1!4b1!4m2!3m1!1s0x878a58e249e547df:0x9ac89790dc6d92af" class="donate-button">See a Map</a>
	 						<span>If you have either financial or material donations you'd like to make, you may also mail your contributions to <br>513 Village Drive, Marshall, MN 56258</span>

	 					</div>
	 				</div>

	 				<span class="more-involved">Looking for other ways to get involved? <a href="/getinvolved">See them here.</a><span>

	 			<?php endif; ?>


	 		</div>

		</div>

    </main>

<?php get_footer() ?>
