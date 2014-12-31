<?php
/*
Template Name: Mission Page
*/

get_header(); ?>

<?php require 'includes/header-image-interior.php'; ?>
<div class="section row">
	<div class="col">
		<div class="row">
			<div class="col sm-12 md-6">
				<?php require 'includes/breadcrumbs.php'; ?>
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
	  				
	  				if (!empty($default_page_lead_image)) { ?>
	  					<img src="<?php bloginfo('url'); ?><?php echo $default_page_lead_image ?>" class="lead-image" alt="<?php echo $default_page_lead_image_alt ?>" />
				<?php } ?>
				<h1><?php echo $default_page_headline ?></h1>
	  			<?php if (!empty($default_page_subheadline)) { ?>
	  				<h2><?php echo $default_page_subheadline ?></h2>
	  			<?php } echo $default_page_content ?>
			</div>
			<div class="col sm-12 md-6">
				<div class="section-content row">
					<div class="col">
						<div class="tabs-horizontal">
							<ul class="resp-tabs-list group">
								<li>Church</li>
								<li>Community</li>
								<li>Nation</li>
								<li>World</li>
							</ul> 
							<div class="resp-tabs-container">
								<div>
									<h3>Prayer Shawl Ministry</h3>
									<p>Members of our congregation crochet or knit warm, soft prayer shawls which are given to people during crisis situations, health battles, loss of loved ones, and other times of need to remind them that they are wrapped in the prayers of our congregation and in God&#8217;s love.</p>
									<blockquote>&#8220;Whatever you ask in prayer, believe that you have received it, and it will be yours.&#8221; <cite>-Mark 11: 24</cite></blockquote>
								</div>
								<div>
									<h3>Food Pantry</h3>
									<p>West Granville collects food for the United Methodist Church of the Good Hope Food Pantry (the only food pantry serving the northwest side of Milwaukee County) throughout the year on communion Sundays, and every week in November, plus special projects by Sunday School &amp; Youth Groups (such as Easter baskets). Our members also volunteer at the food pantry on Wednesdays and Saturdays, helping sort and bag food for recipients in the community. The church and its food pantry are located at 8700 West Good Hope Road in Milwaukee.</p>
									<blockquote>&#8220;For I was hungry and you gave me food, I was thirsty and you gave me something to drink.&#8221; <cite>-Matthew 25: 35</cite></blockquote>

									<h3><a href="http://www.dhs.wisconsin.gov/MH_Winnebago" class="block" target="_blank">Winnebago Mental Health Institute</a></h3> 
									<p>At Christmas time, West Granville members provide gifts for members of the Winnebago community, a state-run psychiatric hospital near Oshkosh that has provided care and treatment for persons with psychiatric problems since the 1870s. Many of the Winnebago patients otherwise might not receive any gifts.</p>
									<blockquote>&#8220;I was sick and you took care of me.&#8221; <cite>-Matthew 25: 36</cite></blockquote>

									<h3><a href="http://www.metahouse.org" class="block" target="_blank">Meta House</a></h3>
									<p>The West Granville women&#8217;s group, Open Circle, supports Meta House&#8217;s mission of helping women struggling with drug and alcohol addiction reclaim their lives and rebuild their families. Our support includes making fleece throws for the program participants and hosting a &#8220;shower&#8221; to collect clothing and supplies for the women and their children.</p>
									<blockquote>&#8220;I will seek the lost, and I will bring back the strayed, and I will bind up the injured, and I will strengthen the weak.&#8221; <cite>-Ezekiel 34: 16</cite></blockquote>

									<h3>Maple Tree Tutoring, Community Garden &amp; Growing Power</h3>	
									<p>In 1996, members of the church started serving as tutors at our neighborhood school, Maple Tree Elementary, working with third graders after school to help them improve their reading skills, and just spending quality time with them. We continue to aid the school through the annual collection of school supplies for the students and staff.</p>
									<blockquote>&#8220;Train children in the right way, and when old, they will not stray.&#8221; <cite>-Proverbs 22: 6</cite></blockquote>
									<p>In 2006, Maple Tree and West Granville partnered with Growing Power (an urban gardening initiative) to install a community garden behind the school. West Granville volunteers helped plant the garden in the first several years. In addition, volunteers assist in a neighborhood clean-up day and a community celebration bringing together people from government, education, the neighborhood and area churches.</p> 
									<blockquote>&#8220;The Lord God took the man and put him in the Garden of Eden to till it and keep it.&#8221; <cite>-Genesis 2: 15</cite></blockquote>

									<h3>Granville Interfaith</h3>
									<p>Granville Interfaith was founded as a neighborhood outreach to frail seniors after a study was led by West Granville Elder Fran Beverstock and the West Granville Mission Committee. Ten neighborhood congregations joined the project. Later the Milwaukee County Department on Aging and City of Milwaukee joined with us to form Granville Interfaith Senior Center, which operated for over twenty years. The Senior Center now is closed, but Granville Interfaith continues its outreach to area seniors from its office in Trinity Village.</p>
									<blockquote>&#8220;Old age is a crown of glory.&#8221; <cite>-Proverbs 16: 31</cite></blockquote>

									<h3><a href="http://www.milmission.org" class="block" target="_blank">Milwaukee Rescue Mission</a></h3> 
									<p>For over 50 years, West Granville&#8217;s members, particularly the young people, have been making regular visits to the Rescue Mission in downtown Milwaukee to prepare and serve meals to the residents and guests. In addition to providing a needed service for the Rescue Mission, this activity reinforces the spirit of service for our youth and gives them insight into those in need of God&#8217;s ongoing help.</p>	
									<blockquote>&#8220;If you offer your food to the hungry and satisfy the needs of the afflicted, then your light shall rise in the darkness and your gloom be like the noonday.&#8221; <cite>-Isaiah 58: 10</cite></blockquote>

									<h3><a href="http://milwaukeehabitat.org" class="block" target="_blank">Habitat for Humanity</a></h3> 		
									<p>West Granville teams and individuals have contributed talents and hard work to Habitat for Humanity for over 20 years. In that time the program has changed focus from the rehab of deteriorating homes in the central city, to construction of new homes, which enhances old neighborhoods. Today Habitat has green initiatives and operates area ReStores, selling recycled and previously-used building materials. Both skilled and unskilled help is needed at various times.</p>
									<blockquote>&#8220;Unless the Lord builds the house, those who build it labor in vain.&#8221; <cite>-Psalm 127: 1</cite></blockquote>

									<h3><a href="http://interfaithconference.org/cms-view-page.php?page=crop-hunger-walk" class="block" target="_blank">CROP Walk</a></h3>
									<p>Three years after the CROP Walk began in Milwaukee, West Granville walkers and donors were there, making significant contributions. The walk is held annually in October to provide food for the hungry in Milwaukee and raise funds to address poverty and famine worldwide.</p>
									<blockquote>&#8220;What does the Lord require of you, but to do justice, and to love kindness, and to walk humbly with your God? <cite>-Micah 6: 8</cite></blockquote>

									<h3>Community Meeting Place Resource</h3> 
									<p>Beginning in 1985 when neighbors and church members met to receive information and discuss the proposed commercial development west of the church property, West Granville has been a community resource for Girl Scouts, Boy Scouts, neighborhood organizations, AA and NA meetings, informational gatherings, and various other groups of people in the community needing a safe, local place to gather and talk.</p>
									<blockquote>&#8220;God will speak shalom to God&#8217;s people.&#8221; <cite>-Psalm 85: 8</cite></blockquote>
								</div>
								<div>
									<h3>Summer Youth Work Trips</h3> 
									<p>Our Senior High youth and their faithful chaperones have traveled to ten states and to Jamaica through annual summer mission trips since 1986. Traveling by an assortment of cars, vans, buses, and even planes over the years, West Granville&#8217;s teens have built and repaired homes and schools for those in need, and strengthened their own faith in the process. West Granville supports the fundraisers the youth conduct in preparation for the trips, and the Mission Committee donates financial support through its annual budget.</p>
									<blockquote>&#8220;For you have been a refuge to the poor, a refuge to the needy in their distress, a shelter from the rainstorm and a shade from the heat.&#8221; <cite>-Isaiah 25: 4</cite></blockquote>
								</div>
								<div>
									<h3><a href="http://www.presbyterianmission.org/ministries/pda" target="_blank">Presbyterian Disaster Assistance (PDA)</a></h3>
									<p>West Granville&#8217;s mission support extends around the globe with contributions to Presbyterian Disaster Assistance, which provides relief and response to national and international disasters, aid to refugees and displaced persons, refugee resettlement, and efforts towards development. In recent years, West Granville has supported PDA with aid for victims of the earthquake and tsunami in Japan, Hurricane Katrina in New Orleans, and the earthquake in Haiti, among others. The PDA is very responsive to disaster needs throughout the world, and can respond quickly and efficiently. Our church and our Mission Committee are in constant contact with the national Presbytery and stand ready to assist in whatever way we can when disaster strikes.</p>
									<blockquote>&#8220;God is our refuge and strength, a very present help in trouble.&#8221; <cite>-Psalm 46: 1</cite></blockquote>

									<h3><a href="http://www.amhf.us/pages/countries/malawi/ekwendeni-hospital" target="_blank">Ekwendeni Hospital, Malawi</a></h3>
									<p>West Granville has sent financial support as well as people to the Ekwendeni Hospital in northern Malawi, Africa. It is a general hospital that serves thousands of patients annually in its tuberculosis ward, ophthalmologic clinic, dental surgery clinic, orthopedic center, well-baby and outpatient clinic, and maternity and pediatrics units. It also provides mobile outreach clinics for young children and pregnant women, and its nursing school has trained students for over 50 years.</p>
									<blockquote>&#8220;For I will restore health to you, and your wounds I will heal.&#8221; <cite>-Jeremiah 30: 17</cite></blockquote>

									<h3>Missionary Support</h3>
									<p>We provide financial and prayer support for missionaries to other countries, both from among our own members and through the Presbyterian Church-U.S.A. Currently we support Jim and Jodi McGill, who have been missionaries in Malawi since 1995 and are raising their six children there. <a href="http://www.presbyterianmission.org/ministries/missionconnections/mcgill-james-and-jodi" target="_blank">Read about Jim and Jodi.</a></p> 
									<blockquote>&#8220;For those who love God all things work together for good, for those who are called according to his purpose.&#8221; <cite>-Romans 8: 28</cite></blockquote>

									<h3><a href="http://specialofferings.pcusa.org/oghs" target="_blank">One Great Hour of Sharing</a></h3>
									<p>West Granville annually dedicates a special collection to One Great Hour of Sharing, which supports the Presbyterian Church-U.S.A.&#8217;s disaster response and refugee assistance and resettlement. Throughout Lent, the children of the church put coins into a special fish-shaped box according to a calendar pointing out how their contributions can help others.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>