<?php

$uname = $_POST["username"];
$password = $_POST["password"];

include "../connection.php";

session_start();

$query = "SELECT * FROM user WHERE username='$uname' AND password='$password'";

$sql_result = mysqli_query($connection, $query);

$dbrow = mysqli_fetch_assoc($sql_result);

if ($sql_result->num_rows == 0) {
    echo '<p>NO USER FOUND</p>';
    $_SESSION["loginStaus"] = false;
} else {
    echo "LOGIN SUCCESFUL";

    $_SESSION["loginStatus"] = true;
    $_SESSION["username"] = $dbrow["username"];
    $_SESSION["userID"] = $dbrow["id"];
    $_SESSION["usertype"] = $dbrow["usertype"];


    if ($dbrow['usertype'] == "buyer") {
        header("location:../../buyer/home.php");
    } elseif ($dbrow['usertype'] == "seller") {
        header("location:../../seller/home.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>