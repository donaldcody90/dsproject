<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();
// move to payment place
do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}
?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>

		
	 
		<div class="col2-set" >
			<div class="col-md-8">
				<div class="checkout_box">
			     	<h3 class="box_title">Método de Pago</h3>
					<div class="checkout_box_content">
						<?php 
							// Bill Payment method to here //
						  do_action( 'woocommerce_checkout_before_customer_details' ); 
						?>
						<?php if ( wc_coupons_enabled() ) { ?>
						<div class="custom_coupon_area">
                        <h4>¿Tienes un Cupón?</h4>
						<div class="coupon">
							<label for="coupon_code"><?php _e( 'Escriba el código promocional para ser aplicado en su compra', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Código promocional', 'woocommerce' ); ?>" /> <input type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'APLICAR ', 'woocommerce' ); ?>" />
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
                        </div>
					<?php } ?>
					</div>
				</div>
                <div id="customer_details" >
    				<?php //do_action( 'woocommerce_checkout_billing' ); ?>	
                    
                    <div class="checkout_box">
    					<h3 class="box_title">Datos de facturación y envío</h3>
    					<div class="checkout_box_content">
    				<?php do_action( 'woocommerce_checkout_billing' ); ?>
    					</div>
    				</div>
                    <?php do_action( 'woocommerce_checkout_shipping' ); ?>
                </div>
			</div>

			<div class="col-md-4">
				<div class="checkout_box">
				<h3 id="order_review_heading"><?php _e( 'Resumen de la Orden', 'woocommerce' ); ?></h3>
				<div class="checkout_box_content">
					<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
				
					<div id="order_review" class="woocommerce-checkout-review-order">
						<?php do_action( 'woocommerce_checkout_order_review' ); ?>
					</div>
					<input type="submit" class="button button_ogrange" name="woocommerce_checkout_place_order" id="custom_place_order" value="Place your order" data-value="Place your order" />
                    <p class="notice_order"><span >By placing your order, you agree to Etapa-1.com's <br />
                    <a target="_blank" href="<?php echo get_permalink(778) ?>">privacy notice</a> and <a target="_blank" href="<?php echo get_permalink(780) ?>">conditions of use.</a>
                    </span></p>
				</div>
				</div>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>

	

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
