<?php

session_start();

if (!isset($_SESSION["loginStatus"])) {
	echo "UNAUTHORISED ACCESS";
}

if ($_SESSION["loginStatus"] == false) {
	echo "UNAUTHORISED ACCESS";
	die;
}

if ($_SESSION["usertype"] != "buyer") {
	echo "Hey, We know you don't sell stuff !, right.....  ";
	die;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>seller-home</title>
</head>

<body>
	<h1>BUYER HOME PAGE</h1>
</body>

</html>