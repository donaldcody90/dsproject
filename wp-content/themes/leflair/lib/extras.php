<?php
/**
 * Clean up the_excerpt()
 */
 
 function get_theme_option($field1,$field2="") {

    global $theme_options;
    if($field2 != "") {
        $output = isset($theme_options[$field1][$field2]) ? $theme_options[$field1][$field2] : false;
    }else{
        $output = isset($theme_options[$field1]) ? $theme_options[$field1] : false;
    }
    return $output;

}


function roots_excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

function woocommerce_template_single_trademark(){
	wc_get_template( 'single-product/trademark.php' );
}
function woocommerce_single_product_info() {
	echo '<div class="product-info main apart-sm">';
	woocommerce_template_single_trademark();
	woocommerce_template_single_title();
	woocommerce_template_single_price();
	echo '</div>';
}
function woocommerce_template_recommendation(){
	wc_get_template( 'single-product/recommendation.php' );
}
function woocommerce_template_breadcrumb(){
	wc_get_template( 'single-product/breadcrumb.php' );
}


// Action Hook
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
//remove_action( 'woocommerce_before_single_product', 'wc_print_notices', 10);

add_action( 'woocommerce_single_product_summary', 'woocommerce_single_product_info', 5);
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 60);
add_action( 'woocommerce_after_single_product', 'woocommerce_template_recommendation', 10);
add_action( 'woocommerce_before_single_product', 'woocommerce_template_breadcrumb', 20);
















