<!-- begin footer -->
</div><!-- end wrapper -->
		<footer>
			<div class="container footer-container">
				<div class="footer-logo-holder">
					<?php get_template_part('img/inline', 'logo.svg'); ?>
				</div>

				<ul class="nav-links footer-nav-links">
					<li>Who We Are<a href="<?php echo get_site_url(); ?>/about"></a></li>
					<li>What We Do<a href="<?php echo get_site_url(); ?>/ourwork"></a></li>
					<li>Our Approach<a href="<?php echo get_site_url(); ?>/approach"></a></li>
					<li>Contact Us<a href="<?php echo get_site_url(); ?>/contact"></a></li>
					<li>Support Us<a href="<?php echo get_site_url(); ?>/donate"></a></li>
				</ul>
				
				<span class="copyright">
					&copy; <?=date('Y')?> All rights reserved.
				</span>
			</div>
		</footer>
				
		<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-62100019-1', 'auto');
			ga('send', 'pageview');
		</script>

	</body>
</html>