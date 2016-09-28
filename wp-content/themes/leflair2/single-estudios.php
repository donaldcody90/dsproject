<?php 
global $post;
$post_template=get_post_meta($post->ID,"post_estudios_template",1);
if($post_template==1 || empty($post_template)){
    get_template_part('templates/content', 'estudios');
}else{
    get_template_part('templates/content', 'estudios-advert');
} 

?>