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
            background-image: url("productimage/addproduct.jpg");
            background-size: cover;
            background-position: center;
        }
    </style>


</head>

<body>
    <?php
    //-----------------session start and control--------------------
    session_start();
    error_reporting(0);
    include ("connection.php");
   

    ?>


    <!-- ------------------------------------------NAV BAR------------------------------------- -->




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
                        <a class="nav-link active fs-5 " aria-current="page" href="admindashboard.php">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-dark fs-5 bg-info rounded-3" aria-current="page"
                            href="productadd.php">Add_Product </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="productdetail.php">View_Product</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fs-5 text-dark" href="adminorderdetails.php">Order_Detail</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fs-5 text-dark" href="adminlogout.php">Logout</a>
                    </li>





                </ul>

            </div>
        </div>
    </nav>






    <?php
    $accountNumber = rand(0, 999999);
    // Print the generated account number to the console
//echo "Generated account number: " . $accountNumber;
    ?>



<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $adderr = "";
        $success = "";
        
        // Retrieve form values
        $seedname = $_POST["seedname"];
        $seedprice = $_POST["seedprice"];
        $quantity = $_POST["quantity"];
        $seedtype = $_POST["seedtype"];
        $pimage = $_POST["uploadimage"];
        $seedid = $_POST["seedid"];
        $pdescription = $_POST["description"];


        if($seedprice < 0 || $quantity < 0){

            $adderr = "SeedPrice or SeedQuantity must be positive!!!";

        }else{
            $success="Product Successfully Added";
            // echo " <br> seedname $seedname";
            // echo "<br> seedprice $seedprice ";
            // echo "<br> quantity $quantity";
            // echo "<br> seedtype $seedtype";
            // echo "<br> image $pimage";
            // echo "<br> seedid $seedid";
            // echo "<br> description $pdescription <br>";
    
            $filename = $_FILES["uploadimage"]["name"];
            $tempname = $_FILES["uploadimage"]["tmp_name"];
            $folder = "photos/" . $filename;
    
            move_uploaded_file($tempname, $folder);
            //echo "<img src='$folder'height='100' width='100'>";
            echo $folder;
    
    
            $query = "INSERT INTO productdetails(seedname,quantity,seedprice,seedtype,pimage,seedcode,pdescription )
            VALUES('$seedname','$quantity','$seedprice','$seedtype','$folder','$seedid','$pdescription');";
    
            $run = mysqli_query($conn, $query);
    
            if ($run) {
               // header("Location:productadd.php");
             

            } else {
                echo "Data Insertion is failed because..." . mysqli_error($conn);
            }
        }

      
    }



    ?>

    <div class="mt-5">
        .
    </div>


    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">

                <div class="card">

                    <div class="card-header text-center fs-4">Add New Product
                    <h4 class=" text-center fs-4 text-danger"><span>
                                <?php echo $adderr; ?>
                            </span>
                        </h4>
                        <h4 class=" text-center fs-4 text-success"><span>
                                <?php echo $success; ?>
                            </span>
                        </h4>
                    </div>
                    
                    <div class="card-body">

                        <form class="row g-4" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                            method="post" enctype="multipart/form-data">

                            <div class="row g-3">

                                <div class="col-lg-6 col-md-12">
                                    <label for="formFile" class="form-label fs-5">Seed Name</label>
                                    <input type="text" class="form-control" name="seedname" id="name"
                                        placeholder="Seed Name" aria-label="First name" required>

                                </div>

                                <div class="col-md-6">
                                    <label for="formFile" class="form-label fs-5">Seed Quantity</label>
                                    <input type="number" class="form-control" name="quantity" id="quantity"
                                        placeholder="Quantity" aria-label="First name " required>

                                </div>

                            </div>

                            <div class="row g-3">

                                <div class="col-lg-6 col-md-12">
                                    <label for="formFile" class="form-label fs-5">Seed Price</label>

                                    <input type="number" class="form-control" name="seedprice" id="seedprice"
                                        placeholder="Seed Price" aria-label="First name" required>

                                </div>

                                <div class="col-md-6">
                                    <label for="formFile" class="form-label fs-5">Select Category</label>
                                    <select class="form-select" name="seedtype" id="seedtype"
                                        aria-label="Default select example">

                                        <option value="vegetable">Vegetables</option>

                                        <option value="fruit">Fruits</option>

                                        <option value="flower">Flowers</option>

                                    </select>
                                </div>

                            </div>



                    </div>


                    <div class="row g-3">

                        <div class="col-lg-6 col-md-12">

                            <div class="mb-3">
                                <label for="formFile" class="form-label fs-5">Select Image</label>
                                <input class="form-control" type="file" name="uploadimage" required>
                            </div>

                        </div>

                        <div class="col-lg-6 col-md-12">

                        <label for="iformFile" class="form-label fs-5">Auto-generated Seed Code</label>

                        <input type="number" class="form-control" name="seedid" id="seedid"
                            value="<?php echo $accountNumber; ?>" readonly>

                    </div>
                </div>



                <div class="row g-3">





                     <div class="col-lg-6 col-md-12">

                        <label for="inputCity" class="form-label fs-5">Seed Description</label>

                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                                name="description" required> </textarea>
                            
                        </div>

                </div>
                <div class="col-lg-6 col-md-12">

                    <p id="dobError" style="color: red;"></p>

                </div>

            </div>







            <div class="d-grid gap-2">

                <button type="submit" class="btn btn-success fs-4">Add Product</button>

            </div>

            </form>

        </div>

    </div>

    </div>



    </div>

    </div>

    <script>

//------------------make name field only alphabet-------------

document.addEventListener('DOMContentLoaded', function () {
			var inputField = document.getElementById('name');

			inputField.addEventListener('input', function () {
				var inputValue = this.value;
				var alphabeticValue = inputValue.replace(/[^a-z A-Z]/g, ''); // Remove non-alphabetic characters

				if (inputValue !== alphabeticValue) {
					this.value = alphabeticValue;
				}
			});
		});

    </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></scrip >
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
                    crossorigin="anonymous"></scrip>
</body >
</html >