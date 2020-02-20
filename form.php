<?php
$errorMSG = "";
// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}
// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}
// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}

if ($errorMSG=='') {
	$EmailTo = "info@spheriuminc.com";
	$Subject = "New Message Received from Spherium Inc";
	// prepare email body text
	$Body = "Name: $name\nEmail: $email\nMessage:\n$message";
	// send email
	$headers = 'From: Spherium Inc site <noreply@spheriuminc.com>' . "\r\n" .
    'Reply-To: ' .$email. "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	$success = mail($EmailTo, $Subject, $Body, $headers);
	// redirect to success page
	if ($success && $errorMSG == ""){
	   echo "success";
	}else{
		if($errorMSG == ""){
		    echo "Something went wrong :(";
		} else {
		    echo $errorMSG;
		}
	}
} else {
	echo $errorMSG;
}
