<?php
/*
 * Template Name: Membership Page
 * Description: Contains membership information.
 */
?>

<?php get_header()?>

	<main>
		<div class="container page-container">

			<?php the_post(); ?>

			<div class="page-content contact-content">

				<div class="contact-column">
<!-- form messages -->
				<div id="form-messages" class="form-messages-contact">
				</div>

					<!-- form to email -->
					<form action="<?php echo get_template_directory_uri(); ?>/send.php" method="post" class="contactForm home-page" id="ajax-contact">

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

	</main>

<?php get_footer()?>
