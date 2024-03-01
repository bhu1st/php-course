<?php 

//email can be sent to users with mail() function

//plain text
mail("eg@gmail.com", "Email Mesage Subject", "Hello Email Body!");

//html email
$htmlmessage = "<b>Sample html messahe</b>";
$headers = "From: no-reply@gmail.com\r\nContent-type: text/html\r\n";
mail("eg@gmail.com", "Email Mesage Subject", $htmlmessage, $headers);


//from, cc, bcc
$to = "John Doe <john@doe.com>";
$from = "Nepali Daaju <nepali@daaju.com>";
$cc = "Bhai <bhai@nepal.com>";
$bcc = "Saathi <saathi@nepal.com>";
mail($mailto, "Email Mesage Subject", "Hello Email Body!", "From: $from\r\nCC: $cc\r\nBCC: $bcc\r\n");

?>