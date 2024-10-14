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


            background-color: #FFF0F5;

        }
        .tdupdate{
            border:darkblue;
        }
    </style>

</head>

<body>
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


    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand fs-5" href="admindashboard.php"><span class="text-warning">Seeds</span>Print</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active  fs-5 " aria-current="page" href="admindashboard.php">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="productadd.php">Add_Product </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active  fs-5 text-dark " aria-current="page"
                            href="productdetail.php">View_Product</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-dark fs-5 bg-info rounded-3 "
                            href="adminorderdetails.php">Order_Detail</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fs-5 text-dark" href="adminlogout.php">Logout</a>
                    </li>





                </ul>

            </div>
        </div>
    </nav>









    <div class="mt-5">
        .
    </div>
    <div class="mt-3">
        .
    </div>


    <table class="table">
        <thead>
            <tr>
                <th scope="col" class='fs-5'>SeedImage</th>
                <th scope="col" class='fs-5'>CustomerId</th>
                <th scope="col" class='fs-5'>SeedName</th>
                <th scope="col" class='fs-5'>SeedType</th>
                <th scope="col" class='fs-5'>SeedQuantity</th>
                <th scope="col" class='fs-5'>SeedPrice</th>
                <th scope="col" class='fs-5'>Total</th>
                <th scope="col" class='fs-5'>Status</th>
                
                <th scope="col" class='fs-5'>ChangeStatus</th>
                <th scope="col" class='fs-5'>Action</th>


            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM orderdetail ;";
            $run = mysqli_query($conn, $query);
            //$data = mysqli_fetch_assoc($run);
            while ($data = mysqli_fetch_assoc($run)) {



                echo "<tr> ";

                echo "
                <td><img src='$data[seedimage]'height='80' width='60'></td>
                <td class='fs-5'>$data[customerid]</td>
                <td class='fs-5'>$data[seedname]</td>
                <td class='fs-5'>$data[seedtype]</td>
                <td class='fs-5'>$data[seedquantity]</td>
                <td class='fs-5'>$data[seedprice]</td>
                <td class='fs-5'>$data[total]</td>
                <td class='fs-5'>$data[orderstatus]</td> ";




                ?>

                <td>

                    <form class=" col-lg-9" action="updateadminorder.php" method="POST">

                        <input type="hidden" name="orderid" value="<?php echo $data['id']; ?>">


                        <!-- <input class="col-lg-3" type="text" name="update" value="processed"> -->

                        <select class="form-select" name="update"
                                        aria-label="Default select example">

                                        <option value="pending">Pending</option>

                                        <option value="out for delivery">Out for Delivery</option>

                                        <option value="delivered">Delivered</option>

                                    </select>
            

                        <input class="bg-danger text-light rounded-pill" type="submit" value="update">

                    </form>
                    </td>

                </td>

                <td>
                    <!-- delete button -->
                    <form action="deleteadminorder.php" method="POST">

                        <input type="hidden" name="orderid" value="<?php echo $data['id']; ?>">

                        <input class="bg-danger text-light rounded-pill" type="submit" value="Detete">

                    </form>

                    <!-- end -->
                </td>
                <td>

                
                    <form action="printbill.php" method="POST">

                        <input type="hidden" name="orderid" value="<?php echo $data['orderid']; ?>">



                        <input class="bg-danger text-light rounded-pill" type="submit" value="View detail">

                    </form>

                </td>


                <?php
                echo " </tr>";
            }
            ?>
        </tbody>
    </table>








    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    < /scrip > <
    script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity = "sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin = "anonymous" > < /scrip> < /
            body > <
                /html >