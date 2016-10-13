<?php

$prefix = 'product_';
$fields_page = array(		
	array( 
		'label'	=> 'Header Slider', 
		'desc'	=> '', 
		'id'	=> $prefix.'header_slider', 
		'type'	=> 'select',
		'options' => $sliders,
	),
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
		'label'	=> 'Header Image', 
		'desc'	=> '', 
		'id'	=> $prefix.'header_image', 
		'type'	=> 'image',
	),
    array( 
		'label'	=> 'Hidden Page Title', 
		'desc'	=> '', 
		'id'	=> $prefix.'hidden_title', 
		'type'	=> 'checkbox',
	),
	array( 
		'label'	=> 'Sub Title', 
		'desc'	=> '', 
		'id'	=> $prefix.'sub_title', 
		'type'	=> 'editor',
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
$post_meta_box = new custom_add_meta_box( 'post_meta_box', 'Product options', $fields_page, array('product'), true );


