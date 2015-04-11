<?php
/*
 * Template Name: Standard Page
 * Description: Will be used for contact page, about page, and any other static page. 
 */
?>

<?php get_header(); ?>

    <main>

	    <div class="container">
	 
			<?php the_post(); ?>

	 		<div class="box page-box">
	 			<?php the_content(); ?>
	 		</div>
				
		</div>

    </main>

<?php get_footer() ?>
