<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $uemail = $_REQUEST["uEmail"];
        $upwd = $_REQUEST["uPass"];

        if($uemail == 'esanchay@e.com' && $upwd=="1234"){
            header("Location: ../AdminDashboard/allusers.php");
        }

        if($_REQUEST['LoginRegister'] == 'login'){

            $uemail = strip_tags($uemail);
            $upwd = strip_tags($upwd);
            $upwd = md5($upwd);
            include '../DBConn/dbconn.php'; 
            $sql = "SELECT * FROM users WHERE Email='$uemail' AND UserPassword='$upwd'";
            $result = mysqli_query($conn, $sql);
            if(!$result){
                echo "<center><h1>User not registered</h1>Redirecting to register page</center>";
                header( "refresh:5;url=../LoginRegister/register.php" );

            }
            $cnt = mysqli_num_rows($result);
            if($cnt == 1){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                session_start();
                $_SESSION["UserID"] = $row["UserID"];
		        $_SESSION["UName"] = $row["UserName"];
                $_SESSION["UEmail"] = $row["Email"];
		        $_SESSION["logged"] = "TRUE";
        		$_SESSION["flashedMessage"] = 'false';

                header("Location: ../index.php");
                // header("refresh:5;url=../Home/home.php");


            }else { 
                echo "<center><h1>User not registered</h1>Redirecting to register page</center>";
                header( "refresh:3;url=../LoginRegister/register.php" );


            }

        }else{
            // for registering new users
            
            $uname = $_REQUEST["uName"];
            $ucontact = $_REQUEST["phno"];


            $uname = strip_tags($uname);    
            $uemail = strip_tags($uemail);
            $upwd = strip_tags($upwd);
            $upwd = md5($upwd);
            $ucontact = strip_tags($ucontact);

            include '../DBConn/dbconn.php'; 

            $sql = "INSERT INTO users(UserName, UserPassword, PhoneNumber, Email) values('$uname', '$upwd', '$ucontact', '$uemail')";

            if (mysqli_query($conn, $sql)) {
                echo"<center><h1 style='background-color:green; color:white; font-family:sans-serif; width: 600px;'>Registered!</h1></center>";
                header("refresh:5;url= ../login.php");
        		

            }
            else{
                echo"Record not inserted";
            }
        }




    }else{
        echo "Not working";
    }

?>




<!-- 1. Contact us and login : create table and the records shoulc be registered 
2. Service page : add functionality to only selected products -->