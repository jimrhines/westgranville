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
			add_meta_box("worship_schedule_meta", "Worship Schedule", "normal", "low");
		}

		//Landing Pages
		//if ($template_file != 'home.php'){
		//}

		//Product Category Pages
		//add_meta_box("category_introduction_meta", "Introduction", "category_introduction_meta", "categories", "normal", "low");
		//add_meta_box("category_products_meta", "Category Products", "category_products_meta", "categories", "normal", "low");

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

	}

/**
* Final actions to do the above on init and save the posts
*/
	add_action('save_post', 'save_details');
?>