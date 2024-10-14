<!doctype html>
<html lang="en">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">





    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
</head>

<body>
    <!-- ======================================= SESSION ======================================== -->
    <?php
    session_start();
    include("connection.php");
    error_reporting(0);
    $name = $_SESSION["session"];
    if ($name) {

    } else {
        header("location:adminformlogin.php");
    }
    $seedcode=$_GET['data1'];
    echo "Seedcode $seedcode";
    ?>


    




                    <?php
                
                $query = "DELETE  FROM productdetails WHERE seedcode = '$seedcode';";
                $run = mysqli_query($conn, $query);
                if($run){
                    header("Location: productdetail.php");
                }
?>

            
                        
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form values
        $seedname = $_POST["seedname"];
        $seedprice = $_POST["seedprice"];
        $seedquantity = $_POST["quantity"];
        $seedtype = $_POST["seedtype"];
        $seedimage = $_POST["uploadimage"];
        $seedid = $_POST["seedid"];
        $seeddescription = $_POST["description"];

        echo " <br> seedname $seedname";
        echo "<br> seedprice $seedprice ";
        echo "<br> quantity $seedquantity";
        echo "<br> seedtype $seedtype";
        echo "<br> image $seedimage";
        echo "<br> seedid $seedid ";
        echo "<br> description $seeddescription <br>";

        $filename = $_FILES["uploadimage"]["name"];
        $tempname = $_FILES["uploadimage"]["tmp_name"];
        $folder = "photos/" . $filename;

        move_uploaded_file($tempname, $folder);
        //echo "<img src='$folder'height='100' width='100'>";
        echo $folder;

       $query= "UPDATE productdetails SET seedname = '$seedname', seedprice='$seedprice' ,quantity = '$seedquantity', seedtype = '$seedtype', pimage = '$folder', seedcode = '$seedid', pdescription = '$seeddescription'
        WHERE seedcode='$seedid' ";
        
        $run = mysqli_query($conn, $query);

        if ($run) {
            header("Location:productdetail.php");
        } else {
            echo "Data Insertion is failed because..." . mysqli_error($conn);
        }
    }



    ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></scrip >
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
                    crossorigin="anonymous"></scrip>



</body >
</html >
        