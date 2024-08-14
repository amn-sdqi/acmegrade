<?php
include "authguard.php";
include "../shared/connection.php";

$p_id = $_REQUEST["p_id"];

$query = "SELECT * FROM product WHERE p_id=$p_id ";

$dbResult = mysqli_query($connection, $query);

$dbRow = mysqli_fetch_assoc($dbResult);

?>

<title><?= $dbRow['p_name'] ?></title>
<style>
    main {
        margin: 2rem;
        margin-top: 4rem;
    }

    img {
        height: auto;
        width: auto;
        border-radius: 10px;
        transform: rotate(-15deg);
        overflow: hidden;
    }

    #product {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        /* margin: 6rem; */
        padding: 10px;
        transform: rotate(7deg);
    }
</style>
</head>

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

        <div>
            <h4 class="btn btn-info m-5 container">Reviews</h4>
            <form class="d-flex justify-content-center align-items-center" action="addReview.php" method="post">
                <input type="hidden" name='p_id' value="<?= $dbRow["p_id"] ?>">
                <textarea class="rounded m-5" name="review" placeholder="      TYPE YOUR EXPERIENCE" cols="70" rows="2"></textarea>
                <button class="btn btn-info" type="submit">SUBMIT</button>
            </form>
        </div>

        <div id='review' class="m-2 p-2 rounded">
            <table class='table table-success table-striped'>
                <tbody class="rounded">
                    <?php

                    $reviweQuery = "SELECT * FROM review JOIN user on review.buyer_id=user.id WHERE p_id=$dbRow[p_id]";

                    $reviews = mysqli_query($connection, $reviweQuery);

                    $i = 1;
                    while ($review = mysqli_fetch_assoc($reviews)) {
                        echo
                        "<tr>
                            <th scope='row'>$i</th>
                            <td><h3>$review[username]</h3></td>
                            <td>
                                $review[review]
                            </td>
                            <td>@$review[date]</td>
                        </tr>";

                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- <thead>
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>Name</th>
                <th scope='col'>review</th>
                <th scope='col'>date added</th>
            </tr>
        </thead> -->
    </main>
</body>