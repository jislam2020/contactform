<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];


	$email_form = 'islamjahid316@gmail.com'

	$email_subject = "New Form Submission";

	$email_body = "User  Name: $name.\n".
					"user Email: $visitor_email.\n".
						"User Message: $message.\n";
    
    
	$to = "2015_jahidulislam@ihs-us.org";

	$headers = "From: $email_form \r\n";

	mail($to,$email_subject,$email_body,$headers);
	
