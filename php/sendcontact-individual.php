<?php 
$ToEmail = 'nico@studioncreations.com'; //ex. admin@scriptgates.com or scriptgates@gmail.com
$EmailSubject = "Deck Open Player Entry Form"."\n"; 
// $mailheader = "From: ".$_POST["email"]."\n";
// $mailheader .= "Reply-To: ".$_POST["email"]."\n";  
$MESSAGE_BODY = "INDIVIDUAL Player Name: ".$_POST["name"]."\n"; 
$MESSAGE_BODY .= "Phone: ".$_POST["phone"]."\n";
$MESSAGE_BODY .= "Handicap: ".$_POST["handicap"]."\n";
$MESSAGE_BODY .= "Club: ".nl2br($_POST["club"])."\n"; 
$MESSAGE_BODY .= "Address: ".nl2br($_POST["adress"])."\n"; 
$MESSAGE_BODY .= "City: ".nl2br($_POST["city"])."\n"; 
$MESSAGE_BODY .= "State: ".nl2br($_POST["state"])."\n"; 
$MESSAGE_BODY .= "Zip: ".nl2br($_POST["zip"])."\n"; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY) or die ("Error!"); 

header("Location: /thanks");
?>

