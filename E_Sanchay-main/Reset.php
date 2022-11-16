<?php

  $uEmail="";

    if(isset($_GET["email"])){
      $uEmail = $_GET["email"];
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
  <img src="./collect.jpg" alt="" style="width: 1600px;
     height: 850px; ">
    <div class="container d-flex flex-column" style="position: absolute; left:120px; top:50px;>
      <div class="row align-items-center justify-content-center
          min-vh-100">
        <div class="col-12 col-md-8 col-lg-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="mb-4">
                <h5>Reset Password</h5>
                <p class="mb-2">Enter a new Password below
                </p>
              </div>
              <form method="POST" action="updateEmail.php">
                <div class="mb-3">
                  <label for="password" class="form-label" id="passLabel">New Password</label>
                  <input type="password" id="new" class="form-control" name="new" placeholder="Enter Your Password"
                    required=""  onkeyup='passLength(); check();'>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Confirm Password</label>
                  <input type="password" id="confirmed" class="form-control" name="confirmed" placeholder="Confirm Your Password"
                    required="" onkeyup='check();'>
                </div>
                    <span id="message"></span>

                <input type="hidden" name="uEmail" value="<?php echo $uEmail; ?>">

                <div class="mb-3 d-grid">
                  <button type="submit" name="submit" id="submit" class="btn btn-primary">
                    Reset Password
                  </button>
                </div>
                <span>Don't have an account? <a href="../E_Regain-master/LoginRegister/register.php">sign in</a></span>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      var passLength = function() {
                
                if(document.getElementById('new').value.length <= 6){
                    document.getElementById('passLabel').style.color = 'red';
                    document.getElementById('passLabel').innerHTML = 'Password must be greater than 6 characters';
                    document.getElementById('submit').disabled = true;
                } else {
                    document.getElementById('passLabel').style.color = 'green';
                    document.getElementById('passLabel').innerHTML = 'good';
                    document.getElementById('submit').disabled = false;
                }
            }

            var check = function() {
                if (document.getElementById('new').value == document.getElementById('confirmed').value) {
                    // if(document.getElementById('password').value.length <= 6){
                    //     document.getElementById('message').innerHTML = 'Password must be greater than 6 characters';
                        
                    // }
                  document.getElementById('message').style.color = 'green'; 
                  document.getElementById('message').innerHTML = ' ';
                  document.getElementById('submit').disabled = false;
                } else {
                  document.getElementById('message').style.color = 'red';
                  document.getElementById('message').innerHTML = 'password not matching';
                  document.getElementById('submit').disabled = true;
                }
            }
    </script>

  </body>

</html>