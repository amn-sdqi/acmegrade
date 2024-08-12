<?php

include "authgaurd.php";
include "../shared/connection.php";

#------------------------------------
$p_id = $_REQUEST['p_id'];
$pname = $_POST['p_name'];
$price = $_POST['price'];
$detail = $_POST['detail'];
$seller_id = $_SESSION["userID"];
#----
$source = $_FILES['p_img']['tmp_name'];
$dest = "../shared/p_imgs/" . $_FILES['p_img']['name'];
#------------------------------------

move_uploaded_file($source, $dest);
if ($_FILES['p_img']) {
    # code...
    $insert_query = "UPDATE product SET p_name='$pname' , price='$price' ,details='$detail',imgpath='$dest' WHERE p_id=$p_id";
    mysqli_query($connection, $insert_query);
} else {
    $insert_query = "UPDATE product SET p_name='$pname' , price='$price' ,details='$detail' WHERE p_id=$p_id";
    mysqli_query($connection, $insert_query);
    
}




header("location: manageP.php");
?>
<!DOCTYPE html>