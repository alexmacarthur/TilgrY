<?php
/*
 * Template Name: Home Page
 * Description: Just the main page.
 */

global $isFrench;
?>

<!-- if on the home page, call the 'home' header -->
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
					<a class="cta-button involved-cta-button" href="<?php echo get_site_url(); ?>/donate">Help Support Us</a>
				</div>
				<div class="eight columns">
					<h2>Help us change lives in Burkina Faso!</h2>
				</div>
			</div>
			<div class="background-cover"></div>
		</div>

		<div class="container home-container">

			<div class="box home-box aims-box">.
				<label class="box-label home-box-label">Our Aims<?php get_template_part('img/inline', 'edge.svg'); ?></label>
				<div class="row">
					<div class="four columns">
						<span>Expand access to financial services.</span>
						<div class="aim-icon aim-icon-1">
							<?php get_template_part('img/inline', 'dollar.svg'); ?>
						</div>
						<p>The traditional financial institutions have literally omitted the women in general and rural women in particular. Our role is to open access to financial services for women through loans, credits and savings that are adapted to their needs and conditions.</p>
					</div>
					<div class="four columns">
						<span>Boost economic development.</span>
						<div class="aim-icon aim-icon-2">
							<?php get_template_part('img/inline', 'tools.svg'); ?>
						</div>
						<p>Our financing program is oriented towards rural women with an emphasis on rural female entrepreneurship. By supporting women's initiatives in revenue-generating activities, we increase their socioeconomic power and promote sustainable development in societies where they have traditionally played the fundamental role as stabilizers.</p>
					</div>
					<div class="four columns">
						<span>Reduce poverty &amp; enhance lives.</span>
						<div class="aim-icon aim-icon-3">
							<?php get_template_part('img/inline', 'heart.svg'); ?>
						</div>
						<p>Empowered women will provide food in their families, pay for the education of their kids, healthcare, and by doing so, they contribute to eliminate misery in their communities and create more hope and self-reliance in their community members. There couldn’t be a better way to improve lives and fight poverty.</p>
					</div>
				</div>				
				<a href="<?php echo get_site_url(); ?>/approach" class="learn-more">Learn More About Our Approach</a>
			</div>

		</div>

		<div class="cta-bar second-cta-bar">
			<div class="container cta-container">
				<div class="eight columns">
					<h2>There are plenty of ways to help.</h2>
				</div>
				<div class="four columns">
					<a class="cta-button donate-cta-button" href="<?php echo get_site_url(); ?>/getinvolved">Get Involved Today.</a>
				</div>
			</div>
		</div>
	
		<div class="container home-container">

			<div class="box home-box work-box">
				<label class="box-label home-box-label">What's New<?php get_template_part('img/inline', 'edge.svg'); ?></label>

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
				
				<a href="<?php echo get_site_url(); ?>/services" class="learn-more">Learn More About Our Work</a>
			</div>

		</div>

	</main>

<?php get_footer(); ?>
