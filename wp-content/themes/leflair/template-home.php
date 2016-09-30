<?php
/*
Template Name: Home Template
*/
?>



	<section>
				
		<section data-ui-view="" autoscroll="false" le-scroll="" offset="400" class="ng-scope">
		<section class="ng-scope">
		<promotion-carousel>
		<div ng-mouseenter="pause()" ng-mouseleave="play()" class="info-slider hidden-xs hidden-sm carousel ng-isolate-scope" ng-swipe-right="prev()" ng-swipe-left="next()" interval="5000">
		<div class="carousel-inner" ng-transclude="">
		<div ng-class="{
		'active': active
		  }" class="item text-center ng-isolate-scope active" ng-transclude="" ng-repeat="slide in slides">
				<a href="" class="ng-binding ng-scope">Cam kết chính hãng - Giao hàng toàn quốc - Thanh toán khi nhận hàng </a>
			</div><!-- end ngRepeat: slide in slides --><div ng-class="{
			'active': active
		  }" class="item text-center ng-isolate-scope" ng-transclude="" ng-repeat="slide in slides">
				<a href="tel:19006710" class="ng-binding ng-scope">Bạn cần trợ giúp? Hãy gọi tổng đài chăm sóc khách hàng 1900-6710 </a>
			</div><!-- end ngRepeat: slide in slides -->
		</div>
			<a class="left carousel-control" ng-click="prev()" ng-show="slides.length > 1"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" ng-click="next()" ng-show="slides.length > 1"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
		</promotion-carousel>

			<a class="image-link" href="category/sales/" signup-link="">
				<img class="fluid category-hero ng-scope ng-isolate-scope" rio="" ng-if="$breakpoint.availFrom('md')" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57e2102b213fb40f00ee4185.jpg'); ?>" >
			</a>

			<div class="container bump-container white ng-scope" ng-if="$breakpoint.availFrom('md')"></div>
		</section>

		<section class="ng-scope">

		<!-- TODAYS TOP SALES -->
		<div class="container bump-container-next white">
			<div class="border-left"></div>
			<div class="row section-header ng-scope" ng-if="$breakpoint.availFrom('md')">
				<div class="col-lg-12 text-center">
					<h3>Ưu Đãi Đang Diễn Ra</h3>
				</div>
			</div><!-- end ngIf: $breakpoint.availFrom('md') -->
			<sales-list sales="sales" banner="sales.banner" banner-position="5" featured-avail="sm" class="ng-isolate-scope"><div class="row">

		<item class="col-md-6 col-xs-12 section-item ng-scope ng-hide" ng-repeat="sale in salesList" ng-show="($index !== 0) || ($index === 0 &amp;&amp; $breakpoint.availUntil(featuredAvailAt))">
			<a href="category/sales/" signup-link="">
				<img class="fluid ng-isolate-scope" rio="" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57e21030213fb40f00ee4186.jpg'); ?>" >
				<div class="caption">
					<h3 class="ng-binding">
						Drap Giường Novelle
							<span class="glyphicon glyphicon-chevron-right small"></span>
					</h3>
					<p class="text-muted ng-binding">Kết thúc trong 6 ngày
					</p>
				</div>
			</a>
		</item>
		<item class="col-md-6 col-xs-12 section-item ng-scope" ng-repeat="sale in salesList" ng-show="($index !== 0) || ($index === 0 &amp;&amp; $breakpoint.availUntil(featuredAvailAt))">
			<a href="/products/xit-khu-mui-toan-than-si-lolita-lempicka-57e241a9eb696d0f00a72f31" signup-link="">
				<img class="fluid ng-isolate-scope" rio="" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57e35e779773a7100095cbd8.jpg'); ?>" >
				<div class="caption">
					<h3 class="ng-binding">
						Xịt Khử Mùi Toàn Thân Si Lolita Lempicka
							<span class="glyphicon glyphicon-chevron-right small"></span>
					</h3>
					<p class="text-muted ng-binding">Kết thúc trong ít hơn 15 giờ
					</p>
				</div>
			</a>
		</item>
		<item class="col-md-6 col-xs-12 section-item ng-scope" ng-repeat="sale in salesList" ng-show="($index !== 0) || ($index === 0 &amp;&amp; $breakpoint.availUntil(featuredAvailAt))">
			<a href="category/sales/" signup-link="">
				<img class="fluid ng-isolate-scope" rio="" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57dfb7ffc745c410009ea181.jpg'); ?>" >
				<div class="caption">
					<h3 class="ng-binding">
						Sản Phẩm Làm Đẹp it's Well plus
							<span class="glyphicon glyphicon-chevron-right small"></span>
					</h3>
					<p class="text-muted ng-binding">Kết thúc trong 4 ngày
					</p>
				</div>
			</a>
		</item>
		<item class="col-md-6 col-xs-12 section-item ng-scope" ng-repeat="sale in salesList" ng-show="($index !== 0) || ($index === 0 &amp;&amp; $breakpoint.availUntil(featuredAvailAt))">
			<a href="category/sales/" signup-link="">
				<img class="fluid ng-isolate-scope" rio="" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57df9e7d212ef90f006828e7.jpg'); ?>" >
				<div class="caption">
					<h3 class="ng-binding">
						Giày Geox Dành Cho Các Chàng
							<span class="glyphicon glyphicon-chevron-right small"></span>
					</h3>
					<p class="text-muted ng-binding">Kết thúc trong 6 ngày
					</p>
				</div>
			</a>
		</item>
		<item class="col-md-6 col-xs-12 section-item ng-scope" ng-repeat="sale in salesList" ng-show="($index !== 0) || ($index === 0 &amp;&amp; $breakpoint.availUntil(featuredAvailAt))">
			<a href="category/sales/" signup-link="">
				<img class="fluid ng-isolate-scope" rio="" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57df9e19212ef90f006828d8.jpg'); ?>" data-rio-width="555" data-rio-img="https://leflair-assets.storage.googleapis.com/57df9e19212ef90f006828d8.jpg">
				<div class="caption">
					<h3 class="ng-binding">
						Giày Geox Dành Cho Các Nàng
							<span class="glyphicon glyphicon-chevron-right small"></span>
					</h3>
					<p class="text-muted ng-binding">Kết thúc trong 6 ngày
					</p>
				</div>
			</a>
		</item>
		<div class="col-xs-12 section-item banner ng-scope">
		<a target="_blank" href="http://bit.ly/2dfv2jx">
		<img class="fluid ng-isolate-scope" rio="" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57e1fa80213fb40f00ee3f73.jpg'); ?>" data-rio-width="1140" data-rio-img="https://leflair-assets.storage.googleapis.com/57e1fa80213fb40f00ee3f73.jpg">
		</a></div><!-- end ngRepeat: sale in salesList -->
		<item class="col-md-6 col-xs-12 section-item ng-scope" ng-repeat="sale in salesList" ng-show="($index !== 0) || ($index === 0 &amp;&amp; $breakpoint.availUntil(featuredAvailAt))">
			<a href="category/sales/" signup-link="">
				<img class="fluid ng-isolate-scope" rio="" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57e3bcb157b5f40f00130daf.jpg'); ?>" data-rio-width="555" data-rio-img="https://leflair-assets.storage.googleapis.com/57e3bcb157b5f40f00130daf.jpg">
				<div class="caption">
					<h3 class="ng-binding">
						Túi Xách Thời Trang Neyuh
							<span class="glyphicon glyphicon-chevron-right small"></span>
					</h3>
					<p class="text-muted ng-binding">Kết thúc trong 6 ngày
					</p>
				</div>
			</a>
		</item><!-- end ngRepeat: sale in salesList --><item class="col-md-6 col-xs-12 section-item ng-scope" ng-repeat="sale in salesList" ng-show="($index !== 0) || ($index === 0 &amp;&amp; $breakpoint.availUntil(featuredAvailAt))">
			<a href="category/sales/" signup-link="">
				<img class="fluid ng-isolate-scope" rio="" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57e109ca52b3930f00aefe41.jpg');?>" data-rio-width="555" data-rio-img="https://leflair-assets.storage.googleapis.com/57e109ca52b3930f00aefe41.jpg">
				<div class="caption">
					<h3 class="ng-binding">
						Cọ Trang Điểm KT Cosmetics
							<span class="glyphicon glyphicon-chevron-right small"></span>
					</h3>
					<p class="text-muted ng-binding">Kết thúc trong 5 ngày
					</p>
				</div>
			</a>
		</item>
	</div></sales-list>		
		</div>

		<!-- TODAT BEST SELLER -->
		<div class="best-products">
			<div class="container">
				<div class="row section-header">
					<div class="col-lg-12 text-center">
						<h3>Bán chạy nhất trong ngày</h3>
					</div>
				</div>

				<best-seller products="bestSeller" class="clearfix ng-isolate-scope"><arrow class="left" ng-click="moveLeft()">
		<div class="controller">
			<span class="glyphicon glyphicon-menu-left"></span>
		</div>
	</arrow>
	<outerbox ng-swipe-left="moveRight()" ng-swipe-right="moveLeft()">
		<innerbox style="width: 4560px;">
			<!-- ngRepeat: product in products --><item ng-repeat="product in products" class="ng-scope" style="width: 285px;">
				<a href="/products/xit-khu-mui-toan-than-si-lolita-lempicka-80ml-57e241a9eb696d0f00a72f31" signup-link="">
					<img trigger="triggerReload" rio="" class="ng-isolate-scope" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57e3893202339410006e5903.jpg');?>" data-rio-width="271" data-rio-img="https://leflair-assets.storage.googleapis.com/57e3893202339410006e5903.jpg">
					<div class="content">
						<p class="brand ng-binding">Lolita Lempicka</p>
						<h3 class="ng-binding">Xịt Khử Mùi Toàn Thân Si Lolita Lempicka 80ml</h3>
						<p class="price ng-binding">
							<span class="original-price ng-binding">810,000₫</span>
							&nbsp;&nbsp;659,000₫
						</p>

					</div>
				</a>
			</item>
			<item ng-repeat="product in products" class="ng-scope" style="width: 285px;">
				<a href="/products/bo-drap-giuong-palleton-160x200-cm-5-mon-574f51d9ab6f5d0e0038c5ed?Color=LUCIANO" signup-link="">
					<img trigger="triggerReload" rio="" class="ng-isolate-scope" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57e3c35b57b5f40f00130f39.jpg');?>" data-rio-width="271" data-rio-img="https://leflair-assets.storage.googleapis.com/57e3c35b57b5f40f00130f39.jpg">
					<div class="content">
						<p class="brand ng-binding">Novelle</p>
						<h3 class="ng-binding">Bộ Drap Giường Palleton 160x200 cm (5 Món)</h3>
						<p class="price ng-binding">
							<span class="original-price ng-binding">746,000₫</span>
							&nbsp;&nbsp;529,000₫
						</p>

					</div>
				</a>
			</item>
			<item ng-repeat="product in products" class="ng-scope" style="width: 285px;">
				<a href="/products/bo-drap-giuong-castellina-milan-160200-5-mon-56af2bb75a15b40e004ab6db?Color=BUENAS" signup-link="">
					<img trigger="triggerReload" rio="" class="ng-isolate-scope" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57be70ce72d6971000fa317c.jpg');?>" data-rio-width="271" data-rio-img="https://leflair-assets.storage.googleapis.com/57be70ce72d6971000fa317c.jpg">
					<div class="content">
						<p class="brand ng-binding">Novelle</p>
						<h3 class="ng-binding">Bộ Drap Giường Castellina Milan 160*200 (5 Món)</h3>
						<p class="price ng-binding">
							<span class="original-price ng-binding">1,656,000₫</span>
							&nbsp;&nbsp;829,000₫
						</p>

					</div>
				</a>
			</item>
			<item ng-repeat="product in products" class="ng-scope" style="width: 285px;">
				<a href="/products/bo-drap-giuong-palleton-180x200-cm-5-mon-574f51d9ab6f5d0e0038c5ee?Color=LUCIANO" signup-link="">
					<img trigger="triggerReload" rio="" class="ng-isolate-scope" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57e3c35b57b5f40f00130f39.jpg');?>" data-rio-width="271" data-rio-img="https://leflair-assets.storage.googleapis.com/57e3c37c57b5f40f00130f3d.jpg">
					<div class="content">
						<p class="brand ng-binding">Novelle</p>
						<h3 class="ng-binding">Bộ Drap Giường Palleton 180x200 cm (5 Món)</h3>
						<p class="price ng-binding">
							<span class="original-price ng-binding">770,000₫</span>
							&nbsp;&nbsp;549,000₫
						</p>

					</div>
				</a>
			</item>
			<item ng-repeat="product in products" class="ng-scope" style="width: 285px;">
				<a href="/products/bo-drap-giuong-petals-160x200-5-mon-574f51d9ab6f5d0e0038c5ef?Color=ESTELLA" signup-link="">
					<img trigger="triggerReload" rio="" class="ng-isolate-scope" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57e3c2a257b5f40f00130f34.jpg');?>" data-rio-width="271" data-rio-img="https://leflair-assets.storage.googleapis.com/57e3c2a257b5f40f00130f34.jpg">
					<div class="content">
						<p class="brand ng-binding">Novelle</p>
						<h3 class="ng-binding">Bộ Drap Giường Petals 160x200 (5 Món)</h3>
						<p class="price ng-binding">
							<span class="original-price ng-binding">746,000₫</span>
							&nbsp;&nbsp;529,000₫
						</p>

					</div>
				</a>
			</item>
			<item ng-repeat="product in products" class="ng-scope" style="width: 285px;">
				<a href="/products/giay-bet-nu-d-rhosyn-b-57749ec7eda13b0e00489562?Color=DOVE%20GREY" signup-link="">
					<img trigger="triggerReload" rio="" class="ng-isolate-scope" src="<?php echo site_url('wp-content/themes/leflair/assets/img/5774bacb21acf30e0032082c.jpg');?>" data-rio-width="271" data-rio-img="https://leflair-assets.storage.googleapis.com/5774bacb21acf30e0032082c.jpg">
					<div class="content">
						<p class="brand ng-binding">Geox</p>
						<h3 class="ng-binding">Giày Bệt Nữ D Rhosyn B</h3>
						<p class="price ng-binding">
							<span class="original-price ng-binding">3,900,000₫</span>
							&nbsp;&nbsp;2,399,000₫
						</p>

					</div>
				</a>
			</item>
			<item ng-repeat="product in products" class="ng-scope" style="width: 285px;">
				<a href="/products/bo-drap-giuong-cruise-160x200-6-mon-574f51d9ab6f5d0e0038c5ea?Color=SCOTTISH" signup-link="">
					<img trigger="triggerReload" rio="" class="ng-isolate-scope" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57e3836b02339410006e5856.jpg');?>" data-rio-width="271" data-rio-img="https://leflair-assets.storage.googleapis.com/57e3836b02339410006e5856.jpg">
					<div class="content">
						<p class="brand ng-binding">Novelle</p>
						<h3 class="ng-binding">Bộ Drap Giường Cruise 160x200 (6 Món)</h3>
						<p class="price ng-binding">
							<span class="original-price ng-binding">3,350,000₫</span>
							&nbsp;&nbsp;1,569,000₫
						</p>

					</div>
				</a>
			</item>
			<item ng-repeat="product in products" class="ng-scope" style="width: 285px;">
				<a href="/products/bo-drap-giuong-petals-180x200-5-mon-574f51d9ab6f5d0e0038c5f0?Color=LINNEA" signup-link="">
					<img trigger="triggerReload" rio="" class="ng-isolate-scope" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57e3c30a57b5f40f00130f37.jpg');?>" data-rio-width="271" data-rio-img="https://leflair-assets.storage.googleapis.com/57e3c30a57b5f40f00130f37.jpg">
					<div class="content">
						<p class="brand ng-binding">Novelle</p>
						<h3 class="ng-binding">Bộ Drap Giường Petals 180x200 (5 Món)</h3>
						<p class="price ng-binding">
							<span class="original-price ng-binding">770,000₫</span>
							&nbsp;&nbsp;549,000₫
						</p>

					</div>
				</a>
			</item>
			<item ng-repeat="product in products" class="ng-scope" style="width: 285px;">
				<a href="/products/bo-drap-giuong-idol-180x200-cm-5-mon-574f51d9ab6f5d0e0038c5df?Color=LOZENRO" signup-link="">
					<img trigger="triggerReload" rio="" class="ng-isolate-scope" src="<?php echo site_url('wp-content/themes/leflair/assets/img/5751538ea816261100b5878c.jpg');?>" data-rio-width="271" data-rio-img="https://leflair-assets.storage.googleapis.com/5751538ea816261100b5878c.jpg">
					<div class="content">
						<p class="brand ng-binding">Novelle</p>
						<h3 class="ng-binding">Bộ Drap Giường Idol 180x200 cm (5 Món)</h3>
						<p class="price ng-binding">
							<span class="original-price ng-binding">1,050,000₫</span>
							&nbsp;&nbsp;599,000₫
						</p>

					</div>
				</a>
			</item>
			<item ng-repeat="product in products" class="ng-scope" style="width: 285px;">
				<a href="/products/bo-drap-chan-drap-giuong-harumi-160200-5-mon-57ada47ece398a0f0043c743?Color=DR-2356" signup-link="">
					<img trigger="triggerReload" rio="" class="ng-isolate-scope" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57e3c3cb57b5f40f00130f43.jpg');?>" data-rio-width="271" data-rio-img="https://leflair-assets.storage.googleapis.com/57e3c3cb57b5f40f00130f43.jpg">
					<div class="content">
						<p class="brand ng-binding">Novelle</p>
						<h3 class="ng-binding">Bộ Drap Chăn, Drap GIường Harumi 160*200 (5 Món)</h3>
						<p class="price ng-binding">
							<span class="original-price ng-binding">1,668,000₫</span>
							&nbsp;&nbsp;999,000₫
						</p>

					</div>
				</a>
			</item>
			<item ng-repeat="product in products" class="ng-scope" style="width: 285px;">
				<a href="/products/bo-drap-giuong-cruise-180x200-cm-574f51d9ab6f5d0e0038c5e9?Color=EMONA" signup-link="">
					<img trigger="triggerReload" rio="" class="ng-isolate-scope" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57515328a816261100b58788.jpg');?>" data-rio-width="271" data-rio-img="https://leflair-assets.storage.googleapis.com/57515328a816261100b58788.jpg">
					<div class="content">
						<p class="brand ng-binding">Novelle</p>
						<h3 class="ng-binding">Bộ Drap Giường Cruise 180x200 cm</h3>
						<p class="price ng-binding">
							<span class="original-price ng-binding">3,700,000₫</span>
							&nbsp;&nbsp;1,699,000₫
						</p>

					</div>
				</a>
			</item>
			<item ng-repeat="product in products" class="ng-scope" style="width: 285px;">
				<a href="/products/giay-sneaker--nu-new-club-a-57749ec7eda13b0e00489552?Color=DOVE%20GREY" signup-link="">
					<img trigger="triggerReload" rio="" class="ng-isolate-scope" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57e381c202339410006e5811.jpg');?>" data-rio-width="271" data-rio-img="https://leflair-assets.storage.googleapis.com/57e381c202339410006e5811.jpg">
					<div class="content">
						<p class="brand ng-binding">Geox</p>
						<h3 class="ng-binding">Giày Sneaker  Nữ New Club A</h3>
						<p class="price ng-binding">
							<span class="original-price ng-binding">3,100,000₫</span>
							&nbsp;&nbsp;1,759,000₫
						</p>

					</div>
				</a>
			</item>
			<item ng-repeat="product in products" class="ng-scope" style="width: 285px;">
				<a href="/products/giay-lupe-cho-nu-5684ea04504cc11000765a29?Color=BLACK%2FNATURAL" signup-link="">
					<img trigger="triggerReload" rio="" class="ng-isolate-scope" src="<?php echo site_url('wp-content/themes/leflair/assets/img/5774a65c6d45cc0e00af20c9.jpg');?>" data-rio-width="271" data-rio-img="https://leflair-assets.storage.googleapis.com/5774a65c6d45cc0e00af20c9.jpg">
					<div class="content">
						<p class="brand ng-binding">Geox</p>
						<h3 class="ng-binding">Giày Lupe Cho Nữ</h3>
						<p class="price ng-binding">
							<span class="original-price ng-binding">3,900,000₫</span>
							&nbsp;&nbsp;1,999,000₫
						</p>

					</div>
				</a>
			</item>
			<item ng-repeat="product in products" class="ng-scope" style="width: 285px;">
				<a href="/products/giay-de-bet-nu-lola-mau-nau-be-5684ea04504cc11000765a33?Color=LIGHT%20TAUPE" signup-link="">
					<img trigger="triggerReload" rio="" class="ng-isolate-scope" src="<?php echo site_url('wp-content/themes/leflair/assets/img/568c9fd01cdc210e00eaef11.jpg');?>" data-rio-width="271" data-rio-img="https://leflair-assets.storage.googleapis.com/568c9fd01cdc210e00eaef11.jpg">
					<div class="content">
						<p class="brand ng-binding">Geox</p>
						<h3 class="ng-binding">Giày Đế Bệt Nữ Lola Màu Nâu Be</h3>
						<p class="price ng-binding">
							<span class="original-price ng-binding">3,600,000₫</span>
							&nbsp;&nbsp;1,859,000₫
						</p>

					</div>
				</a>
			</item>
			<item ng-repeat="product in products" class="ng-scope" style="width: 285px;">
				<a href="/products/tui-deo-cheo-nu-hai-tong-mau-57db7ac29632650f006afab5?Color=ORANGE%20MIXED%20BLACK" signup-link="">
					<img trigger="triggerReload" rio="" class="ng-isolate-scope" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57dbfb6ee4dc4612000063be.jpg');?>" data-rio-width="271" data-rio-img="https://leflair-assets.storage.googleapis.com/57dbfb6ee4dc4612000063be.jpg">
					<div class="content">
						<p class="brand ng-binding">NEYUH</p>
						<h3 class="ng-binding">Túi Đeo Chéo Nữ Hai Tông Màu</h3>
						<p class="price ng-binding">
							<span class="original-price ng-binding">4,126,000₫</span>
							&nbsp;&nbsp;2,729,000₫
						</p>

					</div>
				</a>
			</item>
			<item ng-repeat="product in products" class="ng-scope" style="width: 285px;">
				<a href="/products/tui-deo-cheo-nu-mau-cam-57db7ac29632650f006afab7?Color=ORANGE" signup-link="">
					<img trigger="triggerReload" rio="" class="ng-isolate-scope" src="<?php echo site_url('wp-content/themes/leflair/assets/img/57dbfba6e4dc4612000063c5.jpg');?>" data-rio-width="271" data-rio-img="https://leflair-assets.storage.googleapis.com/57dbfba6e4dc4612000063c5.jpg">
					<div class="content">
						<p class="brand ng-binding">NEYUH</p>
						<h3 class="ng-binding">Túi Đeo Chéo Nữ Màu Cam</h3>
						<p class="price ng-binding">
							<span class="original-price ng-binding">3,199,000₫</span>
							&nbsp;&nbsp;2,179,000₫
						</p>

					</div>
				</a>
			</item>
		</innerbox>
	</outerbox>
	<arrow class="right" ng-click="moveRight()">
		<div class="controller">
			<span class="glyphicon glyphicon-menu-right"></span>
		</div>
	</arrow>
	 </best-seller> 
			</div>
		</div>
			
		<!-- UPCOMING SALES -->
		<div class="container upcoming white">
			<div class="row section-header">
				<div class="col-lg-12 text-center">
					<h3>Ưu Đãi Sắp Diễn Ra</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-xs-6 ng-scope" ng-repeat="sale in upcomingList">
					<a href="category/sales/upcoming/" signup-link="">
						<div class="row section-card">
							<div class="col-sm-5 col-xs-12 section-card-img upcoming-img ng-isolate-scope" rio="" data-crop-focus="50% 50%" data-rio-width="150" data-rio-bg="<?php echo site_url('wp-content/themes/leflair/assets/img/57e208a0213fb40f00ee406a.jpg');?>" style="background-image: url(&quot;<?php echo site_url('wp-content/themes/leflair/assets/img/57e208a0213fb40f00ee406a_1.jpg');?>&quot;); background-position: 50% 50%; background-repeat: no-repeat; background-size: 150px;">
							</div>
							<div class="col-sm-7 hidden-xs">
								<h5 class="sale-time ng-binding">Sản Phẩm Dưỡng Da và Làm Đẹp Yves Rocher</h5>
								<h5 style="display: inline-block">Bắt đầu vào</h5> <span class="text-muted ng-binding">Ngày mai 8:00am</span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-xs-6 ng-scope" ng-repeat="sale in upcomingList">
					<a href="category/sales/upcoming/" signup-link="">
						<div class="row section-card">
							<div class="col-sm-5 col-xs-12 section-card-img upcoming-img ng-isolate-scope" rio="" data-crop-focus="50% 50%" data-rio-width="150" data-rio-bg="<?php echo site_url('wp-content/themes/leflair/assets/img/57e0ef5dc745c410009eb756.jpg');?>" style="background-image: url(&quot;<?php echo site_url('wp-content/themes/leflair/assets/img/57e0ef5dc745c410009eb756_1.jpg');?>&quot;); background-position: 50% 50%; background-repeat: no-repeat; background-size: 150px;">
							</div>
							<div class="col-sm-7 hidden-xs">
								<h5 class="sale-time ng-binding">Kính Mát CK, Chloe, Salvatore, Bottega, Karl Lagerfeld</h5>
								<h5 style="display: inline-block">Bắt đầu vào</h5> <span class="text-muted ng-binding">Ngày mai 8:00am</span>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-xs-6 ng-scope" ng-repeat="sale in upcomingList">
					<a href="category/sales/upcoming/" signup-link="">
						<div class="row section-card">
							<div class="col-sm-5 col-xs-12 section-card-img upcoming-img ng-isolate-scope" rio="" data-crop-focus="50% 50%" data-rio-width="150" data-rio-bg="<?php echo site_url('wp-content/themes/leflair/assets/img/57e22bfaeb696d0f00a72cb9.jpg');?>" style="background-image: url(&quot;<?php echo site_url('wp-content/themes/leflair/assets/img/57e22bfaeb696d0f00a72cb9_1.jpg');?>&quot;); background-position: 50% 50%; background-repeat: no-repeat; background-size: 150px;">
							</div>
							<div class="col-sm-7 hidden-xs">
								<h5 class="sale-time ng-binding">Đồ Dùng Chăm Sóc Em Bé Graco</h5>
								<h5 style="display: inline-block">Bắt đầu vào</h5> <span class="text-muted ng-binding">Ngày mai 8:00am</span>
							</div>
						</div>
					</a>
				</div>
				
			</div>
		</div>
	</section>
		</section>

		</section>


