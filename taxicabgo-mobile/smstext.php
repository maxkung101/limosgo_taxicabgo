<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Demo SMS API</title>
</head>
<body>
This is a PHP program.
It has sent a text message to (insert phone number here).
<?php 
$api = new TextMagicAPI(array(
    "username" => "your_user_name",
    "password" => "your_API_password", 
));

$text = "Hello world!";
$phones = array(9991234567);
$is_unicode = true;

$api->send($text, $phones, $is_unicode);
?>
</body>
</html>