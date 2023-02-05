<?php

function uploadImage($productCat, $key){

  $target_dir = "./ProductImage/$productCat/";
  $target_file = $target_dir . basename($_FILES["uploadfile"]["name"][$key]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  // Check if image file is a actual image or fake image
  
  $check = getimagesize($_FILES["uploadfile"]["tmp_name"][$key]);
  if($check !== false) {
    //echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "<center><h1>File is not an image.</center></h1>";
    $uploadOk = 0;
  }
  
  
  // Skipping : Check if file already exists
  // if (file_exists($target_file)) {
  //   echo "Sorry, file already exists.";
  //   $uploadOk = 0; 
  // }
  
  // Check file size
  if ($_FILES["uploadfile"]["size"][$key] > 500000) {
    echo "<center><h1>Sorry, your file is too large.</h1></center>";
    $uploadOk = 0;
  }
  
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "jfif" ) {
    echo "<center><h1>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</center></h1>";
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    //header( "refresh:3;url=SellItem?itemName=fridge" );
    die("<center><h1>Sorry, your file was not uploaded.</h1><a href='SellItem?itemName=$productCat'> Go Back?</a></center>");
    
      
  // if everything is ok, try to upload file
  } else {
      if(file_exists($target_file)){
  
          $target_file = $target_dir.time().basename($_FILES["uploadfile"]["name"][$key]);
  
  
          if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"][$key], $target_file)) {
              // echo "The file ". htmlspecialchars( basename( $_FILES["uploadfile"]["name"])). " has been uploaded.";
          } else {
               die("Sorry, there was an error uploading your file.");
          }
  
  
  
      }else {
          if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"][$key], $target_file)) {
              // echo "The file ". htmlspecialchars( basename( $_FILES["uploadfile"]["name"])). " has been uploaded.";
             } else {
               die("Sorry, there was an error uploading your file.");
             }
      }
          
  }
      return $target_file."#";
  }
  
  


function removeHash($str){
    $word="";
    $count = 0;
    $arr[]="";
    for($i=0; $i < strlen($str); $i++){
        if($str[$i] == '#' ){
            $arr[$count] = $word;
            $word = "";
            $count++;
        }else{
            $word .= $str[$i];
        }
    }
    return $arr;
}

function showAddress(){
  
  include '../DBConn/dbconn.php';
  

  $sql = "SELECT UserAddress from users where userID = {$_SESSION['UserID']}"; 

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    if($row["UserAddress"] == ""){
        echo "Address not set";
    }else{
        echo "Address set";
    }
}


function adminTemplate(){
  echo '</head>
        </body>
          <div class="box" style="display:flex; justify-content:center;">
            <div class="mainBox" style="width:1400px; background-color: #e8e8e8">
              <div class="adminHeader">
                <center>
                  <h1>Admin Page</h1>
                </center>
              </div>
              <div class="navBox" style="margin-top: 50px;">
                <nav class="navbar navbar-dark bg-dark">
                  <div class="container-fluid">
                    <center>
                      <a class="navbar-brand" href="./allUsers.php">Users</a>
                      <a class="navbar-brand" href="./allProducts.php">Products</a>
                    </center>
                  </div> 
                </nav>
              </div>';
}



function cdnPoppinsAndJS(){
  echo '
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  ';
}

function css(){
  echo '  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css" rel="stylesheet" />
';
}


function carouselButtons(){


  //used in inputDB  for adding the button field for the user to look through images;
  echo '
  
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
</div>
<div class="col-7" style=" display:flex; justify-content:center; background-color:#f0f0f0;">

<!-- displaying details of what user has selected -->
<div class="prodDetails" style=" width: 400px; margin-top: 50px;">
    
    <h2 class="card-title" style="margin-bottom: 20px;">What you have selected:</h2>
  
  ';
}

// function setStatus($adminResponse){
//   if($adminResponse == "pending"){
//     echo "<b><?php echo $row[]"
//   }
// }




// function concatWithHash($v1, $v2, $v3, $v4="", $v5="", $v6="", $v7="", $v8="", $v9=""){
//     $arr = $v1;
//     while()
// }


// can send product details to newfile but instead of taking value by name attribute 
//  thinking of making an array seperated by hash so that we can trim it in newfile.php 
// using the function at it will be easire to input data in database;


//What all things need to be done
// 1. Collect data and store it in the DB

?>