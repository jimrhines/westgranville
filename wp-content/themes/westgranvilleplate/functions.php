<?php
	add_action( 'pre_comment_on_post', 'remove_comments_from_attachments', 10, 2 );
	/**
	 * Function to remove the comment section from all attachment pages
	 * 
	 * @param  $open
	 * @param  $post_id
	 */
	function remove_comments_from_attachments( $open, $post_id ){
	    return ( 'attachment' == get_post_type( $post_id )  ) ? false : $open;
	}

/**
* Set the objects and names for custom meta boxes in WordPress Admin
* http://www.farinspace.com/page-specific-wordpress-meta-box/
*/
	add_action('admin_init','my_meta_init');

	function my_meta_init(){
		global $post_id;
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;

		global $template_file;
		$template_file = get_post_meta($post_id,'_wp_page_template',true);

		//Home Page
		if ($template_file == 'home.php'){
			add_meta_box("worship_schedule_meta", "Worship Schedule", "worship_schedule_meta", "page", "normal", "high");
			add_meta_box("latest_news_meta", "Latest News", "latest_news_meta", "page", "normal", "high");
		}

		//Landing Pages
		if ($template_file != 'home.php'){
			add_meta_box("default_page_meta", "Main Content", "default_page_meta", "page", "normal", "high");
			add_meta_box("default_page_sidebar_meta", "Sidebar", "default_page_sidebar_meta", "page", "normal", "high");
		}

		add_action('save_post','my_meta_save');
	}

/**
* Add custom fields markup with browser text labels to WordPress Admin
*/

	function worship_schedule_meta() {
		global $post;
		$custom = get_post_custom($post->ID);
		$worship_schedule_A_month = $custom["worship_schedule_A_month"][0];
		$worship_schedule_A_date = $custom["worship_schedule_A_date"][0];
		$worship_schedule_A_time = $custom["worship_schedule_A_time"][0];
		$worship_schedule_A_content = $custom["worship_schedule_A_content"][0];
		$worship_schedule_B_month = $custom["worship_schedule_B_month"][0];
		$worship_schedule_B_date = $custom["worship_schedule_B_date"][0];
		$worship_schedule_B_time = $custom["worship_schedule_B_time"][0];
		$worship_schedule_B_content = $custom["worship_schedule_B_content"][0];
		$worship_schedule_C_month = $custom["worship_schedule_C_month"][0];
		$worship_schedule_C_date = $custom["worship_schedule_C_date"][0];
		$worship_schedule_C_time = $custom["worship_schedule_C_time"][0];
		$worship_schedule_C_content = $custom["worship_schedule_C_content"][0];
		$worship_schedule_D_month = $custom["worship_schedule_D_month"][0];
		$worship_schedule_D_date = $custom["worship_schedule_D_date"][0];
		$worship_schedule_D_time = $custom["worship_schedule_D_time"][0];
		$worship_schedule_D_content = $custom["worship_schedule_D_content"][0];
	?>
	  	<h2>Worship Schedule A</h2>
	  	<p>
			<label for="worship_schedule_A_month">Worship Schedule A Month:</label><br />
	  		<input id="worship_schedule_A_month" name="worship_schedule_A_month" class="widefat" value="<?php echo esc_html($worship_schedule_A_month); ?>" />
	  	</p>
	  	<p>
			<label for="worship_schedule_A_date">Worship Schedule A Date:</label><br />
	  		<input id="worship_schedule_A_date" name="worship_schedule_A_date" class="widefat" value="<?php echo esc_html($worship_schedule_A_date); ?>" />
	  	</p>
	  	<p>
			<label for="worship_schedule_A_time">Worship Schedule A Time:</label><br />
	  		<input id="worship_schedule_A_time" name="worship_schedule_A_time" class="widefat" value="<?php echo esc_html($worship_schedule_A_time); ?>" />
	  	</p>
	  	<p>
	  		<label for="worship_schedule_A_content">Worship Schedule A Content:</label><br />
	  		<textarea id="worship_schedule_A_content" name="worship_schedule_A_content" rows="10" class="widefat"><?php echo esc_html($worship_schedule_A_content); ?></textarea>
	  	</p>
	  	<h2>Worship Schedule B</h2>
	  	<p>
			<label for="worship_schedule_B_month">Worship Schedule B Month:</label><br />
	  		<input id="worship_schedule_B_month" name="worship_schedule_B_month" class="widefat" value="<?php echo esc_html($worship_schedule_B_month); ?>" />
	  	</p>
	  	<p>
			<label for="worship_schedule_B_date">Worship Schedule B Date:</label><br />
	  		<input id="worship_schedule_B_date" name="worship_schedule_B_date" class="widefat" value="<?php echo esc_html($worship_schedule_B_date); ?>" />
	  	</p>
	  	<p>
			<label for="worship_schedule_B_time">Worship Schedule B Time:</label><br />
	  		<input id="worship_schedule_B_time" name="worship_schedule_B_time" class="widefat" value="<?php echo esc_html($worship_schedule_B_time); ?>" />
	  	</p>
	  	<p>
	  		<label for="worship_schedule_B_content">Worship Schedule B Content:</label><br />
	  		<textarea id="worship_schedule_B_content" name="worship_schedule_B_content" rows="10" class="widefat"><?php echo esc_html($worship_schedule_B_content); ?></textarea>
	  	</p>
	  	<h2>Worship Schedule C</h2>
	  	<p>
			<label for="worship_schedule_C_month">Worship Schedule C Month:</label><br />
	  		<input id="worship_schedule_C_month" name="worship_schedule_C_month" class="widefat" value="<?php echo esc_html($worship_schedule_C_month); ?>" />
	  	</p>
	  	<p>
			<label for="worship_schedule_C_date">Worship Schedule C Date:</label><br />
	  		<input id="worship_schedule_C_date" name="worship_schedule_C_date" class="widefat" value="<?php echo esc_html($worship_schedule_C_date); ?>" />
	  	</p>
	  	<p>
			<label for="worship_schedule_C_time">Worship Schedule C Time:</label><br />
	  		<input id="worship_schedule_C_time" name="worship_schedule_C_time" class="widefat" value="<?php echo esc_html($worship_schedule_C_time); ?>" />
	  	</p>
	  	<p>
	  		<label for="worship_schedule_C_content">Worship Schedule C Content:</label><br />
	  		<textarea id="worship_schedule_C_content" name="worship_schedule_C_content" rows="10" class="widefat"><?php echo esc_html($worship_schedule_C_content); ?></textarea>
	  	</p>
	  	<h2>Worship Schedule D</h2>
	  	<p>
			<label for="worship_schedule_D_month">Worship Schedule D Month:</label><br />
	  		<input id="worship_schedule_D_month" name="worship_schedule_D_month" class="widefat" value="<?php echo esc_html($worship_schedule_D_month); ?>" />
	  	</p>
	  	<p>
			<label for="worship_schedule_D_date">Worship Schedule D Date:</label><br />
	  		<input id="worship_schedule_D_date" name="worship_schedule_D_date" class="widefat" value="<?php echo esc_html($worship_schedule_D_date); ?>" />
	  	</p>
	  	<p>
			<label for="worship_schedule_D_time">Worship Schedule D Time:</label><br />
	  		<input id="worship_schedule_D_time" name="worship_schedule_D_time" class="widefat" value="<?php echo esc_html($worship_schedule_D_time); ?>" />
	  	</p>
	  	<p>
	  		<label for="worship_schedule_D_content">Worship Schedule D Content:</label><br />
	  		<textarea id="worship_schedule_D_content" name="worship_schedule_D_content" rows="10" class="widefat"><?php echo esc_html($worship_schedule_D_content); ?></textarea>
	  	</p>
	<?php
	}

	function latest_news_meta() {
		global $post;
		$custom = get_post_custom($post->ID);
		$latest_news_A_content = $custom["latest_news_A_content"][0];
		$latest_news_B_content = $custom["latest_news_B_content"][0];
		$latest_news_C_content = $custom["latest_news_C_content"][0];
		$latest_news_D_content = $custom["latest_news_D_content"][0];
	?>
		<p>Use &#60;h4&#62; for dates and &#60;h5&#62; for headlines for that date. Use &#60;p&#62; tags for content below &#60;h5&#62;. Within &#60;p&#62; tags, use &#60;br &#8725;&#62; to break content to a new line.</p>
		<p>
	  		<label for="latest_news_A_content">Latest News A Content:</label><br />
	  		<textarea id="latest_news_A_content" name="latest_news_A_content" rows="10" class="widefat"><?php echo esc_html($latest_news_A_content); ?></textarea>
	  	</p>
	  	<p>
	  		<label for="latest_news_B_content">Latest News B Content:</label><br />
	  		<textarea id="latest_news_B_content" name="latest_news_B_content" rows="10" class="widefat"><?php echo esc_html($latest_news_B_content); ?></textarea>
	  	</p>
	  	<p>
	  		<label for="latest_news_C_content">Latest News C Content:</label><br />
	  		<textarea id="latest_news_C_content" name="latest_news_C_content" rows="10" class="widefat"><?php echo esc_html($latest_news_C_content); ?></textarea>
	  	</p>
	  	<p>
	  		<label for="latest_news_D_content">Latest News D Content:</label><br />
	  		<textarea id="latest_news_D_content" name="latest_news_D_content" rows="10" class="widefat"><?php echo esc_html($latest_news_D_content); ?></textarea>
	  	</p>
	<?php
	}
	
	//Pastor's Message
	function default_page_meta() {
		global $post;
		$custom = get_post_custom($post->ID);
		$default_page_header_image = $custom["default_page_header_image"][0];
		$default_page_lead_image = $custom["default_page_lead_image"][0];
		$default_page_lead_image_alt = $custom["default_page_lead_image_alt"][0];
		$default_page_headline = $custom["default_page_headline"][0];
		$default_page_subheadline = $custom["default_page_subheadline"][0];
		$default_page_content = $custom["default_page_content"][0];
	?>
		<p>
			<label for="default_page_header_image">Header Image (altar-table.jpg, child-drawing.jpg, or congregation.jpg):</label><br />
	  		<input id="default_page_header_image" name="default_page_header_image" class="widefat" value="<?php echo esc_html($default_page_header_image); ?>" />
	  	</p>
		<p>
			<label for="default_page_lead_image">Lead Image (copy and paste URL from media library):</label><br />
	  		<input id="default_page_lead_image" name="default_page_lead_image" class="widefat" value="<?php echo esc_html($default_page_lead_image); ?>" />
	  	</p>
	  	<p>
			<label for="default_page_lead_image_alt">Lead Image Alt Text:</label><br />
	  		<input id="default_page_lead_image_alt" name="default_page_lead_image_alt" class="widefat" value="<?php echo esc_html($default_page_lead_image_alt); ?>" />
	  	</p>
		<p>
			<label for="default_page_headline">Headline:</label><br />
	  		<input id="default_page_headline" name="default_page_headline" class="widefat" value="<?php echo esc_html($default_page_headline); ?>" />
	  	</p>
	  	<p>
			<label for="default_page_subheadline">Sub Headline:</label><br />
	  		<input id="default_page_subheadline" name="default_page_subheadline" class="widefat" value="<?php echo esc_html($default_page_subheadline); ?>" />
	  	</p>
		<p>
	  		<label for="default_page_content">Content (use &#60;p&#62; and &#60;&#8725;p&#62; tags to separate paragraphs):</label><br />
	  		<textarea id="default_page_content" name="default_page_content" rows="10" class="widefat"><?php echo esc_html($default_page_content); ?></textarea>
	  	</p>
	<?php
	}

	function default_page_sidebar_meta() {
		global $post;
		$custom = get_post_custom($post->ID);
		$default_page_sidebar_headline = $custom["default_page_sidebar_headline"][0];
		$default_page_sidebar_content = $custom["default_page_sidebar_content"][0];
	?>
		<p>
			<label for="default_page_sidebar_headline">Headline:</label><br />
	  		<input id="default_page_sidebar_headline" name="default_page_sidebar_headline" class="widefat" value="<?php echo esc_html($default_page_sidebar_headline); ?>" />
	  	</p>
		<p>
	  		<label for="default_page_sidebar_content">Content:</label><br />
	  		<textarea id="default_page_sidebar_content" name="default_page_sidebar_content" rows="10" class="widefat"><?php echo esc_html($default_page_sidebar_content); ?></textarea>
	  	</p>
	<?php
	}
	
/**
* Ensures the data entered in the admin by the user is saved
*/
	function save_details(){
		global $post;
		
		//Home Page
		if ( isset($_POST['worship_schedule_A_month']) ) {
			update_post_meta($post->ID, "worship_schedule_A_month", $_POST["worship_schedule_A_month"]);
		}
		if ( isset($_POST['worship_schedule_A_date']) ) {
			update_post_meta($post->ID, "worship_schedule_A_date", $_POST["worship_schedule_A_date"]);
		}
		if ( isset($_POST['worship_schedule_A_time']) ) {
			update_post_meta($post->ID, "worship_schedule_A_time", $_POST["worship_schedule_A_time"]);
		}
		if ( isset($_POST['worship_schedule_A_content']) ) {
			update_post_meta($post->ID, "worship_schedule_A_content", $_POST["worship_schedule_A_content"]);
		}
		if ( isset($_POST['worship_schedule_B_month']) ) {
			update_post_meta($post->ID, "worship_schedule_B_month", $_POST["worship_schedule_B_month"]);
		}
		if ( isset($_POST['worship_schedule_B_date']) ) {
			update_post_meta($post->ID, "worship_schedule_B_date", $_POST["worship_schedule_B_date"]);
		}
		if ( isset($_POST['worship_schedule_B_time']) ) {
			update_post_meta($post->ID, "worship_schedule_B_time", $_POST["worship_schedule_B_time"]);
		}
		if ( isset($_POST['worship_schedule_B_content']) ) {
			update_post_meta($post->ID, "worship_schedule_B_content", $_POST["worship_schedule_B_content"]);
		}
		if ( isset($_POST['worship_schedule_C_month']) ) {
			update_post_meta($post->ID, "worship_schedule_C_month", $_POST["worship_schedule_C_month"]);
		}
		if ( isset($_POST['worship_schedule_C_date']) ) {
			update_post_meta($post->ID, "worship_schedule_C_date", $_POST["worship_schedule_C_date"]);
		}
		if ( isset($_POST['worship_schedule_C_time']) ) {
			update_post_meta($post->ID, "worship_schedule_C_time", $_POST["worship_schedule_C_time"]);
		}
		if ( isset($_POST['worship_schedule_C_content']) ) {
			update_post_meta($post->ID, "worship_schedule_C_content", $_POST["worship_schedule_C_content"]);
		}
		if ( isset($_POST['worship_schedule_D_month']) ) {
			update_post_meta($post->ID, "worship_schedule_D_month", $_POST["worship_schedule_D_month"]);
		}
		if ( isset($_POST['worship_schedule_D_date']) ) {
			update_post_meta($post->ID, "worship_schedule_D_date", $_POST["worship_schedule_D_date"]);
		}
		if ( isset($_POST['worship_schedule_D_time']) ) {
			update_post_meta($post->ID, "worship_schedule_D_time", $_POST["worship_schedule_D_time"]);
		}
		if ( isset($_POST['worship_schedule_D_content']) ) {
			update_post_meta($post->ID, "worship_schedule_D_content", $_POST["worship_schedule_D_content"]);
		}
		if ( isset($_POST['latest_news_A_content']) ) {
			update_post_meta($post->ID, "latest_news_A_content", $_POST["latest_news_A_content"]);
		}
		if ( isset($_POST['latest_news_B_content']) ) {
			update_post_meta($post->ID, "latest_news_B_content", $_POST["latest_news_B_content"]);
		}
		if ( isset($_POST['latest_news_C_content']) ) {
			update_post_meta($post->ID, "latest_news_C_content", $_POST["latest_news_C_content"]);
		}
		if ( isset($_POST['latest_news_D_content']) ) {
			update_post_meta($post->ID, "latest_news_D_content", $_POST["latest_news_D_content"]);
		}
		if ( isset($_POST['default_page_header_image']) ) {
			update_post_meta($post->ID, "default_page_header_image", $_POST["default_page_header_image"]);
		}
		if ( isset($_POST['default_page_lead_image']) ) {
			update_post_meta($post->ID, "default_page_lead_image", $_POST["default_page_lead_image"]);
		}
		if ( isset($_POST['default_page_lead_image_alt']) ) {
			update_post_meta($post->ID, "default_page_lead_image_alt", $_POST["default_page_lead_image_alt"]);
		}
		if ( isset($_POST['default_page_headline']) ) {
			update_post_meta($post->ID, "default_page_headline", $_POST["default_page_headline"]);
		}
		if ( isset($_POST['default_page_subheadline']) ) {
			update_post_meta($post->ID, "default_page_subheadline", $_POST["default_page_subheadline"]);
		}
		if ( isset($_POST['default_page_content']) ) {
			update_post_meta($post->ID, "default_page_content", $_POST["default_page_content"]);
		}
		if ( isset($_POST['default_page_sidebar_headline']) ) {
			update_post_meta($post->ID, "default_page_sidebar_headline", $_POST["default_page_sidebar_headline"]);
		}
		if ( isset($_POST['default_page_sidebar_content']) ) {
			update_post_meta($post->ID, "default_page_sidebar_content", $_POST["default_page_sidebar_content"]);
		}
	}

/**
* Final actions to do the above on init and save the posts
*/
	add_action('save_post', 'save_details');

?>