<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!--  =================================BOOTSTRAP============================================= -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style>
		body {
			background-image: url('productimage/admina.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			/* background-size: 900px; */
		}
	</style>


</head>

<body>



	<?php
	session_start();
	include ("connection.php");
	error_reporting(0);

	?>


<?php

$phonEerr = "";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Retrieve form values
	$upassword = $_POST["password"];
	$uemail = $_POST["email"];
	//echo " <br>password $upassword";
	//	echo " <br>email $uemail <br>";




	// Example query
	$sql = "SELECT * FROM adminlogin";
	$result = mysqli_query($conn, $sql);
	//$data = mysqli_fetch_assoc($result);


	// Check if the query was successful
	while ($data = mysqli_fetch_assoc($result)) {
		$demail = $data['email'];
		//echo " <br>demail " . $demail;
		$dpass = $data['password'];
		//	echo "<br>dpass" . $dpass;


		if ($demail == $uemail && $dpass == $upassword) {
			$_SESSION['session'] = 'sita';
			echo '<script>window.location.href = "admindashboard.php";</script>';

			//header("Location: admindashboard.php");

		} else {
			$phoneErr = "Incorrect email or password";
		}
	}

	// Close the connection
	$conn->close();

	// Display the submitted values
	//echo "Password: " . $password . "<br>";
	//echo "Email: " . $email . "<br>";
}
?>


	<!-- ======================================NAV BAR ======================================= -->
	<div class="container p-5">
		<div class="row">


			<div class="container-fluid sticky-top">
				<div class="row">
					<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
						<div class="container-fluid">
							<a class="navbar-brand text-dark" href="home.php">Home</a>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
								aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>


							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav">
									<!-- <li class="nav-item">
										<a class="nav-link active text-dark fs-5 " href="aboutproduct.php">About</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active fs-5 text-dark" href="allproduct.php">All Product</a>
									</li> -->



									<!-- <li class="nav-item">
										<a class="nav-link active fs-5 text-dark" href="customerhomepage.php">All
											Category</a>
									</li> -->


									<div class="collapse navbar-collapse" id="navbarNavDropdown">
										<!-- <ul class="navbar-nav"> -->
										<li class="nav-item dropdown">
											<a class="nav-link active fs-5 bg-info rounded 3" id="navbarDropdownMenuLink"
												role="button" data-bs-toggle="dropdown" aria-expanded="false">
												Admin_Login
											</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
												<li><a class="dropdown-item" href="customerformlogin.php">Customer</a>
												</li>
												<li><a class="dropdown-item" href="adminformlogin.php">Admin</a>
												</li>
											</ul>
										</li>
									</div>

									<!-- <li class="nav-item">
										<a class="nav-link active fs-5 text-dark"
											href="userregister.php">Registration</a>

									<li class="nav-item">
										<a class="nav-link active fs-5 text-dark" href="contact.php">Contact Us</a>
									</li>
									</li> -->

								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>



	<!-- --------------------------------------FORM------------------------------ -->
	<div class="container p-5 ml-2 ">
		<div class="row">
			<div class="col-lg-4 offset-lg-4">
				<div class="card">

					<div class="card-header text-center fs-4">Admin Login...!!
					<h4 class=" text-center fs-4 text-danger"><span>
                                <?php echo $phoneErr; ?>
                            </span>
                        </h4>
					</div>

					<div class="card-body">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="myForm" method="post">
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Email address</label>
								<input type="email" class="form-control" id="email" aria-describedby="emailHelp"
									name="email">
							</div>

							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Password</label>
								<input type="password" class="form-control" name="password" id="password">
							</div>
							<div class="col-lg-12 col-md-12 mb-3 ">
								<input type="checkbox" id="togglePassword"> Show Password
							</div>

							<div class="d-grid gap-2">
								<input class="btn btn-success" type="submit" value="Login">

							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>

	<script>
		//-------------hide and see transaction pin-----------------------
		const pinField1 = document.getElementById('password');

		const toggleCheckbox = document.getElementById('togglePassword');

		toggleCheckbox.addEventListener('change', function () {
			if (toggleCheckbox.checked) {
				pinField1.setAttribute('type', 'text');

			} else {
				pinField1.setAttribute('type', 'password');

			}
		});
	</script>



	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
		integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
		crossorigin="anonymous"></script>
</body>

</html>