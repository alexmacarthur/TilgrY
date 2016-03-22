<?php
/*
 * Template Name: Home Page
 * Description: Just the main page.
 */

global $isFrench;
?>

<?php get_header(); ?>

	<main>

	<?php 
	
		// loads different slider numbers based on if it's the dev site or live site
		$contain = strpos($get_site_url, "macarthur");
		echo $contain;

		if($contain > 0 || $isFrench){
			echo do_shortcode("[metaslider id=4]"); 
		} else {
			echo do_shortcode("[metaslider id=21]"); 
		}
	?>

		<div class="container home-container">

			<?php if($isFrench): ?>

				<div class="box home-box about-box">
					<label class="box-label home-box-label">A PROPOS DE NOUS<?php get_template_part('img/inline', 'edge.svg'); ?></label>
					<span class="home-span">TilgrY est une entreprise à caractère social travaillant à rassembler les ressources dans les communautés rurales en vue de parvenir à un développement durable au Burkina Faso.</span>
					<a href="<?php echo get_site_url(); ?>/about" class="learn-more">En savoir plus</a>
				</div>

			<?php else: ?>

				<div class="box home-box about-box">
					<label class="box-label home-box-label">About Us<?php get_template_part('img/inline', 'edge.svg'); ?></label>
					<span class="home-span">TilgrY is a social business that mobilizes resources in rural communities to impact women’s social and economic conditions, in order to reach sustainable development of entire communities in Burkina Faso.</span>
					<a href="<?php echo get_site_url(); ?>/about" class="learn-more">Learn More About Us</a>
				</div>

			<?php endif; ?>

		</div>

		<div class="cta-bar first-cta-bar">
			<div class="container cta-container">
				<div class="four columns">
					<a class="cta-button involved-cta-button" href="<?php echo get_site_url(); ?>/donate">
						<?php if($isFrench): ?>
							Soutenez nous
						<?php else: ?>
							Help Support Us
						<?php endif; ?>
					</a>
				</div>
				<div class="eight columns">
					<h2>
						<?php if($isFrench): ?>
							Aidez nous changer des vies au Burkina Faso!
						<?php else: ?>
							Help us change lives in Burkina Faso!
						<?php endif; ?>
					</h2>
				</div>
			</div>
			<div class="background-cover"></div>
		</div>

		<div class="container home-container">

			<div class="box home-box aims-box">.
				<label class="box-label home-box-label">
					<?php if($isFrench): ?>
						Nos ambitions
					<?php else: ?>
						Our Aims
					<?php endif; ?>
					<?php get_template_part('img/inline', 'edge.svg'); ?>
				</label>
				<div class="row">
					<div class="four columns">
						<?php if($isFrench): ?>
							<span>Ouvrir l’accès aux services financiers.</span>
						<?php else: ?>
							<span>Expand access to financial services.</span>
						<?php endif; ?>
						<div class="aim-icon aim-icon-1">
							<?php get_template_part('img/inline', 'dollar.svg'); ?>
						</div>
						<?php if($isFrench): ?>
							<p>Les institutions financières traditionnelles ont littéralement mis les femmes à l’écart, particulièrement les femmes vivant en milieu rural. Notre rôle est de travailler à ouvrir l’accès aux services financiers aux femmes par l’octroi de petits crédits ainsi que des services d’épargne adaptés à leurs besoins spécifiques.</p>
						<?php else: ?>
							<p>The traditional financial institutions have literally omitted the women in general and rural women in particular. Our role is to open access to financial services for women through loans, credits and savings that are adapted to their needs and conditions.</p>
						<?php endif; ?>
					</div>
					<div class="four columns">
						<?php if($isFrench): ?>
							<span>Accompagner le développement économique.</span>
						<?php else: ?>
							<span>Boost economic development.</span>
						<?php endif; ?>
						<div class="aim-icon aim-icon-2">
							<?php get_template_part('img/inline', 'tools.svg'); ?>
						</div>
						<?php if($isFrench): ?>
							<p>Notre programme de financement est principalement oriente vers les femmes en milieu rural, avec un accent particulier sur l’entreprenariat féminin. A travers ce soutien aux initiatives féminines d’activités génératrices de revenus, nous accroissons leur pouvoir socioéconomique et promouvons le développement à long terme dans des sociétés ou les femmes ont toujours joue un rôle fondamental de stabilisatrices.</p>
						<?php else: ?>
							<p>Our financing program is oriented towards rural women with an emphasis on rural female entrepreneurship. By supporting women's initiatives in revenue-generating activities, we increase their socioeconomic power and promote sustainable development in societies where they have traditionally played the fundamental role as stabilizers.</p>
						<?php endif; ?>
					</div>
					<div class="four columns">
						<?php if($isFrench): ?>
							<span>Réduire la pauvreté et rehausser des vies.</span>
						<?php else: ?>
							<span>Reduce poverty &amp; enhance lives.</span>
						<?php endif; ?>
						<div class="aim-icon aim-icon-3">
							<?php get_template_part('img/inline', 'heart.svg'); ?>
						</div>
						<?php if($isFrench): ?>
							<p>Les femmes qui bénéficient de nos services deviennent capable de nourrir leurs familles, financer l’éducation de leurs enfants, payer leurs ordonnances et partant de là, elles contribuent à éliminer la misère dans leurs communautés respectives et aussi à donner plus d’espoir et de confiance en soi aux membres de leurs communautés. Tout cela nous convainc que nous avons opté pour la meilleure façon de combattre durablement la misère dans nos communautés et dans le monde en général.</p>
						<?php else: ?>
							<p>Empowered women will provide food in their families, pay for the education of their kids, healthcare, and by doing so, they contribute to eliminate misery in their communities and create more hope and self-reliance in their community members. There couldn’t be a better way to improve lives and fight poverty.</p>
						<?php endif; ?>
					</div>
				</div>				
				<a href="<?php echo get_site_url(); ?>/approach" class="learn-more">
					<?php if($isFrench): ?>
						Faites ample connaissance avec notre approche
					<?php else: ?>
						Learn More About Our Approach
					<?php endif; ?>
				</a>
			</div>

		</div>

		<div class="cta-bar second-cta-bar">
			<div class="container cta-container">
				<div class="eight columns">
					<?php if($isFrench): ?>
						<h2>Il ya plusieurs façons de venir en aide</h2>
					<?php else: ?>
						<h2>There are plenty of ways to help.</h2>
					<?php endif; ?>
				</div>
				<div class="four columns">
					<a class="cta-button donate-cta-button" href="<?php echo get_site_url(); ?>/getinvolved">
					<?php if($isFrench): ?>
						Impliquez aujourd'hui
					<?php else: ?>
						Get Involved Today.
					<?php endif;?>
					</a>
				</div>
			</div>
		</div>
	
		<div class="container home-container">

			<div class="box home-box work-box">
				<label class="box-label home-box-label">
					<?php if($isFrench): ?>			
						Quoi de neuf
					<?php else: ?>
						What's New
					<?php endif; ?>
					<?php get_template_part('img/inline', 'edge.svg'); ?></label>
				<div class="row no-center">
					<div class="six columns">
						<p>
							<?php
								$homePageSection = get_page_by_title('Last Section on Home Page');
								echo $homePageSection->post_content;
							?>
						</p>
					</div>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $homePageSection->ID ), 'single-post-thumbnail' ); ?>
					<div class="six columns work-image" style="background-image: url('<?php echo $image[0];?> ');">

					</div>
				</div>
				
				<a href="<?php echo get_site_url(); ?>/services" class="learn-more">
					<?php if($isFrench): ?>	
						En savoir plus sur notre travail
					<?php else: ?>
						Learn More About Our Work
					<?php endif;?>
				</a>
			</div>

		</div>

	</main>

<?php get_footer(); ?>
