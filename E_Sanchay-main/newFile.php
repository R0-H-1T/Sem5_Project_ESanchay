<?php

    session_start();
    include 'DBConn/dbconn.php';
    include 'TemplateHTML/boilerplate.html';
    include 'TemplateHTML/Navbar/home.php'; ?>
    

    <?php include './QuesTemplate/functions.php';

    

    echo "<center><h1 style='margin-top:30px;'>Hello {$_SESSION['UName']}</h1><br>";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //$add = "";
        if(isset($_REQUEST["address"])){
            echo isset($_REQUEST["address"]);
            $add = $_REQUEST["address"];
        }
        

        $fileupload = $_REQUEST['fileupload'];
        $productCategory = $_REQUEST['productCategory'];

        if(isset($_REQUEST['sell'])){
            // echo "You have decided to sell"; 

            // $sql = "INSERT INTO products(UName, UEmail, UPhone, UMessage) values('$uname', '$uemail', '$uphone', '$umessage')";

            $productType = 'sell';

        }else{
            // echo "You have decided to donate";
            $productType = 'donate';
        }


        $arr = $_REQUEST['arr'];
        //$arr = removeHash($arr);

        //adminResponse temporary - pending
        //img in table 
        //product details in table
        //productPrice 
        // user address

    }


?>    


<?php

    if(isset($_REQUEST["address"])){
            $add = $_REQUEST["address"];
            $user = "UPDATE users SET UserAddress = '$add' WHERE userID = '{$_SESSION["UserID"]}'";
    // $user = "INSERT INTO users(UserAddress) VALUE('$add') where userID = '{$_SESSION["UserID"]}'";
            $product = "INSERT INTO products(user_ID, admin_ID, productDate, productAns, productImgPath, productType, productCategory)
            VALUE('{$_SESSION["UserID"]}', 1, NOW(), '$arr', '$fileupload', '$productType', '$productCategory')";   
    }else{
        $product = "INSERT INTO products(user_ID, admin_ID, productDate, productAns, productImgPath, productType, productCategory)
        VALUE('{$_SESSION["UserID"]}', 1, NOW(), '$arr', '$fileupload', '$productType', '$productCategory')";   
    }
  


    //echo $fileupload;
    //for user table
    if(isset($_REQUEST["address"])){
        $add = $_REQUEST["address"];
            
        if (mysqli_query($conn, $user)) {
        //for products table 
            if (mysqli_query($conn, $product)) {
                echo "<div class='container' style='padding:20px;  margin-bottom:30px;'>
                <br><h3 style='background-color:green; color:white; width:500px; border-radius: 10px; padding:10px; '>Your response has been collected</h3><br>
                <b>Pls view the status on your dashboard</b><br>
                <b>Address given: $add </b><br>

                <a href='UserDashboard/user.php' class='btn btn-primary'>User Dashboard</a>
                <a style='margin-top:20px;' href='SellItem?itemName=$productCategory'>Back</a></center>
                </div>";
            }
            else{
                echo"Record not inserted in products:(";
            }

        }
        else{
           echo"Record not inserted un users:(";
       }

    }else {
        if (mysqli_query($conn, $product)) {
            echo "<div class='container' style='padding:20px; margin-bottom:30px;'>
            <br><h3 style='background-color:green; color:white; width:500px; border-radius: 10px; padding:10px; '>Your response has been collected</h3><br>
            <b>Pls view the status on your dashboard</b><br>
            

            <a style='margin-top:20px;' href='UserDashboard/user.php' class='btn btn-primary'>User Dashboard</a>
            <a style='margin-top:20px;' href='SellItem?itemName=$productCategory'>Back</a></center>
            </div>";
        }
        else{
            echo"Record not inserted in products:(";
        }
    }


    



      mysqli_close($conn);
    include 'TemplateHTML/Footer/footer.html';

?>

