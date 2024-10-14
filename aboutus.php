<!doctype html>
<html lang="en">



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>

<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>

<body>


	<?php
	session_start();
	include ("connection.php");
	error_reporting(0);

	?>



	<!-- <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
	<a class="navbar-brand" href="#">Navbar</a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button> -->



    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand fs-5" href="home.php"><span class="text-warning">Seeds</span>Print</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="userdashboard.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-dark fs-5 bg-info rounded-3" aria-current="page" href="aboutus.php">About_Us</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active fs-5  " aria-current="page" href="allproduct.php">Products</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="categories.php">Categories</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active fs-5 text-dark" href="myorder.php">My_Orders</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fs-5 text-dark" href="mycart.php">My_Cart</a>
                    </li>




                    <!-- <form class="d-flex ml-auto " role="search"
                        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <input class="form-control border border-dark me-2" type="search" placeholder="Search"
                            aria-label="Search" name="search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->

                </ul>
                <div class="btn-group ms-5" role="group">
                    <!-- <button id="btnGroupDrop1" type="button"
                         class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> -->
                    <button id="btnGroupDrop1" type="button" class="nav-link " data-bs-toggle="dropdown"
                        aria-expanded="false">Account</button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <li><a class="dropdown-item" href="customerformlogin.php">User</a></li>
                        <li><a class="dropdown-item" href="adminformlogin.php">Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


	<!-- ==================================Registeration form=============================== -->

	<div class="mt-4">
.
	</div>

	<!-- section -->

	<!-- About 1 - Bootstrap Brain Component -->
	<section class="py-3 py-md-4">
		<div class="container">
			<div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
				<div class="col-12 col-lg-6 col-xl-5">
					<img class="img-fluid rounded" loading="lazy" src="productimage/aboutus.jpg" alt="About 1">
				</div>
				<div class="col-12 col-lg-6 col-xl-7">
					<div class="row justify-content-xl-center">
						<div class="col-12 col-xl-11">
							<h2 class="mb-3">Who Are We?</h2>
							<p class="lead fs-4 text-secondary mb-3">We help people to build incredible brands and
								superior products. Our perspective is to furnish outstanding captivating services.</p>
							<p class="mb-5">We are a fast-growing company, but we have never lost sight of our core
								values. We believe in collaboration, innovation, and customer satisfaction. We are
								always looking for new ways to improve our products and services.</p>
							<div class="row gy-4 gy-md-0 gx-xxl-5X">
								<div class="col-12 col-md-6">
									<div class="d-flex">
										<div class="me-4 text-primary">
											<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
												fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
												<path
													d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
											</svg>
										</div>
										<div >
											<h2 class="h4 mb-3">Contact us</h2>
											
												<p>Phone No: 9873647589 <br> Email : getseed2@gmail.com</p>
												<p></p>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="d-flex">
										<div class="me-4 text-primary">
											<!-- <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
												fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
												<path
													d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
											</svg> -->
										</div>
										<!-- <div>
											<h2 class="h4 mb-3">Digital Agency</h2>
											<p class="text-secondary mb-0">We believe in innovation by merging primary
												with elaborate ideas.</p>
										</div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- section end -->

	<!-- 
	<div class="container p-5 ml-2 ">
		<div class="row">
			<div class="col-lg-4 offset-lg-4">
				<div class="card">

					<div class="card-header text-center fs-4">Contact Us...!!</div>

					<div class="card-body">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="myForm" method="post">
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Name</label>
								<input type="text" class="form-control" id="name" aria-describedby="emailHelp"
									name="name" required>
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Company</label>
								<input type="text" class="form-control" id="name" aria-describedby="emailHelp"
									name="company" required>
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Email </label>
								<input type="email" class="form-control" id="email" aria-describedby="emailHelp"
									name="email" required>
							</div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Phone</label>
								<input type="number" class="form-control" name="phone" id="phone" required>
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Message</label>
								<input type="text" class="form-control" id="name" aria-describedby="emailHelp"
									name="message" required>
							</div> -->
	<?php
	// echo "<a href='#'><button  class='btn btn-success '>Submit</button></a>";
	// echo "<a href='#'><button  class='btn btn-dark ms-2 '>Reset</button></a>";
	?>

	<!-- <div class="d-grid gap-2" col-lg=6 col-md=6 >
								<input class="btn btn-success" type="submit" value="submit">
								<input class="btn btn-dark" type="submit" value="reset"> -->
	<!-- </div>
							<div class="d-grid gap-2"> -->


	<!-- </div>
					</form>
				</div>
			</div>
		</div>

	</div>
	</div> -->


	<?php
	// Check if the form is submitted
	// if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// 	// Retrieve form values
	// 	$name = $_POST["name"];
	// 	$company = $_POST["company"];
	// 	$email = $_POST["email"];
	// 	$phone = $_POST["phone"];
	// 	$message = $_POST["message"];
	

	// 	echo " <br> Name $name";
	// 	echo " <br> Company $company";
	// 	echo " <br> Email $email";
	// 	echo "<br> Phone $phone";
	// 	echo "<br> Message $message";
	

	//}
	// Example query
	// $sql = "INSERT INTO `userregistration` ( `name`, `email`, `Phone`, `password`)
	//  VALUES ( '$name', '$email', '$phone', '$password');";
	// $result = mysqli_query($conn, $sql);
	//echo "sita1";
	//$data = mysqli_fetch_assoc($result);
	//echo "sita2";
	//$run = mysqli_query($conn, $query);
//echo "sita3";
	
	//header("Location:customerformlogin.php");
	

	//echo "sita4";
	



	// $sql = "INSERT INTO `contactinfo` ( `name`, `company`,`email`, `Phone`, `message`)
	// VALUES ( '$name', '$company' ,'$email', '$phone', '$password');";
	// $result = mysqli_query($conn, $sql);
	
	// // echo "sita1";
	// //$data = mysqli_fetch_assoc($result);
	// //echo "sita2";
	// //$run = mysqli_query($conn, $sql);
	// //echo "sita3";
	
	// if ($result) {
	// 	header("Location:customerformlogin.php");
	// } else {
	// 	echo "Data Insertion is failed because..." . mysqli_error($conn);
	// }
	//}
	








	// Check if the query was successful
	// $demail = $data['email'];
	// echo " <br>demail " . $demail;
	// $dpass = $data['password'];
	// echo "<br>dpass" . $dpass;
	
	?>
	<script>
		//-------------hide and see transaction pin-----------------------
		// const pinField1 = document.getElementById( 'password' );

		// const toggleCheckbox = document.getElementById( 'togglePassword' );

		// toggleCheckbox.addEventListener( 'change', function () {
		// 	if ( toggleCheckbox.checked ) {
		// 		pinField1.setAttribute( 'type', 'text' );

		// 	} else {
		// 		pinField1.setAttribute( 'type', 'password' );

		// 	}
		//} );
	</script>





	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
		integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
		crossorigin="anonymous"></script>



	<!-- footer -->


	<!-- Remove the container if you want to extend the Footer to full width. -->
	<div class="container">
		<!-- Footer -->
		<footer class="text-center text-lg-start text-dark" style="background-color: #ECEFF1">
			<!-- Section: Social media -->
			<section class="d-flex justify-content-between p-4 text-white" style="background-color: #21D192">
				<!-- Left -->
				
				<!-- Right -->
			</section>
			<!-- Section: Social media -->

			<!-- Section: Links  -->
			<section class="">
				<div class="container text-center text-md-start mt-5">
					<!-- Grid row -->
					<div class="row mt-1">
					</div>
					<div class="row mt-5">
						<!-- Grid column -->
						.
						<!-- Grid column -->

						<!-- Grid column -->
					
						<!-- Grid column -->

						<!-- Grid column -->
						
						<!-- Grid column -->

						<!-- Grid column -->
						
						<!-- Grid column -->
					</div>
					<!-- Grid row -->
				</div>
			</section>
			<!-- Section: Links  -->

			<!-- Copyright -->
			<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
				© 2020 Copyright:
				<a class="text-dark" href="home.php">seedsprint.com</a>
			</div>
			<!-- Copyright -->
		</footer>
		<!-- Footer -->
	</div>
	<!-- End of .container -->

	<!-- footer -->

</body>

</html>