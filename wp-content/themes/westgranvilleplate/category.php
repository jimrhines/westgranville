<?php
/**
 * The template for displaying Category Archive pages.
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
					printf( __( 'Category Archives: %s', 'boilerplate' ), '' . single_cat_title( '', false ) . '' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '' . $category_description . '';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>
			</div>
			<div class="col sm-12 md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>