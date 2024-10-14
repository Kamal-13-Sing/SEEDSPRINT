<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!--  =================================BOOTSTRAP============================================= -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>

    body{
        background-color: #FDF5E6;
    }
    .imagediv{
        background-color: #FFDAB9;
    }
</style>

    </head>

<body>


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
                        <a class="nav-link active fs-5 text-dark" aria-current="page" href="allproduct.php">Products</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active text-dark fs-5 bg-info rounded-3" aria-current="page" href="categories.php">Categories</a>
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
<div class="mt-3">
.
</div>

    <?php //---------------------------Product Category-----------------------------------------  ?>
    <div class="container p-5 align-items-center justify-content-center ">
        <div class="row">


            <div class=" imagediv col-lg-3 col-md-10 ms-5 border border-dark text-center rounded-3">
                <a href="specificproduct.php? data1=flower"><img src="productimage/flower.png" class="img rounded-3"
                        alt="home page picture" height="200"></a>
                <h4> Flower Seed</h4>
            </div>


            <div class="  imagediv col-lg-3 col-md-10 ms-5  border border-dark text-center rounded-3">
                <a href="specificproduct.php? data1=vegetable"><img src="productimage/vegetable.png" class="img rounded-3" alt="home page picture"
                        height="200"></a>
                <h4>Vegetable Seed</h4>
            </div>



            <div class=" imagediv col-lg-3 col-md-10 ms-5 border border-dark text-center rounded-3">
                <a href="specificproduct.php? data1=fruit"><img src="productimage/fruit.png" class="img rounded-3" alt="home page picture"
                        height="200"></a>
                <h4> Fruits Seed</h4>
            </div>


        </div>
    </div>

<!-- ================================SCRIPT ================================================== -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>