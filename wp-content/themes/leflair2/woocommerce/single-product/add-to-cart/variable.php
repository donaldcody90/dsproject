<?php
/**
 * Variable product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/variable.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
$attribute_keys = array_keys( $attributes );
do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="variations_form cart" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->id ); ?>" data-product_variations="<?php echo htmlspecialchars( json_encode( $available_variations ) ) ?>">
	<?php do_action( 'woocommerce_before_variations_form' ); ?>
	<?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
		<p class="stock out-of-stock"><?php _e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>
	<?php else : ?>
        <!--<div id="variation_price">
            <div class="woocommerce-variation single_variation" style="">
                <div class="woocommerce-variation-price">
                    <span class="price"><span>Precio:</span><?php echo $product->get_price_html(); ?></span>
                </div>
            
            </div>
        </div>-->
        <div class="row">
		
			<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
			<div class="col-md-4">
			   <div id="variation_price" class="adssd" style="display:none;">
					<span class="price"><?php echo $product->get_price_html(); ?></span>   
				</div>
			</div>
			<br/><br/>
			<div class="col-md-4">
			<table class="table_custom_price">
				<tr>
						<td>
							<label for="Cantidad"><?php echo "Cantidad"; ?></label>
							<div class="price_container">
								<input type="button" onclick="decrementValue()" value="-" class="decrement"/>
								<input type="text" name="quantity" value="1" maxlength="2" max="10" size="1" id="number" readonly />
								<input type="button" onclick="incrementValue()" value="+" class="increment"/>
							</div>
						</td>
				</tr>
			</table>
			</div>
			
			<div class="col-md-4">
			<table class="variations" cellspacing="0">
				<tbody>
					<tr>
					<?php foreach ( $attributes as $attribute_name => $options ) : 
							  $attr_price="";  
							  foreach ($available_variations as $available_variation) {
								if (in_array("attribute_".$attribute_name, array_keys($available_variation['attributes']))) {
										$attr_price=$available_variation['display_price'];
								 
								}
							  }
							  //print_r($options);

					?>
						   
							<td class="">
								<label for="<?php echo sanitize_title( $attribute_name ); ?>"><?php echo wc_attribute_label( $attribute_name ); ?></label>
								<?php
									$selected = isset( $_REQUEST[ 'attribute_' . sanitize_title( $attribute_name ) ] ) ? wc_clean( $_REQUEST[ 'attribute_' . sanitize_title( $attribute_name ) ] ) : $product->get_variation_default_attribute( $attribute_name );
									//echo $selected;
									
									wc_dropdown_variation_attribute_options( array( 'options' => $options, 'attribute' => $attribute_name, 'product' => $product, 'selected' => $selected,'show_option_none'=>"Seleccionar" ) );
									//echo end( $attribute_keys ) === $attribute_name ? apply_filters( 'woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . __( 'Clear', 'woocommerce' ) . '</a>' ) : '';
								?>
							   <!--<select id="<?php echo esc_attr($attribute_name) ?>"  name="attribute_<?php echo esc_attr($attribute_name); ?>" data-attribute_name="attribute_<?php echo esc_attr( sanitize_title( $attribute_name ) ) ?>">
									<option attr-price="" value="">Seleccionar</option>
									<?php foreach($options as $op){ ?>
										<option attr-price="<?php echo $attr_price;?>" value="<?php echo $op ?>" <?php if($selected==$op){echo 'selected'; } ?>  class="attached enabled"><?php echo esc_html( apply_filters( 'woocommerce_variation_option_name', $op ) ) ?></option>    
									<?php } ?>
								  
								</select>-->
							</td>
					<?php endforeach;?>
					  
					</tr>
				</tbody>
			</table>
			</div>
        
        </div>
        <div class="row">
        
           	<div class="single_variation_wrap">
    			<?php
    				/**
    				 * woocommerce_before_single_variation Hook.
    				 */
    				do_action( 'woocommerce_before_single_variation' );
    
    				/**
    				 * woocommerce_single_variation hook. Used to output the cart button and placeholder for variation data.
    				 * @since 2.4.0
    				 * @hooked woocommerce_single_variation - 10 Empty div for variation data.
    				 * @hooked woocommerce_single_variation_add_to_cart_button - 20 Qty and cart button.
    				 */
    				do_action( 'woocommerce_single_variation' );
    
    				/**
    				 * woocommerce_after_single_variation Hook.
    				 */
    				do_action( 'woocommerce_after_single_variation' );
    			?>
    		</div>
        </div>
		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_variations_form' ); ?>
</form>

<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php do_action( 'woocommerce_product_thumbnails' ); ?>
