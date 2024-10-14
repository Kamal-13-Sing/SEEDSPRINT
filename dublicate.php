<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!--    ==================================    SELF ====================== -->
    <style>
        body {
            /* background-color: #6f42c1; Change the color code to your desired background color */
            background-image: url('productimage/a.jpg');
            /* URL should point to the location of your image */
            background-size: cover;
            /* This ensures the image covers the entire background */
            background-repeat: no-repeat;
            /* Prevents the image from repeating */
            background-attachment: fixed;
            /* Fixes the background position */
        }
    </style>

</head>

<body>








<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <!-- -------------------Nav Bar Item ------------------------------ -->

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="aboutproduct.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="allproduct.php">All Product</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="customerhomepage.php">All Category</a>
        </li>

        <li class="nav-item dropdown">
            <!---toggle -->
           <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="customerformlogin.php">Customer</a></li>
            <li><a class="dropdown-item" href="adminformlogin.php">Admin</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="userregister.php">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        </ul>
                   
                    <form class="d-flex ml-auto" role="search" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                        method="POST">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            name="search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>


                    <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->


        </div>
  </div>
</nav>






    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        // Retrieve form values
        $search = $_POST["search"];
        echo $search;
        $f;

        switch ($search) {
            case "fruit":
                //$f = 1;
    


                // Set the value you want to send
                $valueToSend = "fruit";

                //echo "test " . $valueToSend;
                // Redirect to another page with the value in the Location header
                header("Location:specificproduct.php?value=" . urlencode($valueToSend));
                // echo "test 2" . $valueToSend;
    
                // if ($f == 1) {
                //     header("Location:productadd.php");
                // }
                // Ensure that subsequent code is not executed after redirection
                break;
            case "vegetable":

                // Set the value you want to send
                $valueToSend = "vegetable";

                // Redirect to another page with the value in the Location header
                header("Location: specificproduct.php?value=" . urlencode($valueToSend));
                // Ensure that subsequent code is not executed after redirection
                break;
            case "flower":
                // Set the value you want to send
                $valueToSend = "flower";



                // Redirect to another page with the value in the Location header
                header("Location: specificproduct.php?value=" . urlencode($valueToSend));
            // Ensure that subsequent code is not executed after redirection
    

        }

    }
    ?>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
       

    <!-- integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"> -->
</body>

</html>