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
<div class="ui simple sidebar push menu shopping-cart ng-scope ng-isolate-scope right">
	<div class="wrapper">
		<div class="header text-center">
			<i class="leflair i-leflair-close"></i>
			Giỏ Hàng
		</div>
		
		<?php if ( ! WC()->cart->is_empty() ) : ?>
			<div class="content">
				<div class="cart-item ng-scope">
					<div class="row">
			<?php
				foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
					$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

					if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
						$product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
						$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
						$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
						$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
						?>
						<div class="cart-item ng-scope">
							<div class="row">
								<div class="col-xs-4">
									<?php if ( ! $_product->is_visible() ) : ?>
										<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ) . '&nbsp;'; ?>
									<?php else : ?>
										<a href="<?php echo esc_url( $product_permalink ); ?>">
											<?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ) . '&nbsp;'; ?>
										</a>
									<?php endif; ?>
								</div>
								<div class="col-xs-8 no-left-padding">
									<p class="ng-binding">
										<?php echo $product_name; ?>
									</p>
									<div class="col-xs-6 text-right">
									<p>
										<?php
										echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
											'<a href="%s" class="remove" title="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
											esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
											__( 'Remove this item', 'woocommerce' ),
											esc_attr( $product_id ),
											esc_attr( $_product->get_sku() )
										), $cart_item_key );
										?>
									</p>
									</div>
									<?php echo WC()->cart->get_item_data( $cart_item ); ?>

									<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?>
								</div>
							</div>
						</div>
						<?php
					}
				}
			?>

		<?php else : ?>

			<div class="content empty text-center ng-hide">
				<div class="wrapper">
					<i class="leflair i-leflair-sadness"></i>

					<p class="description">				
						<?php _e( 'Giỏ hàng của bạn còn trống', 'woocommerce' ); ?>
					</p>

					<div class="apart-sm">
						<button type="button" class="btn btn-primary btn-order">Tiếp tục mua sắm!</button>
					</div>
				</div>
			</div>

		<?php endif; ?>
				</div>
			</div>
		</div><!-- end product list -->

		<?php if ( ! WC()->cart->is_empty() ) : ?>

			<p class="total"><strong><?php _e( 'Subtotal', 'woocommerce' ); ?>:</strong> <?php echo WC()->cart->get_cart_subtotal(); ?></p>

			<?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>

			<div class="text-center">
				<div class="apart-sm">
					<?php/*<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="button wc-forward"><?php _e( 'View Cart', 'woocommerce' ); ?></a>*/?>
					<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="button checkout wc-forward"><?php _e( 'Checkout', 'woocommerce' ); ?></a>
				</div>
			</div>

		<?php endif; ?>
	</div>
</div>
<?php do_action( 'woocommerce_after_mini_cart' ); ?>
