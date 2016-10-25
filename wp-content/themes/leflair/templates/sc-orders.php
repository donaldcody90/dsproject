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

$args = array(
  'post_type' => 'shop_order',
  'post_status' => 'publish',
  'meta_key' => '_customer_user',
  'posts_per_page' => '-1'
);
$my_query = new WP_Query($args);
$customer_orders = $my_query->posts;
//echo '<pre>'; print_r($customer_orders); echo '</pre>';
$d=strtotime("-1 Day");
$yesterday_date= date("Y-m-d h:i:s", $d);



?>


<section>
			<form method="post" action="">

		<h3><?php echo apply_filters( 'woocommerce_my_account_edit_address_title', $page_title ); ?></h3>

		<?php do_action( "woocommerce_before_edit_address_form_{$load_address}" ); ?>

		<?php foreach ( $address as $key => $field ) : ?>

			<?php woocommerce_form_field( $key, $field, ! empty( $_POST[ $key ] ) ? wc_clean( $_POST[ $key ] ) : $field['value'] ); ?>

		<?php endforeach; ?>

		<?php do_action( "woocommerce_after_edit_address_form_{$load_address}" ); ?>

		<p>
			<input type="submit" class="button" name="save_address" value="<?php esc_attr_e( 'Save Address', 'woocommerce' ); ?>" />
			<?php wp_nonce_field( 'woocommerce-edit_address' ); ?>
			<input type="hidden" name="action" value="edit_address" />
		</p>

	</form>
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
							<li class="new-orders-button active"><a class="">Đơn hàng mới</a></li>
							<li class="old-orders-button"><a>Đơn hàng cũ</a></li>
						</ul>
						<?php if($customer_orders == ''){
							echo '<div class="alert alert-info">
									Bạn chưa có đơn hàng nào.
								</div>';
						}else{ ?>

						<!-- Đơn hàng mới -->
						
							<div class="order-list new-orders">
							<?php foreach($customer_orders as $customer_order){ 
								$order      = wc_get_order( $customer_order );
								$item_count = $order->get_item_count();
								if($order->post_date >= $yesterday_date){ ?>
								<div class="product-row ng-scope">
									<div class="table-responsive">
										<table class="table">
											<tbody>
												<tr>
													<th>Mã đơn hàng</th>
													<th>Ngày đặt hàng</th>
													<th>Tổng tiền</th>
													<th>Tình trạng</th>
												</tr>
												<tr>
													<td class="">
														<?php echo _x( '#', 'hash before order number', 'woocommerce' ) . $order->get_order_number(); ?>
													</td>
													<td class="">
														<time datetime="<?php echo date( 'Y-m-d', strtotime( $order->order_date ) ); ?>" title="<?php echo esc_attr( strtotime( $order->order_date ) ); ?>"><?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?></time>
													</td>
													<td class="">
														<?php echo $order->get_formatted_order_total(); ?>
													</td>
													<td class="ng-binding">
														<?php 
														if(wc_get_order_status_name( $order->get_status() ) == "completed"){
															echo 'đã hoàn thành';
														}if(wc_get_order_status_name( $order->get_status() ) == "processing"){
															echo 'đang xử lý';
														}
														?>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- ngRepeat: product in order.products -->
									<div class="row ng-scope">
										<div class="col-lg-8">
											<?php foreach($order->get_items() as $item_id => $item){ ?>
											<div class="row ng-scope">
												<div class="row checkout-cart order-history-item" style="padding: 0 .5em;">
													<div class="col-md-8">
														<p class="ng-binding">
															<?php echo $item['qty'];?>x
															<span class="product ng-binding"><?php echo $item['name'];?></span>
														</p>
													</div>
													<div class="col-md-4">
														<p>
															<span class="total ng-binding"><?php echo $order->get_formatted_line_subtotal( $item ); ?></span>
														</p>
													</div>
												</div>
											</div>
											<!-- end ngRepeat: product in order.products -->
											<?php } ?>
										</div>
										<div class="col-lg-4 ng-scope">
											<a href="<?php echo esc_url( $order->get_view_order_url() ); ?>">
												<div class="btn btn-default btn-product btn-white" style="margin: 0;">Xem chi tiết</div>
											</a>
										</div>
									</div>
									<!-- end ngRepeat: product in order.products -->
								</div>
							<?php } } ?>
							</div>
							
							
							<!-- Đơn hàng cũ -->
							
							<div class="order-list old-orders ng-hide">
							<?php foreach($customer_orders as $customer_order){ 
								$order      = wc_get_order( $customer_order );
								$item_count = $order->get_item_count();
								if($order->post_date < $yesterday_date){
								?>
								<div class="product-row ng-scope">
									<div class="table-responsive">
										<table class="table">
											<tbody>
												<tr>
													<th>Mã đơn hàng</th>
													<th>Ngày đặt hàng</th>
													<th>Tổng tiền</th>
													<th>Tình trạng</th>
												</tr>
												<tr>
													<td class="">
														<?php echo _x( '#', 'hash before order number', 'woocommerce' ) . $order->get_order_number(); ?>
													</td>
													<td class="">
														<time datetime="<?php echo date( 'Y-m-d', strtotime( $order->order_date ) ); ?>" title="<?php echo esc_attr( strtotime( $order->order_date ) ); ?>"><?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?></time>
													</td>
													<td class="">
														<?php echo $order->get_formatted_order_total(); ?>
													</td>
													<td class="ng-binding">
														<?php
														if(wc_get_order_status_name( $order->get_status() ) == "Completed"){
															echo 'Đã hoàn thành';
														}if(wc_get_order_status_name( $order->get_status() ) == "Processing"){
															echo 'Đang xử lý';
														}
														?>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- ngRepeat: product in order.products -->
									<div class="row ng-scope">
										<div class="col-lg-8">
											<?php foreach($order->get_items() as $item_id => $item){ ?>
											<div class="row ng-scope">
												<div class="row checkout-cart order-history-item" style="padding: 0 .5em;">
													<div class="col-md-8">
														<p class="ng-binding">
															<?php echo $item['qty'];?>x
															<span class="product ng-binding"><?php echo $item['name'];?></span>
														</p>
													</div>
													<div class="col-md-4">
														<p>
															<span class="total ng-binding"><?php echo $order->get_formatted_line_subtotal( $item ); ?></span>
														</p>
													</div>
												</div>
											</div>
											<!-- end ngRepeat: product in order.products -->
											<?php } ?>
										</div>
										<div class="col-lg-4 ng-scope">
											
												<div class="btn btn-default btn-product btn-white order-detail-button" style="margin: 0;">Xem chi tiết</div>
											
										</div>
									</div>
									<!-- end ngRepeat: product in order.products -->
								</div>
							<?php } } ?>
							</div>
						<?php } ?>
						
					</div>

				</div>
			</div>

		</div>
	</div>
	</section>
	</section>

</section>

<?php wc_get_template('order/order-details-popup.php'); ?>