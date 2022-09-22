<?php
$to_email = "reelsmast9953@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, Your Order is successfully from ayushi";
$headers = "From: reelsmast9953@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent";
} else {
    echo "Email sending failed...";
}