		<div class="container">
				<!--(remove-empty-lines-start)-->
		<footer id="footer">
				<!--(remove-empty-lines-end)-->
					<div class="footer-top">
						<div class="row">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-md-6">
										<h3>Start Selling Today, Buy Porto eCommerce</h3>
									</div>

									<div class="col-md-6">
										<div class="footer-top-subscribe">
											<h4>Be the First to Know<br><span>Sign up for newsletter today.</span></h4>

											<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
												<div class="input-group">
													<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
													<span class="input-group-btn">
														<button class="btn btn-default" type="submit">Go!</button>
													</span>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-middle">
						<div class="row">
							<div class="col-md-3">
								<h4>Who We Are</h4>
								<div class="footer-about">
									<a href="index.html" class="logo">
										<img alt="Porto Website Template" class="img-responsive" src="img/demos/shop/footer-logo-shop12.png">
									</a>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a href="#">Buy Porto eCommerce</a>
								</div>
							</div>
							<div class="col-md-3">
								<h4>Main Features</h4>
								<ul class="features">
									<li>
										<i class="fa fa-check text-color-primary"></i>
										<a href="#">Super Fast Template</a>
									</li>
									<li>
										<i class="fa fa-check text-color-primary"></i>
										<a href="#">1st Seller Template</a>
									</li>
									<li>
										<i class="fa fa-check text-color-primary"></i>
										<a href="#">19 Unique Shop Layouts</a>
									</li>
									<li>
										<i class="fa fa-check text-color-primary"></i>
										<a href="#">Powerful Template Features</a>
									</li>
									<li>
										<i class="fa fa-check text-color-primary"></i>
										<a href="#">Mobile &amp; Retina Optimized</a>
									</li>
								</ul>
							</div>
							<div class="col-md-3">
								<h4>My Account</h4>
								<ul class="links">
									<li>
										<i class="fa fa-caret-right text-color-primary"></i>
										<a href="#">About Us</a>
									</li>
									<li>
										<i class="fa fa-caret-right text-color-primary"></i>
										<a href="#">Contact Us</a>
									</li>
									<li>
										<i class="fa fa-caret-right text-color-primary"></i>
										<a href="#">My account</a>
									</li>
									<li>
										<i class="fa fa-caret-right text-color-primary"></i>
										<a href="#">Orders history</a>
									</li>
									<li>
										<i class="fa fa-caret-right text-color-primary"></i>
										<a href="#">Advanced search</a>
									</li>
								</ul>
							</div>
							<div class="col-md-3">
								<div class="contact-details">
									<h4>Contact Information</h4>
									<ul class="contact">
										<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong><br> 1234 Street Name, City, US</p></li>
										<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong><br> (123) 456-7890</p></li>
										<li><p><i class="fa fa-envelope-o"></i> <strong>Email:</strong><br> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
										<li><p><i class="fa fa-clock-o"></i> <strong>Working Days/Hours:</strong><br> Mon - Sun / 9:00AM - 8:00PM</p></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					<div class="footer-copyright clearfix">
						<ul class="social-icons">
							<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							
						</ul>
						<img alt="Payments" src="img/demos/shop/payments.png" class="footer-payment">
						<p class="copyright-text">© Copyright 2017. All Rights Reserved.</p>
					</div>
				</footer>
			</div>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>

		<!--(remove-empty-lines-start)-->

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhpYHdYRY2U6V_VfyyNtkPHhywLjDkhfg"></script>

		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/
			*/

			// Map Markers
			var mapMarkers = [{
				address: "New York, NY 10017",
				html: "<strong>Porto Shop</strong><br>New York, NY 10017",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = 40.75198;
			var initLongitude = -73.96978;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 16
			};

			var map = $('#googlemaps').gMap(mapSettings),
				mapRef = $('#googlemaps').data('gMap.reference');

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

			var mapRef = $('#googlemaps').data('gMap.reference');

			// Styles from https://snazzymaps.com/
			var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

			var styledMap = new google.maps.StyledMapType(styles, {
				name: 'Styled Map'
			});

			mapRef.mapTypes.set('map_style', styledMap);
			mapRef.setMapTypeId('map_style');

		</script>






		<!--(remove-empty-lines-end)-->

		<!-- Demo -->
		<script src="js/demos/demo-shop-12.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>






		

	</body>
</html>
