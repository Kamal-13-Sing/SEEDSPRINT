<!DOCTYPE html>
<html lang="en">


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<!--  =================================BOOTSTRAP============================================= -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    body {
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
                        <a class="nav-link active fs-5 text-dark " aria-current="page"
                            href="allproduct.php">Products</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="categories.php">Categories</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active active fs-5" href="myorder.php">My_Orders</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fs-5 " href="mycart.php">My_Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5 text-dark" href="customerpasswordchange.php">Change_Password</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-dark fs-5 bg-info rounded-3"
                            href="customerprofile.php">Account_Detail</a>
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
   // echo $cphone;

    // $query = "SELECT * FROM userregistration where Phone ='$cphone' ;";
    // $run = mysqli_query($conn, $query);
    // $data = mysqli_fetch_assoc($run);

    // echo "id ".$data['id'];
    // $id = $data['id'];

    // //---------detail from id-----------

    // $queryc = "SELECT * FROM userregistration where id ='$id'";
    // $runc = mysqli_query($conn, $queryc);
    // $data = mysqli_fetch_assoc($run);
    // $datac = mysqli_fetch_assoc($runc);

    // echo "name ".$datac['name'];
    // $cname = $datac['name'];
    // $cemail = $datac['email'];
    // $cphone = $datac['Phone'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id = $_POST['id'];
        $name = $_POST['name'];
        $cemail = $_POST['email'];
        $phone = $_POST['Phone'];
        
       // echo "name ".$name;
        
    }


    ?>


    <!-- ==================================Registeration form=============================== -->
    <div class="container p-5 ">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="card">

                    <div class="card-header text-center fs-4">Update Account Details...!!</div>

                    <div class="card-body">
                        <form action="updatecustomerprofile.php" id="myForm" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                    name="name" value="<?php echo $name; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                    name="email"  value="<?php echo $cemail ; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Phone</label>
                                <input type="number" class="form-control" name="phone" id="phone"  value="<?php echo $cphone ; ?>"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 10)" required>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div> -->

                            <!-- <div class="col-lg-12 col-md-12 mb-3 ">
                                <input type="checkbox" id="togglePassword"> Show Password
                            </div> -->

                            <input type="hidden" class="form-control" id="id" aria-describedby="emailHelp"
                                    name="id" value="<?php echo $id; ?>" required readonly>

                            <div class="d-grid gap-2">
                                <input class="btn btn-success fs-5" type="submit" value="Save Change">

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


    




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>