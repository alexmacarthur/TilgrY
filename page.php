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

	 				<div class="row donate-options">
	 					<div class="six columns">
	 						
	 						<?php get_template_part("img/inline", "paypal.svg")?>
	 						<h3>PayPal</h3>
	 					</div>
	 					<div class="six columns">
	 	
	 						<?php get_template_part("img/inline", "mail.svg")?>
	 						<h3>By Mail</h3>
	 					</div>
	 				</div>

	 			<?php endif; ?>


	 		</div>

		</div>

    </main>

<?php get_footer() ?>
