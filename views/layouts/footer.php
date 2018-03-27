<!-- brand section start -->
<section class="section-padding-top">
    <div class="brand-logo">
        <div class="barnd-bg">
            <div class="container">
                <div class="row text-center">
                    <div id="brand-logo" class="re-owl-carousel21 owl-carousel product-slider owl-theme">
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="/template/img/brand/1.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="/template/img/brand/2.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="/template/img/brand/3.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="/template/img/brand/4.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="/template/img/brand/5.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="/template/img/brand/6.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="/template/img/brand/1.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-brand">
                                <a href="#"><img src="/template/img/brand/3.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- brand section end -->
<!-- service section start -->
<section class="re-section-padding">
    <div class="service section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12 col-sm-4">
                    <div class="single-service">
                        <i class="pe-7s-plane"></i>
                        <h4>Бесплатная доставка</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-service res-single">
                        <i class="pe-7s-headphones"></i>
                        <h4>Куруглосуточная поддежка</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-service">
                        <i class="pe-7s-refresh"></i>
                        <h4>15 дневный возврат денег</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service section end -->
<!-- footer section start -->
		<footer class="re-footer-section">
			<!-- footer-top area start -->
			<div class="footer-top section-padding-top">
				<div class="footer-dsc">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4 col-md-3">
								<div class="single-text res-text">
									<div class="footer-title">
										<h4>Наши контакты</h4>
										<hr class="dubble-border"/>
									</div>
									<div class="footer-text">
										<ul>
											<li>
												<i class="pe-7s-map-marker"></i>
												<p>LookYou , пр.Поля 123</p>
												<p class="rs">г.Днепр Украина.</p>
											</li>
											<li>
												<i class="pe-7s-call"></i>
												<p>+380 (98) 6641 053</p>
												<p>+380 (95) 6641 056</p>
											</li>
											<li>
												<i class="pe-7s-mail-open"></i>
												<p>info@lookyou.com</p>
												<p>lookyou@outlook.com</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-3">
								<div class="single-text res-text">
									<div class="footer-title">
										<h4>Мой аккаунт</h4>
										<hr class="dubble-border"/>
									</div>
									<div class="footer-menu">
										<ul>
                                            <?php if(User::isGuest()):?>
                                            <li><a href="/user/login">Вход</a></li>
                                            <?php else:?>
											<li><a href="/user/login">Мой кабинет</a></li>
											<li><a href="/user/wishlist">Мои желания</a></li>
											<li><a href="user/order-complete">Мои заказы</a></li>
                                            <li><a href="/user/logout">Выход</a></li>
                                            <?php endif;?>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-3 margin-top">
								<div class="single-text res-text">
									<div class="footer-title">
										<h4>Поддержка</h4>
										<hr class="dubble-border"/>
									</div>
									<div class="footer-menu">
										<ul>
											<li><a href="/contacts/">Наши контакты</a></li>
											<li><a href="/">На главную</a></li>
											<li><a href="/about/">О нас</a></li>
											<li><a href="#">Карта сайта</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xs-12 hidden-sm col-md-3 margin-top">
								<div class="single-text res-text">
									<div class="footer-title">
										<h4>Рассылка</h4>
										<hr class="dubble-border"/>
									</div>
									<div class="footer-text">
										<p>Если хотите получать новости о новинках.</p>
										<form action="mail.php" method="post">
											<input type="text" name="email" placeholder="Введите вашу почту" />
											<input type="submit" value="Отправить" />
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr class="dubble-border"/>
				</div>
				<div class="social-media">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="paypal social-icon">
									<ul>
										<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
										<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
										<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
										<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
										<li><a href="#"><i class="fa fa-cc-stripe"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="social-icon">
									<ul class="floatright">
										<li class="res-mar"><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										<li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-top area end -->
			<!-- footer-bottom area start -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<p>&copy; 2018 Powered by Nizhnikovsky. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-bottom area end -->
		</footer>
        <!-- footer section end -->
        
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="/template/js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="/template/js/bootstrap.min.js"></script>
        <!-- parallax js -->
        <script src="/template/js/parallax.min.js"></script>
		<!-- owl.carousel js -->
        <script src="/template/js/owl.carousel.min.js"></script>
        <!-- Img Zoom js -->
		<script src="/template/js/img-zoom/jquery.simpleLens.min.js"></script>
		<!-- meanmenu js -->
        <script src="/template/js/jquery.meanmenu.js"></script>
		<!-- jquery.countdown js -->
        <script src="/template/js/jquery.countdown.min.js"></script>
		<!-- Nivo slider js
		============================================ --> 		
		<script src="/template/lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="/template/lib/home.js" type="text/javascript"></script>
		<!-- jquery-ui js -->
        <script src="/template/js/jquery-ui.min.js"></script>
		<!-- sticky js -->
        <script src="/template/js/sticky.js"></script>
		<!-- plugins js -->
        <script src="/template/js/plugins.js"></script>
		<!-- main js -->
        <script src="/template/js/main.js"></script>
    </body>
</html>

