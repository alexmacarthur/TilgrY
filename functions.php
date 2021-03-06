<?php

	global $isFrench;
	$isFrench = strpos(get_site_url(), '/fr') > 0 ? true : false;

	add_theme_support( 'post-thumbnails' ); 

	add_filter('show_admin_bar', '__return_false');

	// enqueue scripts
	function enqueue_scripts() {
	    wp_deregister_script('jquery');
		wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js", false, null);
		wp_enqueue_script('jquery');

		wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), false, true );

		wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/styles/style.css' );
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

	function remove_menus(){
		remove_menu_page( 'edit.php' );   
		remove_menu_page( 'edit-comments.php' ); 
		remove_menu_page( 'themes.php' ); 
		//remove_menu_page('plugins.php');
		//remove_menu_page('tools.php');
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