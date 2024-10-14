<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                            <nav class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">

                                    <li class="nav-item">
                                        <a class="nav-link active text-dark fs-5 "
                                            href="userdashboard.php">Dashboard</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active fs-5 text-dark" href="allproduct.php">All Product</a>
                                    </li>

                                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                        <!-- <ul class="navbar-nav"> -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link active fs-5" id="navbarDropdownMenuLink" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Buy
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <li><a class="dropdown-item"
                                                        href="specificproduct.php? data1=flower">Flower</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="specificproduct.php? data1=fruit">Fruit</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="specificproduct.php? data1=vegetable">Vegetable</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </div>

                                    <li class="nav-item">
                                        <a class="nav-link active fs-5 text-dark" href="customerlogout.php">Logout</a>
                                    </li>


                                </ul>
                            </nav>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {





        //----get all input fields------------
    
        $corderid = $_POST['orderid'];
        $cname = $_POST['uname'];
        $cemail = $_POST['uemail'];
        $caddress = $_POST['uaddress'];

        $cartproductid = $_POST['cartproductid'];

        //echo $cartproductid;

        $cseedimage = $_POST['seedimage'];
        $cseedname = $_POST['seedname'];
        $cseedtype = $_POST['seedtype'];
        $cseedquantity = $_POST['seedquantity'];
        $ccustomerid = $_POST['customerid'];
        $cseedprice = $_POST['seedprice'];
        $cpayment = $_POST['payment'];
        $corderdate = $_POST['orderdate'];
        $cstddate = $_POST['stddate'];


        //------get all input fiels end-----------
    
        $totalprice = $_POST['totalprice'];

        $seedcode = $_POST['seedcode'];
        // echo "Price $totalprice";
    
        // echo $cname;
        // echo $cemail;
        // echo $caddress;
        // echo $seedcode;
    

        //----------add order details----------------
    

        $query = "INSERT INTO orderdetail(seedimage,seedname,seedtype,seedprice,seedquantity,total,customerid,orderstatus,seedcode,orderdate,standarddeliverydate, orderid, payment, customername, email, caddress)
                        VALUES('$cseedimage','  $cseedname','$cseedtype','$cseedprice','$cseedquantity','$totalprice','$name', 'pending','$seedcode',' $corderdate','$cstddate',$corderid,'esewa','$cname','$cemail','$caddress');";

        $run = mysqli_query($conn, $query);


//-------------delete cart list -----------------

$querycart= "DELETE FROM mycart WHERE cartproductid ='$cartproductid';";

        $runcart = mysqli_query($conn, $querycart);


        //-------add order details end----------------------
    
        //-------old stock---------------
        $querygetstock = "SELECT * FROM productdetails WHERE seedcode ='$seedcode';";

        $runstock = mysqli_query($conn, $querygetstock);
        $datastock = mysqli_fetch_assoc($runstock);

        $oldstock = $datastock['quantity'];
        // echo "old stock " . $oldstock;
    
        //--------quantity selected by user-------
    
        $buygetstock = "SELECT * FROM orderdetail WHERE seedcode = '$seedcode';";

        $buygetstock = mysqli_query($conn, $buygetstock);
        $databuystock = mysqli_fetch_assoc($buygetstock);

        $buystock = $databuystock['seedquantity'];
        // echo "buy item " . $buystock;
    

        $newStock = $oldstock - $buystock;

        // echo "new stock " . $newStock;
        //-----update with new stock
        $querynewstock = "UPDATE productdetails SET quantity='$newStock' WHERE seedcode = '$seedcode';";

        $runnewstock = mysqli_query($conn, $querynewstock);


        $random_number = rand(1000, 9999);
        // echo $random_number;
    


    }

    ?>



    <div class="container">
        <div class="row">
            <div class=" col-lg-6 ">
                <form action="https://uat.esewa.com.np/epay/main" method="POST">
                    <input value="<?php echo $totalprice; ?>" name="tAmt" type="hidden">
                    <input value="<?php echo $totalprice; ?>" name="amt" type="hidden">
                    <input value="0" name="txAmt" type="hidden">
                    <input value="0" name="psc" type="hidden">
                    <input value="0" name="pdc" type="hidden">
                    <input value="EPAYTEST" name="scd" type="hidden">
                    <input value="<?php echo $random_number; ?>" name="pid" type="hidden">
                    <input value="http://localhost/SemesterSummerProjects/successesewa.php" type="hidden" name="su">
                    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">

                    <button class="btn" type="submit"><a><img src="productimage/esewa.png" class=" border border-dark"
                                alt="home page picture" height="180"></a></button>
                </form>

            </div>
            <div class="col-lg-6 ">
                <?php
                echo "<a href='successcash.php ? orderid= $corderid'><img src='productimage/cashondelivery.jpg' class='img rounded-3 border border-dark' alt='home page picture'
                        height='200'></a>";
                ?>
                <!-- <a href="successcash.php  ? orderid= $corderid'" id="cashondelivery"><img
                        src="productimage/cashondelivery.jpg" class="img rounded-3 border border-dark "
                        alt="home page picture" height="200"> -->
            </div>

        </div>
    </div>



    <script>
        // Function to show an alert when any <a> tag is clicked
        function showAlert() {
            // alert("Are You Sure To Purchase!");
        }

        // Get all <a> tags on the page
        var allLinks = document.querySelectorAll('a');

        // Attach click event listener to each <a> tag
        allLinks.forEach(function (link) {
            link.addEventListener('click', showAlert);
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    < /scrip > <
    script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity = "sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin = "anonymous" > < /scrip> <
                / body > <
                /html >