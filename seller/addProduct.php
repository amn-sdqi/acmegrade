<?php include "authgaurd.php"; ?>

<title>seller-home</title>
</head>

<body class="bg-dark-subtle">
    <?php include "nav.php"; ?>
    <div class="d-flex justify-content-center align-items-center " style="height:75vh">
        <form class="w-45 px-2 py-3 d-flex flex-column" action="" method="post" enctype="multipart/form-data">
            <input class="form-control my-2" type="text" placeholder="NAME" name="p_name">
            <input class="form-control my-2" type="number" placeholder="PRICE" name="price">
            <textarea class="form-control my-2" placeholder="Description" name="detail"></textarea>
            <input class="form-control my-2" type="file" accept=".jpeg,.png,.gif">

            <button class="btn btn-success my-2" type="submit">SUBMIT</button>
        </form>
    </div>
</body>

</html>