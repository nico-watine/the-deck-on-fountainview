<?php 
$ToEmail = 'nico@studioncreations.com'; //ex. admin@scriptgates.com or scriptgates@gmail.com
$EmailSubject = "Deck Open Player Entry Form"."\n"; 
// $mailheader = "From: ".$_POST["email"]."\n";
// $mailheader .= "Reply-To: ".$_POST["email"]."\n";  
$MESSAGE_BODY = "TEAP CAPTAIN Player Name: ".$_POST["captain-name"]."\n"; 
$MESSAGE_BODY .= "Phone: ".$_POST["captain-phone"]."\n";
$MESSAGE_BODY .= "Handicap: ".$_POST["captain-handicap"]."\n";
$MESSAGE_BODY .= "Club: ".nl2br($_POST["captain-club"])."\n"; 
$MESSAGE_BODY .= "Address: ".nl2br($_POST["captain-adress"])."\n"; 
$MESSAGE_BODY .= "City: ".nl2br($_POST["captain-city"])."\n"; 
$MESSAGE_BODY .= "State: ".nl2br($_POST["captain-state"])."\n"; 
$MESSAGE_BODY .= "Zip: ".nl2br($_POST["captain-zip"])."\n"; 
$MESSAGE_BODY .= "---------------------"."\n"; 
$MESSAGE_BODY = "PLAYER 2 Name: ".$_POST["p2-name"]."\n"; 
$MESSAGE_BODY .= "Handicap: ".$_POST["p2-handicap"]."\n";
$MESSAGE_BODY .= "Club: ".nl2br($_POST["p2-club"])."\n"; 
$MESSAGE_BODY .= "---------------------"."\n"; 
$MESSAGE_BODY = "PLAYER 3 Name".$_POST["p3-name"]."\n"; 
$MESSAGE_BODY .= "Handicap: ".$_POST["p3-handicap"]."\n";
$MESSAGE_BODY .= "Club: ".nl2br($_POST["p3-club"])."\n"; 
$MESSAGE_BODY .= "---------------------"."\n"; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY) or die ("Error!"); 

header("Location: /thanks");
?>

