<?php
/*
Template Name: Form Page
*/

get_header(); ?>

<?php require 'includes/header-image-interior.php'; ?>
<div class="section row">
	<div class="col">
		<div class="row">
			<div class="col sm-12 md-6">
				<?php require 'includes/breadcrumbs.php'; ?>
				<?php
					$default_page_headline = get_post_custom_values('default_page_headline');
	  				foreach ( $default_page_headline as $key => $value ) {
	    				$default_page_headline = $value;
	  				}
	  				$default_page_content = get_post_custom_values('default_page_content');
					foreach ( $default_page_content as $key => $value ) {
						$default_page_content = $value;
					}
	  			?>
				<h1><?php echo $default_page_headline ?></h1>
				<?php echo $default_page_content ?>
				<form action="<?php echo home_url( '/' ); ?>form-page-processing" method="post" id="contact-form">
					<p><em>&#40;&#42;&#41; Required fields.</em></p>
					<fieldset>
						<legend>Personal Information</legend>

						<div class="row">
							<div class="form-group col xs-12 sm-6 md-6"> 
								<label for="FirstName">First Name</label>
								<input type="text" id="FirstName" name="FirstName" title="Please enter a First Name." maxlength="50" required autofocus data-val="true" data-val-length="First Name length cannot exceed 50 characters" data-val-length-max="50" data-val-required="Please enter a First Name." />
								<span class="field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span>
							</div>

							<div class="form-group col xs-12 sm-6 md-6">
								<label for="LastName">Last Name</label>
								<input type="text" id="LastName" name="LastName" title="Please enter a Last Name." required data-val="true" data-val-length="Last Name length cannot exceed 100 characters" data-val-length-max="100" data-val-required="Please enter a Last Name." maxlength="100" />
								<span class="field-validation-valid" data-valmsg-for="LastName" data-valmsg-replace="true"></span>
							</div>
						</div>

						<div class="form-group">
							<label for="CompanyName">Company Name</label>
							<input type="text" id="CompanyName" name="CompanyName" data-val="true" data-val-length="Company Name length cannot exceed 100 characters" data-val-length-max="100" maxlength="100" />
							<span class="field-validation-valid" data-valmsg-for="CompanyName" data-valmsg-replace="true"></span>
						</div>

						<div class="form-group">
							<label for="AddressLine1">Address Line 1</label>
							<input type="text" id="AddressLine1" name="AddressLine1" data-val="true" data-val-length="Address Line 1 length cannot exceed 100 characters" data-val-length-max="100" maxlength="100" />
							<span class="field-validation-valid" data-valmsg-for="AddressLine1" data-valmsg-replace="true"></span>
						</div>

						<div class="form-group">
							<label for="AddressLine2">Address Line 2 <span class="fa fa-question-circle tooltip-trigger-icon" data-tooltip title="This field should include a suite or apartment number if necessary."></span></label>
							<input type="text" id="AddressLine2" name="AddressLine2" data-val="true" data-val-length="Address Line 2 length cannot exceed 100 characters" data-val-length-max="100" maxlength="100" />
							<span class="field-validation-valid" data-valmsg-for="AddressLine2" data-valmsg-replace="true"></span>
						</div>

						<div class="row">
							<div class="form-group col md-6">
								<label for="City">City</label>
								<input type="text" id="City" name="City" data-val="true" data-val-length="City length cannot exceed 100 characters" data-val-length-max="100" maxlength="100" />
								<span class="field-validation-valid" data-valmsg-for="City" data-valmsg-replace="true"></span>
							</div>

							<div class="form-group col xs-8 sm-6 md-4">
								<label for="State">State</label>
								<select id="State" name="State">
									<option value="" selected disabled>Please Select</option> 
									<option value="AL">Alabama</option> 
									<option value="AK">Alaska</option> 
									<option value="AZ">Arizona</option> 
									<option value="AR">Arkansas</option> 
									<option value="CA">California</option> 
									<option value="CO">Colorado</option> 
									<option value="CT">Connecticut</option> 
									<option value="DE">Delaware</option> 
									<option value="DC">District Of Columbia</option> 
									<option value="FL">Florida</option> 
									<option value="GA">Georgia</option> 
									<option value="HI">Hawaii</option> 
									<option value="ID">Idaho</option> 
									<option value="IL">Illinois</option> 
									<option value="IN">Indiana</option> 
									<option value="IA">Iowa</option> 
									<option value="KS">Kansas</option> 
									<option value="KY">Kentucky</option> 
									<option value="LA">Louisiana</option> 
									<option value="ME">Maine</option> 
									<option value="MD">Maryland</option> 
									<option value="MA">Massachusetts</option> 
									<option value="MI">Michigan</option> 
									<option value="MN">Minnesota</option> 
									<option value="MS">Mississippi</option> 
									<option value="MO">Missouri</option> 
									<option value="MT">Montana</option> 
									<option value="NE">Nebraska</option> 
									<option value="NV">Nevada</option> 
									<option value="NH">New Hampshire</option> 
									<option value="NJ">New Jersey</option> 
									<option value="NM">New Mexico</option> 
									<option value="NY">New York</option> 
									<option value="NC">North Carolina</option> 
									<option value="ND">North Dakota</option> 
									<option value="OH">Ohio</option> 
									<option value="OK">Oklahoma</option> 
									<option value="OR">Oregon</option> 
									<option value="PA">Pennsylvania</option> 
									<option value="RI">Rhode Island</option> 
									<option value="SC">South Carolina</option> 
									<option value="SD">South Dakota</option> 
									<option value="TN">Tennessee</option> 
									<option value="TX">Texas</option> 
									<option value="UT">Utah</option> 
									<option value="VT">Vermont</option> 
									<option value="VA">Virginia</option> 
									<option value="WA">Washington</option> 
									<option value="WV">West Virginia</option> 
									<option value="WI">Wisconsin</option> 
									<option value="WY">Wyoming</option>
								</select>
								<span class="field-validation-valid" data-valmsg-for="State" data-valmsg-replace="true"></span>
							</div>

							<div class="form-group col xs-4 sm-3 md-2">
								<label for="ZipCode">ZIP Code</label>
								<input type="text" id="ZipCode" name="ZipCode" pattern="[0-9]*" title="Please enter a ZIP Code." required class="input-zip" data-val="true" data-val-length="ZIP Code length cannot exceed 5 characters" data-val-length-max="5" data-val-required="Please enter a ZIP Code." data-val-regex="Invalid ZIP Code format." data-val-regex-pattern="^\d{5}(?:[-\s]\d{4})?$" maxlength="5" />
								<span class="field-validation-valid" data-valmsg-for="ZipCode" data-valmsg-replace="true"></span>
							</div>
						</div>

						<div class="row">
							<div class="form-group col xs-12 sm-6">
								<label for="Phone">Phone Number</label>
								<input type="tel" id="Phone" name="Phone" title="Please enter a Phone Number." required data-val="true" data-val-length="Phone Number length cannot exceed 10 characters" data-val-length-max="14" data-val-required="Please enter a Phone Number." maxlength="14" />
								<span class="field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span>
							</div>

							<div class="form-group col xs-12 sm-6">
								<label for="Email">Email Address</label>
								<input type="email" id="Email" name="Email" title="Please enter an Email Address" required data-val="true" data-val-length="Email Address length cannot exceed 254 characters" data-val-length-max="254" data-val-email="Please enter a valid Email Address." data-val-required="Please enter an Email Address." maxlength="254" />
								<span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
							</div>
						</div>
					</fieldset>

					<div class="form-group char-limiter">
						<label for="Comments">Comments / Questions?</label>
						<span class="small char-counter"><span class="char-count"></span> characters remain</span>
						<textarea id="Comments" name="Comments" maxlength="500"></textarea>
						<span class="field-validation-valid" data-valmsg-for="Comments" data-valmsg-replace="true"></span>
					</div>

					<div class="form-group">
						<label class="checkbox" for="EmailOptIn">
							<input type="checkbox" id="EmailOptIn" name="EmailOptIn" />
							<strong>Yes</strong>, please sign me up for the West Granville Email list.
						</label>
						<label class="checkbox" for="PostalMailOptIn">
							<input type="checkbox" id="PostalMailOptIn" name="PostalMailOptIn" />
							<strong>Yes</strong>, please sign me up for the West Granville postal mailing list.
						</label>
					</div>

					<?php require 'includes/honeypot.php'; ?>

					<div class="form-actions">
						<button type="submit" class="btn btn-primary btn-submit">Submit</button>
					</div>

					<div class="form-validation-error" style="display:none">
						<span class="fa fa-exclamation-circle fa-2x"></span>
						<p></p>
					</div>
				</form>
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