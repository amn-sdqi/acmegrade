<?php
include "authguard.php";
include "../shared/connection.php";

$query = "select * from cart join product on cart.p_id=product.p_id where user_id=$_SESSION[userID]";

$db_result = mysqli_query($connection, $query);


?>
<title>cart</title>
</head>

<body>
    <header class="container rounded p-2">
        <?php include "nav.php"; ?>
    </header>
    <main class='p-2' style="margin-left: 0rem; text-align: center;">

        <?php
        $totalPrice = 0;
        while ($dbRow = mysqli_fetch_assoc($db_result)) {
            echo "
            <div class='align-center m-3' style='width: 20rem; display:inline-block;'>
                <div class='bg-custom2 card m-3 p-2' >
                    <img src='$dbRow[imgpath]' class='card-img-top' alt=''>
                    <div class='card-body '>
                        <h5 class='card-title'>$dbRow[p_name]</h5>
                        <p class='card-text'>$dbRow[details]</p>
                        <a class='btn btn-info'>₹$dbRow[price]</a>
                        <a href='removeFromCart.php?cart_id=$dbRow[cart_id]' class='btn btn-success'>Remove</a>
                    </div>
                </div>
            </div>
        ";
            $totalPrice += $dbRow["price"];
        }
        if ($totalPrice == 0) {
            echo "
                <div class='align-center' style='width: 20rem; margin-top: 10rem ; display:inline-block;'>
                    <div class='card bg-custom1 text-white'>
                        <div class='card-header'>
                            CART EMPTY !!!
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title'>NO ITEM IN CART</h5>
                            <p class='card-text'>Please add products to cart, So you can buy.</p>
                            <a href='home.php' class='btn btn-warning'>HOME</a>
                        </div>
                    </div>
                </div>
                    ";
        } else {

            echo " 
                <div class='d-flex flex-row justify-content-center ' >
                    <h4 class='bg-dark text-white m-3 p-2 rounded' style='width: 20rem;' >TOTAL PRICE : ₹$totalPrice
                    </h4>
                        <a href='buy.php'>
                            <button class='btn btn-success m-3 p-2'>BUY </button>
                        </a>
                </div>";
        }
        ?>
    </main>
</body>