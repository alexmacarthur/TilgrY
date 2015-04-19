<?php
/*
 * Template Name: Contact Page
 * Description: Standard page, but it contains a contact form. 
 */
?>

<?php get_header(); ?>

    <main class="page-main">

	    <div class="container page-container">
	 
			<?php the_post(); ?>

	 		<div class="box page-box">

	 			<div class="row">
		 			<div class="five columns">
		 				<?php the_content(); ?>
		 			</div>

		 			<div class="seven columns">
		 				<h3>Fill Out the Form</h3>
		 				<div id="form-messages"></div>
		 				<!-- form to email -->
						<form action="<?php echo get_template_directory_uri(); ?>/send.php" method="post" class="contact-form" id="ajax-contact">

							<div class="form-field"><label>Name<span>*</span></label> <input type="text" id="name" name="name"></div>

							<div class="form-form-field"><label>Phone Number</label> <input type="text" id="phonenumber" name="phonenumber"></div>

							<div class="form-field"><label>Email Address<span>*</span></label> <input type="text" id="email" name="email"></div>

							<div class="form-field"><label>City, State</label> <input type="text" id="citystate" name="citystate"></div>

							<div class="form-field"><label>Message<span>*</span></label> <textarea name="message" id="message"></textarea></div>

							<input type="submit" name="submit" value="Submit">
						</form>
		 			</div>
	 			</div>
	 			
	 		</div>
				
		</div>

    </main>

<?php get_footer() ?>

<?php get_header()?>
