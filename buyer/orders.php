<?php
include "authguard.php";
include "../shared/connection.php";

$query = "select * from orders join product on orders.p_id=product.p_id where buyer_id=$_SESSION[userID]";

$db_result = mysqli_query($connection, $query);
?>

<title>Buyer Orders</title>
</head>

<body class="bg-custom1">
    <header class="container rounded p-2">
        <?php include "nav.php"; ?>
    </header>

    <main class='p-2' style="margin-left: 0rem; text-align: center;">

        <?php

        while ($dbRow = mysqli_fetch_assoc($db_result)) {

            echo "
            <div class='bg-custom1 container rounded-4 h-75 w-75 mt-4'>
                <ul class='d-flex flex-row justify-content-between list-group'>
                    <li class='m-1 p-0 h-75 w-75 list-group-item bg-custom1'><img src='$dbRow[imgpath]' alt='$dbRow[p_name]' class='rounded img-thumbnail bg-dark '></li>
                    <li class='m-3 p-3 list-group-item bg-custom1 h-25 text-white rounded'>$dbRow[p_name]</li>
                    <li class='m-3 p-3 list-group-item bg-custom1 h-25 text-white rounded'>$dbRow[details]</li>
                    <li class='m-3 p-3 list-group-item bg-custom1 h-25 text-white rounded'>₹$dbRow[price]</li>
                    <li class='m-3 p-3 list-group-item bg-custom1 h-25 text-white rounded'>$dbRow[date]</li>
                    <li class='m-3 p-3 list-group-item bg-custom1 h-25 text-white rounded'>$dbRow[status]</li>
                </ul>
            </div>
            ";
        }

        ?>

    </main>
    <!-- <div class='bg-primary-subtle container card mt-4'>
        <ul class='d-flex flex-row justify-content-between'>
            <li class='mt-3 p-3'><img src='' alt=''></li>
            <li class='mt-3 p-3'>name</li>
            <li class='mt-3 p-3'>details</li>
            <li class='mt-3 p-3'>price</li>
            <li class='mt-3 p-3'>date orderd</li>
        </ul>
    </div> -->
</body>

</html>