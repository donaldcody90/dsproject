		<footer data-ng-include="'/modules/core/views/footer.client.view.html'" class="ng-scope">
			<section ng-controller="FooterController" class="ng-scope">
				<div class="footer ng-scope" ng-if="!checkoutView.isCheckoutStage()">
					<div class="container">
						<div class="row">
							<div class="col-md-2 hidden-xs">
								<img src="<?php echo site_url('wp-content/themes/leflair/assets/img/leflair-white-logo.svg');?>">
							</div>

							<div class="col-md-2 col-sm-4">
								<ul class="list-unstyled">
									<li class="list-title">Liên lạc</li>
									<li>
										<a href="tel:19006710"><span class="glyphicon glyphicon-earphone"></span> 1900 6710</a>
									</li>
									<li>
										<a href="mailto:help@leflair.vn" class="lowercase"><span class="glyphicon glyphicon-envelope"></span> help@leflair.vn</a>
									</li>
								</ul>
							</div>

							<div class="col-md-2 col-sm-4">
								<ul class="list-unstyled">
									<li class="list-title">DOANH NGHIỆP</li>
									<li><a href="/pages/about" target="_blank">VỀ CHÚNG TÔI</a></li>
									<li><a href="http://styleguide.leflair.vn/" target="_blank">Style Guide</a></li>
									<li><a href="/pages/partners" target="_blank">HỢP TÁC VỚI LEFLAIR</a></li>
									<li><a href="/pages/careers" target="_blank">TUYỂN DỤNG</a></li>
								</ul>
							</div>

							<div class="col-md-2 col-sm-4">
								<ul class="list-unstyled">
									<li class="list-title">CHĂM SÓC KHÁCH HÀNG</li>
									<li><a href="https://support.leflair.vn/hc/vi" target="_blank">Hỏi Đáp</a></li>
									<li><a href="https://support.leflair.vn/hc/vi/articles/214167448-Ch%C3%ADnh-s%C3%A1ch-tr%E1%BA%A3-h%C3%A0ng-v%C3%A0-ho%C3%A0n-ti%E1%BB%81n" target="_blank">Chính sách đổi trả</a></li>
									<li><a href="https://support.leflair.vn/hc/vi/articles/214857097-%C4%90i%E1%BB%81u-kho%E1%BA%A3n-v%C3%A0-quy-%C4%91%E1%BB%8Bnh-chung" target="_blank">Điều khoản &amp; quy định</a></li>
									<li><a href="https://support.leflair.vn/hc/vi/articles/214167378-Ch%C3%ADnh-s%C3%A1ch-giao-v%C3%A0-nh%E1%BA%ADn-h%C3%A0ng" target="_blank">Giao hàng</a></li>
									<li><a href="https://support.leflair.vn/hc/vi/articles/214113678-T%C3%B4i-c%C3%B3-nh%E1%BA%ADn-%C4%91%C6%B0%E1%BB%A3c-h%C3%B3a-%C4%91%C6%A1n-GTGT-trong-b%C6%B0u-ki%E1%BB%87n-kh%C3%B4ng-" target="_blank">Thuế</a></li>
								</ul>
							</div>

							<div class="col-md-3 col-sm-12">
								<ul class="list-inline">
									<li>
										<a href="https://www.facebook.com/LeflairVN" target="_blank">
											<div class="footer-img footer-img-facebook" style="background-image: url(&quot;<?php echo site_url('wp-content/themes/leflair/assets/img/facebook-circle.svg');?>&quot;)"></div>
										</a>
									</li>
									<li>
										<a href="https://instagram.com/leflairvietnam" target="_blank">
											<div class="footer-img footer-img-instagram" style="background-image: url(&quot;<?php echo site_url('wp-content/themes/leflair/assets/img/instagram-circle.svg');?>&quot;)"></div>
										</a>
									</li>
									<li>
										<a href="https://www.linkedin.com/company/leflair" target="_blank">
											<div class="footer-img footer-img-linkedin" style="background-image: url(&quot;<?php echo site_url('wp-content/themes/leflair/assets/img/linkedin-circle.svg');?>&quot;)"></div>
										</a>
									</li>
									<li>
										<a href="https://plus.google.com/+LeflairVn/posts" target="_blank">
											<div class="footer-img footer-img-googleplus" style="background-image: url(&quot;<?php echo site_url('wp-content/themes/leflair/assets/img/googleplus-circle.svg');?>&quot;)"></div>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="row text-center" style="text-transform: none;">
							Công ty TNHH Leflair Vietnam - <span class="hidden-lg"><br></span> Tầng 3A, Toà nhà Copac, 12 Tôn Đản, Quận 4, TP. HCM
							<br>
							<br>

							<span>Giấy CNĐKDN: 0313473004 - Ngày cấp: 06/10/2015. Cơ quan cấp: Sở Kế hoạch và Đầu tư Thành phố Hồ Chí Minh.</span>
							<br>
							<span>Copyright © 2015 leflair.vn</span>
							<br>
							<br>
							<a href="http://www.online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=19306" target="_blank">
								<img src="<?php echo site_url('wp-content/themes/leflair/assets/img/gov.vn.png');?>" class="footer-gov">
							</a>

						</div>
					</div>
				</div>
			</section>
		</footer>
		</div>


	</body>
</html>