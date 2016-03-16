<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Demo Email message</title>
</head>
<body>
This is a PHP program.
It has sent an email message to (insert email address here).
<?php
$to = "somebody@example.com";
$subject = "My subject";
$message = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$message,$headers);
?>
</body>
</html>
