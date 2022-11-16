<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
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
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css" rel="stylesheet" /> -->
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <!-- Template Main CSS File -->
  <!-- <link href="../assets/css/login.css" rel="stylesheet"> -->
  <link href="../assets/css/main.css" rel="stylesheet">

</head>

<body>
<section id="topbar" class="topbar d-flex align-items-center" style="position: relative; width:102%;">
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

  <header id="header" class="header d-flex align-items-center" style="position: relative; width:102%;">

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
          $randomnum =rand(1,6);
          session_start();
          
            
            if(empty($_SESSION['logged'])){ ?>
               <li><a href="../login.php">LOGIN/SIGN UP</a></li>
              <?php
              
            } else {
                if(isset($_SESSION['logged'])){  ?>
                    <li><a href="../TemplateHTMl/logout.php">LOGOUT</a></li>
                    <li><a href="../UserDashboard/user.php">YOUR DASHBOARD</a></li>
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

<?php
// session_start();
    if(isset($_SESSION['logged'])){
        include '../DBconn/dbconn.php';
        include '../QuesTemplate/functions.php';
        //css();
        echo "<center><h1> Welcome Back {$_SESSION['UName']} </h1></center><hr>"; ?>
        
        <center>
            <h2>Displaying your products</h2>
            
                <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        
        $sql = "SELECT productID, productCategory, userResponse ,productPrice,productDate, productAns, productType, adminResponse, productImgPath FROM products join users on Email = '{$_SESSION["UEmail"]}' and user_id = {$_SESSION["UserID"]}";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) { 
                
                $arr = removeHash($row["productAns"]);
                $imgarr = removeHash($row["productImgPath"]);
                
                $count = 0;
                ?>
                
                <!-- echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>"; -->
                <div class="col">
                <div class="card" style="width:400px; margin-bottom: 30px;">
                    <center>
                        <!-- <img style="width:300px; height:300px; "src="../Services/<?php //echo $row["productImgPath"];  ?>" class="card-img-top" alt="..."> -->


                      <!-- img carousel -->
                      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                          <?php   

                          foreach($imgarr as $path){
                              if($count == 0){ ?>
                                  <div class="carousel-item active">
                                      <img style="width:300px; height:300px;" src="../<?php echo $path; ?>" class="d-block w-100" alt="...">
                                  </div>
                              <?php }else { ?>
                                  <div class="carousel-item">
                                      <img style="width:300px; height:300px;" src="../<?php echo $path; ?>" class="d-block w-100" alt="...">
                                  </div>
                              <?php }
                                  $count++;
                          }

                          ?>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>

                    </center>
                  <div class="card-body">
                    <h4>Details of your product:  </h4>
                    <h5 class="card-title"><?php echo $row["productCategory"]; ?></h5>
                    <p class="card-text">
                    <?php foreach($arr as $word) { ?>
                    <span><?php echo $word; ?></span><br>
                    <?php } ?>
                    </p>
                    <p class="card-text"><b>Status: <?php echo $row["adminResponse"]; ?></b></p>

                    <?php if($row["productType"] == "sell") {
                        if($row["adminResponse"] != "Rejected"){ ?>
                            <?php if($row["userResponse"] == '') { ?>
                              <p class="card-text"><b>You are selling this product</b></p>
                            <?php } ?>
                        <?php } ?>
                      <?php if(empty($row["productPrice"])) { ?>
                          <?php if($row["adminResponse"] == "Rejected") { ?>
                            <p class="card-text" style="background-color:#f0f0f0; border-radius: 10px;">Unfortunately, this product does not hold any <b> monetery value.</b> However you can put this up for <b>donation</b></p>
                            <form action="DonateAfterSell.php" method="post">
                                <input type="hidden" name="prodID" value="<?php echo $row["productID"];?>">
                                <button class="btn btn-warning">Donate ?</button>
                            </form> 
                          <?php } else { ?>
                            <p class="card-text"><b>Someone will come for inspection of your product</b></p>
                          <?php } ?>
                      <?php }else if($row["adminResponse"] == "Approved"){?>
                        
                        
                                  <?php if($row["userResponse"] == ''){ ?>
                                        <p class="card-text"><b>Exchange it for: Rs <?php echo $row["productPrice"]; ?></b></p>
                                        <form action="userResponse.php" method="POST">
                                          <input type="hidden" name="prodID" value="<?php echo $row["productID"]; ?>">
                                          <!-- date random number generate -->
                                          <input type="hidden" name="date" value="<?php echo $randomnum; ?>">
                                          <button class="btn btn-success" name="userRes" value="1">Go ahead</button>
                                          <button class="btn btn-danger" name="userRes" value="0">Reject</button>
                                        </form>
                                    
                                  <?php }if ($row["userResponse"] == '1'){ ?>
                                        <p class="card-text" style="background-color:#f0f0f0; border-radius: 10px;">Your request has been placed successfully. Our executive will come to collect the product in <b><?php echo $randomnum; ?> days</b> time.</p>
                                        <p class="card-text" style="background-color: green; border-radius: 10px; color:#f2f2f2"><b>Thank You for making earth a more greener place <h2>&#128515;</h2></b></p>
                                        <form action="generatePDF.php" method="POST">
                                           <!-- date random number generate -->
                                           <input type="hidden" name="date" value="<?php echo $randomnum; ?>">
                                          <input type="hidden" name="prodID" value="<?php echo $row["productID"]; ?>">
                                          <button class=" btn btn-primary" name="receipt" value="receipt">Download Reciept</button>
                                        </form>
                                  <?php }if ($row["userResponse"] == '0') { ?>
                                        <p class="card-text" style="background-color: red; border-radius: 10px; color:#f2f2f2"><b>You rejected to sell your product at this price.</b></p>
                                  <?php } ?>

                        <?php }else { } ?>
                    <?php }else { 
                      if($row["adminResponse"] == "Approved"){ ?>
                        <p class="card-text" style="background-color:#f0f0f0; border-radius: 10px;">Your request has been placed successfully. Our executive will come to collect the product in <b><?php echo rand(1,6); ?> days</b> time.</p>
                        <p class="card-text" style="background-color: green; border-radius: 10px; color:#f2f2f2"><b>Thank You for making earth a more greener place <h2>&#128515;</h2></b></p>
                        <form action="generatePDF.php" method="POST">
                           <!-- date random number generate -->
                           <input type="hidden" name="date" value="<?php echo $randomnum; ?>">
                            <input type="hidden" name="prodID" value="<?php echo $row["productID"]; ?>">
                            <button class=" btn btn-primary" name="receipt" value="receipt">Download Reciept</button>
                        </form>
                      <?php }else if($row["adminResponse"] == "Rejected"){?>
                        <p class="card-text" style="background-color:red; color:#f2f2f2; border-radius: 10px;"><b>Sorry, we cannot accept this product</b></p>
                        <?php }else {?>
                        <p class="card-text"><b>You want to donate this product</b></p>
                    <?php }
                      } ?>


                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Date: <b><?php echo $row["productDate"]; ?></b></small>
                  </div>
                </div>
              </div>
            
            
            <?php }
          } else {
            echo "<center><h3>You haven't sold or donated..</h3></center>";
          }


        ?>

        
                    <!-- to be looped -->
                   
    
                </div>
            



        </center>














    <?php  
    }else {
        echo "<center>Yo bro!, u r trespassing</center>";
    }

?>
   <footer id="footer" class="footer" style="position: relative; width:102%;">

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
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

</body>

</html>