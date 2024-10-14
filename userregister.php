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
			background-image: url('productimage/user1.jpg');
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


	<div class="container p-4">
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


							<nav class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav">

									<!-- <li class="nav-item">
										<a class="nav-link active text-dark fs-5 " href="aboutproduct.php">About</a>
									</li> -->

									<!-- <li class="nav-item">
										<a class="nav-link active fs-5 text-dark" href="allproduct.php">All Product</a>
									</li>

									<li class="nav-item">
										<a class="nav-link active fs-5 text-dark" href="customerhomepage.php">All
											Category</a>
									</li> -->

									<!-- <div class="collapse navbar-collapse" id="navbarNavDropdown">

										<li class="nav-item dropdown">
											<a class="nav-link active fs-5" id="navbarDropdownMenuLink" role="button"
												data-bs-toggle="dropdown" aria-expanded="false">
												Login
											</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
												<li><a class="dropdown-item" href="customerformlogin.php">Customer</a>
												</li>
												<li><a class="dropdown-item" href="adminformlogin.php">Admin</a>
												</li>
											</ul>
										</li>
									</div> -->



									<!-- <li class="nav-item">
										<a class="nav-link active fs-5 text-dark bg-info"
											href="userregister.php">Registration</a>


									<li class="nav-item">
										<a class="nav-link active fs-5 text-dark" href="contact.php">Contact Us</a>
									</li>
									</li> -->




								</ul>
							</nav>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>






	<!-- ==================================Registeration form=============================== -->
	<div class="container p-5 ">
		<div class="row">
			<div class="col-lg-4 offset-lg-4">
				<div class="card">

					<div class="card-header text-center fs-4">User Registeration...!!</div>

					<div class="card-body">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="myForm" method="post">
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Name</label>
								<input type="text" class="form-control" id="name" aria-describedby="emailHelp"
									name="name" required>
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Email address</label>
								<input type="email" class="form-control" id="email" aria-describedby="emailHelp"
									name="email" required>
							</div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Phone</label>
								<input type="number" class="form-control" name="phone" id="phone"
									oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 10)" required>
							</div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Password</label>
								<input type="password" class="form-control" name="password" id="password" required>
							</div>

							<div class="col-lg-12 col-md-12 mb-3 ">
								<input type="checkbox" id="togglePassword"> Show Password
							</div>

							<div class="d-grid gap-2">
								<input class="btn btn-success" type="submit" value="Register">

							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>


	<?php
	// Check if the form is submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Retrieve form values
		$name = $_POST["name"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$password = $_POST["password"];


		echo " <br> Name $name";
		echo " <br> Email $email";
		echo "<br> Phone $phone";
		echo "<br> Password $password";


		//}
		// Example query
		// $sql = "INSERT INTO `userregistration` ( `name`, `email`, `Phone`, `password`)
		//  VALUES ( '$name', '$email', '$phone', '$password');";
		// $result = mysqli_query($conn, $sql);
		//echo "Kamal1";
		//$data = mysqli_fetch_assoc($result);
		//echo "Kamal2";
		//$run = mysqli_query($conn, $query);
//echo "Kamal3";
	
		//header("Location:customerformlogin.php");
	

		//echo "Kamal4";
	



		$sql = "INSERT INTO `userregistration` ( `name`, `email`, `Phone`, `password`)
		VALUES ( '$name', '$email', '$phone', '$password');";
		$result = mysqli_query($conn, $sql);

		// echo "Kamal1";
		//$data = mysqli_fetch_assoc($result);
		//echo "Kamal2";
		//$run = mysqli_query($conn, $sql);
		//echo "Kamal3";
	
		if ($result) {
			echo '<script>window.location.href = "customerformlogin.php";</script>';
		} else {
			echo "Data Insertion is failed because..." . mysqli_error($conn);
		}
	}









	// Check if the query was successful
	// $demail = $data['email'];
	// echo " <br>demail " . $demail;
	// $dpass = $data['password'];
	// echo "<br>dpass" . $dpass;
	
	?>
	<script>

		//-----------remaining validation---------------

		document.getElementById('myForm').addEventListener('submit', function (event) {

			var phone = document.getElementById('phone').value;


			var length = phone.length;

			if (length != 10) {

				event.preventDefault();

				alert('phone must be 10 digits');
			} else {

			}

			// var stringValuestock = seedquantity; // Example string value
			// var stringValue = stock 

			// var intQuantity = Number(seedquantity); // Converts "456" to integerF
			// var intStock = Number(stock);

			// if (intQuantity > intStock) {

			// 	event.preventDefault();
			// 	alert('choose less then or equal to ' + stock);


			// } else if (intQuantity <= 0) {
			// 	event.preventDefault();
			// 	alert('choose more than or equal to 1 ');

			// }

			//alert('Today Date is'+todayDate+'and acNo '+acNo);

		});

		//----------validation end-------------------

		//------------------make name field only alphabet-------------

		document.addEventListener('DOMContentLoaded', function () {
			var inputField = document.getElementById('name');

			inputField.addEventListener('input', function () {
				var inputValue = this.value;
				var alphabeticValue = inputValue.replace(/[^a-z A-Z]/g, ''); // Remove non-alphabetic characters

				if (inputValue !== alphabeticValue) {
					this.value = alphabeticValue;
				}
			});
		});


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