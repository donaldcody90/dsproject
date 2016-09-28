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
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
</div>
