<?php
global $post;
$hidden_title=get_post_meta($post->ID,'page_hidden_title',true);
if(!is_front_page() && !is_home()) {
   if(!$hidden_title){ 
    ?>
<div class="page-header">
  <h1>
    <?php echo roots_title(); ?>
  </h1>
</div>
<?php
}
  if (post_password_required() ) { 
  global $post;
  ?>
	<h3 class="title hidden-xs hidden-sm">Protected : <span><?php echo $post->post_title; ?></span></h3> 
  <?php
  }
 }
?>
