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