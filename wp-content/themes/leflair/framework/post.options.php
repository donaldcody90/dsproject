<?php

$prefix = 'product_';
$product_fields = array(
	array(
		'label' => 'Trademark',
		'desc'	=> '',
		'id' 	=> $prefix.'trademark',
		'type'	=> 'text'
	),
	array(
		'label' => 'Trademark Logo',
		'desc'	=> '',
		'id' 	=> $prefix.'trademark_logo',
		'type'	=> 'image'
	),
	array(
		'label' => 'Trademark Slogan',
		'desc'	=> '',
		'id' 	=> $prefix.'trademark_slogan',
		'type'	=> 'text'
	),
	array(
		'label' => 'Trademark Description',
		'desc'	=> '',
		'id' 	=> $prefix.'trademark_description',
		'type'	=> 'editor'
	),
    array(
		'label'	=> 'Giao hàng trong 2-7 ngày', 
		'desc'	=> '', 
		'id'	=> $prefix.'shipment_quantity',
		'type'	=> 'checkbox',
	),
    array(
		'label'	=> 'Trả hàng trong 30 ngày', 
		'desc'	=> '', 
		'id'	=> $prefix.'returnable',
		'type'	=> 'checkbox',
	),
	array(
		'label' => 'Product Information',
		'desc'	=> '',
		'id' 	=> $prefix.'product_information',
		'type'	=> 'editor'
	),
	array(
		'label' => 'Material & Guide',
		'desc'	=> '',
		'id' 	=> $prefix.'material_guide',
		'type'	=> 'editor'
	),
	array(
		'label' => 'Detailed Size',
		'desc'	=> '',
		'id' 	=> $prefix.'detailed_size',
		'type'	=> 'editor'
	)
	
);	



$prefix_page = 'page_';
$page_fields = array(		
	array( 
		'label'	=> 'Header Image', 
		'desc'	=> '', 
		'id'	=> $prefix_page.'header_image', 
		'type'	=> 'image',
	),		
	array( 
		'label'	=> 'Title', 
		'desc'	=> '', 
		'id'	=> $prefix_page.'title', 
		'type'	=> 'text',
	),		
	array( 
		'label'	=> 'Subtitle', 
		'desc'	=> '', 
		'id'	=> $prefix_page.'subtitle', 
		'type'	=> 'text',
	),
	
);	

/**
 * Instantiate the class with all variables to create a meta box
 * var $id string meta box id
 * var $title string title
 * var $fields array fields
 * var $page string|array post type to add meta box to
 * var $js bool including javascript or not
 */
require_once (THEME_PATH . "/framework/metaboxes/meta_box.php");
//$restaurent_meta_box = new custom_add_meta_box( 'restaurant_meta_box', 'Restaurant info', $fields, 'restaurant', true );
//$product_meta_box = new custom_add_meta_box( 'product_meta_box', 'Product Restaurant info', $fields_product, 'product', true );
$post_meta_box = new custom_add_meta_box( 'post_meta_box', 'Product options', $product_fields, array('product'), true );
$page_meta_box = new custom_add_meta_box( 'page_meta_box', 'Page options', $page_fields, 'page', true );


