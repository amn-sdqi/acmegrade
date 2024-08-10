<?php include "authgaurd.php"; ?>

<title>add-product</title>
</head>

<body class="bg-dark">
    <?php include "nav.php"; ?>
    <div class="d-flex justify-content-center align-items-center " style="height:75vh">
        <form action="product.php" method="post" enctype="multipart/form-data" class="w-45 px-2 py-3 d-flex flex-column">
            <input class="form-control my-2" type="text" placeholder="NAME" name="p_name">
            <input class="form-control my-2" type="number" placeholder="PRICE" name="price">
            <textarea class="form-control my-2" placeholder="Description" name="detail"></textarea>
            <input class="form-control my-2" type="file" accept=".jpeg,.jpg,.png,.gif" name="p_img">

            <button class="btn btn-danger my-2" type="submit">ADD PRODUCT</button>
        </form>
    </div>
</body>

</html>