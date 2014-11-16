<?php
/*
Plugin Name: Kento Scroll Jump Top
Plugin URI: http://kentothemes.com
Description: 
Version: 1.0
Author: kentothemes
Author URI: http://kentothemes.com
License URI: http://kentothemes.com/copyright/

*/

	
define('KT_SCROLL_TO_TOP_PLUGIN_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );



// active latest jquery and stylesheet
function kt_scroll_to_top_active_script()
	{
	wp_enqueue_script('jquery');
	wp_enqueue_script('ksmart-back-js', plugins_url( '/js/jquery-scrollToTop.js', __FILE__ ), array('jquery'), '1.0', false);
	wp_enqueue_style('ksmart-back-css', KT_SCROLL_TO_TOP_PLUGIN_PATH.'css/normalize.css');
	wp_enqueue_style('ksmart-back-main-css', KT_SCROLL_TO_TOP_PLUGIN_PATH.'css/scrollToTop.css');
	}
add_action('init', 'kt_scroll_to_top_active_script');


// kt scroll to top active javascript
function kt_scroll_to_top_style_active (){
	 $kt_scroll_to_top_themes = get_option( 'kt_scroll_to_top_themes' );

	?>
    <script type="text/javascript">
        jQuery(document).ready(function(jQuery) {
            jQuery('body').scrollToTop({skin:'<?php echo $kt_scroll_to_top_themes ;?>'});
        });
    </script>
	
	<?php
	}
add_action('wp_footer', 'kt_scroll_to_top_style_active');


// kt scroll to top display settings
function kt_scroll_to_top_display_script(){
	 $kp_scroll_to_top_display = get_option( 'kp_scroll_to_top_display' );	
	?>
	<style type="text/css">
	.scrollToTop.scrollToTop_triangle.scrollToTop_show {
	  display: <?php echo $kp_scroll_to_top_display;?>;
	}    
    </style>
    <?php
	}
add_action('wp_head', 'kt_scroll_to_top_display_script');

// kt scroll to top options init
function kt_scroll_to_top_option_init(){
	
	register_setting( 'kt_scroll_to_top_plugin_options', 'kt_scroll_to_top_themes');
	register_setting( 'kt_scroll_to_top_plugin_options', 'kp_scroll_to_top_display');	
    }
add_action('admin_init', 'kt_scroll_to_top_option_init' );




// add kt scroll to top admin pages
function kt_scroll_to_top_settings(){
	include('kento-scroll-to-top-admin.php');
}

// scroll to top menu settings
function kt_scroll_to_top_admin_menu() {
	add_menu_page(__('Scroll To Top','scrolltop'), __('Scroll To Top','scrolltop'), 'manage_options', 'kt_scroll_to_top_settings', 'kt_scroll_to_top_settings');
}
add_action('admin_menu', 'kt_scroll_to_top_admin_menu');



?>