<?php
include "authgaurd.php";
include "../shared/connection.php";

$p_id = $_GET["p_id"];

echo $_GET["p_id"];
$query = "DELETE FROM product WHERE  p_id=$p_id AND seller_id=$_SESSION[userID]";

mysqli_query($connection, $query);

header("location: manageP.php");

?>
<!DOCTYPE html>