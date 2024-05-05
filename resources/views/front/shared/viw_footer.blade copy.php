
<footer>
	    <div class="frame black"></div>
	    <div class="container">
	        <div class="row">
	            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
	                <div class="footer_wp">
	                    <i class="icon_pin_alt"></i>
	                    <h3>Address</h3>
	                    <p>97845 Baker st. 567<br>Los Angeles - US</p>
	                </div>
	            </div>
	            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
	                <div class="footer_wp">
	                    <i class="icon_tag_alt"></i>
	                    <h3>Reservations</h3>
	                    <p><a href="tel:009442323221">+94 423-23-221</a><br><a href="#0">reservations@Foores.com</a></p>
	                </div>
	            </div>
	            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
	                <div class="footer_wp">
	                    <i class="icon_clock_alt"></i>
	                    <h3>Opening Hours</h3>
	                    <ul>
	                        <li>Mon - Sat: 10am - 11pm</li>
	                        <li>Sunday: Closed</li>
	                    </ul>
	                </div>
	            </div>
	            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
	                <h3>Keep in touch</h3>
	                <div id="newsletter">
	                    <div id="message-newsletter"></div>
	                    <form method="post" action="phpmailer/newsletter_template_email.php" name="newsletter_form" id="newsletter_form">
	                        <div class="form-group">
	                            <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
	                            <button type="submit" id="submit-newsletter"><i class="arrow_carrot-right"></i></button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	        <!-- /row-->
	        <hr>
	        <div class="row">
	            <div class="col-sm-5">
	                <p class="copy">© 2021 Foores Restaurant - All rights reserved</p>
	            </div>
	            <div class="col-sm-7">
	                <div class="follow_us">
	                    <ul>
	                        <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('public/front/assets/img/twitter_icon.svg') }}" alt="" class="lazy"></a></li>
	                        <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('public/front/assets/img/facebook_icon.svg') }}" alt="" class="lazy"></a></li>
	                        <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('public/front/assets/img/instagram_icon.svg') }}" alt="" class="lazy"></a></li>
	                        <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('public/front/assets/img/youtube_icon.svg') }}" alt="" class="lazy"></a></li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	        <p class="text-center"></p>
	    </div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div><!-- Back to top button -->
	<input type="hidden" id="base_url" value="{{ asset('/') }}">

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
	<!-- COMMON SCRIPTS -->
    <script src="{{ asset('public/front/assets/js/common_scripts.min.js') }}"></script>
    <script src="{{ asset('public/front/assets/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('public/front/assets/js/slider_func.js') }}"></script>
    <script src="{{ asset('public/front/assets/js/common_func.js') }}"></script>
    <script src="{{ asset('public/front/assets/phpmailer/validate.js') }}"></script>

    <!-- SPECIFIC SCRIPTS (wizard form) -->
    <script src="{{ asset('public/front/assets/js/wizard/wizard_scripts.min.js') }}"></script>
    <script src="{{ asset('public/front/assets/js/wizard/wizard_func.js') }}"></script>
	<script src="{{ asset('public/front/assets/js/cart.js')}}"></script>
</body>
</html>