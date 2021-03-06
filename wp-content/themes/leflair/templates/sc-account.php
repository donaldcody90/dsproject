


<?php 
$user = wp_get_current_user(); 
$customer_id = get_current_user_id();

if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) {
	$get_addresses = apply_filters( 'woocommerce_my_account_get_addresses', array(
		'billing' => __( 'Địa chỉ trên hoá đơn', 'woocommerce' ),
		'shipping' => __( 'Địa chỉ giao hàng', 'woocommerce' )
	), $customer_id );
} else {
	$get_addresses = apply_filters( 'woocommerce_my_account_get_addresses', array(
		'billing' =>  __( 'Địa chỉ trên hoá đơn', 'woocommerce' )
	), $customer_id );
}

$oldcol = 1;
$col    = 1;
?>


<section>
	
	<!-- uiView:  -->
	<section class="ng-scope">
	<section class="container account">
	<!--<form name="userForm" class="ng-pristine-email-min-max-pattern">-->
		<fieldset>
		<?php
$user_name = 'wp_admin';
$user = get_user_by('id',1 );
//var_dump($user);
?>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="col-xs-12 account-inner">
						<div class="row">
							<div class="col-md-12 account-nav-row">
								<ul class="list-inline account-nav">
									<li class="active"><a href="<?php echo site_url('my-account');?>">Thông tin tài khoản</a></li>
									<li><a href="<?php echo site_url('orders');?>">Lịch sử đơn hàng</a></li>
								</ul>
							</div>
							
							<div class="col-md-10 col-md-offset-1">
								<!-- Account Information -->
								<div>
									<h3>Thông tin tài khoản</h3>

									<div class="account-info-content">
										<h4>Thông tin cá nhân</h4>
										<!-- Account Information: View Mode -->
										<div class="edit-account-info">
											<p class="ng-binding"> </p>
											<p class="ng-binding"><?php echo esc_attr( $user->user_email ); ?></p>
											<p><a class="underline-link">Sửa thông tin</a></p>
										</div>

										<!-- Account Information: Edit Mode -->
										<form class="woocommerce-EditAccountForm" action="" method="post">
											<div class="row-email-min-max-pattern form-account-info vf-hide">
												<div class="col-xs-12 form-group">
													<div class="row">
														<div class="col-md-6 form-group">
															<p>
																<label for="">Họ</label>
															</p>
															<input name="account_last_name" type="text" id="account_last_name" class="form-control account-input" value="<?php echo esc_attr( $user->last_name ); ?>" required="">
															<p class="text text-danger vf-hide">Vui lòng điền họ của bạn</p>	
														</div>
														<div class="col-md-6 form-group">
															<p>
																<label for="">Tên</label>
															</p>
															<input name="account_first_name" type="text" id="account_first_name" class="form-control account-input" value="<?php echo esc_attr( $user->first_name ); ?>" required="">

															<p class="text text-danger vf-hide">Vui lòng điền tên của bạn</p>	
														</div>
													</div>
												</div>

												<div class="col-xs-12 form-group">
													<div class="row">
														<div class="col-md-6 form-group">
																<p>
																	<label for="">Địa chỉ email</label>
																</p>
																	<input name="account_email" type="email" id="account_email" class="form-control account-input-email" value="<?php echo esc_attr( $user->user_email ); ?>" required="">
																
																<p class="text text-danger vf-hide">Vui lòng điền địa chỉ email của bạn</p>
														</div>
														<div class="col-md-6 form-group">
															<p>
																<label for="">Giới tính</label>
															</p>

															<div class="ui-select-container ui-select-bootstrap dropdown direction-up open" name="gender">
																<div class="ui-select-match">
																	<span tabindex="-1" class="btn btn-default form-control ui-select-toggle" style="outline: 0;">
																		<span class="ui-select-placeholder text-muted"></span> 
																		<span class="ui-select-match-text pull-left">
																			<span class="ng-binding"></span>
																		</span>
																		<i class="caret pull-right"></i> 
																		<a style="margin-right: 10px" class="btn btn-xs btn-link pull-right vf-hide">
																			<i class="glyphicon glyphicon-remove"></i>
																		</a>
																	</span>
																</div>
																<input type="text" tabindex="-1" class="form-control ui-select-search vf-hide" placeholder="">
																<ul class="ui-select-choices ui-select-choices-content ui-select-dropdown dropdown-menu">
																	<li class="ui-select-choices-group" id="ui-select-choices-0">
																		<div class="divider vf-hide"></div>
																		<div class="ui-select-choices-group-label dropdown-header vf-hide"></div>
																		
																		<div id="ui-select-choices-row-14-0" class="ui-select-choices-row">
																			<a href="" class="ui-select-choices-row-inner">
																				<span class="ng-binding">Nữ</span>
																			</a>
																		</div>
																		
																		<div id="ui-select-choices-row-14-1" class="ui-select-choices-row active">
																			<a href="" class="ui-select-choices-row-inner">
																				<span class="ng-binding">Nam</span>
																			</a>
																		</div>
																	</li>
																</ul>
																<input class="ui-select-focusser ui-select-offscreen" type="text" id="focusser-0">
															</div>
														</div>
													</div>
												</div>
												<div class="col-xs-12 form-group">
													<div class="row">
														<div class="col-xs-12">
															<p>
																<label for="">Ngày sinh</label>
															</p>
															<div class="row">
																<div class="col-md-4 form-group">
																	<p>
																		<input type="number" name="day" class="form-control account-input-min-max-pattern" placeholder="Ngày" min="0" max="30">
																	</p>
																	<p class="text text-danger vf-hide">Ngày sinh không hợp lệ</p>
																</div>
																<div class="col-md-4 form-group">
																	<div class="ui-select-container ui-select-bootstrap dropdown" name="month">
																		<div class="ui-select-match" placeholder="Tháng">
																			<span tabindex="-1" class="btn btn-default form-control ui-select-toggle" style="outline: 0;">
																				<span class="ui-select-placeholder text-muted">Tháng</span> <span class="ui-select-match-text pull-left vf-hide"><span class="ng-binding"></span></span> <i class="caret pull-right"></i> <a style="margin-right: 10px" class="btn btn-xs btn-link pull-right vf-hide">
																				<i class="glyphicon glyphicon-remove"></i>
																				</a>
																			</span>
																		</div>
																	<input type="text" class="form-control ui-select-search vf-hide" placeholder="Tháng">
																	<ul class="ui-select-choices ui-select-choices-content ui-select-dropdown dropdown-menu">
																		<li class="ui-select-choices-group" id="ui-select-choices-1">
																			<div class="divider vf-hide"></div>
																			<div class="ui-select-choices-group-label dropdown-header vf-hide"></div>
																		</li>
																	</ul>
																	<input class="ui-select-focusser ui-select-offscreen" type="text" id="focusser-1"></div>
																	<p class="text text-danger vf-hide">Tháng sinh không hợp lệ</p>
																</div>
																<div class="col-md-4 form-group">
																	<p>
																		<input name="year" type="number" class="form-control account-input-pattern" placeholder="Năm">
																	</p>
																	<p class="text text-danger vf-hide">Năm sinh không hợp lệ</p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xs-12 form-group alert alert-danger vf-hide">
													
												</div>
												<div class="col-xs-12 form-group">
													<input type="submit" name="save_account_details" class="btn btn-primary btn-java btn-lg" value="Lưu lại">
													<div class="btn btn-default btn-lg account-info-back">Trở lại</div>
												</div>
												<input type="hidden" id="_wpnonce" name="_wpnonce" value="c1a94fa7b2">
												<input type="hidden" name="_wp_http_referer" value="/leflair/my-account/edit-account/">		
												
												<input type="hidden" name="action" value="save_account_details">
											</div>
										</form>
										

										<div class="row address-details">
										<?php foreach ( $get_addresses as $name => $title ) : ?>
											<div class="col-md-6">
												<h4><?php echo $title; ?></h4>
												<p class="ng-binding">
													<?php
														$address = apply_filters( 'woocommerce_my_account_my_address_formatted_address', array(
															'first_name'  => get_user_meta( $customer_id, $name . '_first_name', true ),
															'last_name'   => get_user_meta( $customer_id, $name . '_last_name', true ),
															'company'     => get_user_meta( $customer_id, $name . '_company', true ),
															'address_1'   => get_user_meta( $customer_id, $name . '_address_1', true ),
															'address_2'   => get_user_meta( $customer_id, $name . '_address_2', true ),
															'city'        => get_user_meta( $customer_id, $name . '_city', true ),
															'state'       => get_user_meta( $customer_id, $name . '_state', true ),
															'postcode'    => get_user_meta( $customer_id, $name . '_postcode', true ),
															'country'     => get_user_meta( $customer_id, $name . '_country', true )
														), $customer_id, $name );

														$formatted_address = WC()->countries->get_formatted_address( $address );

														if ( ! $formatted_address )
															_e( 'Bạn chưa thiết lập địa chỉ.<br><br><br><br>', 'woocommerce' );
														else
															echo $formatted_address;
													?>
												</p>
												<p><a class="underline-link <?php echo 'edit-'.$name.'-address'; ?>">Sửa thông tin</a></p>
											</div>
										<?php endforeach; ?>
										</div>

										<!-- ngIf: isEdit && !editInformation -->
										<form method="post" action="">
										<div class="row change-address-form vf-hide">
											<div class="col-md-offset-2 col-md-8">
												<h4>
													<!-- ngSwitchWhen: shipping -->
													<div class="ng-scope change-address-form-title">22222222222</div>
													<!-- end ngSwitchWhen: -->
													<!-- ngSwitchWhen: billing -->
												</h4>
											<ui-address-form class="ng-isolate-scope">
												<div class="row-required-pattern">
													<div class="col-xs-12">
														<div class="row">
															<div class="col-xs-6 form-group">
																<input name="billing_last_name" type="text" class="form-control account-input-required" placeholder="Họ" value="<?php echo get_user_meta( $customer_id, 'billing_last_name', true );?>">
																<p class="text text-danger vf-hide">Họ là thông tin bắt buộc</p>
															</div>
															<div class="col-xs-6 form-group">
																<input name="billing_first_name" type="text" class="form-control account-input-required" placeholder="Tên" value="<?php echo get_user_meta( $customer_id, 'billing_first_name', true );?>">
																<p class="text text-danger vf-hide">Tên là thông tin bắt buộc</p>
															</div>
															<div class="form-group"></div>
														</div>

														<div class="form-group company-name vf-hide">
															<input name="billing_company" type="text" class="form-control account-input" placeholder="Công ty (không bắt buộc)" value="<?php echo get_user_meta( $customer_id, 'billing_company', true );?>">
														</div>
														<div class="form-group taxcode vf-hide">
															<input name="taxCode" type="text" class="form-control account-input-pattern" placeholder="Mã số thuế (không bắt buộc)" value="<?php echo get_user_meta( $customer_id, 'billing_first_name', true );?>">
															<p class="text text-danger vf-hide">Mã số thuế không hợp lệ</p>
														</div>
														<div class="form-group row">
															<div class="col-xs-12">
																<input type="text" name="billing_address_1" class="form-control account-input-required" placeholder="Địa chỉ" value="<?php echo get_user_meta( $customer_id, 'billing_address_1', true );?>">
																<p class="text text-danger vf-hide">Thông tin địa chỉ bắt buộc.</p>
															</div>
														</div>

														<!-- <div class="form-group">
															<input type="text" class="form-control account-input" placeholder="Thông tin thêm địa chị (không bắt buộc)" autocomplete="off">
														</div> -->
														<div class="row">
															<div class="col-sm-6 form-group">
																<div class="ui-select-container ui-select-bootstrap dropdown-required" name="city" theme="bootstrap">
																	<div class="ui-select-match" placeholder="Tỉnh/Thành Phố">
																		<span tabindex="-1" class="btn btn-default form-control ui-select-toggle" style="outline: 0;">
																			<span class="ui-select-placeholder text-muted vf-hide">Tỉnh/Thành Phố</span> <span class="ui-select-match-text pull-left">
																			<span class="ng-binding"><?php echo get_user_meta( $customer_id, 'billing_city', true );?></span></span> <i class="caret pull-right"></i> <a style="margin-right: 10px" class="btn btn-xs btn-link pull-right vf-hide"><i class="glyphicon glyphicon-remove"></i></a>
																		</span>
																	</div>
																	<input name="billing_city" type="text" tabindex="-1" class="form-control ui-select-search vf-hide" placeholder="Tỉnh/Thành Phố">
																		<ul class="ui-select-choices ui-select-choices-content ui-select-dropdown dropdown-menu">
																			<li class="ui-select-choices-group" id="ui-select-choices-8">
																				<div class="divider vf-hide"></div>
																				<div class="ui-select-choices-group-label dropdown-header vf-hide"></div>
																				<?php vn_provinces(); ?>
																			</li>
																		</ul>
																	<input class="ui-select-focusser ui-select-offscreen" type="text" id="focusser-8" role="button">
																</div>
																<p class="text text-danger vf-hide">Thông tin Tỉnh/Thành Phố bắt buộc</p>
															</div>
															<div class="col-sm-6 form-group">
																<div class="ui-select-container ui-select-bootstrap dropdown-required" name="district" theme="bootstrap">
																	<div class="ui-select-match" placeholder="Quận/Huyện">
																		<span tabindex="-1" class="btn btn-default form-control ui-select-toggle" style="outline: 0;">
																			<span class="ui-select-placeholder text-muted vf-hide">Quận/Huyện</span> 
																			<span class="ui-select-match-text pull-left">
																				<span class="ng-binding">Quận Hai Bà Trưng</span>
																			</span> 
																			<i class="caret pull-right"></i> <a style="margin-right: 10px" class="btn btn-xs btn-link pull-right vf-hide"><i class="glyphicon glyphicon-remove"></i></a>
																		</span>
																	</div>
																	<input type="text" tabindex="-1" class="form-control ui-select-search vf-hide" placeholder="Quận/Huyện">
																	<ul class="ui-select-choices ui-select-choices-content ui-select-dropdown dropdown-menu">
																		<li class="ui-select-choices-group" id="ui-select-choices-9">
																			<div class="divider vf-hide"></div>
																			<div class="ui-select-choices-group-label dropdown-header vf-hide"></div>
																		</li>
																	</ul>
																	<input class="ui-select-focusser ui-select-offscreen" type="text" id="focusser-9">
																</div>
																<p class="text text-danger vf-hide">Thông tin Quận/Huyện bắt buộc</p>
															</div>
															<div class="form-group"></div>
														</div>
														<div class="form-group">
															<input name="billing_phone" type="tel" class="form-control account-input-required-pattern" placeholder="Số di động" value="<?php echo get_user_meta( $customer_id, 'billing_phone', true );?>" required="">
															<p class="text text-danger vf-hide">Thông tin Số di động bắt buộc</p>

															<p class="text text-danger vf-hide">Số điện thoại này không hợp lệ</p>
														</div>

														<div class="checkbox vf-hide">
															<label>
																<input type="checkbox" class="ng-pristine"> <small>Địa chỉ in trên hoá đơn giống như trên</small>
															</label>
														</div>
														<div class="form-group">
															<button class="btn btn-primary btn-java vf-hide" type="submit">Lưu địa chỉ</button>
															<input type="submit" class="btn btn-primary btn-java" name="save_address" value="Lưu địa chỉ">
															<div class="btn btn-default btn-lg btn-uppercase change-address-form-back" type="button">Trở lại</div>
															<input type="hidden" id="_wpnonce" name="_wpnonce" value="595e6d9e42">
															<input type="hidden" name="_wp_http_referer" value="/leflair/my-account/">
															<input type="hidden" name="action" value="edit_address">
														</div>
														<div class="form-group vf-hide">
															<div class="alert alert-info">
																Thông tin địa chỉ đang được cập nhật…
															</div>
														</div>
														<div class="form-group vf-hide">
															<div class="alert alert-danger">
																
															</div>
														</div>
													</div>
												</div>
											</ui-address-form>	                                
											</div>
										</div>
										</form>
										
									</div>

									<!-- Account Credit -->
									<h3>Số dư trong tài khoản</h3>
									<div class="account-balance">
										<p class="ng-binding">Số dư hiện có: 0₫</p>
										<p>
											<a class="underline-link leflair-gift-code">Nạp thẻ quà tặng</a>
										</p>
									</div>
									<div class="row">
										<div class="col-sm-6 form-gift-code vf-hide">
											<ui-giftcard close-trigger="isRedeem" is-large="" avail-credit="account.availableCredit" class="ng-isolate-scope"> 
											<div class="ng-pristine-pattern">
												<fieldset class="row">
													<div class="form-group col-xs-7">
														<input name="code" class="form-control input-lg-pattern" placeholder="Điền mã">
													</div>

													<div class="form-group col-xs-5 no-left-padding">
														<!-- ngIf: !giftCard -->
														<button type="button" class="btn btn-block btn-primary btn-lg">NẠP</button>
														<!-- end ngIf: !giftCard -->
														<button type="button" class="btn btn-block btn-primary btn-lg vf-hide">Nạp tiền</button>
													</div>

													<div class="form-group col-xs-12 vf-hide">
														<div class="text-info">
															<p>Thẻ quà tặng của bạn có <span class="java">₫</span></p>
															<p>Nhấn nút "Nạp" để thêm số tiền trong thẻ vào tài khoản</p>
														</div>
													</div>


													<div class="form-group col-xs-12 vf-hide">
														<div class="text-danger">
															
														</div>
													</div>
												</fieldset>
											</div>							
											</ui-giftcard>
										</div>
									</div>

									<!-- Change Password -->
									<form class="woocommerce-EditAccountForm edit-account" action="" method="post">
										<div class="">
											<h3>Mật khẩu</h3>
											<p>
												<button class="btn btn-primary btn-java btn-fluid-mobile change-password" type="button">Thay mật khẩu</button>
											</p>
											
											<div class="form-change-password vf-hide">
												<div class="row col-md-7">
													<div class="form-group">
														<p><label for="">Mật khẩu hiện tại</label></p>
														<input type="password" name="password_current" id="password_current" placeholder="Vui lòng điền mật khẩu hiện tại" class="form-control account-input-pattern">
													</div>
													<div class="form-group">
														<p><label for="">Mật khẩu mới</label></p>
														<p><input type="password" name="password_1" id="password_1" placeholder="Vui lòng điền mật khẩu mới" class="form-control account-input-pattern"></p>
													</div>
													<div class="form-group">
														<p><label for="">Nhập lại mật khẩu mới</label></p>
														<p><input type="password" name="password_2" id="password_2" placeholder="Vui lòng điền mật khẩu mới" class="form-control account-input-pattern"></p>
													</div>
													<br>
													<div class="col-md-12 form-group">
														<input type="hidden" id="_wpnonce" name="_wpnonce" value="c1a94fa7b2">
														<input type="hidden" name="_wp_http_referer" value="/leflair/my-account/edit-account/">		
														<input type="hidden" name="action" value="save_account_details">
														<input type="submit" name="save_account_details" class="btn btn-primary btn-java btn-lg" value="Lưu lại">
														<div class="btn btn-default btn-lg form-change-password-back">Trở lại</div>
													</div>
												</div>
											</div>
										</div>
									</form>
									<br>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</fieldset>
	<!--</form>-->
	</section>
	</section>

</section>