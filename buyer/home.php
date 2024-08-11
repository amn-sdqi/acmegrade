<?php
include "authguard.php";
include "../shared/connection.php";

$query = "select * from product";

$db_result = mysqli_query($connection, $query);
?>

<title>buyer-home</title>
</head>

<body>
    <header class="container rounded p-2">
        <?php include "nav.php"; ?>
    </header>

    <main class='p-2' style="margin-left: 0rem; text-align: center;">
        <?php

        while ($dbRow = mysqli_fetch_assoc($db_result)) {


            echo "
            <div class=' align-center m-3 ' style='width: 20rem; display:inline-block;'>
                <div class='bg-custom2 card m-3 p-2' >
                    <img src='$dbRow[imgpath]' class='card-img-top' alt=''>
                    <div class='card-body '>
                        <h5 class='card-title'>$dbRow[p_name]</h5>
                        <p class='card-text'>$dbRow[details]</p>
                        <a class='btn btn-info'>₹$dbRow[price]</a>
                        <a href='addToCart.php?p_id=$dbRow[p_id]' class='btn btn-success'>ADD TO CART</a>
                    </div>
                </div>
            </div>
        ";
        }

        ?>
    </main>
</body>

</html>