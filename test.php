<!DOCTYPE html>
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






    <!-- =======================================================================- -->

</head>

<body>

    <!-- =================================NAV BAR ================================ -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand fs-5 bg-info" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About Product</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active " href="allproduct.php" aria-current="page">All Products</a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link active " href="customerhomepage.php" aria-current="page">All Category</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              All Category
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> -->




                    <li class="nav-item dropdown">
                        <a class="nav-link active " aria-disabled="true" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="adminformlogin.php">Admin</a></li>
                            <li><a class="dropdown-item" href="customerformlogin.php">Customer</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                        </ul>
                    </li>


                    <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="adminformlogin.php">Admin Login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="customerformlogin.php"> Customer Login</a>
          </li> -->

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="userregister.php">Register</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-disabled="true" href="contact.php">Contact Us</a>
                    </li>







                </ul>
                <form class="d-flex" role="search" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    method="POST">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                        name="search">
                    <button class="btn btn-outline-success" type="submit">Search</button>

                </form>
            </div>
        </div>
    </nav>


    <form class="d-flex" role="search" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-success" type="submit">Search</button>

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {




        // Retrieve form values
        $search = $_POST["search"];
        echo $search;


        switch ($search) {
            case "fruit":




                // Set the value you want to send
                $valueToSend = "fruit";
                echo "test " . $valueToSend;
                // Redirect to another page with the value in the Location header
                header("Location: specificproduct.php?value=" . urlencode($valueToSend));

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
</body>

</html>