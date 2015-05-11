<div id="positioning-statement">
	<?php
		$default_page_header_image = get_post_custom_values('default_page_header_image');
		foreach ((array) $default_page_header_image as $key => $value ) {
			$default_page_header_image = $value;
		}
	?>
	<img src="<?php bloginfo('stylesheet_directory'); ?>/content/img/header-images/<?php echo $default_page_header_image ?>" alt="West Granville Presbyterian Church" />
</div>