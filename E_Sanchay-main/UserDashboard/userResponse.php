

<?php
    session_start();

    include '../DBConn/dbconn.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $userRes = $_REQUEST["userRes"];
        $productID = $_REQUEST["prodID"];

        $sql = "UPDATE products SET userResponse = $userRes where productID = '$productID'";
        $result = mysqli_query($conn, $sql);

        header('Location: ./user.php');



    }else{
        echo "<center><h1>Sorry buddy, u are tresspassing</h1></center>";
    }



?>