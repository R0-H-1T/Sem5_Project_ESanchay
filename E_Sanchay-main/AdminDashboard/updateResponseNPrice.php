

<?php

    include '../DBConn/dbconn.php';


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $res = $_REQUEST["res"];
        $productID = $_REQUEST["productID"];

        
        
        $sql = "UPDATE products SET adminResponse = '$res' where productID = $productID";
        $result = mysqli_query($conn, $sql);
        
        //for accepting price  
        if(isset($_REQUEST["submit"])){
            $productPrice = $_REQUEST["productPrice"];
            $sql = "UPDATE products set productPrice = '$productPrice' where productID = $productID";
            $result = mysqli_query($conn, $sql);

        }else {
            echo $productPrice;
            echo "Button not set";
        }


        header('Location: ./allProducts.php');
    }else {
        echo "some problem";
    }


?>