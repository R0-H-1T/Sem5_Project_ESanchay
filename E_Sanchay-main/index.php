be sure to copy this in wamp directory to run this (into some folder)

Also create a folder 
ProductImage/Fridge
ProductImage/Geyser


DATABASE:
there are 3 table;
products, admin, contactus and Users 

users
+--------------+-----------------+------+-----+---------+----------------+
| Field        | Type            | Null | Key | Default | Extra          |
+--------------+-----------------+------+-----+---------+----------------+
| UserID       | int             | NO   | PRI | NULL    | auto_increment |
| Email        | varchar(255)    | YES  | UNI | NULL    |                |
| PhoneNumber  | bigint unsigned | NO   |     | NULL    |                |
| UserPassword | varchar(255)    | NO   |     | NULL    |                |
| UserName     | varchar(255)    | NO   |     | NULL    |                |
| UserAddress  | text            | YES  |     | NULL    |                |
+--------------+-----------------+------+-----+---------+----------------+

products
+-----------------+--------------+------+-----+---------+----------------+
| Field           | Type         | Null | Key | Default | Extra          |
+-----------------+--------------+------+-----+---------+----------------+
| productID       | int          | NO   | PRI | NULL    | auto_increment |
| user_ID         | int          | NO   | MUL | NULL    |                |
| admin_ID        | int          | NO   | MUL | NULL    |                |
| productDate     | datetime     | YES  |     | NULL    |                |
| productAns      | text         | NO   |     | NULL    |                |
| adminResponse   | varchar(500) | YES  |     | pending |                |
| productImgPath  | text         | NO   |     | NULL    |                |
| productType     | varchar(255) | YES  |     | NULL    |                |
| productPrice    | varchar(255) | YES  |     | NULL    |                |
| productCategory | varchar(255) | NO   |     | NULL    |                |
| userResponse    | varchar(20)  | YES  |     | NULL    |                |
+-----------------+--------------+------+-----+---------+----------------+


contactus

+----------+-----------------+------+-----+---------+----------------+
| Field    | Type            | Null | Key | Default | Extra          |
+----------+-----------------+------+-----+---------+----------------+
| msgId    | int             | NO   | PRI | NULL    | auto_increment |
| UName    | text            | NO   |     | NULL    |                |
| UEmail   | varchar(255)    | NO   |     | NULL    |                |
| UPhone   | bigint unsigned | NO   |     | NULL    |                |
| UMessage | text            | NO   |     | NULL    |                |
+----------+-----------------+------+-----+---------+----------------+

admin
+------------+--------------+------+-----+---------+----------------+
| Field      | Type         | Null | Key | Default | Extra          |
+------------+--------------+------+-----+---------+----------------+
| adminID    | int          | NO   | PRI | NULL    | auto_increment |
| adminEmail | varchar(255) | NO   |     | NULL    |                |
+------------+--------------+------+-----+---------+----------------+





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Sanchay</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/ES 1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.0.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <!-- <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div> -->
      <div class="social-links d-none d-md-flex">
      <a href="https://twitter.com/regain_e" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100084952402576" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/e__regain/" class="instagram"><i class="bi bi-instagram"></i></a>
  
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/ES 1.png" alt="">
        <h1>E-SANCHAY<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">HOME</a></li>
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#contact">CONTACT</a></li>
          <!-- <li><a href="#services">Services</a></li> -->
          <li><a href="#portfolio">SERVICES</a></li>
          <!-- <li><a href="#team">Team</a></li> -->
          <!-- <li><a href="login.php">LOGIN/SIGN UP</a></li> -->

          <?php
          session_start();
          
            
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
  <?php
        if(isset($_SESSION['logged'])){  
			if($_SESSION['flashedMessage'] == 'false') {  ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert" >  
              <center>
				  <strong>Welcome back <?php echo $_SESSION['UName'];?></strong>
			  </center>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

    	<?php } 
		
		}
		$_SESSION['flashedMessage'] = 'true';
		?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero" style=" position: relative; top: -20px;">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>E-SANCHAY <br>
            <span style="font-size: 30px; color: #014d44;"> TRADE-IN YOUR USED ELECTRONICS for CASH </span></h2>
          <p><i>- An innovative way to reuse, recyle, reduce</i></p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#portfolio" class="btn-get-started">SELL</a>
            <a href="assets/img/video.mp4" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/garbage-recycle.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-3 mt-5">

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-file-text"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Fill Details</a></h4>
              <p class="card-text">Find your used electronics and fill in the details based on the condition.</p>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-truck"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Pick Up facility</a></h4>
              <p class="card-text">We provide you with a free, trackable pre-paid shipping label for sending us your item(s).</p>

            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-cash-coin"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Get Cash</a></h4>
              <p class="card-text">No need to wait for a buyer, get cash fast through our website</p>

            </div>
          </div>
          <!--End Icon Box -->

          <!-- <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
            </div>
          </div>
          End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <!-- <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p> -->
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Do your part. Recycling is a shared responsibility!
            </h3>
            <img src="assets/img/about.png" class="img-fluid rounded-4 mb-4" alt="">
            <p></p>
            <p>Our qualified staff handles the logistics, project management and all other aspects of your end-of-life technology retirement. U as a customer receives a decent amount based on what u sell us. We make sure public get the right amount for their appliances whatever the condition maybe. There's an option to donate your e-product as an act of generosity and contribute in welfare of mother earth. We then sell the technologies again to the vendors who are trusted and have great records in the book of history. Then your e-appliances are recycled by these vendors.</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Our Mission
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> To create a safe, efficient and effective e-waste management </li>
                <li><i class="bi bi-check-circle-fill"></i> Disposal, and recycling system that protects the natural environment while supporting the city.</li>
              </ul>
              <p class="fst-italic">
                Our Vision
              </p>
              <ul>
              <li><i class="bi bi-check-circle-fill"></i> The vision of 'E Sanchay' is to maintain its role as responsible citizen in creating a sustainable future through innovation, efficiency, safety, and service excellence.</li>
              </ul>
              <p>

                E-Sanchay was established in 2022 and is headquartered in Pune, Maharashtra. Our company is a leading player in providing efficient, ethical and environmentally friendly services. It helps a typical person like u and me to manage outdated technology or even technology that doesn't function anymore in all shapes and sizes. And sell to vendors that recycle assets in a safe, secure and responsible manner.
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about1.jpg" class="img-fluid rounded-4" alt="">
                
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/comm.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/greenspace.jpg" class="img-fluid" alt=""  height="200" width="300"></div>
            <div class="swiper-slide"><img src="assets/img/tripple.png" class="img-fluid" alt=""  height="200" width="300"></div>
            <div class="swiper-slide"><img src="assets/img/lg.png" class="img-fluid" alt=""  height=200 width=300></div>
            <div class="swiper-slide"><img src="assets/img/canara.png" class="img-fluid" alt=""  height=200 width=300></div>
            <div class="swiper-slide"><img src="assets/img/better.png" class="img-fluid" alt=""  height=200 width=300></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Services</h2>
          <!-- <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p> -->
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Home Appliances</li>
              <li data-filter=".filter-product">Communication</li>
              <li data-filter=".filter-branding">Entertainment</li>
              <li data-filter=".filter-books">Accessories</li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="SellItem.php?itemName=fridge"><img src="assets/img/fridge.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><p style="color:black">Fridge</p></h4>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="SellItem.php?itemName=aircon"><img src="assets/img/ac.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><p style="color:black">Air Conditioner</p></h4>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="SellItem.php?itemName=geyser"><img src="assets/img/geyser.jpeg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><p style="color:black">Geyser</p></h4>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="SellItem.php?itemName=laptop"><img src="assets/img/laptop.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><p style="color:black">Laptop</p></h4>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->
            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="SellItem.php?itemName=television"><img src="assets/img/tv.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><p style="color:black">Televison</p></h4>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="SellItem.php?itemName=mobile"><img src="assets/img/smartphone.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><p style="color:black">Mobile</p></h4>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="SellItem.php?itemName=desktop"><img src="assets/img/desktop.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><p style="color:black">Desktop</p></h4>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="SellItem.php?itemName=printer"><img src="assets/img/printer.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><p style="color:black">Printer</p></h4>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="SellItem.php?itemName=hardisk"><img src="assets/img/harddisk.jpeg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><p style="color:black">Hard Disk</p></h4>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="SellItem.php?itemName=radio"><img src="assets/img/radio.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><p style="color:black">Radio</p></h4>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="SellItem.php?itemName=headphone"><img src="assets/img/headphones.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><p style="color:black">Headphone</p></h4>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="SellItem.php?itemName=other"><img src="assets/img/other.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><p style="color:black">Other</p></h4>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->
	
	<!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <!-- <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p> -->
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/Pradnya.webp" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Pradnya</h3>
                      <h4>Magarpatta, Pune</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Thank you for the amazing services! We are very happy with the results. Will definitely continue with e-sanchay for contributing to a better environment to lives in Pune.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/Ayush.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Ayush</h3>
                      <h4>Warje, Pune</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Our experience working with your firm was fantastic and I would recommend it. The electronic products nearing the end of their "useful life" are being used.                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/Pranav.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Samar</h3>
                      <h4>Deccan, Pune</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Before I was worried about the security of the confidential data stored in the hard drives. But after seeeing the work of e-sanchay I was amazed and was convinced. Thanks!                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/Rahul.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Rahul</h3>
                      <h4>Kondhwa, Pune</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    I had been wondering what I should do with my old Laptop which had stoppped working a long time ago. Fortunately I found E-Sanchay! and I'am happy about it.                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/Neha.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Neha</h3>
                      <h4>KarveNagar, Pune</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    I love how professional the whole team of E-Sanchay is. They make the whole process of e-waste donation hassle-free. I feel glad to contribute and reduce e-waste.                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

 

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <!-- <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p> -->
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    What is e-waste?                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    E-waste refers to electronic products nearing the end of their "useful life", for example, computers, televisions, VCRs, stereos, copiers, and fax machines. Many of these products can be reused, refurbished, or recycled.
                    Anything that plugs into a powerpoint, uses a charger or is powered by a battery!
                                      </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    How can i donate electrical items?                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    You can drop items off at either of our locations at any time. It is important you read our donation policy though. For large volumes of e-waste, we may be able to collect directly from you. Give us a call to enquire.                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Why should you recycle e-Waste?                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    E-waste which is a major source of toxic elements like Lead, Mercury, Cadmium, etc can prove to be quite dangerous if not disposed responsibly. Hence it is necessary that e-waste is not only handled safely, but is also handled by trained professionals else it could also prove to be fatal.                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    How do we recycle?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Electronic Waste (e-waste) typically includes discarded computer monitors, motherboards, mobile phones and chargers, compact discs, headphones, television sets, air conditioners and refrigerators.
                    Home Appliances -AC ,FRIDGE ,GEYSER

                    Communication and IT devices- LAPTOP,TAB ,MOBILE, DESKTOP,PRINTER
                    
                    Home Entertainment - XBOX,RADIO,HEADPHONES ,CHARGER, CD/DVDS ,HARD DISKS                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    What if I need to get information of an item I donated?                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    For any hardware, please ensure you have removed all data from the device if you require a copy (otherwise it will be disposed of securely). By leaving any item at eWaste Connection you relinquish your rights to and ownership of that item and it is likely to be in many pieces very soon after donation! Our donation policy can be accessed Hyperlink of t&c webpage                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <!-- <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p> -->
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>845, Shivaji Nagar, Pune, Maharashtra 411004</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+91 83 3425 8923</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Mon-Sun: 10AM - 23PM</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/msg.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="uName" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="uEmail" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="number" class="form-control"  name="uPhone" id="subject" placeholder="Your Phone" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="uMessage" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div> 
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div> 
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>E-SANCHAY</span>
          </a>
          <p>An waste management website which collects old and non-functional electronic equipments and in exchanage of that cash is provided to the seller, then we sell those products collected to our vendors who recycle the waste </p>
          <div class="social-links d-flex mt-4">
          <a href="https://twitter.com/regain_e" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100084952402576" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/e__regain/" class="instagram"><i class="bi bi-instagram"></i></a>
            <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#portfolio">Services</a></li>
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

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
<!-- commented -->
</html>