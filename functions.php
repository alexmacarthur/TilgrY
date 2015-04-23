<?php
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
?>