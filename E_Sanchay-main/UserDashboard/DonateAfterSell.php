<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $productID = $_REQUEST["prodID"];
        //echo $productID;

        include '../DBconn/dbconn.php';
        $sql = "UPDATE products set productType = 'donate', adminResponse = 'Approved' WHERE productID = $productID";

        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . mysqli_error($conn);
          }
          
          mysqli_close($conn);

        header('Location: ./user.php');

    }

?>