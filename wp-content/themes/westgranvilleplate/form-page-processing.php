<?php
/*
Template Name: Form Page Processing Page
*/
?>

<?php
	//collect values from form
	$FirstName = $_REQUEST['FirstName'];
	$LastName = $_REQUEST['LastName'];
	$CompanyName = $_REQUEST['CompanyName'];
	$AddressLine1 = $_REQUEST['AddressLine1'];
	$AddressLine2 = $_REQUEST['AddressLine2'];
	$City = $_REQUEST['City'];
	$State = $_REQUEST['State'];
	$ZipCode = $_REQUEST['ZipCode'];
	$Phone = $_REQUEST['Phone'];
	$Email = $_REQUEST['Email'];
	$Comments = $_REQUEST['Comments'];
	$EmailOptIn = $_REQUEST['EmailOptIn'];
	$PostalMailOptIn = $_REQUEST['PostalMailOptIn'];
	$robotest = $_REQUEST['robotest'];
	if($robotest)
		$error = "You are a robot.";
	else {
		//craft and send email
		//$to = 'secretary@westgranville.org,pastord@westgranville.org,jimrhines@hotmail.com'; 
		$to = 'jimrhines@hotmail.com'; 
		$subject = 'New Web Lead'; 
		$message = "A lead has been generated from the website, information is below.\n
					First Name: $FirstName\n
					Last Name: $LastName\n
					Company Name: $CompanyName\n
					Address Line 1: $AddressLine1\n
					Address Line 2: $AddressLine2\n
					City: $City\n
					State: $State\n
					ZIP Code: $ZipCode\n
					Phone: $Phone\n
					Email Address: $Email\n
					Comments/Questions: $Comments\n
					Email Opt In: $EmailOptIn\n
					Postal Mail Opt In: $PostalMailOptIn";
		$headers = "From: secretary@westgranville.org";
		$mail_sent = @mail( $to, $subject, $message, $headers );
		header('Location: confirmation');
		echo $message;
	}
?>