<?php
//-----------------session start and control--------------------
session_start();
error_reporting(0);
include ("connection.php");
$name = $_SESSION["customersession"];
if ($name) {
    //echo  "NAme $name";
} else {
    header("location:customerformlogin.php");
}


?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["seedname"];
    echo $id;

    $query = "DELETE FROM mycart WHERE id = '$id';";

    $run = mysqli_query($conn, $query);

    if ($run) {
        header("Location:mycart.php");
    } else {
        echo "Data Insertion is failed because..." . mysqli_error($conn);
    }

}
?>