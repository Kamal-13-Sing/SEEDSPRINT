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
    background-color: #F0FFF0;
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

    <!-- ======================================NAV BAR ======================================= -->
  
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
                        <a class="nav-link active active fs-5" href="myorder.php">My_Orders</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-dark fs-5 bg-info rounded-3" href="mycart.php">My_Cart</a>
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

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $mcseedcode = $_POST["seedcode"];
        $seedname = $_POST["seedname"];
        $quantity = $_POST["seedquantity"];
        $seedprice = $_POST["seedprice"];
        $total = $quantity * $seedprice;

        $seedimage = $_POST["image"];
        $seedtype = $_POST["seedtype"];

        $cartproductid = $_POST["cardproductid"];



        //    echo "<br> seedcode $seedcode ";
    
        $query = "INSERT INTO mycart(seedcode,customerid, seedimage, seedname, seedtype, quantity, total,seedprice, cartproductid)
        VALUES('$mcseedcode','$cphone','$seedimage','$seedname','$seedtype', '$quantity', '$total', '$seedprice','$cartproductid');";

        $run = mysqli_query($conn, $query);

        if ($run) {
            header("Location:mycart.php");
        } else {
            echo "Data Insertion is failed because..." . mysqli_error($conn);
        }


    }
    ?>


    <table class="table ms-5">
        <thead>
            <tr>
                <th scope="col" class="fs-5">SeedImage</th>
                <th scope="col"  class="fs-5">SeedName</th>
                <th scope="col"  class="fs-5">Type</th>
                <th scope="col"  class="fs-5">Quantity</th>
                <th scope="col"  class="fs-5">Price</th>
                <th scope="col"  class="fs-5">Total</th>
                <th scope="col"  class="fs-5">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php


            ?>
            <?php


            $query = "SELECT * FROM mycart where customerid ='$cphone' ;";
            $run = mysqli_query($conn, $query);
            //$data = mysqli_fetch_assoc($run);
            while ($data = mysqli_fetch_assoc($run)) {

                echo "<tr>";


                echo " <td><img src='$data[seedimage]' class=' border border-info imagebg' alt='home page picture'
                height='70' width='70'></td>";

                echo "    <td class='fs-4'>$data[seedname]</td>";
                echo "   <td class='fs-4'>$data[seedtype]</td>";
                echo "    <td class='fs-4'>$data[quantity]</td>";
                echo "   <td class='fs-4'>$data[seedprice]</td>";
                echo "  <td class='fs-4'>$data[total]</td>";

                ?>

                <td>

                    <form action="deletecart.php" method="POST">

                    <input type="hidden" name="seedname" value="<?php echo $data['id']; ?>"> 

                        <input class="bg-danger fs-5 text-light rounded-pill" type="submit" value="delete">

                    </form>

                </td>

                <td>
                    <form  action="orderdetails.php" method="POST">


                        <input type="hidden" name="seedquantity" class="form-control"
                            value="<?php echo $data['quantity']; ?>">

                        <div class="col-lg-4  mb-3 border  ">
                            <input type="hidden" name="seedname" value="<?php echo $data['seedname']; ?>">
                            <input type="hidden" name="stock" value="<?php echo $data['quantity']; ?>">
                            <input type="hidden" name="seedprice" value="<?php echo $data['seedprice']; ?>">
                            <input type="hidden" name="seedcode" value="<?php echo $data['seedcode']; ?>">
                            <input type="hidden" name="image" value="<?php echo $data['seedimage']; ?>">
                            <input type="hidden" name="description" value="<?php echo $data['pdescription']; ?>">
                            <input type="hidden" name="seedtype" value="<?php echo $data['seedtype']; ?>">
                            <input type="hidden" name="cartproductid" value="<?php  echo $data['cartproductid'];?>">



                            <input class="bg-success text-light fs-5 rounded-pill" type="submit" value="Proceed to checkout">
                    </form>
                <td>



                    <?php
                    echo "    </tr>";
            }


            ?>
        </tbody>
    </table>








    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>