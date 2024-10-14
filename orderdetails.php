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
    $cphone = $_SESSION["customersession"];
    if ($cphone) {
        //   echo  "NAme $name";
    } else {
        header("location:customerformlogin.php");
    }

    ?>

    <!--  ================================== NAV-BAR =============================================== -->
    <!-- <div class="container">
        <div class="row"> -->


    <!-- <div class="container-fluid sticky-top">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light bg-success">
                        <div class="container-fluid">
                            <a class="navbar-brand text-light" href="customerlogout.php">Logout</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button> -->


    <!-- <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav"> -->




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
                                        <a class="nav-link active text-dark fs-5 " href="aboutproduct.php">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active fs-5 text-dark" href="allproduct.php">All Product</a>
                                    </li>



                                    <li class="nav-item">
                                        <a class="nav-link active fs-5 text-dark" href="customerhomepage.php">All
                                            Category</a>
                                    </li>




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


    $query = "SELECT * FROM userregistration WHERE phone= '$cphone';";
    $run = mysqli_query($conn, $query);

    while ($data = mysqli_fetch_assoc($run)) {

        // if ($name==$data['seedtype']  ) {
        $phone = $data['Phone'];
        $naam = $data['name'];
        $email = $data['email'];


        $orderDate = date('Y-m-d'); // Format: Year-Month-Day
    
        //echo "Current Date: $currentDate";
    

        $currentDate = new DateTime(); // Current date and time
        //  echo "Current Date: " . $currentDate->format('Y-m-d') . "<br>";
    
        // Add 2 days
        $currentDate->modify('+2 days');
        $date_after_two_days = $currentDate->format('Y-m-d');
        // echo "Date after adding 2 days: " . $date_after_two_days."<br>";
    
        // Subtract 3 days
        $currentDate->modify('+3 days');
        $date_after_three_days = $currentDate->format('Y-m-d');
        // echo "Date after subtracting 3 days: " . $date_after_three_days . "<br>";
    
    }
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 offset-lg-2 col-md-10 offset-md-1">

                <div class="card">

                    <div class="card-header text-center fs-4">Details...!!</div>

                    <div class="card-body">

                        <!-- <form class="row g-4" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> -->

                        <form class="row g-4" action="paymentoption.php" method="post">

                            <div class="row g-3">

                                <div class="col-lg-6 col-md-12">

                                    <input type="text" class="form-control" name="uname" id="uname"
                                        value="<?php echo $naam; ?>" placeholder="Full Name" aria-label="First name"
                                        required>

                                </div>
                                <div class="col-lg-6 col-md-12">

                                    <input type="text" class="form-control" name="uemail" id="email"
                                        value="<?php echo $email; ?>" placeholder="E-mail" aria-label="First name"
                                        required>

                                </div>
                                <div class="col-lg-6 col-md-12">

                                    <input type="text" class="form-control" name="unbr" id="unbr"
                                        value="<?php echo $phone; ?>" placeholder="Mobile Number"
                                        aria-label="First name" required>



                                </div>
                                <div class="col-lg-6 col-md-12">

                                    <input type="text" class="form-control" name="uaddress" id="uarea"
                                        placeholder="Address" aria-label="First name" required>

                                </div>

                                <div class="col-lg-6 col-md-12 ">
                                    <label for="formFile" class="form-label">Order Date</label>
                                    <input type="text" name="orderdate" value="<?php echo $orderDate; ?>"
                                        class="form-control" readonly>

                                </div>

                                <div class="col-lg-6 col-md-12 ">
                                    <label for="formFile" class="form-label">Standard Delivery Date</label>
                                    <input type="text" name="deliverydate"
                                        value="<?php echo $date_after_two_days . " to " . $date_after_three_days; ?>"
                                        class="
                                        form-control" readonly>

                                </div>






                            </div>







                    </div>



                    <!-- <div class="row g-3 border border-dark col-lg-10 ms-3 mt-3">-->
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        //  $currentDate = date('Y-m-d'); // Format: Year-Month-Day
                    

                        $orderid = rand(0, 999999);

                        $cartproductid = $_POST['cartproductid'];
                       // echo  $cartproductid;

                        $seedname = $_POST["seedname"];
                        $seedprice = $_POST["seedprice"];
                        $stock = $_POST["stock"];
                        $seedtype = $_POST["seedtype"];
                        $pimage = $_POST["image"];
                        $seedcode = $_POST["seedcode"];
                        $pdescription = $_POST["description"];
                        $uquantity = $_POST["seedquantity"];
                        $total = $seedprice * $uquantity;

                        $newStock = $stock - $uquantity;


                        //---standard delivery date
                        $sdd = $date_after_two_days . " to " . $date_after_three_days;

                        //echo $sdd;
                    
                        // echo $orderDate;
                    

                        // echo "Total $total";
                    
                        // echo " <br> seedname $seedname";
                        // echo "<br> seedprice $seedprice ";
                    
                        // echo "<br> seedtype $seedtype";
                        // echo "<br> userquantity $uquantity";
                        // echo "<br> image $pimage";
                        // echo "<br> stock $stock";
                        // echo "<br> seedcode $seedcode ";
                        // echo "<br> description $pdescription <br>";
                    


                        if (1 == 1) {

                        }

                        // $filename = $_FILES["image"]["name"];
                        // $tempname = $_FILES["image"]["tmp_name"];
                        // $folder = "" . $filename;
                    
                        //  move_uploaded_file($tempname, $folder);
                        //echo "<img src='$folder'height='100' width='100'>";
                        //echo $folder;
                    

                        //                 $query = "INSERT INTO orderdetail(seedimage,seedname,seedtype,seedprice,seedquantity,total,pdescription,customerid,orderstatus,seedcode,orderdate,standarddeliverydate)
                        // VALUES('$pimage','$seedname','$seedtype','$seedprice','$uquantity','$total','$pdescription','$cphone', 'pending','$seedcode','$orderDate','$sdd');";
                    
                        //                 $run = mysqli_query($conn, $query);
                    
                        //                 if ($run) {
                    
                        //                     header("Location:productadd.php");
                        //                 } else {
                        //                     echo "Data Insertion is failed because..." . mysqli_error($conn);
                        //                 }
                    

                    }


                    ?>


                </div>

                <!-- remain 9 input -->

                <input type="hidden" class="form-control" name="orderid" id="seedimage" placeholder="Full Name"
                    aria-label="First name" value="<?php echo $orderid; ?>" required>

                <input type="hidden" class="form-control" name="seedimage" id="seedimage" placeholder="Full Name"
                    aria-label="First name" value="<?php echo $pimage; ?>" required>

                <input type="hidden" class="form-control" name="seedname" id="seedname" placeholder="Full Name"
                    aria-label="First name" value="<?php echo $seedname; ?>" required>

                <input type="hidden" class="form-control" name="seedtype" id="seedtype" placeholder="Full Name"
                    aria-label="First name" value="<?php echo $seedtype; ?>" required>

                <input type="hidden" class="form-control" name="seedquantity" id="seedquantity" placeholder="Full Name"
                    aria-label="First name" value="<?php echo $uquantity; ?>" required>

                <input type="hidden" class="form-control" name="customerid" id="customerid" placeholder="Full Name"
                    aria-label="First name" value="<?php echo $cphone; ?>" required>

                <input type="hidden" class="form-control" name="seedprice" id="seedprice" placeholder="Full Name"
                    aria-label="First name" value="<?php echo $seedprice; ?>" required>



                <input type="hidden" class="form-control" name="payment" id="payment" placeholder="Full Name"
                    aria-label="First name" value="esewa" required>


                <input type="hidden" class="form-control" name="orderdate" id="orderdate" placeholder="Full Name"
                    aria-label="First name" value="<?php echo $orderDate; ?>" required>

                <input type="hidden" class="form-control" name="stddate" id="totalprice" placeholder="Full Name"
                    aria-label="First name" value="<?php echo $sdd; ?>" required>

                <!-- remai end -->


                <input type="hidden" class="form-control" name="seedcode" id="totalprice" placeholder="Full Name"
                    aria-label="First name" value="<?php echo $seedcode; ?>" required>

                <input type="hidden" class="form-control" name="totalprice" id="totalprice" placeholder="Full Name"
                    aria-label="First name" value="<?php echo $total; ?>" required>

                    <input type="hidden" class="form-control" name="cartproductid" id="cartproductid" placeholder="Full Name"
                    aria-label="First name" value="<?php echo $cartproductid; ?>" required>


                <div class="d-grid gap-2">

                    <button type="submit" class="btn btn-info fs-4">Place Order</button>

                </div>

                </form>

            </div>

        </div>

    </div>



    </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    < /scrip > <
    script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity = "sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin = "anonymous" > < /scrip> <
                / body > <
                /html >