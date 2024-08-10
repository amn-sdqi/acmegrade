<?php
include "authguard.php";
include "../shared/connection.php";

$query = "select * from cart join product on cart.p_id=product.p_id where user_id=$_SESSION[userID]";

$db_result = mysqli_query($connection, $query);


while ($dbRow = mysqli_fetch_assoc($db_result)) {

    $insertQuery="insert into orders(p_id,buyer_id) values($dbRow[p_id], $_SESSION[userID])";
    mysqli_query($connection,$insertQuery);


}

mysqli_query($connection,"delete from cart where user_id=$_SESSION[userID]");

header("location: cart.php");

?>
