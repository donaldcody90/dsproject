<?php
/**
 * Roots includes
 *
 * The $roots_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/roots/pull/1042
 */

define('THEME_PATH', get_template_directory());
define('THEME_URL', get_template_directory_uri());

/* ReduxFramework Start */ 
if ( file_exists( dirname( __FILE__ ) . '/ReduxFramework/ReduxCore/framework.php' ) ) {
	
	require_once( dirname( __FILE__ ) . '/ReduxFramework/ReduxCore/framework.php' );
	require_once( dirname( __FILE__ ) . '/ReduxFramework/sample/theme-option.php' );
	//require_once( dirname( __FILE__ ) . '/ReduxFramework/sample/sample-config.php' );
	//die('x');
}


$roots_includes = array(
  'lib/utils.php',           // Utility functions
  'lib/init.php',            // Initial theme setup and constants
  'lib/wrapper.php',         // Theme wrapper class
  'lib/sidebar.php',         // Sidebar class
  'lib/config.php',          // Configuration
  'lib/activation.php',      // Theme activation
  'lib/titles.php',          // Page titles
  'lib/nav.php',             // Custom nav modifications
  'lib/gallery.php',         // Custom [gallery] modifications
  'lib/scripts.php',         // Scripts and stylesheets
  'lib/extras.php',          // Custom functions
  'framework/post.options.php',          // Post options
);

foreach ($roots_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


//Đường dẫn thực
define('LMCIT_THEME_DIR', get_template_directory()); //Đường dẫn thực đến thư mục theme
define('LMCIT_THEME_INC_DIR', LMCIT_THEME_DIR . '/inc'); //Đường dẫn thực đến thư mục inc chứa các file chia nhỏ và widget
define('LMCIT_THEME_WIDGET_DIR', LMCIT_THEME_INC_DIR . '/widgets'); //Đường dẫn thực đến thư mục widgets
define('LMCIT_THEME_HTML_DIR', LMCIT_THEME_INC_DIR . '/html'); //Đường dẫn thực đến thư mục widgets
define('LMCIT_THEME_BLOCK_DIR', LMCIT_THEME_INC_DIR . '/blocks'); //Đường dẫn thực đến thư mục blocks chưa các file chia nhỏ
define('LMCIT_THEME_LANG_DIR', LMCIT_THEME_DIR . '/languages'); //Đường dẫn thực đến thư mục languages

//Đường dẫn URL
define('LMCIT_THEME_URL', get_template_directory_uri()); //Đường dẫn URL đến thư mục theme
define('LMCIT_THEME_IMG_URL', LMCIT_THEME_URL . '/images'); //Đường dẫn URL đến thư mục images của theme


// /* Khai báo sử dụng CSS, Javascript *********************************************/
add_action('wp_enqueue_scripts', 'lmcit_theme_register_style');
if(!function_exists('lmcit_theme_register_style')) {
	function lmcit_theme_register_style(){
		$cssUrl = LMCIT_THEME_URL . '/assets/css';
		$jsUrl 	= LMCIT_THEME_URL . '/assets/js';

		// CSS
		
		
		
		// JAVASCRIPT
		wp_register_script('lmcit_theme_js_jquery.min', $jsUrl . '/jquery.min.js', array(), '1.0');
		wp_enqueue_script('lmcit_theme_js_jquery.min');
		
		wp_register_script('lmcit_theme_js_bootstrap.min', $jsUrl . '/bootstrap.min.js', array(), '1.0',true);
		wp_enqueue_script('lmcit_theme_js_bootstrap.min');
				
		wp_register_script('lmcit_theme_js_jquery.bxslider.min', $jsUrl . '/jquery.bxslider.min.js', array(), '1.0');
		wp_enqueue_script('lmcit_theme_js_jquery.bxslider.min');
		
		wp_register_script('lmcit_theme_js_highslide-with-gallery.js', $jsUrl . '/highslide-with-gallery.js', array(), '1.0');
		wp_enqueue_script('lmcit_theme_js_highslide-with-gallery.js',true);
	}
}

//******************************************

add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');
add_filter('woocommerce_enable_order_notes_field', '__return_false');
add_filter('woocommerce_cart_needs_payment', '__return_false');
add_filter( 'wc_add_to_cart_message', '__return_empty_string' );
function custom_override_checkout_fields($fields){
	unset($fields['billing']['billing_country']);
	unset($fields['billing']['billing_postcode']);
	unset($fields['billing']['billing_address_2']);
	unset($fields['order']['order_comments']);
    return $fields;
}
