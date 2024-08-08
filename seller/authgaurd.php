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