<?php

include "authgaurd.php";
include "../shared/connection.php";

$p_id = $_REQUEST['p_id'];

$query = "SELECT * FROM product WHERE p_id=$p_id AND seller_id=$_SESSION[userID]";

$dbResult = mysqli_query($connection, $query);

$dbRow = mysqli_fetch_assoc($dbResult);

// print_r($dbRow);

?>
<title>Edit Product</title>
</head>

<body class="bg-dark">
    <?php include "nav.php"; ?>
    <div class="d-flex justify-content-center align-items-center " style="height:75vh">
        <form action="editProduct.php?p_id=<?= $dbRow["p_id"] ?>" method="post" enctype="multipart/form-data" class="w-45 px-2 py-3 d-flex flex-column">
            <input class="form-control my-2" type="text" placeholder="<?= $dbRow['p_name'] ?>" name="p_name" required>
            <input class="form-control my-2" type="number" placeholder="<?= $dbRow['price'] ?>" name="price" required>
            <textarea class="form-control my-2" placeholder="<?= $dbRow['details'] ?>" name="detail" required></textarea>
            <input class="form-control my-2" type="file" accept=".jpeg,.jpg,.png,.gif" name="p_img" required>
            <a href="manageP.php" class="btn btn-danger my-2">Go Back</a>
            <button class="btn btn-danger my-2" type="submit">SAVE</button>
        </form>
    </div>
</body>

</html>