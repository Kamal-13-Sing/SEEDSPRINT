<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
    </style>


</head>

<body>
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
    $value = $_GET['amt'];
    $orderid = $_GET['orderid'];
    // echo "Total amount $value";

    $query = "UPDATE orderdetail SET orderstatus='$update' WHERE id = '$id';";

     $run = mysqli_query($conn, $query);

     //----update payment method-------------

     
     $query2 = "UPDATE orderdetail SET payment='cash on delivery' WHERE orderid = '$orderid';";

     $run2 = mysqli_query($conn, $query2);


    ?>



    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand fs-5" href="#"><span class="text-warning">Seeds</span>Print</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="home.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="aboutproduct.php">About</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active fs-5 text-dark " aria-current="page"
                            href="allproduct.php">Products</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="customerhomepage.php">Categories</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active fs-5 text-dark" href="myorder.php">My_Orders</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fs-5 text-dark" href="mycart.php">My_Cart</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fs-5 text-dark border border-dark" href="customerlogout.php">Logout</a>
                    </li>




                    <!-- <form class="d-flex ml-auto " role="search"
                        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <input class="form-control border border-dark me-2" type="search" placeholder="Search"
                            aria-label="Search" name="search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->

                </ul>

            </div>
        </div>
    </nav>





    <!-- <div class="container">
        <div class="row">


            <div class="container-fluid sticky-top">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light bg-success">
                        <div class="container-fluid">
                            <a class="navbar-brand text-light" href="customerlogout.php">Logout</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>


                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active fs-5 text-light" href="adminDashboard">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active text-dark fs-5 bg-info"
                                            href="productadd.php">Add_Product</a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link active fs-5 text-light" href="productdetail.php">View
                                            Product</a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div> -->

    <?php




    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $totalprice = $_POST['totalprice'];

        //echo "Price $totalprice";
    

    }

    ?>
    <div class="mt-5">
        .
    </div>
    <div class="mt-5">
        .
    </div>
    <div class="container p-3 mt-5">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="card">

                
                    <div class="card-header text-center fs-4 text-success">Thankyou For Your Purchase...!!</div>

                    <?php



                    ?>
                    <div class="card-body text-center">

                        <a href="myorder.php"><button type="button" class="btn btn-primary fs-5">View Order</button></a>

                    </div>
                </div>
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