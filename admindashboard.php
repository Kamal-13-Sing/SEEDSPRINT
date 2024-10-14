<!doctype html>
<html lang="en">

<head>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style>
		body {
			background-image: url('productimage/udash.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100%;
		}
	</style>

</head>

<>

	<?php
	//-----------------session start and control--------------------
	session_start();
	error_reporting(0);
	include ("connection.php");
	$name = $_SESSION["session"];
	if ($name) {

	} else {
		header("location:adminformlogin.php");
	}
	?>


	<!-- ------------------------------------------NAV BAR------------------------------------- -->


	<div class="container">

		<div class="centered">
			<h2>" Grow Your Seed Online "<style>
					font color="blue"
				</style>
			</h2>
		</div>
	</div>



	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand fs-5" href="admindashboard.php"><span class="text-warning">Seeds</span>Print</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">

					<li class="nav-item">
						<a class="nav-link active text-dark fs-5 bg-info rounded-3 " aria-current="page" href="admindashboard.php">Dashboard</a>
					</li>

					<li class="nav-item">
						<a class="nav-link active fs-5" aria-current="page" href="productadd.php">Add_Product </a>
					</li>


					<li class="nav-item">
						<a class="nav-link active fs-5" aria-current="page" href="productdetail.php">View_Product</a>
					</li>

					<li class="nav-item">
						<a class="nav-link active fs-5 text-dark" href="adminorderdetails.php">Order_Detail</a>
					</li>

					<li class="nav-item">
						<a class="nav-link active fs-5 text-dark" href="adminlogout.php">Logout</a>
					</li>

					

					

				</ul>
				
			</div>
		</div>
	</nav>





	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
		integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
		crossorigin="anonymous"></script>





</body>

</html>