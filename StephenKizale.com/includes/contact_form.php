<?php
	if (empty($_POST['name_11524']) && strlen($_POST['name_11524']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0)
	{
		return false;
	}
	
	$name_11524 = $_POST['name_11524'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message_11524 = $_POST['message_11524'];
	
	// Create Message	
	$to = 'kizale82@yahoo.com';
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\nName_11524: $name_11524 \nEmail: $email \nSubject: $subject \nMessage_11524: $message_11524 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: kizale82@gmail.com\r\n";
	$headers .= "Reply-To: $email";

	// Post Message
	if (function_exists('mail'))
	{
		$result = mail($to,$email_subject,$email_body,$headers);
	}
	else // Mail() Disabled
	{
		$error = array("message" => "The php mail() function is not available on this server.");
	    header('Content-Type: application/json');
	    http_response_code(500);
	    echo json_encode($error);
	}	
?>