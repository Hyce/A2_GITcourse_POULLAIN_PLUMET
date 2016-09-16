<?php
require('../config/db.php');
require('../config/session.php');

if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$to = 'jonathan.poullain@devinci.fr';
$email_subject = "Website Contact Form:  $name";
$email_body = "Vous avez reçu un nouveau message de votre site Ponts de Paris.\n\n"."Ici sont les détails\n\nNom: $name\n\nEmail: $email_address\n\nTéléphone: $phone\n\nMessage:\n$message";
$headers = "From: jonathan.poullain@devinci.fr\n";
$headers .= "Repondre à: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;			
?>