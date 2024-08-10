<?php
include "authguard.php";
include "../shared/connection.php";

$cart_id = $_GET["cart_id"];

echo $_GET["cart_id"];
$query = "DELETE FROM cart WHERE  cart_id=$cart_id";

mysqli_query($connection, $query);

header("location: cart.php");

?>
<!DOCTYPE html>