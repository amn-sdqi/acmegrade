<?php

include "../connection.php";

$query = "insert into user(username,password,usertype) values('$_POST[username]','$_POST[password1]','$_POST[type]')";

mysqli_query($connection, $query);
// echo $query;

header("location: ../login/login.html")

?>
<!DOCTYPE html>