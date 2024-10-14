

<?php
    //session_start();
    include ("connection.php");
    error_reporting(0);
    ?>

<?php


 //-------old stock---------------
 $querygetstock = "SELECT * FROM productdetails WHERE seedcode = 138410;";

 $runstock = mysqli_query($conn, $querygetstock);
 $datastock = mysqli_fetch_assoc($runstock);

 $oldstock = $datastock['quantity'];
 echo "old stock ".$oldstock;

 //--------quantity selected by user-------

 $buygetstock = "SELECT * FROM orderdetail WHERE seedcode = 138410;";

 $buygetstock = mysqli_query($conn, $buygetstock);
 $databuystock = mysqli_fetch_assoc($buygetstock);

 $buystock = $databuystock['seedquantity'];
 echo "buy item ".$buystock;


 $newStock = $oldstock - $buystock;

 echo "new stock ".$newStock;
 //-----update with new stock
 $querynewstock = "UPDATE productdetails SET quantity='$newStock' WHERE seedcode = 138410;";

 $runnewstock = mysqli_query($conn, $querynewstock);

?>