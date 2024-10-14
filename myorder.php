<!DOCTYPE html>
<html lang="en">


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<!--  =================================BOOTSTRAP============================================= -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>

body{
    background-color: #FFF2D7;
}
.tablecolor{
    background-color: #EDF4F2;
}


/* Your custom styles */
.table-container {
			max-height: 300px;
			/* Set the maximum height for the table body */
			overflow-y: auto;
			/* Enable vertical scrolling for the table body */
		}

		.sticky-header {
			position: sticky;
			top: 0;
			background-color: #ffffff;
			/* Background color of the sticky header */
			z-index: 1;
		}

</style>

</head>

<body>
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

    <!-- navbar -->

    <div class="mt-4">
        .
    </div>
    <div class="mt-5">
        
    </div>
    
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
                        <a class="nav-link active fs-5" aria-current="page" href="userdashboard.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="aboutus.php">About_Us</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active fs-5 text-dark " aria-current="page" href="allproduct.php">Products</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="categories.php">Categories</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active text-dark fs-5 bg-info rounded-3" href="myorder.php">My_Orders</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fs-5 text-dark" href="mycart.php">My_Cart</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fs-5 text-dark" href="customerpasswordchange.php">Change_Password</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fs-5 text-dark" href="customerprofile.php">Account_Detail</a>
                    </li>



                    <!-- <form class="d-flex ml-auto " role="search"
                        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <input class="form-control border border-dark me-2" type="search" placeholder="Search"
                            aria-label="Search" name="search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                    <li class="nav-item">
                    <a class="nav-link active fs-5 text-dark" href="customerlogout.php">Logout</a>
                    </li>

                </ul>
                
            </div>
        </div>
    </nav>



    <!-- navbar -->

    <!-- ======================================NAV BAR ======================================= -->
    <!-- <div class="container p-5">
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
                                    <li class="nav-item">
                                        <a class="nav-link active text-dark fs-5 "
                                            href="userdashboard.php">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active fs-5 text-dark" href="allproduct.php">Products</a>
                                    </li>

                                   

                                    <li class="nav-item">
                                        <a class="nav-link active fs-5 text-dark bg-info rounded-3"
                                            href="myorder.php">My_Orders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active fs-5 text-dark" href="mycart.php">My_Cart</a>
                                    </li> -->
                                    <!-- <li class="nav-item">
                                        <a class="nav-link active fs-5 text-dark" href="myaccount.php">My Account</a>
                                    </li>
                                     -->

                                    <!-- <li class="nav-item">
                                        <a class="nav-link active fs-5 text-dark"
                                            href="customerpasswordchange.php">Change Password</a>

                                    <li class="nav-item">
                                        <a class="nav-link active fs-5 text-dark" href="customerlogout.php">Logout</a>
                                    </li>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div> -->

    <!-- table -->

    <div class="container p-2">
        <div class="row">
            <div class="col-md-15 ">
                <div class="card">
                    <div class="card-header text-center fs-4">Order List</div>
                    <div class="card-body">

                        <div class="overflow-scroll" style="height: 470px; border: 1px black solid;">
                            <table class="table table-bordered tablecolor text-center">
                                <thead class="sticky-header bg-info">
                                    <tr>
                                        <th scope="col">SeedImage</th>

                                        <th scope="col">SeedName</th>
                                        <th scope="col">SeedType</th>
                                        <th scope="col">SeedQuantity</th>
                                        <th scope="col">SeedPrice</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM orderdetail where customerid='$cphone' ;";
                                    $run = mysqli_query($conn, $query);
                                    //$data = mysqli_fetch_assoc($run);
                                    while ($data = mysqli_fetch_assoc($run)) {



                                        echo "<tr>

                
                <td><img src='$data[seedimage]'height='70' width='60'></td>
               
                <td class='fs-5'>$data[seedname]</td>
                <td class='fs-5'> $data[seedtype]</td>
                <td class='fs-5'>$data[seedquantity]</td>
                <td class='fs-5'>$data[seedprice]</td>
                <td class='fs-5'>$data[total]</td>
                <td class='fs-5'>$data[orderstatus]</td>
            </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- table end -->

    <!-- <table class="table">
        <thead>
            <tr>
                <th scope="col">SeedImage</th>

                <th scope="col">SeedName</th>
                <th scope="col">SeedType</th>
                <th scope="col">SeedQuantity</th>
                <th scope="col">SeedPrice</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody> -->
            <?php
            // $query = "SELECT * FROM orderdetail where customerid='$cphone' ;";
            // $run = mysqli_query($conn, $query);
            // //$data = mysqli_fetch_assoc($run);
            // while ($data = mysqli_fetch_assoc($run)) {



            //     echo "<tr>

                
            //     <td><img src='$data[seedimage]'height='70' width='60'></td>
               
            //     <td>$data[seedname]</td>
            //     <td>$data[seedtype]</td>
            //     <td>$data[seedquantity]</td>
            //     <td>$data[seedprice]</td>
            //     <td>$data[total]</td>
            //     <td>$data[orderstatus]</td>
            // </tr>";
            // }
            ?>
        <!-- </tbody>
    </table> -->








    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>