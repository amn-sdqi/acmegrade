<?php

session_start();

if (!isset($_SESSION["loginStatus"])) {
    echo "UNAUTHORISED ACCESS";
}

if ($_SESSION["loginStatus"] == false) {
    echo "UNAUTHORISED ACCESS";
    die;
}

if ($_SESSION["usertype"] != "seller") {
    echo "SEEMS ! You My friend, are a customer. Why don't you try to buy somthing  ? ";
    die;
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seller-home</title>
</head>

<body>
    <h1>SELLER HOME PAGE</h1>
</body>

</html>