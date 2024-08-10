<?php
include "authguard.php";
include "../shared/connection.php";

$query = "select * from orders join product on order.p_id=product.p_id where buyer_id=$_SESSION[userID]";

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
    
        while($dbRow=mysqli_fetch_assoc($db_result)){

        }
    
    ?>

    </main>

    <ul>
        <li></li>
    </ul>
</body>

</html>