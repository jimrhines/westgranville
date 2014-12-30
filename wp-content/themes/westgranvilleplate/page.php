<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 */

get_header(); ?>
<div id="positioning-statement">
	<?php
		$default_page_header_image = get_post_custom_values('default_page_header_image');
		foreach ( $default_page_header_image as $key => $value ) {
			$default_page_header_image = $value;
		}
	?>
	<img src="<?php bloginfo('stylesheet_directory'); ?>/content/img/header-images/<?php echo $default_page_header_image ?>" alt="West Granville Presbyterian Church" />
</div>
<div class="section row">
	<div class="col">
		<div class="row">
			<div class="col sm-12 md-6">
				<?php
					$default_page_lead_image = get_post_custom_values('default_page_lead_image');
	  				foreach ( $default_page_lead_image as $key => $value ) {
	    				$default_page_lead_image = $value;
	  				}
	  				$default_page_lead_image_alt = get_post_custom_values('default_page_lead_image_alt');
	  				foreach ( $default_page_lead_image_alt as $key => $value ) {
	    				$default_page_lead_image_alt = $value;
	  				}
					$default_page_headline = get_post_custom_values('default_page_headline');
	  				foreach ( $default_page_headline as $key => $value ) {
	    				$default_page_headline = $value;
	  				}
	  				$default_page_subheadline = get_post_custom_values('default_page_subheadline');
					foreach ( $default_page_subheadline as $key => $value ) {
						$default_page_subheadline = $value;
					}
					$default_page_content = get_post_custom_values('default_page_content');
					foreach ( $default_page_content as $key => $value ) {
						$default_page_content = $value;
					}
	  			?>
	  			<?php if (!empty($default_page_lead_image)) { ?>
	  				<img src="<?php bloginfo('url'); ?><?php echo $default_page_lead_image ?>" class="lead-image" alt="<?php echo $default_page_lead_image_alt ?>" />
				<?php } ?>
				<h1><?php echo $default_page_headline ?></h1>
	  			<?php if (!empty($default_page_subheadline)) { ?>
	  				<h2><?php echo $default_page_subheadline ?></h2>
	  			<?php } echo $default_page_content ?>
			</div>
			<?php
				$default_page_sidebar_headline = get_post_custom_values('default_page_sidebar_headline');
				foreach ( $default_page_sidebar_headline as $key => $value ) {
					$default_page_sidebar_headline = $value;
				}
				$default_page_sidebar_content = get_post_custom_values('default_page_sidebar_content');
				foreach ( $default_page_sidebar_content as $key => $value ) {
					$default_page_sidebar_content = $value;
				}

				$a = array(
					array($default_page_sidebar_headline, $default_page_sidebar_content),
				);

				for ($row = 0; $row < count($a); $row++) {
					if($a[$row][0] != "") {
						echo 
							"<div class=\"col sm-12 md-6 panel\">
							<h3>".$a[$row][0]."</h3>"
							.$a[$row][1]."</div>";
					}
				}
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>