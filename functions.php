<?php

	add_theme_support( 'post-thumbnails' ); 

	add_filter('show_admin_bar', '__return_false');

	/**
	 * Add jquery support
	 */
	function jquery_scripts() {
	     wp_enqueue_script( 'jquery' );
	}
	add_action( 'wp_enqueue_scripts', 'jquery_scripts' );

	function remove_menus(){
		remove_menu_page( 'edit.php' );   
		remove_menu_page( 'edit-comments.php' ); 
		remove_menu_page( 'themes.php' ); 
		remove_menu_page('plugins.php');
		remove_menu_page('tools.php');
	}
	add_action('admin_menu', 'remove_menus');

	function remove_dashboard_meta() {
        remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'side' );
        remove_meta_box( 'pageparentdiv', 'page', 'normal');
	}
	add_action('admin_init', 'remove_dashboard_meta');

	function my_login_logo() { ?>
	
	    <style type="text/css">
	        body.login div#login h1 a {
	            background-image: url('http://tilgry.org/wp-content/themes/tilgry-theme/img/logo.svg')!important;
	            padding-bottom: 30px;
				width: 82%;
				background-size: contain;
	        }
			#loginform #wp-submit{
				background: rgb(63, 63, 63);
				border-color: black;
				-webkit-box-shadow: inset 0 1px 0 rgba(203, 203, 203, 0.5),0 1px 0 rgba(0,0,0,.15);
				box-shadow: inset 0 1px 0 rgba(231, 231, 231, 0.5),0 1px 0 rgba(0,0,0,.15);
			}
			 .login input:focus{
				border-color: rgba(169, 169, 169, 0.6);
				-webkit-box-shadow: 0 0 2px rgba(205, 205, 205, 0.8);
				box-shadow: 0 0 2px rgba(226, 226, 226, 0.8);
			}
	    </style>
	
	<?php }
	add_action( 'login_enqueue_scripts', 'my_login_logo' );
?>