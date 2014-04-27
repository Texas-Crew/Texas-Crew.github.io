<?php

// these people will get the form information
$recipients = array(
    //"RowForTexas@gmail.com",
    //"aiansheridan11@gmail.com"
    "prakharg105@gmail.com"
    
);

$message = "Recruiting Form";
$message = "Name: " . $_REQUEST['name'] . "\n";
$message .= "Email: " . $_REQUEST['email'] . "\n";

$message .= "Subject: " . $_REQUEST['subject'] . "\n";

$message .= "Message: " . $_REQUEST['message'] . "\n";

mail(join(",", $recipients), 'Recruiting Form', $message, "From: " . $_REQUEST['email']);

// redirect to the homepage
header( "Location: redirect.php" );

?>
