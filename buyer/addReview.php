<?php
include "authguard.php";
include "../shared/connection.php";

$p_id = $_POST["p_id"];
$reviewstring="$_POST[review]";

echo $reviewstring;
$query = "INSERT INTO review(review,p_id,buyer_id) values('$reviewstring' , '$p_id' , '$_SESSION[userID]')";

mysqli_query($connection, $query);

header("location: viewProduct.php?p_id=$p_id")
?>
<>