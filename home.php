<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


  <style>
    body {

      background-image: url('productimage/sunset1.jpg');
      background-position: relative;
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;

      height: 50vh;

    }

    /* Centered text */
    .centered {
      position: absolute;
      top: 95%;
      left: 74%;
      transform: translate(-50%, -50%);
      font-color="blue";

    }
  </style>


</head>

<body>

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
            <a class="nav-link active fs-5" aria-current="page" href="userdashboard.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active fs-5" aria-current="page" href="aboutus.php">About_Us</a>
          </li>



          <li class="nav-item">
            <a class="nav-link active fs-5" aria-current="page" href="allproduct.php">Product </a>
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










  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Retrieve form values
    $search = $_POST["search"];
    echo $search;
    $f;

   // switch ($search) {
     // case "fruit":
        //$f = 1;
  


        // Set the value you want to send
        //$valueToSend = "fruit";

        //echo "test " . $valueToSend;
        // Redirect to another page with the value in the Location header
        header("Location:specificproductsecond.php?value=" . urlencode($search));
        // echo "test 2" . $valueToSend;
  
        // if ($f == 1) {
        //     header("Location:productadd.php");
        // }
        // Ensure that subsequent code is not executed after redirection
      //  break;
      //case "vegetable":

        // Set the value you want to send
      //  $valueToSend = "vegetable";

        // Redirect to another page with the value in the Location header
      //  header("Location: specificproduct.php?value=" . urlencode($valueToSend));
        // Ensure that subsequent code is not executed after redirection
      //  break;
     // case "flower":
        // Set the value you want to send
      //  $valueToSend = "flower";



        // Redirect to another page with the value in the Location header
      //  header("Location: specificproduct.php?value=" . urlencode($valueToSend));
      // Ensure that subsequent code is not executed after redirection
  

  //  }
     
  }
  ?>










  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>