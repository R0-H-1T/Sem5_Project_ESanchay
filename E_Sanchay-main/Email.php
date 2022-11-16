<?php
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    function SendMail($recEmail){
      $mail = new PHPMailer(true);
        try{
            //$mail->SMTPDebug = 2;                                       
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com;';                    
            $mail->SMTPAuth   = true;                             
            $mail->Username   = 'dummyusermail022@gmail.com';                 
            $mail->Password   = 'lguwvohdsqzxccox';                        
            $mail->SMTPSecure = 'tls';                              
            $mail->Port       = 587;  
    
            $mail->setFrom('dummyusermail022@gmail.com', 'Dummy');           
            $mail->addAddress($recEmail);
            //$mail->addAddress('receiver2@gfg.com', 'Name');
        
            $mail->isHTML(true);                                  
            $mail->Subject = 'Subject';
            $mail->Body    = '<b>Click the below link to change your password.<br>
            If you haven\'t sent such a request please ignore this mail. Thanks!</b><br> 
            <a href="http://localhost/Projects/E_Sanchay-main/E_Sanchay-main/Reset.php?email='.$recEmail.'">RESET PASSWORD</a>';
            //http://localhost/Projects/E_Sanchay-main/E_Sanchay-main/Reset.php?email='.$recEmail.'">RESET PASSWORD</a>';
            //$mail->AltBody = 'Body in plain text for non-HTML mail clients';
            $mail->send();
            echo "<center><h1>Mail has been sent successfully!</h1><h2>A link has been provided for you to create a new password</h2></center>";
        }
        catch(Exception $e){
            //echo "Message is not sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    if(isset($_POST["submit"])){
        include './DBConn/dbconn.php';
        $sql = "SELECT Email FROM users";
        $result = mysqli_query($conn, $sql);
        if(!$result){
          echo "<center><h1>User not registered</h1>Redirecting to register page</center>";
          header( "refresh:5;url=../LoginRegister/register.php" );
        }
        $_POST["email"] = strip_tags($_POST["email"]);
        $recEmail = $_POST["email"];
        //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $flag = 0;
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          if($row["Email"] == $recEmail){
            SendMail($recEmail);
            $flag = 1;
            break;
          }
        }
        if($flag == 0){
          echo "<center><h1>User not registered</h1></center>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
  <img src="./collect.jpg" alt="" style="width:1599px;
     height: 850px ; ">
    <div class="container d-flex flex-column" style="position: absolute; left:120px; top:50px;">
      <div class="row align-items-center justify-content-center
          min-vh-100">
        <div class="col-12 col-md-8 col-lg-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="mb-4">
                <h5>Forgot Password?</h5>
                <p class="mb-2">Enter your registered email ID to reset the password
                </p>
              </div>
              <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email"
                    required="">
                </div>
                <div class="mb-3 d-grid">
                  <button type="submit" name="submit" id="submit" class="btn btn-primary">
                    Reset Password
                  </button>
                </div>
                <span>Don't have an account? <a href="./LoginRegister/trial.php">sign in</a></span>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>