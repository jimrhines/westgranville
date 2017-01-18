		</main>

			<footer id="site-footer" role="contentinfo">
				<div class="row">
					<div class="col md-3">
						<nav>
							<h2>Church Groups &amp; Events</h2>
							<ul class="reduced">
								<?php if ( dynamic_sidebar('first-footer-widget-area') ) : else : endif; ?>
							</ul>
						</nav>
					</div>
					<div class="col md-3">
						<nav>
							<h2>Helpful Links</h2>
							<ul>
								<li><a href="<?php echo home_url( '/' ); ?>contact-us">Contact Us</a></li>
								<li><a href="http://pcusa.org/peacemaking" target="_blank">PCUSA Peacemaking</a></li>
								<li><a href="<?php echo home_url( '/' ); ?>community-links">Community Links</a></li>
								<li><a href="<?php echo home_url( '/' ); ?>scholarships">Scholarships</a></li>
								<li><span class="fa fa-file-word-o"></span> <a href="<?php echo home_url( '/' ); ?>wp-content/uploads/2014/12/wgpc-relief-fund-request-form.doc">Relief Fund Request Form</a></li>
								<li><span class="fa fa-file-pdf-o"></span> <a href="<?php echo home_url( '/' ); ?>wp-content/uploads/2017/01/2016-west-granville-annual-report.pdf" target="_blank">2016 Annual Report</a></li>
							</ul>
						</nav>
					</div>
					<div class="col md-3">
						<h2>Directions</h2>
						<?php require 'includes/postal-address.php'; ?>
						<form id="directions" action="http://maps.google.com/maps" method="get" target="_blank">
							<label for="saddr">Enter your starting address:</label>
							<input type="text" name="saddr" id="saddr" size="28" value="" />
			             	<input type="hidden" name="daddr" value="6935 North 107th Street, Milwaukee, WI 53224-4316" />
			            	<input type="hidden" name="hl" value="en" />
			            	<div class="form-actions">
								<button type="submit" class="btn btn-primary btn-submit">Get Directions</button>
							</div>
						</form>
					</div>
					<div class="col md-3 last">
						<nav class="utility">
							<h2 class="assistive-text">Utility navigation</h2>
							<ul class="inline-list piped">
								<li><a href="<?php echo home_url( '/' ); ?>legal-notice">Legal Notice</a></li>
								<li><a href="<?php echo home_url( '/' ); ?>privacy-policy">Privacy Policy</a></li>
								<li><a href="<?php echo home_url( '/' ); ?>site-map">Site Map</a></li>
							</ul>

							<ul class="social-nav">
								<li>
									<a href="https://www.facebook.com/groups/131212920287320/" class="icon icon-facebook" target="_blank">
										<span class="fa fa-facebook"></span><span class="assistive-text">Facebook</span>
									</a>
								</li>
							</ul>
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
								<input type="hidden" name="cmd" value="_s-xclick" />
								<input type="hidden" name="hosted_button_id" value="ZCDNM3NXXYYLN" />
								<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal &#45; The safer, easier way to pay online." />
								<img src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" alt="" />
							</form>
						</nav>
					</div>
				</div>
				<div class="row">
					<div class="col md-6">
						<small class="copyright">&#169; <?php echo date("Y"); ?> <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a></small>
					</div>
				</div>
			</footer>
		</div>

		<nav id="mobile-nav" class="show-for-sm">
			<h2 class="assistive-text">Mobile navigation</h2>
			<ul class="nav group">
				<li class="nav-item nav-item-home"><a href="<?php echo home_url( '/' ); ?>">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo home_url( '/' ); ?>about-west-granville">About West Granville</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo home_url( '/' ); ?>pastors-message">Pastor&#8217;s Message</a></li>
				<li class="nav-item">
					<a href="<?php echo home_url( '/' ); ?>" class="nav-link dropdown-toggle" data-toggle="hover" aria-haspopup="true">Youth Education <span class="fa fa-caret-down"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo home_url( '/' ); ?>nursery">Nursery</a></li>
						<li><a href="<?php echo home_url( '/' ); ?>scholarships">Scholarships</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link" href="<?php echo home_url( '/' ); ?>contact-us">Contact Us</a></li>
			</ul>
		</nav>
		<!-- DOM Loaded JS -->
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<script>window.jQuery.ui || document.write('<script src="/content/js/_libs/jqueryui/jquery-ui-1.10.4.min.js"><\/script>')</script>
		
		<!-- init: mobile/touch/browser detection -->
		<script src="<?php bloginfo('stylesheet_directory'); ?>/content/js/shared/detection.js"></script>

		<!-- init: navigation -->
		<script src="<?php bloginfo('stylesheet_directory'); ?>/content/js/_libs/jquery.hoverIntent/jquery.hoverIntent-r7.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/content/js/shared/navigation.js"></script>
		
		<!-- init: form controls -->
		<script src="<?php bloginfo('stylesheet_directory'); ?>/content/js/_libs/jquery.validate/jquery.validate-1.12.0.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/content/js/_libs/jquery.validate/jquery.validate.unobtrusive.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/content/js/_libs/jquery.maskedinput/jquery.maskedinput-1.3.1.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/content/js/shared/form-controls.js"></script>

		<!-- init: easyResonsiveTabs -->
		<script src="<?php bloginfo('stylesheet_directory'); ?>/content/js/_libs/jquery.easyResponsiveTabs/jquery.easyResponsiveTabs.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/content/js/shared/easyResponsiveTabs.js"></script>
	
		<!-- init: tooltips -->
		<script src="<?php bloginfo('stylesheet_directory'); ?>/content/js/shared/tooltips.js"></script>
	</body>
</html>