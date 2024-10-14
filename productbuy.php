<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        body {
            background-color: #AFEEEE;
        }

        .imagebg {
            background-color: antiquewhite;
        }
    </style>


</head>

<body>
    <?php
    include ("connection.php");
    ?>

    <!-- ======================================NAV BAR ======================================= -->





    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand fs-5" href="home.php"><span class="text-warning">Seeds</span>Print</a>
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
                        <a class="nav-link active text-dark fs-5 bg-info rounded-3 " aria-current="page" href="allproduct.php">Products</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="categories.php">Categories</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active fs-5 text-dark" href="myorder.php">My_Orders</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fs-5 text-dark" href="mycart.php">My_Cart</a>
                    </li>




                    <!-- <form class="d-flex ml-auto " role="search"
                        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <input class="form-control border border-dark me-2" type="search" placeholder="Search"
                            aria-label="Search" name="search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->

                </ul>
                <div class="btn-group ms-5" role="group">
                    <!-- <button id="btnGroupDrop1" type="button"
                         class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> -->
                    <button id="btnGroupDrop1" type="button" class="nav-link " data-bs-toggle="dropdown"
                        aria-expanded="false">Account</button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <li><a class="dropdown-item" href="customerformlogin.php">User</a></li>
                        <li><a class="dropdown-item" href="adminformlogin.php">Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>




    <div class="mt-5">
        .
    </div>
    <div class="container mt-5">
        <div class="row">


            <div class="  col-lg-12 ">
                <?php
                $seedcode1 = $_GET['data1'];



                //echo "name $name";
                //$stringValue = strval($name);
                $query = "SELECT * FROM productdetails WHERE seedcode = '$seedcode1';";
                $run = mysqli_query($conn, $query);
                $data = mysqli_fetch_assoc($run);
                //while ($data = mysqli_fetch_assoc($run)) {
                


                // if ($name==$data['seedtype']  ) {
                // echo $data['seedname'];
                // echo $data['quantity'];
                // echo $data['seedprice'];
                // echo $data['seedtype'];
                // echo "<img src='$data[pimage]'height='100' width='70'>";
                // echo $data['seedcode'];
                // echo $data['pdescription'];
                
                echo " <div class=' row col-lg-12 col-md-12 ms-4 mb-5 me-4  '>";

                echo " <div class=' col-lg-5 col-md-4 '>";
                $seedcode = $data['seedcode'];
                //  echo $seedcode;
                echo "<a href='productbuy.php ? data1= $seedcode'><img src='$data[pimage]' class=' border border-info imagebg' alt='home page picture'
                        height='310'></a>";
                echo "</div>";
                echo " <div class=' col-lg-5 col-md-7 border border-dark'>";
                echo " <p class='fw-bold'>SeedName: $data[seedname] </p>";
                echo "<p class='fw-bold'>Seedtype: $data[seedtype]</p>";
                if ($data['quantity'] <= 0) {

                    echo "<p class='fw-bold'>Available stock: Out of stock</p>";
                } else {
                    echo "<p class='fw-bold'>Available stock: $data[quantity]</p>";
                }

                echo "<p class='fw-bold'>Price: Rs $data[seedprice]</p>";
                echo "<p class='fw-bold'>Description: $data[pdescription]</p>";
                // echo "<p class='fw-bold'>Description: </p><input type='text-area' value='$data[pdescription]'readonly";
                
                echo "</div>";

                echo "</div> ";
                // echo $name;
                

                // }
                



                // }
                
                ?>



            </div>
            <div class="  col-lg-3 border border-light ">
                <div class=" input-group mb-3 border  ">

                    <?php
                    if ($data['quantity'] <= 0) {

                        //echo "<p class='fw-bold'>Available stock: Out of stock</p>";
                    } else {
                        echo " <span class='input-group-text' id='basic-addon1'>quantity</span> ";
                    }

                    ?>


                    <!-- <span class="input-group-text" id="basic-addon1">quantity</span> -->

                    <form action="mycart.php" id="cartform" method="POST">

                        <?php


                        if ($data['quantity'] <= 0) {

                            echo "<p class='fw-bold text-danger fs-4'>Currently not available</p>";
                        } else {
                            echo "<input type='number' name='seedquantity' id='seedquantity' class='form-control' value='1'>";
                        }

                        $cartproductid = rand(0, 999999);
                        ?>

                        <!-- <input type="number" name="seedquantity" class="form-control" value="1"> -->
                </div>
                <div class="col-lg-4  mb-3 border  ">
                    <input type="hidden" name="seedname" value="<?php echo $data['seedname']; ?>">



                    <input type="hidden" name="stock" id="stock" value="<?php echo $data['quantity']; ?>">
                    <input type="hidden" name="seedprice" value="<?php echo $data['seedprice']; ?>">
                    <input type="hidden" name="seedcode" value="<?php echo $data['seedcode']; ?>">
                    <input type="hidden" name="image" value="<?php echo $data['pimage']; ?>">
                    <input type="hidden" name="description" value="<?php echo $data['pdescription']; ?>">
                    <input type="hidden" name="seedtype" value="<?php echo $data['seedtype']; ?>">
                    <input type="hidden" name="cardproductid" value="<?php echo $cartproductid; ?>">


                    <?php
                    if ($data['quantity'] <= 0) {

                        //echo "<p class='fw-bold'>Available stock: Out of stock</p>";
                    } else {
                        echo " <input type='submit' value='Add To Cart'> ";
                    }

                    ?>
                    <!-- <input type="submit" value="Add To Cart"> -->
                    </form>
                    <!-- <form action="orderdetails.php" method="POST">


                        <input type="number" name="seedquantity" class="form-control" value="1" aria-label="Username"
                            aria-describedby="basic-addon1">
                </div>
                <div class="col-lg-4  mb-3 border  ">
                    <input type="hidden" name="seedname" value="<?php echo $data['seedname']; ?>">
                    <input type="hidden" name="stock" value="<?php echo $data['quantity']; ?>">
                    <input type="hidden" name="seedprice" value="<?php echo $data['seedprice']; ?>">
                    <input type="hidden" name="seedcode" value="<?php echo $data['seedcode']; ?>">
                    <input type="hidden" name="image" value="<?php echo $data['pimage']; ?>">
                    <input type="hidden" name="description" value="<?php echo $data['pdescription']; ?>">
                    <input type="hidden" name="seedtype" value="<?php echo $data['seedtype']; ?>">



                    <input type="submit" value="Buy Now">
                    </form> -->
                </div>

                <!-- <div class=" col-lg-3 mt-3">
                   
                    <form action="mycart.php" method="POST">


                        <input type="number" name="seedquantity" class="form-control" value="1" aria-label="Username"
                            aria-describedby="basic-addon1">
                </div> -->

            </div>

        </div>
    </div>


    <script>
        document.getElementById('cartform').addEventListener('submit', function (event) {

            var seedquantity = document.getElementById('seedquantity').value;
            var stock = document.getElementById('stock').value;


            // var stringValuestock = seedquantity; // Example string value
            // var stringValue = stock 

            var intQuantity = Number(seedquantity); // Converts "456" to integerF
            var intStock = Number(stock);

            if (intQuantity > intStock) {

                event.preventDefault();
                alert('choose less then or equal to ' + stock);


            } else if (intQuantity <= 0) {
                event.preventDefault();
                alert('choose more than or equal to 1 ');

            }

            //alert('Today Date is'+todayDate+'and acNo '+acNo);

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