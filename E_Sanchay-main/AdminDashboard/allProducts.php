<?php

    include '../QuesTemplate/functions.php';
    include '../TemplateHTML/boilerplate.html';
   css();
    include '../DBconn/dbconn.php';
    

    
?>
<link href="../assets/css/login.css" rel="stylesheet">
  <link href="../assets/css/main.css" rel="stylesheet">
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
          <li><a href="./allUsers.php">USERS</a></li>
          <li><a href="./allProducts.php">PRODUCTS</a></li>
          <li><a href="../index.php">LOGOUT</a></li>
          <!-- <li><a href="#services">Services</a></li> -->
         
          <!-- <li><a href="#team">Team</a></li> -->
          <!-- <li><a href="login.php">LOGIN/SIGN UP</a></li> -->
      
        </ul>
      </nav><!-- .navbar -->
      
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>

        <div class="productBox">
            <div class="productInBox">
                <center><h1 style="margin-bottom:50px;">Displaying all products</h1></center>



                <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        
        $sql = "SELECT UserName, Email, UserAddress, PhoneNumber, productID ,productCategory, productDate, productAns, productType, adminResponse, productImgPath, userResponse,productCategory, productPrice FROM users, products where user_ID = userID ORDER BY productDate desc";


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
                                    <div class="card" style="width:400px; margin-bottom:30px;">
                                        <center>

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

                        <!-- User details -->
                        <div class="card-footer">
                            <small class="text-muted"><center><b>Name: <?php echo $row["UserName"];?></b></center></small>
                        </div>

                        <div class="card-body">
                            <center>
                                <p class="card-text">
                                    <span>Email: <b><?php echo $row["Email"]; ?></b></span><br>
                                    <span>Phone No.: <b><?php echo $row["PhoneNumber"]; ?></b></span><br>
                                    <span>Address: <b><?php echo $row["UserAddress"]; ?></b></span>
                                </p>
                            </center>
                        </div>

                        <!-- product details -->
                        <div class="card-footer">
                            <small class="text-muted"><center><b>Product Details</b></center></small>
                        </div>
                        <div class="card-body">
                            <center>
                                <h5 class="card-title"><?php echo $row["productCategory"]; ?></h5>
                                <p class="card-text">
                                <?php foreach((array)$arr as $word) { ?>
                                <span><?php echo $word; ?></span><br>
                                <?php } ?>
                                </p>

                                <!-- admin response -->
                                <?php 
                                    if($row["adminResponse"] == "pending"){ ?>
                                        <p class="card-text"><b>Status: <?php echo $row["adminResponse"]; ?></b></p>
                                        <form action="updateResponseNPrice.php" method="POST">
                                            <input type="hidden" name="productID" value="<?php echo $row["productID"]; ?>">
                                            Update Status:
                                            <button type="submit" name="res" value="Approved" class="btn btn-success">Approve</button>
                                            <button type="submit" name="res" value="Rejected" class="btn btn-danger">Reject</button>
                                        </form>
                                   <?php } else { ?>
                                    <p class="card-text"><b>You have: <?php echo $row["adminResponse"]; ?></b></p>
                                    
                                   <?php } ?>

                                <!-- ------------------------------------------------------------------------------------------ -->
                                <?php if($row["userResponse"] == '') {
                                        
                                   ?>
                                    <?php if($row["productType"] == "sell"){

                                            if($row["adminResponse"] == "Approved"){ ?>
                                                <p class="card-text"><b>Up for SELLING</b></p>

                                                <?php if(!empty($row["productPrice"])) { ?>
                                                            <p class="card-text">Exchange value give: Rs <b><?php echo $row["productPrice"]; ?></b></p>
                                                <?php } else { ?>
                                                            <form action="updateResponseNPrice.php" method="POST">
                                                                <input type="hidden" name="res" value="<?php echo $row["adminResponse"]; ?>">
                                                                <input type="hidden" name="productID" value="<?php echo $row["productID"]; ?>">
                                                                <label for="price">Enter estimated exchange price:</label>
                                                                <input type="text" name="productPrice" id="price">
                                                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                                                            </form>
                                                    <?php } ?>
                                            <?php }else{ 
                                                        if($row["adminResponse"] == "Rejected") { ?>
                                                                <p class="card-text"><b>You have rejected this product</b></p>
                                                        <?php }else { ?>
                                                                <p class="card-text"><b>Up for SELLING</b></p>                                                
                                                        <?php } ?>                                                    
                                            <?php }
                                    } else { 
                                            if($row["adminResponse"] == "Approved"){ ?>
                                                    <p class="card-text" style="background-color: green; border-radius: 10px; color:#f2f2f2"><b>The user has donated this product<h2>&#128515;</h2> </b></p>                                                
                                        <?php } 
                                    }
                            }else if($row["userResponse"] == '1') { ?>
                                    <p class="card-text" style="background-color: green; border-radius: 10px; color:#f2f2f2"><b>The user sold this product to us <h2>&#128515;</h2></b></p>                                                
                            <?php } else { ?>
                                    <p class="card-text" style="background-color: red; border-radius: 10px; color:#f2f2f2"><b>The user is not selling this product to us <h2> &#128577;</h2> </b></p>                                                
                            <?php } ?>
                                





                                <!-- ------------------------------------------------------------------------------------------ -->
                            </center>
                            


                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Date: <b><?php echo $row["productDate"]; ?></b></small>
                        </div>
                    </div>
              </div>
            
            
            <?php }
          } else {
            echo "<center><h3>Users haven't sold or donated any products</h3></center>";
          }


          // sell, donate
          //if donate && if(status == pending) display form
          //if sell && if(status == pending) display form
          //    => Two fields 1. status change 2. price range   

        ?>
                </div>

            </div> <!--productInBox -->
        </div> <!--productBox -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

        </body>
        </html>




