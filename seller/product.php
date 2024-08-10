<?php
include "authgaurd.php";
include("../shared/connection.php");

#------------------------------------
$pname = $_POST['p_name'];
$price = $_POST['price'];
$detail = $_POST['detail'];
$seller_id = $_SESSION["userID"];
#----
$source = $_FILES['p_img']['tmp_name'];
$dest = "../shared/p_imgs/" . $_FILES['p_img']['name'];
#------------------------------------

move_uploaded_file($source, $dest);

$insert_query = "insert into product(p_name,price,details,seller_id,imgpath) values('$pname','$price','$detail', '$seller_id','$dest')";

mysqli_query($connection, $insert_query);



header("location: addProduct.php");
?>
<!DOCTYPE html>