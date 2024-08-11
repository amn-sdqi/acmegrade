<?php

include "authgaurd.php";
include "../shared/connection.php";

$s=$_REQUEST['status'];

$p_id=$_REQUEST['p_id'];

$query="UPDATE orders SET status='$s' WHERE p_id=$p_id";

mysqli_query($connection,$query);

header("location: manageO.php");

?>
<!DOCTYPE html>