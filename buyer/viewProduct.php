<title><?= $dbRow['p_name'] ?></title>
<style>
    img {
        height: 20rem;
        width: auto;
        border-radius: 10px;
        transform: rotate(-10deg);
    }

    #product {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: flex-start;
        margin: 6rem;
        padding: 10px;
    }
</style>
</head>

<?php
include "authguard.php";
include "../shared/connection.php";

$p_id = $_REQUEST["p_id"];

$query = "SELECT * FROM product WHERE p_id=$p_id ";

$dbResult = mysqli_query($connection, $query);

$dbRow = mysqli_fetch_assoc($dbResult);

?>


<body class="container">
    <header><?php include "nav.php"; ?></header>

    <main>
        <div id="product">
            <img src="<?= $dbRow['imgpath'] ?>" alt="<?= $dbRow['p_name'] ?>">
            <div class="p-3 m-3 rounded bg-custom2">
                <h4 class="bg-dark text-white rounded m-2 p-2"><?= $dbRow["p_name"] ?></h4>
                <article class="bg-dark text-white rounded m-2 p-2"><?= $dbRow["details"] ?></article>
                <article class="bg-dark text-white rounded m-2 p-2"><?= $dbRow["price"] ?></article>
                <a href='addToCart.php?p_id=<?= $dbRow["p_id"] ?>' class='btn btn-success ms-5'>ADD TO CART</a>
            </div>
        </div>
    </main>
</body>