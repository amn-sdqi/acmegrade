<?php include("header.html") ?>

<ul class="rounded-4  border-dark nav d-flex justify-content-around bg-custom2">
	<li class="nav-item m-3 border border-danger rounded-pill bg-dark">
		<a class="text-light nav-link" href="home.php">Home</a>
	</li>
	<li class="border m-3 border-danger nav-item rounded-pill bg-dark">
		<a class="text-light nav-link" href="cart.php">My Cart</a>
	</li>
	<li class="border m-3 border-danger nav-item rounded-pill bg-dark">
		<a class="text-light nav-link" href="orders.php">My Orders</a>
	</li>
	<form class="d-flex  m-3 nav-item rounded-pill bg-dark" role="search">
		<input class="form-control me-2 rounded-pill border-success" type="search" placeholder="Search">
		<button class="btn btn-outline-success rounded-pill" type="submit">Search</button>
	</form>
	<li class="border m-3 border-danger nav-item rounded-pill bg-danger-subtle  ">
		<a href="../shared/logout.php" class="nav-link text-danger ">Logout</a>
	</li>

</ul>