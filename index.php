<?php

$to = $_POST["to"];
$from = $_POST["from"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$body = "This is an Automated E-Mail Sent from $from. Please Do reply if it has use. \n\n $message";

$headers = "From: $from";

mail($to,$subject,$body,$headers);

echo "Your Message Has Been Sent Successfully!!.";
?>