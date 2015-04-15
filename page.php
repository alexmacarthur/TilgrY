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
	 			<p>
	 				TilgrY is a social venture that mobilizes resources in rural communities to impact women’s social and economic conditions, in order to reach sustainable development of entire communities in Burkina Faso. 
	 			</p>

	 			<p>
	 				The name TilgrY is a combination of two words: Tilgré and Yinga. These words are in Mooré, a language spoken by the majority of the populations of Burkina Faso (West Africa). Tilgré means Better living and Yinga means For. TilgrY means then For better living. The slogan “…life getting better!” summarizes the mission pursued by the organization to improve life in rural communities by combatting poverty and fostering development through a model of business that grows along with communities’ aspirations and needs, with a focus on women’s empowerment and leadership. We work hands-on with women to find sustainable solutions for major issues in their communities
	 			</p>

	 			<p>
	 				Even though our concern is more about socioeconomic justice for women and communities development that any other interest, we proudly define TilgrY as a for-profit organization. We have the conviction that the best approach to fight poverty is through a model that engages communities and hold them collectively or individually accountable and responsible for their direct concerns.
	 			</p>

	 			<hr>

	 			<center><h2>Our Mission</h2></center>

	 			<span class="mission-statement">Our mission is to combat poverty by promoting a model of business that grows along with communities’ aspirations, empowering and promoting women leadership. </span>

	 			<hr>

	 			<?php the_content(); ?>
	 		</div>
				
		</div>

    </main>

<?php get_footer() ?>
