<?php

include "authguard.php";
include "../shared/connection.php";

$p_id = $_GET["p_id"];

echo "Recived p_id = $p_id";

$query = "insert into cart(user_id,p_id) values('$_SESSION[userID]','$p_id')";

mysqli_query($connection, $query);


header("location: home.php");



?>
<!DOCTYPE html>