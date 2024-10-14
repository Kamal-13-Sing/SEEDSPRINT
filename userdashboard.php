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
        background-image: url('productimage/udash.jpg');
        background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
    background-size:100% ;
    }
</style>

</head>

<body>
<?php
    //session_start();
    include("connection.php");
    error_reporting(0);
    ?>

    <!-- ======================================NAV BAR ======================================= -->

    <div class="container">

<div class="centered">
  <h2>" Grow Your Seed Online "<style>
      font color="blue"
    </style>
  </h2>
</div>
</div>



<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
<div class="container">
  <a class="navbar-brand fs-5" href="home.php"><span class="text-warning">Seeds</span>Print</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

      

      <li class="nav-item">
        <a class="nav-link active fs-5 rounded-3 text-dark bg-info " aria-current="page" href="userdashboard.php">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active fs-5" aria-current="page" href="aboutus.php">About_Us</a>
      </li>



      <li class="nav-item">
        <a class="nav-link active fs-5" aria-current="page" href="allproduct.php">Products </a>
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

      <form class="d-flex ml-auto" role="search" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
        method="POST">
        <input class="form-control me-2 border-dark" type="search" placeholder="Search" aria-label="Search"
          name="search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </ul>
    <div class="btn-group ms-5" role="group">
      <!-- <button id="btnGroupDrop1" type="button"
                     class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> -->
      <button id="btnGroupDrop1" type="button" class="nav-link  fs-5" data-bs-toggle="dropdown"
        aria-expanded="false">Login</button>
      <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <li><a class="dropdown-item" href="customerformlogin.php">User</a></li>
        <li><a class="dropdown-item" href="adminformlogin.php">Admin</a></li>
      </ul>
    </div>
  </div>
</div>
</nav>

 <!-- =========================== All Product  -->

 <!-- <div class="container p-5  justify-content-center border border-light">
        <div class="row"> -->



            <?php
            // $name = $_GET['data1'];
            // //echo "name $name";
            // //$stringValue = strval($name);
            // $query = "SELECT * FROM productdetails";
            // $run = mysqli_query($conn, $query);

            // while ($data = mysqli_fetch_assoc($run)) {

            //     // if ($name==$data['seedtype']  ) {
            //     // echo $data['seedname'];
            //     // echo $data['quantity'];
            //     // echo $data['seedprice'];
            //     // echo $data['seedtype'];
            //     // echo "<img src='$data[pimage]'height='100' width='70'>";
            //     // echo $data['seedcode'];
            //     // echo $data['pdescription'];
            
            //     echo " <div class=' row col-lg-5 col-md-12 ms-4 mb-5 me-4  '>";

            //     echo " <div class='  col-lg-4 col-md-4'>";

            //     $seedcode = $data['seedcode'];
            //     //  echo $seedcode;
            //     echo "<a href='productbuy.php ? data1= $seedcode'><img src='$data[pimage]' class='img rounded-3' alt='home page picture'
            //             height='190' width='160'></a>";
            //     echo "</div>";
            //     echo " <div class=' col-lg-7 col-md-7 ms-2'>";
            //     echo " <p class='fw-bold'>SeedName: $data[seedname] </p>";
            //     echo "<p class='fw-bold'>Seedtype: $data[seedtype]</p>";
            //     echo "<p class='fw-bold'>Available stock: $data[quantity]</p>";
            //     echo "<p class='fw-bold'>Price: $data[seedprice];</p>";
            //     //echo "<p class='fw-bold'>Description: $data[pdescription]</p>";
            //     // echo "<p class='fw-bold'>Description: </p><input type='text-area' value='$data[pdescription]'readonly";
            //     echo "</div>";
            //     echo "</div> ";
            //     // echo $name;
            
            // }

            // // }
            
            ?>

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