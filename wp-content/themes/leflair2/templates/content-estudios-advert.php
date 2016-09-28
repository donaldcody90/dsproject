<div class="col-md-8">
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      	<p class="estudios_post_meta">
          <span>Auores:</span>
           <?php echo get_post_meta($post->ID,"post_estudios_author",true); ?>
            <span>, Publicado en</span>
             <?php echo get_post_meta($post->ID,"post_estudios_publish_date",true); ?>
       </p>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
   
	<div class="realted_post">
		<?php get_template_part('templates/related-post'); ?>
   </div>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
  
</div>
<div class="col-md-4">
	<?php get_template_part('templates/adv-box'); ?>
</div>