<?php
include "authgaurd.php";
include "../shared/connection.php";

$seller_id = $_SESSION["userID"];

$query = "select * from orders join product on orders.p_id=product.p_id ";

$db_result = mysqli_query($connection, $query);


?>
<title>Seller Manage Product</title>
</head>

<body class="bg-dark">
    <header class="container rounded p-2">
        <?php include "nav.php"; ?>
    </header>

    <main class='p-2' style="margin-left: 0rem; text-align: center;">
        <?php

        while ($dbRow = mysqli_fetch_assoc($db_result)) {

            if ($dbRow['seller_id'] = $_SESSION['userID'])
                echo "
            <div class='align-center ' style='width: 20rem; display:inline-block;'>
                <div class='card m-3 p-2' >
                    <form action='orderStatus.php?p_id=$dbRow[p_id]' method='post'>
                        <img src='$dbRow[imgpath]' class='card-img-top' alt=''>
                        <div class='card-body '>
                            <h5 class='card-title'>$dbRow[p_name]</h5>
                            <p class='card-text'>$dbRow[details]</p>
                            <p class='card-text'>₹$dbRow[price]</p>
                            <select class='btn btn-warning' name='status'>
                                <option selected>$dbRow[status]</option>
                                <option value='Pending'>Pending</option>
                                <option value='Delivered' >Delivered</option>
                                <option value='Cancelled' >Cancelled</option>
                            </select>
                            <button type='submit' class='btn btn-danger'>SAVE</button>
                        </div>
                    </form>
                </div>
            </div>
        ";
        }

        ?>
    </main>

</body>

</html>