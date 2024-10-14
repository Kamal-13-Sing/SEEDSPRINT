<!doctype html>
<html lang="en">

<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">





	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>

	<style>
		body {
			/* <img src="flower(3).png" class="img-fluid" alt="..."> */

			/* background-color: #6f42c1; Change the color code to your desired background color */

			/* background-image: url('productflower(3).png'); background-size: cover;
	*/


			/* background-image: url('productimage/leaf.jpg');
	background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed; */
			/* background-size: 900px; */

			background-color: #AFEEEE;

		}

		.navbar {
			background-color: #F5DEB3;
		}

		.imagebackground {
			background-color: #F0F8FF;
		}
	</style>


</head>

<body>

	<?php
	session_start();
	include ("connection.php");
	error_reporting(0);
	$name = $_SESSION["session"];
	if ($name) {

	} else {
		header("location:adminformlogin.php");
	}
	?>

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
						<a class="nav-link active  fs-5 " aria-current="page"
							href="admindashboard.php">Dashboard</a>
					</li>

					<li class="nav-item">
						<a class="nav-link active fs-5" aria-current="page" href="productadd.php">Add_Product </a>
					</li>


					<li class="nav-item">
						<a class="nav-link active  text-dark fs-5 bg-info rounded-3 " aria-current="page" href="productdetail.php">View_Product</a>
					</li>

					<li class="nav-item">
						<a class="nav-link active fs-5 text-dark" href="adminorderdetails.php">Order
							Detail</a>
					</li>

					<li class="nav-item">
						<a class="nav-link active fs-5 text-dark" href="adminlogout.php">Logout</a>
					</li>





				</ul>

			</div>
		</div>
	</nav>

	<div class="mt-5">
		.
	</div>

	<div class="container">
		<div class="row">


			<div class="  col-lg-12 row  ">
				<?php

				//echo "name $name";
				//$stringValue = strval($name);
				$query = "SELECT * FROM productdetails ;";
				$run = mysqli_query($conn, $query);
				//$data = mysqli_fetch_assoc($run);
				while ($data = mysqli_fetch_assoc($run)) {



					// if ($name==$data['seedtype']  ) {
					// echo $data['seedname'];
					// echo $data['quantity'];
					// echo $data['seedprice'];
					// echo $data['seedtype'];
					// echo "<img src='$data[pimage]'height='100' width='70'>";
					// echo $data['seedcode'];
					// echo $data['pdescription'];
				
					echo " <div class=' row col-lg-5 col-md-12 ms-4 mb-5 me-4  mt-3  '>";

					echo " <div class='  col-lg-4 col-md-4' >";
					$seedcode = $data['seedcode'];
					//  echo $seedcode;
					echo "<a href='editproduct.php ? data1= $seedcode'><img src='$data[pimage]' class='mt-3 border border-dark   imagebackground' alt='home page picture'
                        height='200' width='168'></a>";
					echo "</div>";
					echo " <div  class=' col-lg-7 col-md-7 ms-2 mt-3 border border-dark  imagebackground' >";
					echo " <p class='fw-bold'>SeedName: $data[seedname] </p>";
					echo "<p class='fw-bold'>Seedtype: $data[seedtype]</p>";
					echo "<p class='fw-bold'>Available stock: $data[quantity]</p>";
					echo "<p class='fw-bold'>Price:  Rs $data[seedprice]</p>";
					echo "<a href='editproduct.php ? data1= $seedcode'><button  class='btn btn-primary '>Edit</button></a>";
					echo "<a href='deleteproduct.php ? data1= $seedcode'><button  class='btn btn-danger ms-2 '>Delete</button></a>";
					//echo "<p class='fw-bold'>Description: $data[pdescription]</p>";
					// echo "<p class='fw-bold'>Description: </p><input type='text-area' value='$data[pdescription]'readonly";
					echo "</div>";
					echo "</div> ";
					// echo $name;
				

				}




				// }
				
				?>
			</div>


		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></scrip >
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
					integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
					crossorigin="anonymous"></scrip>



</body >
</html >
		