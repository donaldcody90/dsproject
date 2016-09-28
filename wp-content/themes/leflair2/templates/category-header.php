<?php
global $post;
$category = get_the_category();
if($category){
?>
<h1 class="title"><?php echo single_cat_title(); ?></h1>
<?php } ?>