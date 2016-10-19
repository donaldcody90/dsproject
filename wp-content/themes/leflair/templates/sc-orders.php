<?php 
$user = wp_get_current_user(); 
$customer_id = get_current_user_id();

if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) {
	$get_addresses = apply_filters( 'woocommerce_my_account_get_addresses', array(
		'billing' => __( 'Billing Address', 'woocommerce' ),
		'shipping' => __( 'Shipping Address', 'woocommerce' )
	), $customer_id );
} else {
	$get_addresses = apply_filters( 'woocommerce_my_account_get_addresses', array(
		'billing' =>  __( 'Billing Address', 'woocommerce' )
	), $customer_id );
}

$oldcol = 1;
$col    = 1;
?>


<section>
			
	<!-- uiView:  -->
	<section class="ng-scope">
	<section class="container account ng-scope">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<div class="col-xs-12 account-inner">
				<div class="row">
					<div class="col-lg-12 account-nav-row">
						<ul class="list-inline account-nav">
							<li><a href="<?php echo site_url('my-account');?>">Thông tin tài khoản</a></li>
							<li class="active"><a href="<?php echo site_url('orders');?>">Lịch sử đơn hàng</a></li>
							
						</ul>
					</div>
					<div class="col-lg-10 col-lg-offset-1">
						<ul class="nav nav-pills nav-orders">
							<li class="active"><a href="" class="">Đơn hàng mới</a></li>
							<li><a href="">Đơn hàng cũ</a></li>
						</ul>

						<div class="alert alert-info">
							Bạn chưa có đơn hàng nào.
						</div>

						<!-- ngRepeat: order in orders | filter: orderFilter -->

					</div>

				</div>
			</div>

		</div>
	</div>
	</section>
	</section>

</section>