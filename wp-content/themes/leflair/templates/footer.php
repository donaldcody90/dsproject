<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-2 hidden-xs">
				<img src="<?php echo get_theme_option('footer_logo', 'url');?>">
			</div>

			<div class="col-md-2 col-sm-4">
				<ul class="list-unstyled">
					<li class="list-title">Liên lạc</li>
					<li>
						<a href="tel:<?php echo get_theme_option('phone_number');?>">
							<i class="glyphicon glyphicon-earphone"></i> <?php echo get_theme_option('phone_number');?>
						</a>
					</li>
					<li>
						<a href="mailto:<?php echo get_theme_option('email');?>" class="lowercase">
							<i class="glyphicon glyphicon-envelope"></i> <?php echo get_theme_option('email');?>
						</a>
					</li>
				</ul>
			</div>

			<div class="col-md-2 col-sm-4">
				<?php
					$location= 'about_menu';
					if (has_nav_menu($location)) :
						$menu_obj= vf_get_menu_by_location( $location );
						wp_nav_menu(array('theme_location' => $location, 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'list-unstyled', 'items_wrap'=> '<ul id="%1$s" class="%2$s"><li class="list-title">'.esc_html($menu_obj->name).'</li>%3$s</ul>'));
					endif;
				?>
			</div>

			<div class="col-md-2 col-sm-4">
				<?php
					$location= 'support_menu';
					if (has_nav_menu($location)) :
						$menu_obj= vf_get_menu_by_location( $location );
						wp_nav_menu(array('theme_location' => $location, 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'list-unstyled', 'items_wrap'=> '<ul id="%1$s" class="%2$s"><li class="list-title">'.esc_html($menu_obj->name).'</li>%3$s</ul>'));
					endif;
				?>
			</div>

			<div class="col-md-3 col-sm-12">
				<ul class="list-inline">
					<li>
						<a href="<?php echo get_theme_option('social_link1');?>" target="_blank">
							<div class="footer-img footer-img-facebook" style="background-image: url(&quot;<?php echo get_theme_option('social_icon1', 'url');?>&quot;)"></div>
						</a>
					</li>
					<li>
						<a href="<?php echo get_theme_option('social_link2');?>" target="_blank">
							<div class="footer-img footer-img-instagram" style="background-image: url(&quot;<?php echo get_theme_option('social_icon2', 'url');?>&quot;)"></div>
						</a>
					</li>
					<li>
						<a href="<?php echo get_theme_option('social_link3');?>" target="_blank">
							<div class="footer-img footer-img-linkedin" style="background-image: url(&quot;<?php echo get_theme_option('social_icon3', 'url');?>&quot;)"></div>
						</a>
					</li>
					<li>
						<a href="<?php echo get_theme_option('social_link4');?>" target="_blank">
							<div class="footer-img footer-img-googleplus" style="background-image: url(&quot;<?php echo get_theme_option('social_icon4', 'url');?>&quot;)"></div>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row text-center" style="text-transform: none;">
		
			<p><?php echo get_theme_option('company_name');?> - <?php echo get_theme_option('contact_address');?></p>
			<br>
			<p><?php echo get_theme_option('license');?></p>
			
			<p><?php echo get_theme_option('copyright_text');?></p>
			
		</div>
	</div>
</div>

