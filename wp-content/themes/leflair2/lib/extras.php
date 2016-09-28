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

/** Register Post type **/

/* Custom Post Type Brand */

// Our custom post type function
function create_posttype() {

	register_post_type( 'testimonial',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Testimonial' ),
				'singular_name' => __( 'Testimonial' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'testimonial'), 
			'supports' => array(
            'title',
            'editor',
			//'custom-fields',
            'thumbnail',
            'page-attributes',)

		)
	);
    
    register_post_type( 'Estudios',
		array(
			'labels' => array(
				'name' => __( 'Estudios' ),
				'singular_name' => __( 'Estudios' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'estudios'), 
			'supports' => array(
            'title',
            'editor',
			'excerpt',
            'comments',
            'thumbnail',
            'page-attributes',)

		)
	);
    
    
    register_post_type( 'qaetapa',
		array(
			'labels' => array(
				'name' => __( 'Comments Post Extra' ),
				'singular_name' => __( 'Comments Post Extra' )
			),
			'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
			'publicly_queriable' => true,  // you should be able to query it
			'show_ui' => true,  // you should be able to edit it in wp-admin
			'exclude_from_search' => true,  // you should exclude it from search results
			'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
			'has_archive' => false,  // it shouldn't have archive page
			'rewrite' => false,  // it shouldn't have rewrite rules

			'supports' => array('title')

		)
	);
	
    register_post_type( 'protocols',
		array(
			'labels' => array(
				'name' => __( 'Protocols' ),
				'singular_name' => __( 'Protocols' )
			),
			'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
			'publicly_queriable' => true,  // you should be able to query it
			'show_ui' => true,  // you should be able to edit it in wp-admin
			'exclude_from_search' => true,  // you should exclude it from search results
			'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
			'has_archive' => false,  // it shouldn't have archive page
			'rewrite' => false,  // it shouldn't have rewrite rules
			'supports' => array('title')

		)
	);
    
    register_post_type( 'anecdotas',
		array(
			'labels' => array(
				'name' => __( 'Anécdotas' ),
				'singular_name' => __( 'Anécdotas' )
			),
			'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
			'publicly_queriable' => true,  // you should be able to query it
			'show_ui' => true,  // you should be able to edit it in wp-admin
			'exclude_from_search' => true,  // you should exclude it from search results
			'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
			'has_archive' => false,  // it shouldn't have archive page
			'rewrite' => false,  // it shouldn't have rewrite rules
			'supports' => array('title')

		)
	);
    
    register_post_type( 'suplementos',
		array(
			'labels' => array(
				'name' => __( 'Suplementos' ),
				'singular_name' => __( 'Suplementos' )
			),
			'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
			'publicly_queriable' => true,  // you should be able to query it
			'show_ui' => true,  // you should be able to edit it in wp-admin
			'exclude_from_search' => true,  // you should exclude it from search results
			'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
			'has_archive' => false,  // it shouldn't have archive page
			'rewrite' => false,  // it shouldn't have rewrite rules
			'supports' => array('title','thumbnail')

		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

//add_image_size('suplementos-slider-size',200,200);
function short_code_suplementos_sliders($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-suplementos_sliders.php');
    //get_template_part('templates/wp','ourteam');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('suplementos_sliders', 'short_code_suplementos_sliders');

function short_code_anecdota_form($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-anecdota-form.php');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('anecdota_form', 'short_code_anecdota_form');

function short_code_anecdota_list($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-anecdota-list.php');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('anecdota_list', 'short_code_anecdota_list');


function short_code_custom_comment_form($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-custom-comment-form.php');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('custom_comment', 'short_code_custom_comment_form');


function short_code_protocol_form($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-protocol-form.php');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('protocol_form', 'short_code_protocol_form');

function short_code_protocol_list($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-protocol-list.php');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('protocol_list', 'short_code_protocol_list');


function short_code_question_form($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-question-form.php');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('question_and_answer', 'short_code_question_form');


function short_code_photogallery($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-photogallery.php');
    //get_template_part('templates/wp','ourteam');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('photogallery', 'short_code_photogallery');

add_image_size('post-slider-size',270,169);
add_image_size('testimonial-slider-size',150,150);
function short_code_post_sliders($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-post_sliders.php');
    //get_template_part('templates/wp','ourteam');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('post_sliders', 'short_code_post_sliders');

add_image_size( 'post-cat-size',370,247,true,array('center','center')); 
function short_code_articles_slider($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-articles_slider.php');
    //get_template_part('templates/wp','ourteam');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('articles_slider', 'short_code_articles_slider');



function short_code_estudios_lists($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-estudios_lists.php');
    //get_template_part('templates/wp','ourteam');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('estudios_lists', 'short_code_estudios_lists');

function short_code_testimonials($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-short_code_testimonials.php');
    //get_template_part('templates/wp','ourteam');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('testimonials', 'short_code_testimonials');


function short_code_nearbyplace($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-nearbyplace.php');
    //get_template_part('templates/wp','ourteam');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('nearbyplace', 'short_code_nearbyplace');

function short_code_location_contact($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/sc-location-contact.php');
    //get_template_part('templates/wp','ourteam');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('location-contact', 'short_code_location_contact');



function short_code_ourteam($atts, $content = null) {
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/wp-ourteam.php');
    //get_template_part('templates/wp','ourteam');
    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode('ourteam', 'short_code_ourteam');



// Apply filter
//add_filter('body_class', 'page_full_width_classes');
function page_full_width_classes($classes) {
		global $post;
		$force_full_width = get_post_meta($post->ID,'page_force_full_width',true);		
        if($force_full_width == 1) $classes[] = 'force-full-width';
        return $classes;
}

function get_meta_banner($id) {
    $image = wp_get_attachment_image_src( intval( $id ), 'full' );
    $image = $image[0];
    return $image;
}


//add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);
function add_search_box_to_menu( $items, $args ) {
    if( $args->theme_location == 'primary_navigation' )
        return $items." <li class='menu-header-search'>
    						<div class='header-search-wrap'>
    							<a href='#' class='search_icon'><i class='fa fa-search'></i> </a>
    							<div class='search-form-wrap' style='display:none;'>
		    						<form action='".site_url()."' id='searchform' method='get'>
		    							<input type='text' name='s' id='s' placeholder='Search Our Website'>
		    							<input type='submit' value='Search' name='Submit' class='btn-s-submit' />
		    						</form>
	    						</div>
    						</div>
    					</li>";

    return $items;
}

// ajax function for multi download
add_action( 'wp_ajax_download_multi',  'download_multi' );
add_action( 'wp_ajax_nopriv_download_multi',  'download_multi' );
function download_multi() {
	if($_POST['task'] == 'create_zip') {
		$files = $_POST['files'];
		$files = explode(",",$files);
		$upload_dir = wp_upload_dir();
		$subfix = rand(0,100000);
		$file_name = "spectra_forms_download_".$subfix.".zip";
		$zip_array = array();
		foreach($files as $file) {
				$data = wpdm_custom_data($file);
				$afiles = $data['files'];
				$afile = is_array($afiles)?$afiles[0]:'';
				if(file_exists(UPLOAD_DIR.'/'.$afile)){
					$zip_array[$afile] = UPLOAD_DIR.'/'.$afile;
				}
				else if(file_exists($afile)) {
					$zip_array[$afile] = UPLOAD_DIR.'/'.$afile;
				}
		}
		$download_path = $upload_dir['basedir']."/".$file_name;
		$download_url = $upload_dir['baseurl']."/".$file_name;
		if(!empty($zip_array)) {
			$rs = create_zip($zip_array,$download_path,true);
			if($rs) echo json_encode(array('rs' => true , 'url' => $download_url , 'path' => $download_path ));
			else echo json_encode(array('rs' => false , 'url' => $download_url , 'path' => $download_path ));
		}
	}else if($_POST['task'] == 'unlink') {
		$download_path = $_POST['download_path'];
		unlink($download_path);
	}
	die;
}

function create_zip($files = array(),$destination = '',$overwrite = false) {
	//if the zip file already exists and overwrite is false, return false
	if(file_exists($destination) && !$overwrite) { return false; }
	//vars
	$valid_files = array();
	//if files were passed in...
	if(is_array($files)) {
		//cycle through each file
		foreach($files as $file_name=>$file) {
			//make sure the file exists
			if(file_exists($file)) {
				$valid_files[$file_name] = $file;
			}
		}
	}
	//if we have good files...
	if(count($valid_files)) {
		//create the archive
		$zip = new ZipArchive();
		if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
			return false;
		}
		//add the files
		foreach($valid_files as $file_name=>$file) {
			$zip->addFile($file,$file_name);
		}
		//debug
		//echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
		//close the zip -- done!
		$zip->close();
		//check to make sure the file exists
		return file_exists($destination);
	}
	else
	{
		return false;
	}
}


// Store active font size
add_action( 'wp_ajax_change_font_size',  'change_font_size' );
add_action( 'wp_ajax_nopriv_change_font_size',  'change_font_size' );
function change_font_size(){
	$_SESSION['font-size'] = $_POST['font-size'];
	die('Font size changed');
}


function add_my_favicon() {   
   $new_favi = get_theme_option('favi', 'url');
   if($new_favi == "") $new_favi = get_template_directory_uri() . '/images/favi.ico';
   echo '<link rel="shortcut icon" href="' . $new_favi . '" />';
}

add_action( 'wp_head', 'add_my_favicon' ); //front end
add_action( 'admin_head', 'add_my_favicon' ); //admin end
// remove woo breackcrumn
add_action( 'init', 'jk_remove_wc_breadcrumbs' );
function jk_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );


add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_single_title', 3 );
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_single_excerpt', 4 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_sharing', 000 );
#add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price',20 );

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +
function woo_custom_cart_button_text() {
    return __( 'AÑADIR A LA CESTA', 'woocommerce' );
}


add_action( 'template_redirect', 'empty_cart_button_handler' );
function empty_cart_button_handler() {
   if(isset($_POST['is_donation']) && $_POST['is_donation']=='on')	
	{
        WC()->cart->add_to_cart(566);
    }
 }

// Use WC 2.0 variable price format, now include sale price strikeout
add_filter( 'woocommerce_variable_sale_price_html', 'wc_wc20_variation_price_format', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'wc_wc20_variation_price_format', 10, 2 );
function wc_wc20_variation_price_format( $price, $product ) {
    // Main Price
    $prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
    $price = $prices[0] !== $prices[1] ? sprintf( __( '%1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
    // Sale Price
    $prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
    sort( $prices );
    $saleprice = $prices[0] !== $prices[1] ? sprintf( __( '%1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

    if ( $price !== $saleprice ) {
        $price = '<del>' . $saleprice . '</del> <ins>' . $price . '</ins>';
    }
    return $price;
} 


function skyverge_change_empty_cart_button_url() {
    if(get_permalink(445)){
        return get_permalink(445);
    }else{
        return get_site_url();    
    }
	
	//Can use any page instead, like return '/sample-page/';
}
add_filter( 'woocommerce_return_to_shop_redirect', 'skyverge_change_empty_cart_button_url' );


add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

function more_post_ajax(){
    $offset=$_POST['offset'];
    $rpp=$_POST['rpp'];
    $temp=$_POST['temp'];
    $output = '';
    ob_start();
	include(get_template_directory().'/templates/'.$temp.'.php');
    $output .= ob_get_contents();
    ob_end_clean();
    die($output);
}


add_action('wp_ajax_nopriv_submition_ajax', 'submition_ajax');
add_action('wp_ajax_submition_ajax', 'submition_ajax');
function submition_ajax()
{
	
	$task=$_POST['task'];
	if($task=='protolo')
	{
		save_protolo();
	}else if($task=='uploadfile')
	{
		upload_file("myfile");
	}else if($task=='anecdota'){
	   save_anecdota();
	}
}
function save_anecdota(){
    $pr_name=$_POST['pr_name'];
	$pr_cancer_type=$_POST['pr_cancer_type'];
	$pr_content=$_POST['pr_content'];
    $pr_attachfiles=$_POST['attachfiles'];
	if(
		empty($pr_name) || 
		empty($pr_cancer_type) ||
		empty($pr_content)
	){
		$res=array('Response'=>"Error","Message"=>"Please fill out all fields");
	}else{
		// insert post
		$my_post = array(
		  'post_type'=>'anecdotas',
		  'post_title'  =>wp_strip_all_tags($pr_name.'-'.$pr_cancer_type),
		  'post_status' =>'pending', // It is need for rewview
		);
		// Insert the post into the database
		$post_id=wp_insert_post($my_post);
		if($post_id){
			// Update meta post
			update_post_meta($post_id,"post_anecdota_name",$pr_name);
			update_post_meta($post_id,"post_anecdota_cancer_type",$pr_cancer_type);
			update_post_meta($post_id,"post_anecdota_content",$pr_content);
            update_post_meta($post_id,"post_anecdota_attachfiles",serialize($pr_attachfiles));
			$res=array('Response'=>"Success","Message"=>"Your anecdota awaiting moderation");
		}else{
			$res=array('Response'=>"Error","Message"=>"Can not save anecdota");
		}
	}
	echo json_encode($res);
	die;
}
function save_protolo()
{
	$pr_name=$_POST['pr_name'];
	$pr_edad=$_POST['pr_edad'];
	$pr_cancer_type=$_POST['pr_cancer_type'];
	$pr_diet=$_POST['pr_diet'];
	$pr_exercise=$_POST['pr_exercise'];
	$pr_spiritual=$_POST['pr_spiritual'];
	$pr_frankincense=$_POST['pr_frankincense'];
    $pr_attachfiles=$_POST['attachfiles'];
	if(
		empty($pr_name) || 
		empty($pr_edad) || 
		empty($pr_cancer_type) ||
		empty($pr_diet) ||
		empty($pr_exercise) ||
		empty($pr_spiritual) ||
		empty($pr_frankincense)
	){
		$res=array('Response'=>"Error","Message"=>"Please fill out all fields");
	}else{
		// insert post
		$my_post = array(
		  'post_type'=>'protocols',
		  'post_title'  =>wp_strip_all_tags($pr_name.'-'.$pr_cancer_type),
		  'post_status' =>'pending', // It is need for rewview
		);
		// Insert the post into the database
		$post_id=wp_insert_post($my_post);
		if($post_id){
			// Update meta post
			update_post_meta($post_id,"post_protocol_name",$pr_name);
			update_post_meta($post_id,"post_protocol_edad",$pr_edad);
			update_post_meta($post_id,"post_protocol_cancer_type",$pr_cancer_type);
			update_post_meta($post_id,"post_protocol_diet",$pr_diet);
			update_post_meta($post_id,"post_protocol_exercise",$pr_exercise);
			update_post_meta($post_id,"post_protocol_spiritual",$pr_spiritual);
			update_post_meta($post_id,"post_protocol_frankincense",$pr_frankincense);
            update_post_meta($post_id,"post_protocol_attachfiles",serialize($pr_attachfiles));
			$res=array('Response'=>"Success","Message"=>"Your protocol awaiting moderation");
		}else{
			$res=array('Response'=>"Error","Message"=>"Can not save protocol");
		}
	}
	echo json_encode($res);
	die;
}


function upload_file($fieldname)
{
	$upload_dir=wp_upload_dir();
	$target_dir=$upload_dir['basedir'].'/protocols/';
	if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $uploadOk = 1;
    $basename=$string = preg_replace('/[^a-zA-Z0-9_.]/', '-', basename($_FILES[$fieldname]["name"]));
	$file_upload_name=time().'_'. $basename;
    $target_file = $target_dir .$file_upload_name;
	$fileURL=$upload_dir['baseurl'].'/protocols/'.$file_upload_name;
    $imageFileType =strtolower(pathinfo($_FILES[$fieldname]['name'],PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
        $mes = "Sorry, file already exists.";
        $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES[$fieldname]["size"] > 20000000) {
        $mes = "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    
    // Allow certain file formats
    
    $allowedTypes = array('jpg','jpeg','png','gif');
     
    if(!in_array($imageFileType, $allowedTypes))
    {
        $mes = "Sorry, we do not support upload this file type.";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
          $rs=array("Response"=>"Error","Error"=>$mes);
    } else {
        if (move_uploaded_file($_FILES[$fieldname]["tmp_name"], $target_file)) {
            $mes = "The file has been uploaded.";
            $rs=array("Response"=>"Success","Message"=>$mes,"FileURL"=>$fileURL,'FileName'=>$file_upload_name);       
        } else {
            $rs=array("Response"=>"Error","Error"=>"Sorry, there was an error uploading your file.");       
        }
    }
	
    echo json_encode($rs);
	die;
}


remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );

add_action( 'woocommerce_checkout_before_customer_details', 'woocommerce_checkout_payment', 20 );

// Hook in
add_filter( 'woocommerce_default_address_fields' , 'custom_override_default_address_fields' );

// Our hooked in function - $address_fields is passed via the filter!
function custom_override_default_address_fields( $address_fields ) {
	
     $address_fields['city']['label'] = 'Pueblo / Ciudad';
	 $address_fields['state']['label'] = 'Estado / Condado';
	 $address_fields['postcode']['label'] = 'Código postal';
     return $address_fields;
}
// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
	 //print_r($fields);
	 // Billing
	 //$fields['billing']['billing_first_name']['placeholder'] = '';
	 $fields['billing']['billing_first_name']['label'] = 'Primer nombre';
	 $fields['billing']['billing_last_name']['label'] = 'Apellidos';
	 unset($fields['billing']['billing_company']);
	 $fields['billing']['billing_address_1']['label'] = 'Dirección';
	 $fields['billing']['billing_country']['label'] = 'País';
	 
	 $fields['billing']['billing_postcode']['label'] = 'Código postal';
	 $fields['billing']['billing_city']['label'] = 'Pueblo / Ciudad';
	 $fields['billing']['billing_state']['label'] = 'Estado / Condado';
	 
	 // SHIPPING
	 $fields['shipping']['shipping_first_name']['label'] = 'Primer nombre';
	 $fields['shipping']['shipping_last_name']['label'] = 'Apellidos';
	 unset($fields['shipping']['shipping_company']);
	 $fields['shipping']['shipping_address_1']['label'] = 'Dirección';
	 $fields['shipping']['shipping_country']['label'] = 'País';
	 $fields['shipping']['shipping_postcode']['label'] = 'Código postal';
	 $fields['shipping']['shipping_city']['label'] = 'Pueblo / Ciudad';
	 $fields['shipping']['shipping_state']['label'] = 'Estado / Condado';
	 
     $fields['order']['order_comments']['placeholder'] = 'Notas de orden';
     $fields['order']['order_comments']['label'] = 'Notas de orden';
     return $fields;
}
