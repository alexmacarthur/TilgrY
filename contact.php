<?php
/*
 * Template Name: Contact Page
 * Description: Standard page, but it contains a contact form. 
 */

global $isFrench;

?>

<?php get_header(); ?>

    <main class="page-main">

	    <div class="container page-container">
	 
			<?php the_post(); ?>

	 		<div class="box page-box">

	 			<div class="row">
		 			<div class="five columns contact-half">
		 				<?php the_content(); ?>
		 			</div>

		 			<div class="seven columns contact-half">
		 				<?php if($isFrench): ?>
							<h3>Remplissez le formulaire</h3>
		 				<?php else: ?>
							<h3>Fill Out the Form</h3>
		 				<?php endif; ?>
	
		 				<div id="form-messages"></div>

						<form action="<?php echo get_template_directory_uri(); ?>/send.php" method="post" class="contact-form" id="ajax-contact">

							<div class="form-field"><label><?php if($isFrench): ?>Nom<?php else: ?>Name<?php endif; ?><span>*</span></label> <input type="text" id="name" name="name"></div>

							<div class="form-form-field"><label><?php if($isFrench): ?>Numéros de téléphone<?php else: ?>Phone Number<?php endif; ?></label> <input type="text" id="phonenumber" name="phonenumber"></div>

							<div class="form-field"><label><?php if($isFrench): ?>Adresse e-mail<?php else: ?>Email Address<?php endif; ?><span>*</span></label> <input type="text" id="email" name="email"></div>

							<div class="form-field"><label><?php if($isFrench): ?>Emplacement<?php else: ?>City, State<?php endif; ?></label> <input type="text" id="citystate" name="citystate"></div>

							<div class="form-field"><label><?php if($isFrench): ?>Message<?php else: ?><?php endif; ?><span>*</span></label> <textarea name="message" id="message"></textarea></div>

							<input type="submit" name="submit" value="<?php if($isFrench): ?>Envoyez<?php else: ?>Submit<?php endif; ?>">
						</form>
		 			</div>
	 			</div>
	 			
	 		</div>
				
		</div>

    </main>

<?php get_footer(); ?>
