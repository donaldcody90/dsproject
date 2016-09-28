<?php 
global $post;
$post_template=get_post_meta($post->ID,"post_view_template",1);

if($post_template==1 || empty($post_template)){
    get_template_part('templates/content', 'single');
}else{
    get_template_part('templates/content', 'advert');
} 

?>