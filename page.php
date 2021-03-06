<?php
/*
 * Template Name: Standard Page
 * Description: Will be used for contact page, about page, and any other static page. 
 */

global $isFrench;
?>

<?php get_header(); ?>

    <main class="page-main">

	    <div class="container page-container">
	 
			<?php the_post(); ?>
			<a class="back-home" href="<?php echo get_site_url(); ?>">
				<?php if($isFrench): ?>
					Page d'accueil
				<?php else: ?> 
					Back to Home
				<?php endif; ?>
			</a>
	 		<div class="box page-box">

	 			<?php the_content(); ?>

	 			<?php 
	 				$slug = $post->post_name;
	 				if($slug === "donate") : ?> 

	 				<h4 class="donate-header">
		 				<?php if($isFrench): ?>
		 					Comment aimeriez vous faire votre don?
						<?php else: ?> 
							How would you like to donate?
						<?php endif; ?>
		 			</h4>

	 				<div class="row donate-options">
	 					<div class="six columns">
	 						<?php get_template_part("img/inline", "paypal.svg")?>
	 						<h3>PayPal</h3>
	 						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
								">
								<input type="submit" class="donate-button" value="<?php if($isFrench): ?>Cliquez ici pour faire un don?<?php else: ?>Click To Donate<?php endif; ?>">
							</form>
	 						<span>
		 						<?php if($isFrench): ?>
		 							Vous allez être diriges vers PayPal pour un don sécurisé. Vous avez le choix d’utiliser votre carte de crédit ou débit ou encore votre compte PayPal.
		 						<?php else: ?>
		 							You will be taken to PayPal's site where you can donate securely. You'll have the option to pay by credit/debit card or PayPal account.
		 						<?php endif; ?>
	 						</span>

	 					</div>
	 					<div class="six columns">
	 	
	 						<?php get_template_part("img/inline", "mail.svg")?>
	 						<h3>By Mail</h3>
	 						<a href="https://www.google.com/maps/place/Ouagadougou,+Burkina+Faso/@12.358492,-1.5368433,12z/data=!3m1!4b1!4m2!3m1!1s0xe2e95ecceaa44cd:0x799f67799c743b8b" class="donate-button"><?php if($isFrench): ?>Voir sur la carte<?php else: ?>See a Map<?php endif; ?></a>
	 						<span>
	 							<?php if($isFrench): ?>
	 								Vous pouvez également envoyez vos dons matériels à l’adresse ci-dessous:
								<?php else: ?>
									If you have either financial or material donations you'd like to make, you may also mail your contributions to 
								<?php endif; ?>
	 							<br>
	 							<strong>12 BP 326 Ouaga 12, Ouagadougou, Burkina Faso</strong>
	 						</span>
	 					</div>
	 				</div>

	 				<span class="more-involved">
	 					<?php if($isFrench): ?>
	 						Souhaitez-vous voir d’autres manières de s’engager avec nous? <a href="/fr/getinvolved">Cliquez ici.</a>
	 					<?php else: ?>
							Looking for other ways to get involved? <a href="/getinvolved">See them here.</a>
	 					<?php endif; ?>
	 				</span>

	 			<?php endif; ?>

	 		</div>

		</div>

    </main>

<?php get_footer() ?>
