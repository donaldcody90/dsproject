<body class="" breakpoint="" ng-class="bodyClass">
		
		
		<div class="ui simple sidebar push menu shopping-cart ng-scope ng-isolate-scope right">
			<div class="wrapper">
				<div class="header text-center">
					<i ng-click="showSidebar()" class="leflair i-leflair-close"></i>
						Giỏ Hàng
				</div>

				<div class="content ng-hide" ng-show="items.length">
					<div class="stats cart-item">
						<p class="subtotal big clearfix">
							<span class="pull-left">Tổng tiền:</span>
							<b class="number pull-right ng-binding">0₫</b>
						</p>
						<p class="subtotal clearfix">
							<span class="pull-left">Tiết kiệm:</span>
							<span class="number pull-right ng-binding">0₫</span>
						</p>
						<hr>

						<div class="text-center">
							<div class="apart-sm">
								<p class="text-danger ng-binding">
									
								</p>
								<button type="button" class="btn btn-primary btn-order" ng-click="checkout()">Tiến hành đặt hàng</button>
							</div>

							<p><a href="" ng-click="showSidebar()"> &lt; Tiếp tục mua sắm</a></p>
						</div>
					</div>
				</div>

				<div class="content empty text-center" ng-hide="items.length">

					<div class="wrapper">
						<i class="leflair i-leflair-sadness"></i>

						<p class="description">				
							Giỏ hàng của bạn còn trống
						</p>

						<div class="apart-sm">
							<button type="button" class="btn btn-primary btn-order" ng-click="showSidebar()">Tiếp tục mua sắm!</button>

						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="pusher">
			<header data-ng-include="'/modules/core/views/header.client.view.html'" class="ng-scope">
				<section ng-controller="HeaderController" class="ng-scope">
					<nav class="navbar navbar-default navbar-fixed-top">
						<div class="container">

							<div class="navbar-header">
								<a type="button" class="left menu collapsed visible-xs" ng-click="showSidebar()" ng-hide="checkoutView.isCheckoutStage()">
									<i class="leflair i-leflair-menu"></i>
								</a>
								<a href="" class="mobile-cart-icon ng-scope" ng-click="Cart.toggle()" ng-if="showHeaderFn()" ng-hide="checkoutView.isCheckoutStage()">
									<i class="leflair i-leflair-bag"></i>
								</a>

								<div class="visible-xs tel ng-hide" ng-show="checkoutView.isCheckoutStage()">
									<a href="tel:19006710"><i class="leflair i-leflair-telephone"></i> 1900 6710</a>
								</div>
								
								<a class="nav-logo" href="/" ng-hide="campaign.logo &amp;&amp; !showHeaderFn()" ng-class="{checkout:checkoutView.isCheckoutStage()}">
								</a>
								
								<a class="nav-logo campaign-logo ng-hide" href="/" ng-show="campaign.logo &amp;&amp; !showHeaderFn()" style="background-image: url()" ng-class="{checkout:checkoutView.isCheckoutStage()}">
								</a>
							</div>

							
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								
								<ul class="nav navbar-nav pull-right nav-dropdown ng-scope" ng-if="!checkoutView.isCheckoutStage()">

									<li class="dropdown nav-language" dropdown="">
										<a href="#" class="dropdown-toggle ng-binding" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
											Language:&nbsp;&nbsp;VN<span class="caret"></span>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li ng-hide="key === currentLanguage.id" ng-repeat="(key, value) in languageList" class="ng-scope">
												<a href="" ng-click="setLanguage(key, true)" class="ng-binding">ENG</a>
											</li>
											<li ng-hide="key === currentLanguage.id" ng-repeat="(key, value) in languageList" class="ng-scope ng-hide">
												<a href="" ng-click="setLanguage(key, true)" class="ng-binding">VN</a>
											</li>
										</ul>
									</li>

									<li ng-if="showHeaderFn()" class="ng-scope">
										<a href="#">SỐ DƯ: <span class="trinidad ng-binding">0</span></a>
									</li>
									<li class="dropdown ng-scope" dropdown="" ng-if="showHeaderFn()">
										<a href="" class="dropdown-toggle" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
											Tài Khoản
											<span class="caret"></span>
										</a>
										<ul class="dropdown-menu" role="menu" aria-labelledby="account-dropdown">
											<li><a href="/account">Thông Tin</a></li>
											<li><a href="/account/orders">Đơn Hàng</a></li>
											<li><a href="" ng-click="logout()">Thoát ra</a></li>
										</ul>
									</li>
									<li ng-if="showHeaderFn()" class="ng-scope">
										<a href="" ng-click="Cart.toggle()">Giỏ: <span class="trinidad ng-binding"> 0</span></a>
									</li>
								</ul>
							</div>
						</div>
					</nav>


					<ui-sidebar on-toggle="showSidebar" vertical-menu="" position="left" class="ng-isolate-scope" style="display: none;">
					<ul class="sidebar-nav ng-scope" ng-if="showHeaderFn()">
						<li class="sidebar-brand">
							<a href="" ng-click="closeSidebar('/')">
								<img src="<?php echo site_url('wp-content/themes/leflair/assets/img/leflair-black-logo.svg');?>">
							</a>
						</li>
						<li>
							<a href="" ng-click="closeSidebar('/account')">Thông Tin</a>
						</li>
						<li>
							<a href="" ng-click="closeSidebar('/account/orders')">Đơn Hàng</a>
						</li>
						<li>
							<a href="" ng-click="closeSidebar('/account/invites')">Mời bạn bè</a>
						</li>

						<li class="dropdown" dropdown="">
							<a href="" class="dropdown-toggle ng-binding" dropdown-toggle="" aria-haspopup="true" aria-expanded="false">
								Language:&nbsp;&nbsp;VN<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li ng-hide="key === currentLanguage.id" ng-repeat="(key, value) in languageList" class="ng-scope">
									<a href="" ng-click="setLanguage(key, true)" class="ng-binding">ENG</a>
								</li>
								<li ng-hide="key === currentLanguage.id" ng-repeat="(key, value) in languageList" class="ng-scope ng-hide">
									<a href="" ng-click="setLanguage(key, true)" class="ng-binding">VN</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="" ng-click="closeSidebar();logout()">Thoát ra</a>
						</li>
					</ul>

				</ui-sidebar>
				</section>
			</header>