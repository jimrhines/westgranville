<?php
/**
 * The template for displaying Search Results pages.
 */

get_header(); ?>
<div class="section row">
	<div class="col">
		<div class="row">
			<div class="col sm-12 md-6">
				<?php require 'includes/breadcrumbs.php'; ?>
				<?php if ( have_posts() ) : ?>
					<h1><?php printf( __( 'Search Results for: %s', 'boilerplate' ), '' . get_search_query() . '' ); ?></h1>
					<?php
					/* Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called loop-search.php and that will be used instead.
					 */
					 get_template_part( 'loop', 'search' );
					?>
				<?php else : ?>
					<h1>Nothing Found</h1>
					<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
					<?php require 'includes/search-form.php'; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>