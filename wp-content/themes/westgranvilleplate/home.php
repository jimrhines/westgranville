<?php
/*
Template Name: Home Page
*/

get_header(); ?>
<div id="positioning-statement">
	<h1>We are West Granville.</h1>
	<?php
		$banner = array();
			$banner[] = "west-granville-rhines-wedding.jpg";
			$banner[] = "west-granville-bell-choir.jpg";
			$banner[] = "west-granville-benton-harbor.jpg";
			$banner[] = "west-granville-boy-scouts.jpg";
			$banner[] = "west-granville-cookout.jpg";
			$banner[] = "west-granville-kids.jpg";
			$banner[] = "west-granville-golf-outing.jpg";
		shuffle($banner);
	?>
	<img src="<?php bloginfo('stylesheet_directory'); ?>/content/img/home-banners/<?php echo $banner[0] ?>" alt="West Granville Presbyterian Church and members of the congregation." />
</div>
<div class="section row">
	<div class="col">
		<div class="row">
			<div id="welcome-statement" class="col sm-12 md-6">
				<p>West Granville is an open and living congregation which believes that each person bears a reflection of the image and likeness of our Creator. Within the church family we are encouraged to share our insights, feelings and reflections freely. We treasure deeply held values and yet teach tolerance and respect. There is a true freedom from being accepted in a community of faith while being challenged to grow deeper in our walk with God.</p>
				<h2>West Granville&#8217;s Welcoming Statement</h2>
				<h3 class="h4">Unanimously adopted by the West Granville Session: August 23, 2004</h3>
				<p>The Apostle Paul tells us in Galatians that we are all one in Christ Jesus.</p>
				<p>Recognizing that God&#8217;s Grace is available to everyone, we open our doors and strive for full participation for all believers regardless of their gender, age, ethnicity, sexual identity, physical or mental ability, social status, or family structure.</p>
				<p>Guide our steps as we work toward unity.</p>
				<div class="video-container">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/zU6waBsnMgs?showinfo=0&amp;rel=0&amp;html5=1" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col sm-12 md-3">
				<div class="panel">
					<h3>Worship Schedule</h3>
					<ul class="schedule-news reduced">
						<?php
							$worship_schedule_A_month = get_post_custom_values('worship_schedule_A_month');
							foreach ( $worship_schedule_A_month as $key => $value ) {
								$worship_schedule_A_month = $value;
							}
							$worship_schedule_A_date = get_post_custom_values('worship_schedule_A_date');
							foreach ( $worship_schedule_A_date as $key => $value ) {
								$worship_schedule_A_date = $value;
							}
							$worship_schedule_A_time = get_post_custom_values('worship_schedule_A_time');
							foreach ( $worship_schedule_A_time as $key => $value ) {
								$worship_schedule_A_time = $value;
							}
							$worship_schedule_A_content = get_post_custom_values('worship_schedule_A_content');
							foreach ( $worship_schedule_A_content as $key => $value ) {
								$worship_schedule_A_content = $value;
							}
							$worship_schedule_B_month = get_post_custom_values('worship_schedule_B_month');
							foreach ( $worship_schedule_B_month as $key => $value ) {
								$worship_schedule_B_month = $value;
							}
							$worship_schedule_B_date = get_post_custom_values('worship_schedule_B_date');
							foreach ( $worship_schedule_B_date as $key => $value ) {
								$worship_schedule_B_date = $value;
							}
							$worship_schedule_B_time = get_post_custom_values('worship_schedule_B_time');
							foreach ( $worship_schedule_B_time as $key => $value ) {
								$worship_schedule_B_time = $value;
							}
							$worship_schedule_B_content = get_post_custom_values('worship_schedule_B_content');
							foreach ( $worship_schedule_B_content as $key => $value ) {
								$worship_schedule_B_content = $value;
							}
							$worship_schedule_C_month = get_post_custom_values('worship_schedule_C_month');
							foreach ( $worship_schedule_C_month as $key => $value ) {
								$worship_schedule_C_month = $value;
							}
							$worship_schedule_C_date = get_post_custom_values('worship_schedule_C_date');
							foreach ( $worship_schedule_C_date as $key => $value ) {
								$worship_schedule_C_date = $value;
							}
							$worship_schedule_C_time = get_post_custom_values('worship_schedule_C_time');
							foreach ( $worship_schedule_C_time as $key => $value ) {
								$worship_schedule_C_time = $value;
							}
							$worship_schedule_C_content = get_post_custom_values('worship_schedule_C_content');
							foreach ( $worship_schedule_C_content as $key => $value ) {
								$worship_schedule_C_content = $value;
							}
							$worship_schedule_D_month = get_post_custom_values('worship_schedule_D_month');
							foreach ( $worship_schedule_D_month as $key => $value ) {
								$worship_schedule_D_month = $value;
							}
							$worship_schedule_D_date = get_post_custom_values('worship_schedule_D_date');
							foreach ( $worship_schedule_D_date as $key => $value ) {
								$worship_schedule_D_date = $value;
							}
							$worship_schedule_D_time = get_post_custom_values('worship_schedule_D_time');
							foreach ( $worship_schedule_D_time as $key => $value ) {
								$worship_schedule_D_time = $value;
							}
							$worship_schedule_D_content = get_post_custom_values('worship_schedule_D_content');
							foreach ( $worship_schedule_D_content as $key => $value ) {
								$worship_schedule_D_content = $value;
							}

							$a = array(
								array($worship_schedule_A_month, $worship_schedule_A_date, $worship_schedule_A_time, $worship_schedule_A_content),
								array($worship_schedule_B_month, $worship_schedule_B_date, $worship_schedule_B_time, $worship_schedule_B_content),
								array($worship_schedule_C_month, $worship_schedule_C_date, $worship_schedule_C_time, $worship_schedule_C_content),
								array($worship_schedule_D_month, $worship_schedule_D_date, $worship_schedule_D_time, $worship_schedule_D_content)
							);

							for ($row = 0; $row < count($a); $row++) {
								if($a[$row][0] != "") {
									echo 
										"<li class=\"worship-schedule\">
											<div class=\"worship-date-container\">
												<span class=\"worship-date\">".$a[$row][1]."</span>
												<span class=\"worship-month\">".$a[$row][0]."</span>
												<span class=\"worship-time\">".$a[$row][2]."</span>
											</div>
											<p>".$a[$row][3]."</p>
										</li>";
								}
							}
						?>
					</ul>
				</div>
			</div>
			<div class="col sm-12 md-3 last">
				<div class="panel">
					<h3>Latest News / Events</h3>
					<ul class="schedule-news reduced">
						<?php
							$latest_news_A_content = get_post_custom_values('latest_news_A_content');
							foreach ( $latest_news_A_content as $key => $value ) {
								$latest_news_A_content = $value;
							}
							$latest_news_B_content = get_post_custom_values('latest_news_B_content');
							foreach ( $latest_news_B_content as $key => $value ) {
								$latest_news_B_content = $value;
							}
							$latest_news_C_content = get_post_custom_values('latest_news_C_content');
							foreach ( $latest_news_C_content as $key => $value ) {
								$latest_news_C_content = $value;
							}
							$latest_news_D_content = get_post_custom_values('latest_news_D_content');
							foreach ( $latest_news_D_content as $key => $value ) {
								$latest_news_D_content = $value;
							}

							$a = array(
								array($latest_news_A_content),
								array($latest_news_B_content),
								array($latest_news_C_content),
								array($latest_news_D_content)
							);

							for ($row = 0; $row < count($a); $row++) {
								if($a[$row][0] != "") {
									echo 
										"<li>".$a[$row][0]."</li>";
								}
							}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>	
<?php get_footer(); ?>