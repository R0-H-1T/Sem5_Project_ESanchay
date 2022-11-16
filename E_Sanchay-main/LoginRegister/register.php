<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <!-- Template Main CSS File -->
  <link href="../assets/css/login.css" rel="stylesheet">
  <link href="../assets/css/main.css" rel="stylesheet">

</head>

<body>
<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <!-- <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div> -->
      <div class="social-links d-none d-md-flex">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="../assets/img/ES 1.png" alt="">
        <h1>E-SANCHAY<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.php#hero">HOME</a></li>
          <li><a href="../index.php#about">ABOUT</a></li>
          <li><a href="../index.php#contact">CONTACT</a></li>
          <!-- <li><a href="#services">Services</a></li> -->
          <li><a href="../index.php#portfolio">SERVICES</a></li>
          <!-- <li><a href="#team">Team</a></li> -->
          <!-- <li><a href="login.php">LOGIN/SIGN UP</a></li> -->

          <?php
          // session_start();
          
            
            if(empty($_SESSION['logged'])){ ?>
               <li><a href="../login.php">LOGIN/SIGN UP</a></li>
              <?php
              
            } else {
                if(isset($_SESSION['logged'])){  ?>
                    <li><a href="../TemplateHTMl/logout.php">Logout</a></li>
                    <li><a href="../UserDashboard/user.php">Your Dashboard</a></li>
                    <!-- <li style="color:white; text-transform:uppercase;"><?php echo 'Hello '.$_SESSION['UName'];?></li> -->
              
                <?php
                }else{
                    echo "isset condition not working";
                    // header("Location: ../Home/home.php");
  
              }
          } 
  
        ?>       
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->


    <div class="loginForm">
        <section class="log">
            <h1 class="loginHeader">Register</h1><hr>
            <div class="login">
                <form action="trial.php" method="POST">

             
                    <!-- name -->
                    <div class="form-outline mb-4">
                        <input type="text" name="uName" id="form2Example1" class="form-control" required/>
                        <label class="form-label" for="form2Example1" >Name</label>
                    </div> 


                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="uEmail" id="form2Example1" class="form-control" required />
                        <label class="form-label" for="form2Example1" >Email address</label>
                    </div>


                    <!-- phone number -->
                    <div class="form-outline mb-4">
                        <input type="number" name="phno" id="phnoLength" class="form-control" /*onkeyup='phnoLength();'*/ required/>
                        <label class="form-label" for="phnoLength" >Phone No</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="password" class="form-control" onkeyup='passLength(); check();'  />
                        <label class="form-label" id="passLabel" for="password">Password</label>
                    </div>

                    <!-- confirm password -->
                    <div class="form-outline mb-4">
                        <input type="password" name="uPass" id="conf_password" class="form-control"  onkeyup='check();' />
                        <label class="form-label" for="conf_password">Confirm Password</label>
                    </div>
                    <span id="message"></span>



                    <div class="text-center">
                        <p>Already a member ? <a href="../login.php">Login</a></p>
                    </div>
                <!-- 2 column grid layout for inline styling -->
                <!-- <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                    <!--    <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                    </div>
    
                    <div class="col">
                        <!-- Simple link --><!--
                        <a href="#!">Forgot password?</a>
                    </div>
                </div> -->


                    <!-- hiddenInputForLogin/RegisterIdentification -->
                    <input type="hidden" name="LoginRegister" value="register">
    
                <!-- Submit button -->
                    <button type="submit" id="submit" class="btn btn-primary btn-block mb-4" >Register</button>
    
                <!-- Register buttons -->
                <!-- <div class="text-center">
                    <p>Not a member? <a href="#!">Register</a></p>
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>
    
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>
    
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>
    
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div> -->
                </form>
            </div>
        </section>
       
    </div>

       <footer  style="margin-top:850px;" id="footer" class="footer">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index.html" class="logo d-flex align-items-center">
          <span>E-SANCHAY</span>
        </a>
        <p>An waste management website which collects old and non-functional electronic equipments and in exchanage of that cash is provided to the seller, then we sell those products collected to our vendors who recycle the waste </p>
        <div class="social-links d-flex mt-4">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Terms of service</a></li>
          <li><a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <!-- <li><a href="#">Web Design</a></li>
          <li><a href="#">Web Development</a></li>
          <li><a href="#">Product Management</a></li>
          <li><a href="#">Marketing</a></li>
          <li><a href="#">Graphic Design</a></li> -->
        </ul>
      </div>

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contact Us</h4>
        <p>
          845, Shivaji Nagar <br> Pune <br> Maharashtra 411004 <br><br>
          <strong>Phone:</strong> +91 20 6757 6200 <br>
          +91 83 3425 8923<br>
          <strong>Email:</strong> info@example.com<br>
        </p>

      </div>

    </div>
  </div>

  <div class="container mt-4">
    <div class="copyright">
      &copy; Copyright <strong><span>E-SANCHAY</span></strong>. All Rights Reserved
    </div>
   
  </div>

</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>
</div>
<!-- Vendor JS Files -->
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>
<script>
  function displayDivDemo(id, elementValue) {
     document.getElementById(id).style.display = elementValue.value == 1 ? 'block' : 'none';
  }
</script>


<script>
// var phnoLength = function() {
//     if()
// }

var passLength = function() {
    
    if(document.getElementById('password').value.length <= 6){
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
    if (document.getElementById('password').value == document.getElementById('conf_password').value) {
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