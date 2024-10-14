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
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["orderid"];
   //  echo $id;
    //echo $update;

     $query = "DELETE FROM orderdetail WHERE id = '$id';";

     $run = mysqli_query($conn, $query);

     if ($run) {
         header("Location:adminorderdetails.php");
     } else {
         echo "Data Insertion is failed because..." . mysqli_error($conn);
     } 

}
?>