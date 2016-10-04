<?php

//Layer slider
$sliders = array();
if( class_exists( 'LS_Sliders' ) ) {
$sliders_list = LS_Sliders::find(array('limit' => 100));
if(!empty($sliders_list)) {
    foreach($sliders_list as $item) {
		$sliders[$item['id']] = array( 'label' => $item['name'] , 'value' => $item['id']  );
    }
}
}

$post_temps[1]=array('label'=>'Default Template','value'=>1);
$post_temps[2]=array('label'=>'Advert Right','value'=>2);	
$fields_post=array(
	array( 
		'label'	=> 'Post slider thumbnail', 
		'desc'	=> 'Need exaclty size : 170px x 169px', 
		'id'	=> 'post_slider_thumb', 
		'type'	=> 'image'
	),
    array( 
		'label'	=> 'Display Template', 
		'desc'	=> '', 
		'id'	=> 'post_view_template', 
		'type'	=> 'select',
        'default'=>0,
        'options'=>$post_temps,
	),
);


	
$fields_estudios=array(
    array( 
		'label'	=> 'Thumbnail Image', 
		'desc'	=> 'Need exaclty size : 150px x 150px', 
		'id'	=> 'post_estudios_thumb', 
		'type'	=> 'image'
	),
	array( 
		'label'	=> 'Author', 
		'desc'	=> '', 
		'id'	=> 'post_estudios_author', 
		'type'	=> 'text'
	),
	array( 
		'label'	=> 'Publish date', 
		'desc'	=> '', 
		'id'	=> 'post_estudios_publish_date', 
		'type'	=> 'text'
	),
   array( 
		'label'	=> 'Display Template', 
		'desc'	=> '', 
		'id'	=> 'post_estudios_template', 
		'type'	=> 'select',
        'default'=>0,
        'options'=>$post_temps,
	),
);


$fields_protocols=array(
	array( 
		'label'	=> 'Name', 
		'id'	=> 'post_protocol_name', 
		'type'	=> 'text'
	),	
	array( 
		'label'	=> 'Edad', 
		'id'	=> 'post_protocol_edad', 
		'type'	=> 'text'
	),
	array( 
		'label'	=> 'Razon', 
		'id'	=> 'post_protocol_cancer_type', 
		'type'	=> 'text'
	),
	array( 
		'label'	=> 'Diet', 
		'id'	=> 'post_protocol_diet', 
		'type'	=> 'editor'
	),
	array( 
		'label'	=> 'Exercise', 
		'id'	=> 'post_protocol_exercise', 
		'type'	=> 'editor'
	),
	array( 
		'label'	=> 'Spiritual', 
		'id'	=> 'post_protocol_spiritual', 
		'type'	=> 'editor'
	),
	array( 
		'label'	=> 'Como uso el incienso', 
		'id'	=> 'post_protocol_frankincense', 
		'type'	=> 'editor'
	),
	array( 
		'label'	=> 'Attach Files', 
		'id'	=> 'post_protocol_attachfiles', 
		'type'	=> 'image_serialize'
	),
);
	

$fields_anecdotas=array(
	array( 
		'label'	=> 'Name', 
		'id'	=> 'post_anecdota_name', 
		'type'	=> 'text'
	),
	array( 
		'label'	=> 'Cancer Type', 
		'id'	=> 'post_anecdota_cancer_type', 
		'type'	=> 'text'
	),
	array( 
		'label'	=> 'Content', 
		'id'	=> 'post_anecdota_content', 
		'type'	=> 'editor'
	),
	array( 
		'label'	=> 'Attach Files', 
		'id'	=> 'post_anecdota_attachfiles', 
		'type'	=> 'image_serialize'
	),
);
	

$fields_suplementos=array(
	array( 
		'label'	=> 'Price', 
		'id'	=> 'post_suplemento_price', 
		'type'	=> 'text'
	),
	array( 
		'label'	=> 'Link', 
		'id'	=> 'post_suplemento_link', 
		'type'	=> 'text'
	),
    array( 
		'label'	=> 'Link', 
		'id'	=> 'post_suplemento_image',
        'description'=>'200px x 200px', 
		'type'	=> 'image'
	),
	 array( 
		'label'	=> 'new field', 
		'id'	=> 'post_suplemento_newnew',
        'description'=>'200px x 200px', 
		'type'	=> 'textarea'
	),
);
		
		
$prefix = 'page_';
$fields_page = array(		
	array( 
		'label'	=> 'Header Slider', 
		'desc'	=> '', 
		'id'	=> $prefix.'header_slider', 
		'type'	=> 'select',
		'options' => $sliders,
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
	/*array( 
		'label'	=> 'Sub Title', 
		'desc'	=> '', 
		'id'	=> $prefix.'sub_title', 
		'type'	=> 'editor',
	),*/
	
);	
$prefix_ourteam = 'ourteam_';
$fields_ourteam=array(
   array( 
		'label'	=> 'Email', 
		'desc'	=> '', 
		'id'	=> $prefix_ourteam.'email', 
		'type'	=> 'email',
	),
	 array( 
		'label'	=> 'Phone', 
		'desc'	=> '', 
		'id'	=> $prefix_ourteam.'phone', 
		'type'	=> 'text',
	),
	array( 
		'label'	=> 'Twitter', 
		'desc'	=> '', 
		'id'	=> $prefix_ourteam.'twitter', 
		'type'	=> 'text',
	),
);

$prefix = 'post_';
$fields_manufacturer = array(	
	array( // Image ID field
		'label'	=> 'Link', // <label>
		'desc'	=> 'Link website.', // description
		'id'	=> $prefix.'manufacturer_link', // field id and name
		'type'	=> 'text' // type of field
	),
    
);

$fields_gallery=array(
	array( // Image ID field
		'label'	=> 'Text Description', // <label>
		'desc'	=> 'Text show on hover effect.', // description
		'id'	=> 'photogallery_text_desc', // field id and name
		'type'	=> 'text' // type of field
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
$post_meta_box = new custom_add_meta_box( 'post_meta_box', 'Post/Page options', $fields_page, array('page','post'), true );
$post_meta_box = new custom_add_meta_box( 'post_meta_box', 'Photo Gallery options', $fields_gallery, array('photogallery'), true );
$post_meta_box = new custom_add_meta_box( 'post_meta_box', 'Post/Page options', $fields_ourteam, array('ourteam'), true );
$post_meta_box = new custom_add_meta_box( 'post_meta_box', 'Options', $fields_manufacturer, array('member','product_feature') , true );

$post_meta_box = new custom_add_meta_box( 'post_meta_box', 'Post Options', $fields_post, array('post') , true );
$post_meta_box = new custom_add_meta_box( 'post_meta_box', 'Estudios Options', $fields_estudios, array('estudios') , true );
$post_meta_box = new custom_add_meta_box( 'post_meta_box', 'Protocols Infomation', $fields_protocols, array('protocols') , true );
$post_meta_box = new custom_add_meta_box( 'post_meta_box', 'Anecdotas Infomation', $fields_anecdotas, array('anecdotas') , true );
$post_meta_box = new custom_add_meta_box( 'post_meta_box', 'Suplementos Infomation1111', $fields_suplementos, array('suplementos') , true );
