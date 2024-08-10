<?php
include "authgaurd.php";
include "../shared/connection.php";

$seller_id = $_SESSION["userID"];

$query = "select * from product where seller_id='$seller_id'";

$db_result = mysqli_query($connection, $query);


?>
<title>seller-home</title>
</head>

<body class="bg-dark">
    <header class="container rounded p-2">
        <?php include "nav.php"; ?>
    </header>

    <main class='p-2' style="margin-left: 0rem; text-align: center;">
        <?php

        while ($dbRow = mysqli_fetch_assoc($db_result)) {


            echo "
            <div class='align-center ' style='width: 20rem; display:inline-block;'>
                <div class='card m-3 p-2' >
                    <img src='$dbRow[imgpath]' class='card-img-top' alt=''>
                    <div class='card-body '>
                        <h5 class='card-title'>$dbRow[p_name]</h5>
                        <p class='card-text'>$dbRow[details]</p>
                        <a href='edit.php' class='btn btn-warning'>EDIT</a>
                        <a href='deleteProduct.php?p_id=$dbRow[p_id]' class='btn btn-danger'>DELETE</a>
                    </div>
                </div>
            </div>
        ";
        }

        ?>

    </main>
</body>

</html>