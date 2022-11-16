<?php
if(isset($_POST["submit"])){
      include './DBConn/dbconn.php';
      $uEmail = $_REQUEST["uEmail"];
      $pwd = $_POST["confirmed"];
      $pwd = strip_tags($pwd);
      $pwd = md5($pwd);
      $sql = "UPDATE users SET UserPassword='$pwd' WHERE Email='$uEmail' ";
      if(mysqli_query($conn, $sql)){
        echo("<center><h3>You have changed your password. Please use your new credentials to log in!</h3></center>");
        header( "refresh:5;url=./login.php" );

      }else{
        echo "<center><h1>User not registered</h1>Redirecting to register page</center>";
        header( "refresh:5;url=./LoginRegister/trial.php" );
      }
    }
    else{
        echo("Invalid User.");
    }
?>