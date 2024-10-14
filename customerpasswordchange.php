<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php
    //-----------------session start and control--------------------
    session_start();
    error_reporting(0);
    include("connection.php");
    $session = $_SESSION["customersession"];
    if ($session) {
       // echo "NAme $session";
    } else {
        header("location:customerformlogin.php");
    }

    ?>


    <!-- ======================================NAV BAR ======================================= -->
    <div class="container p-5">
        <div class="row">


            <div class="container-fluid sticky-top">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                        <div class="container-fluid">
                            <a class="navbar-brand text-dark" href="home.php">Home</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>


                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active text-dark fs-5  "
                                            href="userdashboard.php">Dashboard</a>
                                    </li>


                                    </>




                                    <li class="nav-item">
                                        <a class="nav-link active fs-5 text-dark bg-info"
                                            href="customerpasswordchange.php">Change Password</a>

                                    <li class="nav-item">
                                        <a class="nav-link active fs-5 text-dark" href="customerlogout.php">Logout</a>
                                    </li>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container p-5 ">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">

                        <div class="card-header text-center fs-4">Change Password...!!</div>

                        <div class="card-body">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="myForm"
                                method="post">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label"> Old Password</label>
                                    <input type="password" class="form-control" name="oldpassword" id="oldpassword"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">New Password</label>
                                    <input type="password" class="form-control" name="newpassword" id="newpassword"
                                        required>
                                </div>


                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label"> Confirm New Password</label>
                                    <input type="password" class="form-control" name="confirmpassword"
                                        id="confirmpassword" required>
                                </div>

                                <div class="col-lg-12 col-md-12 mb-3 ">
                                    <input type="checkbox" id="togglePassword"> Show Password
                                </div>

                                <div class="d-grid gap-2">
                                    <input class="btn btn-success" type="submit" value="Change">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form values
        $oldpassword = $_POST["oldpassword"];
        $newpassword = $_POST["newpassword"];
        $confirmpassword = $_POST["confirmpassword"];


        // echo " <br> OldPassword $oldpassword";
        // echo " <br> NewPassword $newpassword";
        // echo "<br> ConfirmPassword $confirmpassword";





        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
          //  echo "Connection succesful <br>";
        }

        // Example query
        $sql = "SELECT * FROM userregistration WHERE Phone = '$session' ";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);

        // Check if the query was successful
    

        $doldpass = $data['password'];
       // echo "<br> dpass" . $doldpass;
        if ($newpassword == $confirmpassword) {
            if ($doldpass == $oldpassword) {
                $sql = "UPDATE  userregistration SET password ='$newpassword' WHERE Phone = '$session' ";
                $result = mysqli_query($conn, $sql);
               // $data = mysqli_fetch_assoc($result);

               if($result){
               // echo "password change successfully";
                echo '<script>window.location.href = "customerlogout.php";</script>';
 
               }


    //             header("Location: customerpasswordchange.php");
                //echo "password change successfully";
 

    //         } else {
    //             //echo "Old password does not match <br>";
    //         }
    //     } else {
    //        // echo "New password and confirm password must be same";

    //     }

    // }



    // if ($result) {
    //     echo "<script>alert('Password changed successfully');</script>";
    //     echo '<script>window.location.href = "userdashboard.php";</script>';

    //     exit(); // Ensure that script stops executing after redirection
    // } else {
    //     echo "<script>alert('Failed to change password');</script>";
    // }
} else {
    echo "<script>alert('Old password does not match');</script>";
}
} else {
echo "<script>alert('New password and confirm password must be the same');</script>";
}
}
?>



     





        <script>
        //-------------hide and see transaction pin-----------------------
        const pinField1 = document.getElementById('oldpassword');
        const pinField2 = document.getElementById('newpassword');
        const pinField3 = document.getElementById('confirmpassword');

        const toggleCheckbox = document.getElementById('togglePassword');

        toggleCheckbox.addEventListener('change', function() {
            if (toggleCheckbox.checked) {
                pinField1.setAttribute('type', 'text');
                pinField2.setAttribute('type', 'text');
                pinField3.setAttribute('type', 'text');

            } else {
                pinField1.setAttribute('type', 'password');
                pinField2.setAttribute('type', 'password');
                pinField3.setAttribute('type', 'password');

            }
        });
        </script>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        < /scrip > <
        script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity = "sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin = "anonymous" > < /scrip> <
            /body > <
            /html >