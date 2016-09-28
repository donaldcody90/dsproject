<?php
/**
 * Single Product Share
 *
 * Sharing plugins can hook into here or you can add your own code directly.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/share.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $wpdiscuz,$current_user;
$commentsCount = $wpdiscuz->dbManager->getCommentsCount(623);
?>
<div class="product_share">
<!--<p><a onclick="show_product_tab('product-tab-2_tab','tab-product-tab-2')"><span class="green">Ver <?php //echo $commentsCount; ?> platicas</span></a></p>-->
<?php  get_template_part('templates/sharing-box'); ?>
 
</div>
<?php do_action( 'woocommerce_share' ); // Sharing plugins can hook into here ?>