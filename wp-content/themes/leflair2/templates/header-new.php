<?php /*
<div class="top-header"> <!-- top header  -->
	<div class="container">
			<div class="row">
			     
				<div class="pull-right topbar col-xs-8 col-sm-8 ">
                    <div class="mobile_logo visible-xs hidden-sm">
                        <a class="logo_mobile" href="<?php echo get_home_url() ?>">
						   <img src="<?php echo get_theme_option('inter_logo','url'); ?>" alt="logo" />
						</a>
                    </div>
					<ul class="hidden-xs">
						<li><?php add_modal_login_link("","",false,get_theme_option('login_icon','url')); ?></li>
						<li class="cart_header">
							<?php
							global $woocommerce;
							$_cartQty = count($woocommerce->cart->get_cart() );
							?>
							<img src="<?php echo get_theme_option('cart_icon','url'); ?>" /><span><?php if($_cartQty>0){ echo "(".$_cartQty.")"; } ?></span>
							<div class="header_mini_cart">	
								<?php
									echo woocommerce_mini_cart();
								?>
							</div>
						</li>
					</ul>
					
				</div>
                	<div class="main-menu visible-xs hidden-sm">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						 	</button>
						 
							
								<div class="collapse navbar-collapse" role="navigation">
								  <?php
									if (has_nav_menu('primary_navigation')) :
									  wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
									endif;
								  ?>
								</div>
							
				</div>
			</div>
	</div>

</div> <!-- end top header -->
<?php */ ?>
<div class="new-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-sm-4 ">
				<div class="new_logo">
					<a href="<?php echo get_home_url() ?>">
						 <img src="<?php echo get_theme_option('new_logo','url'); ?>" alt="logo" />
					</a>
				 </div>
			</div>
			<div class="col-xs-8 col-sm-8">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									 
										
				<div class="collapse navbar-collapse" role="navigation">
					<?php
						if (has_nav_menu('primary_navigation')) :
							wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
						endif;
					?>
					<button>LOGIN</button>
					<a href="">
						<img src="" />
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php /*
<div class="slider-banner">
	<div class="header">
		<div class="container">
				<div class="row">
						
							 <?php if(is_front_page() || is_home()) { ?>
								<a class="logo" href="<?php echo get_home_url() ?>">
									<img src="<?php echo get_theme_option('logo','url'); ?>" alt="logo">
								</a>
							 <?php if(get_theme_option('sub_content') !=""){ ?>
								<div class="over_text">
									<?php echo get_theme_option('sub_content'); ?>
								</div>
							 <?php } ?>
							 <?php }else{ ?>
								<a class="inter_logo" href="<?php echo get_home_url() ?>">
								 <img src="<?php echo get_theme_option('inter_logo','url'); ?>" alt="logo">
								 </a>
							 <?php } ?>
						
						<div class="main-menu">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						 	</button>
						 
							
								<div class="collapse navbar-collapse" role="navigation">
								  <?php
									if (has_nav_menu('primary_navigation')) :
									  wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
									endif;
								  ?>
								</div>
							
						</div>
					
				</div>
		</div>
	</div>
	<?php
	 if(is_front_page() || is_home()) {
			echo do_shortcode('[layerslider id="1"]'); 	 			
		 }else{ 
			global $post;  
			if(isset($post->ID)) {
				$sub_title = get_post_meta($post->ID,'page_sub_title',true); 
				$image_id = get_post_meta($post->ID,'page_header_image',true); 
				$image = get_meta_banner($image_id);
			 }
			 
			if($image =="")
				$image= get_theme_option('inter_banner_default','url');
			?>
			<img class="hidden-mobile internal_banner" src="<?php echo $image; ?>" />
	<?php } ?>
</div>
*/ ?>