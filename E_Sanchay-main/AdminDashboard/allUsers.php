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


        <div class="usersBox" style="display:flex; justify-content:center;"> 
            <div class="usersInBox" style="width:1000px;">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Address</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                
        <?php
        
            $sql = "SELECT UserID ,UserName, Email, PhoneNumber, UserAddress FROM users";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) { ?>
                  <!-- echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>"; -->
                      <tr>
                            <th scope="row"><?php echo $row["UserID"]; ?></th>
                            <td><?php echo $row["UserName"]; ?></td>
                            <td><?php echo $row["Email"]; ?></td>
                            <td><?php echo $row["PhoneNumber"]; ?></td>
                            <td><?php echo $row["UserAddress"]; ?></td>
                        </tr>

                <?php }
              } else {
                echo "<h5>No users<h5>";
              }
              
              mysqli_close($conn);
        
        
        ?>
                    
                            
                    </tbody>
                </table>
            </div> <!-- usersInBox -->
        </div> <!-- usersBox -->
    </div>
</div>
</body>
</html>  