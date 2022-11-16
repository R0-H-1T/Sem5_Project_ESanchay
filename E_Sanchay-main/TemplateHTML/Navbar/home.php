<style>
   #hideValuesOnSelect {
      display: none;
   }
</style>
</head>

<body>
<div class="wrapper">


  <!-- ======= Header ======= -->
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
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>E-SANCHAY<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="./index.php">HOME</a></li>
          <li><a href="./index.php#about">ABOUT</a></li>
          <li><a href="./index.php#contact">CONTACT</a></li>
          <!-- <li><a href="#services">Services</a></li> -->
          <li><a href="./index.php#portfolio">SERVICES</a></li>
          <!-- <li><a href="#team">Team</a></li> -->          
          <?php
          // session_start();
          
            
            if(empty($_SESSION['logged'])){ ?>
               <li><a href="login.php">LOGIN/SIGN UP</a></li>
              <?php
              
            } else {
                if(isset($_SESSION['logged'])){  ?>
                    <li><a href="TemplateHTMl/logout.php">LOGOUT</a></li>
                    <li><a href="UserDashboard/user.php">YOUR DASHBOARD</a></li>
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
  <!-- End Header -->