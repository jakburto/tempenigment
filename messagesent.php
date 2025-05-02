<?php

if (isset($_POST['sent'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];

	$mailTo = "findme@enigment.com";
	$headers = "From: ".$email;
	$subj = "Message from ".$name " sent from Enigment.";
	$txt = "You have a message from ".$name ".\n\n".$comment;
	$txt = str_replace("\n.", "\n..", $txt);

	mail($mailTo, $txt, $txt, $headers);

	header("Location: index.html")
}


?>
