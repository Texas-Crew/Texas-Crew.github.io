<?php

// these people will get the form information
$recipients = array(
    "rowfortexas@gmail.com",
	"stephaneasotcheff@utexas.edu"
);

$message = "Rent-A-Rower";
$message = "Name: " . $_REQUEST['name'] . "\n";
$message .= "Email: " . $_REQUEST['email'] . "\n";
$message .= "Phone: " . $_REQUEST['phone'] . "\n";
$message .= "Task: " . $_REQUEST['task'] . "\n";
$message .= "Date: " . $_REQUEST['date'] . "\n";
$message .= "Time: " . $_REQUEST['time'] . "\n";
$message .= "Location: " . $_REQUEST['location'] . "\n";
$message .= "Number of Rowers Needed: " . $_REQUEST['numofrowers'] . "\n";

mail(join(",", $recipients), 'Rent-A-Rower Form', $message, "From: " . $_REQUEST['email']);

// redirect to the homepage
header( "Location: redirect.php" );

?>
