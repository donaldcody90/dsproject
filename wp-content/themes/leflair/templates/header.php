
		
		<?php //$args= array(); echo woocommerce_mini_cart(); ?>
		<div class="ui simple sidebar push menu shopping-cart right">
			<div class="wrapper">
				<div class="header text-center">
					<i class="leflair i-leflair-close mini-cart-cancel"></i>
					Giỏ Hàng
				</div>
				
				<?php if ( ! WC()->cart->is_empty() ) : ?>
				<div class="content">
				<?php
				foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
					$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

					if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
						$product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
						$thumbnail         = apply_filters( '', $_product->get_image(), $cart_item, $cart_item_key );
						$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
						$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
						?>
				
					<div class="cart-item">
						<div class="row">
							<div class="col-xs-4">
								<?php if ( ! $_product->is_visible() ) : ?>
									<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ); ?>
								<?php else : ?>
									<a href="<?php echo esc_url( $product_permalink ); ?>">
										<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ); ?>
									</a>
								<?php endif; ?>
							</div>
							<div class="col-xs-8 no-left-padding">
								<p class="ng-binding">
									<?php if ( ! $_product->is_visible() ) : ?>
										<?php echo $product_name; ?>
									<?php else : ?>
										<a href="<?php echo esc_url( $product_permalink ); ?>">
											<?php echo $product_name; ?>
										</a>
									<?php endif; ?>	
								</p>

								<div class="row">
									<div class="col-xs-6">
										<p>
											<span class="ng-binding">
												Color: C03 <br>
											</span>
										</p>
										<p class="box">
											<span class="middle">Qty: </span>
											<uiselect class="sm-mobile" list="item.quantities" selected="item" selected-property="quantity" action="updateItemQuantity">
												<div class="ui-select input-group">
													<!--<input type="text" class="form-control dropdown-toggle" value="" >-->
													<?php
														if ( $_product->is_sold_individually() ) {
															$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
														} else {
															$product_quantity = woocommerce_quantity_input( array(
																'input_name'  => "cart[{$cart_item_key}][qty]",
																'input_value' => $cart_item['quantity'],
																'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
																'min_value'   => '0'
															), $_product, false );
														}

														echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
													?>
												</div>
											</uiselect>
										</p>
									</div>

									<div class="col-xs-6 text-right">
										<p>
											<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<b class="actual-price" style="float: right">' . sprintf( '%s', $product_price ) . '</b>', $cart_item, $cart_item_key ); ?>
											<br>
											<?php
											echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
												'<a href="%s">Bỏ sản phẩm</a>',
												esc_url( WC()->cart->get_remove_url( $cart_item_key ) )
											), $cart_item_key );
											?>
										</p>
									</div>
										
								</div>
								
							</div>
						</div>
					</div>
					
					<?php
						}
					}
				?>

					<div class="stats cart-item">
						<p class="subtotal big clearfix">
							<span class="pull-left">Tổng tiền:</span>
							<b class="number pull-right"><?php echo WC()->cart->get_cart_subtotal(); ?></b>
						</p>
						<p class="subtotal clearfix">
							<span class="pull-left">Tiết kiệm:</span>
							<span class="number pull-right"><?php echo leflair_wc_discount_total();?></span>
						</p>
						<hr>

						<div class="text-center">
							<div class="apart-sm">
								<p class="text-danger">
									
								</p>
								<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>">
									<button type="button" class="btn btn-primary btn-order">Tiến hành đặt hàng</button>
								</a>
							</div>

							<p><a href="" class="mini-cart-cancel"> &lt; Tiếp tục mua sắm</a></p>
						</div>
					</div>
				</div>
						

				<?php else : ?>
				
				<div class="content empty text-center">
					<div class="wrapper">
						<i class="leflair i-leflair-sadness"></i>

						<p class="description">				
							Giỏ hàng của bạn còn trống
						</p>

						<div class="apart-sm">
							<button type="button" class="btn btn-primary btn-order mini-cart-cancel">Tiếp tục mua sắm!</button>
						</div>
					</div>
				</div>
				
				<?php endif; ?>
				
			</div>
		</div>
		
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

				<li class="dropdown">
					<a class="dropdown-toggle">
						Language:&nbsp;&nbsp;VN<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li class="ng-scope">
							<a href="" class="ng-binding">ENG</a>
						</li>
						<li class="ng-scope vf-hide">
							<a href="" class="ng-binding">VN</a>
						</li>
					</ul>
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

									<li class="dropdown nav-language">
										<a class="dropdown-toggle">
											Language:&nbsp;&nbsp;VN<span class="caret"></span>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li class="ng-scope">
												<a href="" class="ng-binding">ENG</a>
											</li>
											<li class="ng-scope vf-hide">
												<a href="" class="ng-binding">VN</a>
											</li>
										</ul>
									</li>

									<li class="ng-scope">
										<a href="#">SỐ DƯ: <span class="trinidad">0</span></a>
									</li>
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