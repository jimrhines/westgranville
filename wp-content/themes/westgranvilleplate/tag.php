<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage WestGranvilleplate
 * @since Boilerplate 1.0
 */

get_header(); ?>
<div class="section row">
	<div class="col">
		<div class="row">
			<div class="col sm-12 md-9">
				<?php require 'includes/breadcrumbs.php'; ?>
				<h1><?php
					printf( __( 'Tag Archives: %s', 'boilerplate' ), '' . single_tag_title( '', false ) . '' );
				?></h1>
				<?php
				/* Run the loop for the tag archive to output the posts
				 * If you want to overload this in a child theme then include a file
				 * called loop-tag.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'tag' );
				?>
			</div>
			<div class="col sm-12 md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>