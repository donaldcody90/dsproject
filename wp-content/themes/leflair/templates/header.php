<div class="header">
	<div class="container">
		<div class="logo">
			<a href="<?php echo site_url();?>">
				<img src="<?php echo get_theme_option('header_logo','url'); ?>" width="90px" height="50px"/>
			</a>
		</div>
		<div class="main-menu">
			<span class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"><i class="glyphicon glyphicon-menu-hamburger"></i></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</span>
			
			<div class="collapse navbar-collapse" role="navigation">
			  <?php
				if (has_nav_menu('primary_navigation')) :
				  wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
				endif;
			  ?>
			</div>
			<div class="vf-hide" role="navigation">
			  <?php
				if (has_nav_menu('primary_navigation')) :
				    wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
				endif;
			  ?>
			</div>
		</div>
	</div>
</div>

<?php
if(is_front_page() || is_home()) { ?>

	<?php if(get_theme_option('site_notice')){ ?>
	<div class="custom_notice">
		<?php echo get_theme_option('site_notice'); ?>
	</div>
	<?php } ?>
	
	<div class="home_slider">
	<?php
	echo do_shortcode('[layerslider id="1"]'); 	 			
	?>
	</div>
<?php 
}
?>
