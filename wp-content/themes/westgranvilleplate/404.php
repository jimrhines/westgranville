<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>
<div class="section row">
	<div class="col">
		<div class="row">
			<article id="post-0" class="post error404 not-found col sm-12 md-6" role="main">
				<?php require 'includes/breadcrumbs.php'; ?>
				<h1>Page Not Found</h1>
				<p>We&#8217;re sorry, the page you requested is unavailable. Please modify your request by clicking the <a href="#" onclick="history.back(-1);return false">back button</a> on your browser or you can try to resolve the problem by:</p>
				<ul>
					<li>Using the navigation at the top of the page</li>
					<li>Viewing the <a href="<?php echo home_url( '/' ); ?>site-map">site map</a></li>
					<li>Entering keywords into the search box below</li>
				</ul>
				<?php require 'includes/search-form.php'; ?>
			</article>
		</div>
	</div>
</div>
<?php get_footer(); ?>
