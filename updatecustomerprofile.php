<?php
    //-----------------session start and control--------------------
    session_start();
    error_reporting(0);
    include ("connection.php");
    $cphone = $_SESSION["customersession"];
    if ($cphone) {
        //echo  "NAme $name";
    } else {
        header("location:customerformlogin.php");
    }

    ?>


<?php
	// Check if the form is submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Retrieve form values
		$name = $_POST["name"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$id = $_POST["id"];
		


		//echo " <br> Name $name";
		//echo " <br> Email $email";
		//echo "<br> Phone $phone";

         $query = "UPDATE userregistration SET name ='$name', email = '$email', Phone='$phone' WHERE id = '$id';";

         $run = mysqli_query($conn, $query);

        echo '<script>window.location.href = "customerlogout.php";</script>';
      
		

	}



	
	?>