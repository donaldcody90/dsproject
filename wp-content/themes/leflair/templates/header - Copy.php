
		<?php $args= array(); echo woocommerce_mini_cart(); ?>
		<div class="ui simple sidebar push menu left vertical">
			<ul class="sidebar-nav">
				<li class="sidebar-brand">
					<a href="">
						<img src="<?php echo site_url('wp-content/themes/leflair/assets/img/leflair-black-logo.svg');?>">
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('my-account');?>">Thông Tin</a>
				</li>
				<li>
					<a href="<?php echo site_url('orders');?>">Đơn Hàng</a>
				</li>
				<li>
					<a href="">Mời bạn bè</a>
				</li>

				<li>
					<a href="<?php echo esc_url( wc_get_account_endpoint_url( 'customer-logout' ) ); ?>">Thoát ra</a>
				</li>
			</ul>

		</div>
		
		
		<div class="pusher">
			<header class="ng-scope">
				<section class="ng-scope">
					<nav class="navbar navbar-default navbar-fixed-top">
						<div class="container">

							<div class="navbar-header">
								<a type="button" class="left menu collapsed visible-xs">
									<i class="leflair i-leflair-menu"></i>
								</a>
								<a class="mobile-cart-icon">
									<i class="leflair i-leflair-bag"></i>
								</a>

								<div class="visible-xs tel vf-hide">
									<a href="tel:<?php echo get_theme_option('phone_number');?>"><i class="leflair i-leflair-telephone"></i> <?php echo get_theme_option('phone_number');?></a>
								</div>
								
								<a class="nav-logo" href="<?php echo site_url(); ?>" style="background-image: url(<?php echo get_theme_option('header_logo', 'url'); ?>);"></a>
								
								<a class="nav-logo campaign-logo vf-hide" href="/" style="background-image: url()">
								</a>
							</div>

							
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								
								<ul class="nav navbar-nav pull-right nav-dropdown">

									<li class="dropdown" dropdown="">
										<a class="dropdown-toggle">
											Tài Khoản
											<span class="caret"></span>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="<?php echo site_url('my-account');?>">Thông Tin</a></li>
											<li><a href="<?php echo site_url('orders');?>">Đơn Hàng</a></li>
											<li><a href="<?php echo esc_url( wc_get_account_endpoint_url( 'customer-logout' ) ); ?>">Thoát ra</a></li>
										</ul>
									</li>
									<li class="ng-scope">
										<a id="nav_cart">Giỏ: <span class="trinidad"> <?php echo count( WC()->cart->get_cart() );?></span></a>
									</li>
								</ul>
							</div>
						</div>
					</nav>


				
				</section>
			</header>