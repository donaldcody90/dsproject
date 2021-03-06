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
function woocommerce_template_sale_closing_time(){
	wc_get_template( 'single-product/sale-closing-time.php' );
}
function template_loop_product_link_open(){
	echo '<a href="' . get_the_permalink() . '" >';
}
function template_loop_product_thumbnail() {
	echo '<div class="thumbnail product-thumb">';
	echo template_loop_product_link_open();
	echo woocommerce_get_product_thumbnail();
	echo '</a></div>';
}
function template_loop_product_title() {
	echo '<h3><a class="title" href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>';
}
if ( ! function_exists( 'woocommerce_breadcrumb_leflair' ) ) {
	function woocommerce_breadcrumb_leflair( $args = array() ) {
		$args = wp_parse_args( $args, apply_filters( 'woocommerce_breadcrumb_defaults', array(
			'delimiter'   => '',
			'wrap_before' => '<nav class="woocommerce-breadcrumb" ' . ( is_single() ? 'itemprop="breadcrumb"' : '' ) . '>',
			'wrap_after'  => '</nav>',
			'before'      => '',
			'after'       => '',
			'home'        => _x( 'Sales', 'breadcrumb', 'woocommerce' )
		) ) );

		$breadcrumbs = new WC_Breadcrumb();

		if ( ! empty( $args['home'] ) ) {
			$breadcrumbs->add_crumb( $args['home'], apply_filters( 'woocommerce_breadcrumb_home_url', home_url() ) );
		}

		$args['breadcrumb'] = $breadcrumbs->generate();

		wc_get_template( 'global/breadcrumb.php', $args );
	}
}
function before_add_to_cart_button(){
	echo '<div class="apart-lg">';
}
function after_add_to_cart_button(){
	echo '</div>';
}
function before_cart(){
	echo 	'<div class="ui simple sidebar push menu shopping-cart right">
				<div class="wrapper">
					<div class="header text-center">
						<i class="leflair i-leflair-close"></i>
							Giỏ Hàng
					</div>';
}
function after_cart(){
	echo 	'</div></div>';
}
function woocommerce_category_image() {
    if ( is_product_category() ){
	    global $wp_query;
	    $cat = $wp_query->get_queried_object();
	    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
	    $image = wp_get_attachment_url( $thumbnail_id );
	    if ( $image ) {
		    echo '<img class="fluid category-hero" src="' . $image . '" alt="" style="height: 422px;" />';
		}
	}
}

function leflair_wc_discount_total() {
 
    global $woocommerce;
     
     
    $cart_subtotal = $woocommerce->cart->cart_contents;
 
    $discount_total = 0;
    
    foreach ($woocommerce->cart->cart_contents as $product_data) {
        
        if ($product_data['variation_id'] > 0) {
            $product = wc_get_product( $product_data['variation_id'] );
        } else {
            $product = wc_get_product( $product_data['product_id'] );
        }
 
        if ( !empty($product->sale_price) ) {
        $discount = ($product->regular_price - $product->sale_price) * $product_data['quantity'];
        $discount_total += $discount;
        }
    }
     
    if ( $discount_total > 0 ) {
    echo wc_price($discount_total);
    }
}

function leflair_get_account_orders_columns() {
    $columns = apply_filters( 'woocommerce_account_orders_columns', array(
        'order-number'  => __( 'Mã đơn hàng', 'woocommerce' ),
        'order-date'    => __( 'Ngày đặt hàng', 'woocommerce' ),
        'order-total'   => __( 'Tổng tiền', 'woocommerce' ),
        'order-status'  => __( 'Tình trạng', 'woocommerce' ),
    ) );

    // Deprecated filter since 2.6.0.
    return apply_filters( 'woocommerce_my_account_my_orders_columns', $columns );
}

function vn_provinces(){
	$province_list= array('Hà Nội','TP HCM','An Giang','Bà Rịa - Vũng Tàu','Bắc Giang','Bắc Kạn','Bạc Liêu','Bắc Ninh','Bến Tre','Bình Định','Bình Dương','Bình Phước','Bình Thuận','Cà Mau','Cao Bằng','Cần Thơ','Đà Nẵng','Đắk Lắk','Đắk Nông',
	'Điện Biên','Đồng Nai','Đồng Tháp','Gia Lai','Hà Giang','Hà Nam','Hải Dương','Hải Phòng','Hậu Giang','Hòa Bình','Hưng Yên','Khánh Hòa','Kiên Giang','Kon Tum','Lai Châu','Lâm Đồng','Lạng Sơn','Lào Cai','Long An','Nam Định','Nghệ An','Ninh Bình',
	'Ninh Thuận','Phú Thọ','Phú Yên','Quảng Bình','Quảng Nam','Quảng Ngãi','Quảng Ninh','Quảng Trị','Sóc Trăng','Sơn La','Tây Ninh','Thái Bình','Thừa Thiên Huế','Tiền Giang','Trà Vinh','Tuyên Quang','Vĩnh Long',
	'Vĩnh Phúc','Yên Bái'
	);
	foreach($province_list as $id => $province){
		echo '<div id="ui-select-choices-row-2-'.$id.'" class="ui-select-choices-row">
			<a href="" class="ui-select-choices-row-inner">
				<span class="ng-binding">'.$province.'</span>
			</a>
		</div>';
	}
}

function vf_get_menu_by_location( $location ) {
    if( empty($location) ) return false;

    $locations = get_nav_menu_locations();
    if( ! isset( $locations[$location] ) ) return false;

    $menu_obj = get_term( $locations[$location], 'nav_menu' );

    return $menu_obj;
}
function custom_commitment(){
	wc_get_template('single-product/commitment.php');
}
function custom_account_info(){
	$current_user= wp_get_current_user();
	echo '<div class="account-page-user_info">
			<img src="'.get_avatar_url('WP_User object', null).'">
			<label>'.$current_user->display_name . '</label>
		</div>';
}
function get_form_register_123(){
	wc_get_template('myaccount/form-register.php');
}
function wc_get_account_menu_items_custom() {
    $items = array(
        'dashboard'       => __( 'Tổng quan', 'woocommerce' ),
        'orders'          => __( 'Orders', 'woocommerce' ),
        'downloads'       => __( 'Downloads', 'woocommerce' ),
        'edit-address'    => __( 'Address', 'woocommerce' ),
        'edit-account'    => __( 'Account Details', 'woocommerce' ),
        'customer-logout' => __( 'Logout', 'woocommerce' ),
    );

    // Remove empty items.
    $downloads = WC()->customer->get_downloadable_products();

    if ( ! sizeof( $downloads ) ) {
        unset( $items['downloads'] );
    }

    return apply_filters( 'woocommerce_account_menu_items', $items );
}


// Action Hook
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation', 10);

add_action( 'woocommerce_single_product_summary', 'woocommerce_single_product_info', 5);
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 60);
add_action( 'woocommerce_after_single_product', 'woocommerce_template_recommendation', 10);
//add_action( 'woocommerce_before_single_product', 'woocommerce_breadcrumb_leflair', 20);
add_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb_leflair', 20);
add_action( 'woocommerce_before_main_content', 'woocommerce_template_sale_closing_time', 30);
//add_action( 'woocommerce_before_shop_loop_item', 'template_loop_product_link_open', 20);
add_action( 'woocommerce_before_shop_loop_item_title', 'template_loop_product_thumbnail', 20);
add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_single_trademark', 10);
add_action( 'woocommerce_shop_loop_item_title', 'template_loop_product_title', 20);
add_action( 'woocommerce_before_add_to_cart_button', 'before_add_to_cart_button', 5);
add_action( 'woocommerce_after_add_to_cart_button', 'after_add_to_cart_button', 5);
//add_action( 'woocommerce_before_cart', 'before_cart', 1);
//add_action( 'woocommerce_after_cart', 'after_cart', 1);
add_action( 'woocommerce_archive_description', 'wcb_show_category_banner_custom', 2 );
add_action( 'woocommerce_single_product_summary', 'custom_commitment', 40 );
add_action( 'custom_related_products', 'woocommerce_output_related_products', 10 );
add_action( 'woocommerce_single_variation_custom', 'woocommerce_single_variation', 10 );

/* Shortcode */
function short_code_loop_cat($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-loop-cat.php');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('loop_cat', 'short_code_loop_cat');

function short_code_upcoming($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-upcoming.php');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('upcoming', 'short_code_upcoming');

function short_code_about($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-about.php');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('about', 'short_code_about');

function short_code_partners($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-partners.php');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('partners', 'short_code_partners');

function short_code_careers($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-careers.php');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('careers', 'short_code_careers');

function short_code_account($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-account.php');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('account', 'short_code_account');

function short_code_orders($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-orders.php');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('orders', 'short_code_orders');

add_shortcode( 'bestselling_product_categories', 'sp_bestselling_products' );
function sp_bestselling_products($atts){
 
	global $woocommerce_loop;
 
	extract(shortcode_atts(array(
		'cats' => '',	
		'tax' => 'product_cat',	
		'per_cat' => '3',	
		'columns' => '3',	
	), $atts));
 
	
	if(empty($cats)){
		$terms = get_terms( 'product_cat', array('hide_empty' => true, 'fields' => 'ids'));
		$cats = implode(',', $terms);
	}
 
	
	$cats = explode(',', $cats);
 
	
	if(empty($cats)){
		return '';
	}
 
	ob_start();
 
	foreach($cats as $cat){
 
		// get the product category
		$term = get_term( $cat, $tax);
 
		// setup query
		$args = array(
			'post_type' 			=> 'product',
			'post_status' 			=> 'publish',
			'ignore_sticky_posts'   => 1,
			'posts_per_page'		=> $per_cat,			
			'meta_key' 		 		=> 'total_sales',
			'orderby' 		 		=> 'meta_value_num',
			'tax_query' => array(				
				array(
					'taxonomy' => $tax,
					'field' => 'id',
					'terms' => $cat,
				)
			),
			'meta_query' 			=> array(
				array(
					'key' 		=> '_visibility',
					'value' 	=> array( 'catalog', 'visible' ),
					'compare' 	=> 'IN'
				)
			)
		);

		// set woocommerce columns
		$woocommerce_loop['columns'] = $columns;
 
		// query database
		$products = new WP_Query( $args );
 
		$woocommerce_loop['columns'] = $columns;
 
		if ( $products->have_posts() ) : ?>
 
			
			<?php woocommerce_product_loop_start(); ?>
 
				<?php while ( $products->have_posts() ) : $products->the_post(); ?>
 
					<?php woocommerce_get_template_part( 'content', 'product' ); ?>
 
				<?php endwhile; // end of the loop. ?>
 
			<?php woocommerce_product_loop_end(); ?>
 
		<?php endif;
 
		wp_reset_postdata();
	}
 
	return '<div class="woocommerce columns-' . $columns . '">' . ob_get_clean() . '</div>';
}









/*----------woocommerce-category-banner------------*/


if ( ! function_exists( 'customizing_form_field' ) ) {
    /**
     * Outputs a checkout/address form field.
     *
     * @subpackage  Forms
     * @param string $key
     * @param mixed $args
     * @param string $value (default: null)
     * @todo This function needs to be broken up in smaller pieces
     */
    function customizing_form_field( $key, $args, $value = null ) {
        $defaults = array(
            'type'              => 'text',
            'label'             => '',
            'description'       => '',
            'placeholder'       => '',
            'maxlength'         => false,
            'required'          => false,
            'autocomplete'      => false,
            'id'                => $key,
            'class'             => array(),
            'label_class'       => array(),
            'input_class'       => array(),
            'return'            => false,
            'options'           => array(),
            'custom_attributes' => array(),
            'validate'          => array(),
            'default'           => '',
        );

        $args = wp_parse_args( $args, $defaults );
        $args = apply_filters( 'woocommerce_form_field_args', $args, $key, $value );

        if ( $args['required'] ) {
            $args['class'][] = 'validate-required';
            $required = ' <abbr class="required" title="' . esc_attr__( 'required', 'woocommerce'  ) . '">*</abbr>';
        } else {
            $required = '';
        }

        $args['maxlength'] = ( $args['maxlength'] ) ? 'maxlength="' . absint( $args['maxlength'] ) . '"' : '';

        $args['autocomplete'] = ( $args['autocomplete'] ) ? 'autocomplete="' . esc_attr( $args['autocomplete'] ) . '"' : '';

        if ( is_string( $args['label_class'] ) ) {
            $args['label_class'] = array( $args['label_class'] );
        }

        if ( is_null( $value ) ) {
            $value = $args['default'];
        }

        // Custom attribute handling
        $custom_attributes = array();

        if ( ! empty( $args['custom_attributes'] ) && is_array( $args['custom_attributes'] ) ) {
            foreach ( $args['custom_attributes'] as $attribute => $attribute_value ) {
                $custom_attributes[] = esc_attr( $attribute ) . '="' . esc_attr( $attribute_value ) . '"';
            }
        }

        if ( ! empty( $args['validate'] ) ) {
            foreach( $args['validate'] as $validate ) {
                $args['class'][] = 'validate-' . $validate;
            }
        }

        $field = '';
        $label_id = $args['id'];
        $field_container = '<div class="form-group form-row %1$s">%3$s</div>';

        switch ( $args['type'] ) {
            case 'country' :

                $countries = 'shipping_country' === $key ? WC()->countries->get_shipping_countries() : WC()->countries->get_allowed_countries();

                if ( 1 === sizeof( $countries ) ) {

                    $field .= '<strong>' . current( array_values( $countries ) ) . '</strong>';

                    $field .= '<input type="hidden" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" value="' . current( array_keys($countries ) ) . '" ' . implode( ' ', $custom_attributes ) . ' class="country_to_state" />';

                } else {

                    $field = '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" ' . $args['autocomplete'] . ' class="country_to_state country_select ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" ' . implode( ' ', $custom_attributes ) . '>'
                            . '<option value="">'.__( 'Select a country&hellip;', 'woocommerce' ) .'</option>';

                    foreach ( $countries as $ckey => $cvalue ) {
                        $field .= '<option value="' . esc_attr( $ckey ) . '" '. selected( $value, $ckey, false ) . '>'. __( $cvalue, 'woocommerce' ) .'</option>';
                    }

                    $field .= '</select>';

                    $field .= '<noscript><input type="submit" name="woocommerce_checkout_update_totals" value="' . esc_attr__( 'Update country', 'woocommerce' ) . '" /></noscript>';

                }

                break;
            case 'state' :

                /* Get Country */
                $country_key = 'billing_state' === $key ? 'billing_country' : 'shipping_country';
                $current_cc  = WC()->checkout->get_value( $country_key );
                $states      = WC()->countries->get_states( $current_cc );

                if ( is_array( $states ) && empty( $states ) ) {

                    $field_container = '<p class="form-row %1$s" id="%2$s" style="display: none">%3$s</p>';

                    $field .= '<input type="hidden" class="hidden" name="' . esc_attr( $key )  . '" id="' . esc_attr( $args['id'] ) . '" value="" ' . implode( ' ', $custom_attributes ) . ' placeholder="' . esc_attr( $args['placeholder'] ) . '" />';

                } elseif ( is_array( $states ) ) {

                    $field .= '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="state_select ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" ' . implode( ' ', $custom_attributes ) . ' data-placeholder="' . esc_attr( $args['placeholder'] ) . '" ' . $args['autocomplete'] . '>
                        <option value="">'.__( 'Select a state&hellip;', 'woocommerce' ) .'</option>';

                    foreach ( $states as $ckey => $cvalue ) {
                        $field .= '<option value="' . esc_attr( $ckey ) . '" '.selected( $value, $ckey, false ) .'>'.__( $cvalue, 'woocommerce' ) .'</option>';
                    }

                    $field .= '</select>';

                } else {

                    $field .= '<input type="text" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" value="' . esc_attr( $value ) . '"  placeholder="' . esc_attr( $args['placeholder'] ) . '" ' . $args['autocomplete'] . ' name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" ' . implode( ' ', $custom_attributes ) . ' />';

                }

                break;
            case 'textarea' :

                $field .= '<textarea name="' . esc_attr( $key ) . '" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" id="' . esc_attr( $args['id'] ) . '" placeholder="' . esc_attr( $args['placeholder'] ) . '" ' . $args['maxlength'] . ' ' . $args['autocomplete'] . ' ' . ( empty( $args['custom_attributes']['rows'] ) ? ' rows="2"' : '' ) . ( empty( $args['custom_attributes']['cols'] ) ? ' cols="5"' : '' ) . implode( ' ', $custom_attributes ) . '>'. esc_textarea( $value  ) .'</textarea>';

                break;
            case 'checkbox' :

                $field = '<label class="checkbox ' . implode( ' ', $args['label_class'] ) .'" ' . implode( ' ', $custom_attributes ) . '>
                        <input type="' . esc_attr( $args['type'] ) . '" class="input-checkbox ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" value="1" '.checked( $value, 1, false ) .' /> '
                         . $args['label'] . $required . '</label>';

                break;
            case 'password' :
            case 'text' :
            case 'email' :
            case 'tel' :
            case 'number' :

                $field .= '<input type="' . esc_attr( $args['type'] ) . '" class="form-control account-input-required ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" placeholder="' . esc_attr( $args['placeholder'] ) . '" ' . $args['maxlength'] . ' ' . $args['autocomplete'] . ' value="' . esc_attr( $value ) . '" ' . implode( ' ', $custom_attributes ) . ' />';

                break;
            case 'select' :

                $options = $field = '';

                if ( ! empty( $args['options'] ) ) {
                    foreach ( $args['options'] as $option_key => $option_text ) {
                        if ( '' === $option_key ) {
                            // If we have a blank option, select2 needs a placeholder
                            if ( empty( $args['placeholder'] ) ) {
                                $args['placeholder'] = $option_text ? $option_text : __( 'Choose an option', 'woocommerce' );
                            }
                            $custom_attributes[] = 'data-allow_clear="true"';
                        }
                        $options .= '<option value="' . esc_attr( $option_key ) . '" '. selected( $value, $option_key, false ) . '>' . esc_attr( $option_text ) .'</option>';
                    }

                    $field .= '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="select '. esc_attr( implode( ' ', $args['input_class'] ) ) . '" ' . implode( ' ', $custom_attributes ) . ' data-placeholder="' . esc_attr( $args['placeholder'] ) . '" ' . $args['autocomplete'] . '>
                            ' . $options . '
                        </select>';
                }

                break;
            case 'radio' :

                $label_id = current( array_keys( $args['options'] ) );

                if ( ! empty( $args['options'] ) ) {
                    foreach ( $args['options'] as $option_key => $option_text ) {
                        $field .= '<input type="radio" class="input-radio ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" value="' . esc_attr( $option_key ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '_' . esc_attr( $option_key ) . '"' . checked( $value, $option_key, false ) . ' />';
                        $field .= '<label for="' . esc_attr( $args['id'] ) . '_' . esc_attr( $option_key ) . '" class="radio ' . implode( ' ', $args['label_class'] ) .'">' . $option_text . '</label>';
                    }
                }

                break;
        }

        if ( ! empty( $field ) ) {
            $field_html = '';

            if ( $args['label'] && 'checkbox' != $args['type'] ) {
                $field_html .= '<label for="' . esc_attr( $label_id ) . '" class="' . esc_attr( implode( ' ', $args['label_class'] ) ) .'">' . $args['label'] . $required . '</label>';
            }

            $field_html .= $field;

            if ( $args['description'] ) {
                $field_html .= '<span class="description">' . esc_html( $args['description'] ) . '</span>';
            }

            $container_class = 'form-row ' . esc_attr( implode( ' ', $args['class'] ) );
            $container_id = esc_attr( $args['id'] ) . '_field';

            $after = ! empty( $args['clear'] ) ? '<div class="clear"></div>' : '';

            $field = sprintf( $field_container, $container_class, $container_id, $field_html ) . $after;
        }

        $field = apply_filters( 'woocommerce_form_field_' . $args['type'], $field, $key, $args, $value );

        if ( $args['return'] ) {
            return $field;
        } else {
            echo $field;
        }
    }
}

function short_code_register($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/woocommerce/myaccount/form-register.php');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('custom_get_form_register', 'short_code_register');











if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'WCB_Category_Banner' ) ) :

class WCB_Category_Banner {
	
	public function __construct() {

		global $woocommerce;
		global $wp_query;

		// Add Scripts and styles		
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts_and_styles' ) );
		
		// Add the fields to the product cateogry taxonomy 
		add_action( 'product_cat_edit_form_fields', array( $this, 'wcb_product_cat_taxonomy_custom_fields' ), 10, 2 );  
		  
		// Save the changes made on the product category taxonomy 
		add_action( 'edited_product_cat', array( $this, 'wcb_product_cat_save_taxonomy_custom_fields'), 10, 2 );  

		// Add a banner image based on category taxonomy image, only if it's set to auto show (default)
		add_action( 'woocommerce_before_main_content', array( $this, 'wcb_show_category_banner'), 30 );

	}

	/*
	*	Adds necessary admin scripts
	*/
	public function admin_scripts_and_styles() {
		
		// Get current screen attributes
		$screen = get_current_screen();
		
		if ( $screen != null and $screen->id == "edit-product_cat" ) {
			
			// Adds WP Modal Window References			
			wp_enqueue_media();
			
			// Enque the script
			
			wp_enqueue_script('wcb_admin_script', get_template_directory_uri() . '/assets/js/wcb-admin.js', array('jquery'), '1.0.0', true);
			
			// Add Style
			
			wp_enqueue_style('wcb_admin_styles', get_template_directory_uri() . '/assets/css/wcb-admin.css', false, null);
		}
	}

	/*
	*	Adds default option values
	*/	
	public function wcb_product_cat_taxonomy_custom_fields( $tag ) {

		// Check for existing taxonomy meta for the term you're editing  
	    $t_id = $tag->term_id; // Get the ID of the term you're editing  
	    $term_meta = get_option( "taxonomy_term_$t_id" ); // Do the check  
	    
	    // Get banner image
	    if ( isset( $term_meta['banner_url_id'] ) and $term_meta['banner_url_id'] != '' )
    	    $banner_id = $term_meta['banner_url_id'];
	    else 
    	    $banner_id = null;
    	    
    	// Get banner link 
    	if ( isset( $term_meta['banner_link'] ) and $term_meta['banner_link'] != '' )
    		$banner_link = $term_meta['banner_link'];
    	else 
    	    $banner_link = null;
    	  
    	// Get auto display setting.
		if ( (isset( $term_meta['auto_display_banner']) && $term_meta['auto_display_banner'] == 'on') || !isset( $term_meta['auto_display_banner']) ) {
			$auto_display_banner = true;
		} else {
			$auto_display_banner = false;
		}

	    ?>  
	    
		<tr class="form-field banner_url_form_field">  
		    <th scope="row" valign="top">  
		        <label for="banner_url"><?php _e('Banner Image'); ?></label>  
		    </th>  
		    <td>  
		    	<fieldset>
					<a class='wcb_upload_file_button button' uploader_title='Select File' uploader_button_text='Include File'>Upload File</a>
					<a class='wcb_remove_file button'>Remove File</a>
					<label class='banner_url_label' ><?php if ( $banner_id != null ) echo basename( wp_get_attachment_url( $banner_id ) ) ?></label>
		    	</fieldset>
		    	
		    	<fieldset>				
					<img class="cat_banner_img_admin" src="<?php if ( $banner_id != null ) echo wp_get_attachment_url( $banner_id ) ?>" />
		    	</fieldset>
		    	
				<input type="hidden" class='wcb_image' name='term_meta[banner_url_id]' value='<?php if ( $banner_id != null ) echo $banner_id; ?>' />
			</td>  
		</tr>  
		
		<tr class="form-field banner_link_form_field">  
		    <th scope="row" valign="top">  
		        <label for="banner_link"><?php _e('Banner Image Link'); ?></label>  
		    </th>  
		    <td>  
		    	<fieldset>	
					<input type="url" name='term_meta[banner_link]' value='<?php if ( $banner_link != null ) echo $banner_link ?>' />		
					<label class="banner_link_label" for="banner_link"><em>Where users will be directed if they click the banner.</em></label>		
		    	</fieldset>
			</td>  
		</tr> 
		<tr class="form-field auto_display_banner">  
		    <th scope="row" valign="top">  
		        <label for="auto_display_banner"><?php _e('Automatically insert banner above main content'); ?></label>  
		    </th>  
		    <td>  
		    	<fieldset>
		    	<input name="term_meta[auto_display_banner]" type="checkbox" value="on" class="auto_display_banner" <?php if($auto_display_banner) echo " checked "; ?>/>
				<label class="auto_display_banner_label" for="auto_display_banner"><em>If you want to display the banner in a custom spot on your category page, you can deselect this checkbox and use the wcb_show_category_banner() in your category template to dictate where it will appear.</em></label>		
		    	</fieldset>
			</td>  
		</tr> 
		  
	<?php  
	}
	
	// A callback function to save our extra taxonomy field(s)  
	public function wcb_product_cat_save_taxonomy_custom_fields( $term_id ) {  
	        
	    if ( isset( $_POST['term_meta'] ) ) {  
	        $t_id = $term_id;  
	        $term_meta = get_option( "taxonomy_term_$t_id" );  
	        $posted_term_meta = $_POST['term_meta'];

	        if(!isset($posted_term_meta['auto_display_banner']))
	        	$posted_term_meta['auto_display_banner'] = 'off';

	        $cat_keys = array_keys( $posted_term_meta );  

	        foreach ( $cat_keys as $key ){  
	            if ( isset( $posted_term_meta[$key] ) ){  
	                $term_meta[$key] = $posted_term_meta[$key];  
	            }  
	        }  
	        //save the option array  
	        update_option( "taxonomy_term_$t_id", $term_meta );  
	    }
	}
	
	// Retreives and print the category banner
	public function wcb_show_category_banner() {
		global $woocommerce;
		global $wp_query;

		// Make sure this is a product category page
		if ( is_product_category() ) {
			$cat_id = $wp_query->queried_object->term_id;

			$term_options = get_option( "taxonomy_term_$cat_id" );

			if((isset($term_options['auto_display_banner']) && $term_options['auto_display_banner'] == 'on')) {
				// Get the banner image id
				if ( $term_options['banner_url_id'] != '' )
					$url = wp_get_attachment_url( $term_options['banner_url_id'] ); 

				// Exit if the image url doesn't exist
				if ( !isset( $url ) or $url == false )
					return;

				// Get the banner link if it exists
				if ( $term_options['banner_link'] != '' )
					$link = $term_options['banner_link'];

				// Print Output
				if ( isset( $link ) )
					echo "<a href='" . $link . "'>"; 
			
				if ( $url != false ) 
					echo "<img src='" . $url . "' class='category_banner_image' />";
			
				if ( isset( $link ) )
					echo "</a>";

			}
		}
	}
}

endif;

$WCB_Category_Banner = new WCB_Category_Banner();

//Shortcode function for displaying banner.
function wcb_show_category_banner_custom() {
	global $woocommerce;
	global $wp_query;

	// Make sure this is a product category page
	if ( is_product_category() ) {
		$cat_id = $wp_query->queried_object->term_id;

		$term_options = get_option( "taxonomy_term_$cat_id" );

		if((isset($term_options['auto_display_banner']) && $term_options['auto_display_banner'] == 'off') || !isset($term_options['auto_display_banner'])) {
			// Get the banner image id
			if ( $term_options['banner_url_id'] != '' )
				$url = wp_get_attachment_url( $term_options['banner_url_id'] ); 

			// Exit if the image url doesn't exist
			if ( !isset( $url ) or $url == false )
				return;

			// Get the banner link if it exists
			if ( $term_options['banner_link'] != '' )
				$link = $term_options['banner_link'];

			// Print Output
			if ( isset( $link ) )
				echo "<a href='" . $link . "'>"; 
		
			if ( $url != false ) 
				echo "<img src='" . $url . "' class='category_banner_image' />";
		
			if ( isset( $link ) )
				echo "</a>";

		}
	}
}































