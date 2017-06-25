<?php include 'header.php';?>
<?php $shown=""; ?>
<?php include 'menu.php';?>


<div role="main" class="main">

				<div class="container main-container mt-8px">
					<div class="wrapper-container">
						<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
						<div id="googlemaps" class="google-map"></div>

						<div class="section-contact-area">
							<div class="container">
								<div class="row">
									<div class="col-md-8">

										<div class="alert alert-success hidden mt-lg" id="contactSuccess">
											<strong>Success!</strong> Your message has been sent to us.
										</div>

										<div class="alert alert-danger hidden mt-lg" id="contactError">
											<strong>Error!</strong> There was an error sending your message.
											<span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
										</div>

										<h2 class="heading-text-color">Leave a <strong>Message</strong></h2>
										<form id="contactForm" action="php/contact-form.php" method="POST">
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label>Name *</label>
														<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
													</div>

													<div class="form-group">
														<label>Email *</label>
														<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
													</div>

													<div class="form-group">
														<label>Subject</label>
														<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
													</div>
												</div>

												<div class="col-sm-6">
													<div class="form-group mb-lg">
														<label>Message *</label>
														<textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required></textarea>
													</div>

													<input type="submit" value="Send Message" class="btn btn-primary mb-xlg" data-loading-text="Loading...">
												</div>
											</div>
										</form>
									</div>
									<div class="col-md-4">
										<h2 class="heading-text-color">Contact <strong>Details</strong></h2>
										<ul class="list-unstyled list-contact">
											<li>
												<i class="fa fa-phone"></i> 
												<div>0201 203 2032</div>
												<div>0201 203 2032</div>
											</li>
											<li>
												<i class="fa fa-mobile"></i> 
												<div>201-123-3922</div>
												<div>302-123-3928</div>
											</li>
											<li>
												<i class="fa fa-envelope"></i> 
												<div>porto@gmail.com</div>
												<div>porto@portotemplate.com</div>
											</li>
											<li>
												<i class="fa fa-skype"></i> 
												<div>porto_skype</div>
												<div>proto_template</div>
											</li>
										</ul>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<?php include 'footer.php';?>


