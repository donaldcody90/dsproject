<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_before_mini_cart' ); ?>

<form  method="post">
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
										<!--<p>
											<span>
												Color: C03 <br>
											</span>
										</p>-->
										
										<p class="box">
											<span class="middle">Qty: </span>
											<uiselect class="sm-mobile" list="item.quantities" selected="item" selected-property="quantity" action="updateItemQuantity">
												<div class="ui-select input-group">
													
													<!--<input type="text" class="form-control dropdown-toggle" value="" name="toanabc">-->
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
						
					<input type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Cập nhật giỏ hàng', 'woocommerce' ); ?>" />

				<?php do_action( 'woocommerce_cart_actions' ); ?>

				<?php wp_nonce_field( 'woocommerce-cart' ); ?>
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
		</form>

<?php do_action( 'woocommerce_after_mini_cart' ); ?>
