		</main>

			<footer id="site-footer" role="contentinfo">
				<div class="row">
					<div class="col md-6 last">
						<nav class="utility">
							<h2 class="assistive-text">Utility navigation</h2>
							<ul class="inline-list piped">
								<li><a href="<?php echo home_url( '/' ); ?>">Legal Notice</a></li>
								<li><a href="<?php echo home_url( '/' ); ?>">Privacy Policy</a></li>
								<li><a href="<?php echo home_url( '/' ); ?>">Site Map</a></li>
							</ul>

							<ul class="social-nav">
								<li>
									<a href="https://www.facebook.com" class="icon icon-facebook" target="_blank">
										<span class="fa fa-facebook"></span><span class="assistive-text">Facebook</span>
									</a>
								</li>
								<li>
									<a href="https://www.youtube.com" class="icon icon-youtube" target="_blank">
										<span class="fa fa-youtube-play"></span><span class="assistive-text">YouTube</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="col md-6">
						<small class="copyright">&#169; <?php echo date("Y"); ?> <a href=""><?php bloginfo( 'name' ); ?></a></small>
					</div>
				</div>
			</footer>
		</div>

		<nav id="mobile-nav" class="show-for-sm">
			<h2 class="assistive-text">Mobile navigation</h2>
			<ul class="nav group">
				<li class="nav-item nav-item-home"><a href="<?php echo home_url( '/' ); ?>">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo home_url( '/' ); ?>">Grid</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo home_url( '/' ); ?>">Tabs</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo home_url( '/' ); ?>">Videos</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo home_url( '/' ); ?>">Contact Form</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo home_url( '/' ); ?>">Examples</a></li>
			</ul>
		</nav>
		<!-- init: navigation -->
		<script src="<?php bloginfo('stylesheet_directory'); ?>/content/js/_libs/jquery.hoverIntent/jquery.hoverIntent-r7.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/content/js/shared/navigation.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/content/js/shared/flexslider.js"></script>
	</body>
</html>