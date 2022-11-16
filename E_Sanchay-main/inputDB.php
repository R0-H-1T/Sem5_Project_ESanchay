<?php
   session_start();


include 'DBConn/dbconn.php';
include 'QuesTemplate/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(!isset($_SESSION['UserID'])){
        echo "<center><h1>Pls Register first</h1></center>";
        header( "refresh:5;url=./LoginRegister/register.php" );
        die();
    }
    $sql = "SELECT UserAddress from users where userID = {$_SESSION['UserID']}"; 

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);


    $itemName = $_REQUEST['itemName'];

    if($itemName != 'Other'){
        $brandName = $_REQUEST['brand'];
    }

     //upload file 
    $total = count($_FILES['uploadfile']['name']);
    if($total > 3){
        die("<center><h1 style='background-color:red; color:white;'>You can upload only 3 images</h1></center>");
    }
    $imgPaths = "";
    foreach($_FILES['uploadfile']['name'] as $key=>$value){
        $imgPaths .= uploadimage("$itemName", $key);
        $filename = $_FILES['uploadfile']['name'][$key];
    }
    //echo $imgPaths;
    $imgarr = removehash($imgPaths);
    $count = 0; ?>

    <?php include 'TemplateHTML/boilerplate.html'; 
    //css();
    ?>
            <title>Product Description</title>
        <?php
            include 'TemplateHTML/Navbar/home.php';   ?>
            <div class="main_container" style="display:flex;">
                <div class="container text-center" style="width:80%;">
                    <div class="row">
                        <div class="col-5" style="background-color:darkgrey;">
                        <!-- carousel -->
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-top:20px; margin-bottom:20px;">
                            <div class="carousel-inner">


    <?php 

    //SWITCH CASE BEGINS ----------------------------------------------------------------->
    switch($itemName){

        case "Fridge":
                                $condition = $_REQUEST['condition'];
                                $storage = $_REQUEST['storage'];
                                $door = $_REQUEST['door']; 
                               foreach($imgarr as $path){
                                        if($count == 0){ ?>
                                            <div class="carousel-item active">
                                                <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                            </div>
                                        <?php }else { ?>
                                            <div class="carousel-item">
                                                <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                            </div>
                                        <?php }
                                            $count++;
                                    }
                                    carouselButtons();?>
                                        <h5 class="card-text"><?php echo "Brand of fridge: ".$brandName; ?></h5>
                                        <h5 class="card-text"><?php echo "Condition of fridge: ".$condition; ?></h5>
                                        <h5 class="card-text"><?php echo "Storage of fridge: ".$storage; ?></h5>
                                        <h5 class="card-text"><?php echo "No. of doors of fridge: ".$door; ?></h5>
                                        <a href="./SellItem.php?itemName=fridge" style="margin-top: 20px; margin-bottom:20px;" class="btn btn-primary">Edit details</a>

                                        <?php if(isset($_SESSION['logged'])){ ?>
                                                <form action="newFile.php" method="POST">
                                                    <input type="hidden" name="arr" value='<?php echo "$brandName#$condition#$storage#$door#"?>'>
                                                    <input type="hidden" name="fileupload" value='<?php echo "$imgPaths" ;?>'>
                                                    <input type="hidden" name="productCategory" value="Fridge" > 
                                                    <?php
                                                    if($row["UserAddress"] == ""){
                                                        echo '<div class="form-floating" style="margin-left: 10px; margin-right: 10px; margin-bottom: 20px;">
                                                        <textarea  class="form-control" placeholder="your address" name="address" id="floatingTextarea"></textarea>
                                                        <label for="floatingTextarea">Pls enter your address:</label>
                                                      </div>';
                                                    }
                                                    ?>
                                                    
                                                    <button type="submit" name="sell" style="margin-right:20px;" class="btn btn-primary">Sell</button>
                                                    <button type="submit" name="donate" class="btn btn-primary">Donate</button>
                                                </form>

                                        <?php } else {?>
                                                 <a href="login.php" style="margin-left:10px;" class="btn btn-primary">Pls login to go ahead</a>
                                        <?php } 
                                               // <!-- <img style="width: 300px; height: 300px;" src="./ProductImage/Fridge/<?php //echo $filename; " > -->
                                        break;
        case "AC":
                                        $ans2 = $_REQUEST['condition'];
                                        $ans3 = $_REQUEST['capacity'];
                                        $ans4 = $_REQUEST['model']; 
                                        foreach($imgarr as $path){
                                                if($count == 0){ ?>
                                                    <div class="carousel-item active">
                                                        <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                                    </div>
                                                <?php }else { ?>
                                                    <div class="carousel-item">
                                                        <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                                    </div>
                                                <?php }
                                                    $count++;
                                            }
                                            carouselButtons();?>
                                                <h5 class="card-text"><?php echo "Brand of your AC: ".$brandName; ?></h5>
                                                <h5 class="card-text"><?php echo "Condition of your AC: ".$ans2; ?></h5>
                                                <h5 class="card-text"><?php echo "Capacity of fridge: ".$ans3; ?></h5>
                                                <h5 class="card-text"><?php echo "Model of your AC: ".$ans4; ?></h5>
                                                <a href="./SellItem.php?itemName=aircon" style="margin-top: 20px; margin-bottom:20px;" class="btn btn-primary">Edit details</a>
                                        
                                                <?php if(isset($_SESSION['logged'])){ ?>
                                                        <form action="newFile.php" method="POST">
                                                            <input type="hidden" name="arr" value='<?php echo "$brandName#$ans2#$ans3#$ans4#"?>'>
                                                            <input type="hidden" name="fileupload" value='<?php echo "$imgPaths" ;?>'>
                                                            <input type="hidden" name="productCategory" value="AC" >
                                                            <?php
                                                    if($row["UserAddress"] == ""){
                                                        echo '<div class="form-floating" style="margin-left: 10px; margin-right: 10px; margin-bottom: 20px;">
                                                        <textarea  class="form-control" placeholder="your address" name="address" id="floatingTextarea"></textarea>
                                                        <label for="floatingTextarea">Pls enter your address:</label>
                                                      </div>';
                                                    }
                                                    ?>
                                                    
                                                            <button type="submit" name="sell" style="margin-right:20px;" class="btn btn-primary">Sell</button>
                                                            <button type="submit" name="donate" class="btn btn-primary">Donate</button>
                                                        </form>
                                                
                                                <?php } else {?>
                                                         <a href="login.php" style="margin-left:10px;" class="btn btn-primary">Pls login to go ahead</a>
                                                <?php } 
                                                       // <!-- <img style="width: 300px; height: 300px;" src="./ProductImage/Fridge/<?php //echo $filename; " > -->
                                                break;
        case "Laptop": 
                                        $ans2 = $_REQUEST['condition'];
                                        $ans3 = $_REQUEST['processor'];
                                        $ans4 = $_REQUEST['model']; 
                                        $ans5 = $_REQUEST['battery']; 
                                        foreach($imgarr as $path){
                                                if($count == 0){ ?>
                                                    <div class="carousel-item active">
                                                        <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                                    </div>
                                                <?php }else { ?>
                                                    <div class="carousel-item">
                                                        <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                                    </div>
                                                <?php }
                                                    $count++;
                                            }
                                            carouselButtons();?>
                                                <h5 class="card-text"><?php echo "Brand of your Laptop: ".$brandName; ?></h5>
                                                <h5 class="card-text"><?php echo "Condition of your Laptop: ".$ans2; ?></h5>
                                                <h5 class="card-text"><?php echo "Processor of your laptop: ".$ans3; ?></h5>
                                                <h5 class="card-text"><?php echo "Model of your laptop: ".$ans4; ?></h5>
                                                <h5 class="card-text"><?php echo "Laptop's ".$ans5; ?></h5>
                                                <a href="./SellItem.php?itemName=laptop" style="margin-top: 20px; margin-bottom:20px;" class="btn btn-primary">Edit details</a>
                                        
                                                <?php if(isset($_SESSION['logged'])){ ?>
                                                        <form action="newFile.php" method="POST">
                                                            <input type="hidden" name="arr" value='<?php echo "$brandName#$ans2#$ans3#$ans4#$ans5#"?>'>
                                                            <input type="hidden" name="fileupload" value='<?php echo "$imgPaths" ;?>'>
                                                            <input type="hidden" name="productCategory" value="Laptop" > 
                                                            <?php
                                                    if($row["UserAddress"] == ""){
                                                        echo '<div class="form-floating" style="margin-left: 10px; margin-right: 10px; margin-bottom: 20px;">
                                                        <textarea  class="form-control" placeholder="your address" name="address" id="floatingTextarea"></textarea>
                                                        <label for="floatingTextarea">Pls enter your address:</label>
                                                      </div>';
                                                    }
                                                    ?>
                                                    
                                                            <button type="submit" name="sell" style="margin-right:20px;" class="btn btn-primary">Sell</button>
                                                            <button type="submit" name="donate" class="btn btn-primary">Donate</button>
                                                        </form>
                                                
                                                <?php } else {?>
                                                         <a href="../LoginRegister/login.php" style="margin-left:10px;" class="btn btn-primary">Pls login to go ahead</a>
                                                <?php } 
                                                       // <!-- <img style="width: 300px; height: 300px;" src="./ProductImage/Fridge/<?php //echo $filename; " > -->
                                                break;
        


        case "Mobile": 
                                        $ans3 = $_REQUEST['phnStorage'];
                                        $ans4 = $_REQUEST['displayQuality'];
                                        $ans2 = $_REQUEST['model']; 
                                        $ans5 = $_REQUEST['battery']; 
                                        $ans6 = $_REQUEST['mobFunc']; 
                                        foreach($imgarr as $path){
                                                if($count == 0){ ?>
                                                    <div class="carousel-item active">
                                                        <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                                    </div>
                                                <?php }else { ?>
                                                    <div class="carousel-item">
                                                        <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                                    </div>
                                                <?php }
                                                    $count++;
                                            }
                                            carouselButtons();?>
                                                <h5 class="card-text"><?php echo "Brand of your mobile: ".$brandName; ?></h5>
                                                <h5 class="card-text"><?php echo "Model of your mobile: ".$ans2; ?></h5>
                                                <h5 class="card-text"><?php echo "Storage of your mobile: ".$ans3; ?></h5>
                                                <h5 class="card-text"><?php echo "Your Mobile's ".$ans4; ?></h5>
                                                <h5 class="card-text"><?php echo "You mobile's  ".$ans5; ?></h5>
                                                <h5 class="card-text"><?php echo "Does your ".$ans6; ?></h5>
                                                <a href="./SellItem.php?itemName=mobile" style="margin-top: 20px; margin-bottom:20px;" class="btn btn-primary">Edit details</a>
                                        
                                                <?php if(isset($_SESSION['logged'])){ ?>
                                                        <form action="newFile.php" method="POST">
                                                            <input type="hidden" name="arr" value='<?php echo "$brandName#$ans2#$ans3#$ans4#$ans5#$ans6#"?>'>
                                                            <input type="hidden" name="fileupload" value='<?php echo "$imgPaths" ;?>'>
                                                            <input type="hidden" name="productCategory" value="Mobile" > 
                                                            <?php
                                                    if($row["UserAddress"] == ""){
                                                        echo '<div class="form-floating" style="margin-left: 10px; margin-right: 10px; margin-bottom: 20px;">
                                                        <textarea  class="form-control" placeholder="your address" name="address" id="floatingTextarea"></textarea>
                                                        <label for="floatingTextarea">Pls enter your address:</label>
                                                      </div>';
                                                    }
                                                    ?>
                                                    
                                                            <button type="submit" name="sell" style="margin-right:20px;" class="btn btn-primary">Sell</button>
                                                            <button type="submit" name="donate" class="btn btn-primary">Donate</button>
                                                        </form>
                                                
                                                <?php } else {?>
                                                         <a href="../LoginRegister/login.php" style="margin-left:10px;" class="btn btn-primary">Pls login to go ahead</a>
                                                <?php } 
                                                       // <!-- <img style="width: 300px; height: 300px;" src="./ProductImage/Fridge/<?php //echo $filename; " > -->
                                                break;





                            case "Desktop": 
                                                    $ans2 = $_REQUEST['model']; 
                                                    $ans3 = $_REQUEST['graphic'];
                                                    $ans4 = $_REQUEST['processor'];
                                                    $ans5 = $_REQUEST['storage']; 
                                                    foreach($imgarr as $path){
                                                            if($count == 0){ ?>
                                                                <div class="carousel-item active">
                                                                    <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                                                </div>
                                                            <?php }else { ?>
                                                                <div class="carousel-item">
                                                                    <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                                                </div>
                                                            <?php }
                                                                $count++;
                                                        }
                                                        carouselButtons();?>
                                                            <h5 class="card-text"><?php echo "Brand of your mobile: ".$brandName; ?></h5>
                                                            <h5 class="card-text"><?php echo "Model of your desktop: ".$ans2; ?></h5>
                                                            <h5 class="card-text"><?php echo "Graphic card: ".$ans3; ?></h5>
                                                            <h5 class="card-text"><?php echo "Processor: ".$ans4; ?></h5>
                                                            <h5 class="card-text"><?php echo "Storage:  ".$ans5; ?></h5>
                                                            <a href="./SellItem.php?itemName=desktop" style="margin-top: 20px; margin-bottom:20px;" class="btn btn-primary">Edit details</a>
                                                    
                                                            <?php if(isset($_SESSION['logged'])){ ?>
                                                                    <form action="newFile.php" method="POST">
                                                                        <input type="hidden" name="arr" value='<?php echo "$brandName#$ans2#$ans3#$ans4#$ans5#"?>'>
                                                                        <input type="hidden" name="fileupload" value='<?php echo "$imgPaths" ;?>'>
                                                                        <input type="hidden" name="productCategory" value="Desktop" > 
                                                                        <?php
                                                    if($row["UserAddress"] == ""){
                                                        echo '<div class="form-floating" style="margin-left: 10px; margin-right: 10px; margin-bottom: 20px;">
                                                        <textarea  class="form-control" placeholder="your address" name="address" id="floatingTextarea"></textarea>
                                                        <label for="floatingTextarea">Pls enter your address:</label>
                                                      </div>';
                                                    }
                                                    ?>
                                                    
                                                                        <button type="submit" name="sell" style="margin-right:20px;" class="btn btn-primary">Sell</button>
                                                                        <button type="submit" name="donate" class="btn btn-primary">Donate</button>
                                                                    </form>
                                                            
                                                            <?php } else {?>
                                                                     <a href="../LoginRegister/login.php" style="margin-left:10px;" class="btn btn-primary">Pls login to go ahead</a>
                                                            <?php } 
                                                                   // <!-- <img style="width: 300px; height: 300px;" src="./ProductImage/Fridge/<?php //echo $filename; " > -->
                                                            break;






                        case "Geyser": 
                                                                $ans2 = $_REQUEST['condition']; 
                                                                $ans3 = $_REQUEST['geyserType'];
                                                                $ans4 = $_REQUEST['geyserAge'];
                                                                $ans5 = $_REQUEST['geyserCap']; 
                                                                foreach($imgarr as $path){
                                                                        if($count == 0){ ?>
                                                                            <div class="carousel-item active">
                                                                                <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                                                            </div>
                                                                        <?php }else { ?>
                                                                            <div class="carousel-item">
                                                                                <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                                                            </div>
                                                                        <?php }
                                                                            $count++;
                                                                    }
                                                                    carouselButtons();?>
                                                                        <h5 class="card-text"><?php echo "Brand of your geyser: ".$brandName; ?></h5>
                                                                        <h5 class="card-text"><?php echo "Condition of your geyser: ".$ans2; ?></h5>
                                                                        <h5 class="card-text"><?php echo "Geyser Age: ".$ans4; ?></h5>
                                                                        <h5 class="card-text"><?php echo "Geyser Type: ".$ans3; ?></h5>
                                                                        <h5 class="card-text"><?php echo "For storage geyser:  ".$ans5; ?></h5>
                                                   <!--  change -->     <a href="./SellItem.php?itemName=geyser" style="margin-top: 20px; margin-bottom:20px;" class="btn btn-primary">Edit details</a>
                                                                
                                                                        <?php if(isset($_SESSION['logged'])){ ?>
                                                                                <form action="newFile.php" method="POST">
                                                                                    <input type="hidden" name="arr" value='<?php echo "$brandName#$ans2#$ans3#$ans4#$ans5#"?>'>
                                                                                    <input type="hidden" name="fileupload" value='<?php echo "$imgPaths" ;?>'>
                                                                                    <input type="hidden" name="productCategory" value="Geyser" > <!--  change -->
                                                                                    <?php
                                                    if($row["UserAddress"] == ""){
                                                        echo '<div class="form-floating" style="margin-left: 10px; margin-right: 10px; margin-bottom: 20px;">
                                                        <textarea  class="form-control" placeholder="your address" name="address" id="floatingTextarea"></textarea>
                                                        <label for="floatingTextarea">Pls enter your address:</label>
                                                      </div>';
                                                    }
                                                    ?>
                                                    
                                                                                    <button type="submit" name="sell" style="margin-right:20px;" class="btn btn-primary">Sell</button>
                                                                                    <button type="submit" name="donate" class="btn btn-primary">Donate</button>
                                                                                </form>
                                                                        
                                                                        <?php } else {?>
                                                                                 <a href="login.php" style="margin-left:10px;" class="btn btn-primary">Pls login to go ahead</a>
                                                                        <?php } 
                                                                               // <!-- <img style="width: 300px; height: 300px;" src="./ProductImage/Fridge/<?php //echo $filename; " > -->
                                                                        break;






                                    case "Television": 
                                                                            $ans2 = $_REQUEST['condition']; 
                                                                            $ans3 = $_REQUEST['model'];
                                                                            $ans4 = $_REQUEST['tvFunc']; 
                                                                            $ans5 = $_REQUEST['access']; 
                                                                            foreach($imgarr as $path){
                                                                                    if($count == 0){ ?>
                                                                                        <div class="carousel-item active">
                                                                                            <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                                                                        </div>
                                                                                    <?php }else { ?>
                                                                                        <div class="carousel-item">
                                                                                            <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                                                                        </div>
                                                                                    <?php }
                                                                                        $count++;
                                                                                }
                                                                                carouselButtons();?>
                                                                                    <h5 class="card-text"><?php echo "Brand of your TV: ".$brandName; ?></h5>
                                                                                    <h5 class="card-text"><?php echo "Condition of your TV: ".$ans2; ?></h5>
                                                                                    <h5 class="card-text"><?php echo "Model: ".$ans3; ?></h5>
                                                                                    <h5 class="card-text"><?php echo $ans4; ?></h5>
                                                                                    <h5 class="card-text"><?php echo $ans5; ?></h5>
                                                               <!--  change -->     <a href="./SellItem.php?itemName=television" style="margin-top: 20px; margin-bottom:20px;" class="btn btn-primary">Edit details</a>
                                                                            
                                                                                    <?php if(isset($_SESSION['logged'])){ ?>
                                                                                            <form action="newFile.php" method="POST">
                                                                                                <input type="hidden" name="arr" value='<?php echo "$brandName#$ans2#$ans3#$ans4#$ans5#"?>'>
                                                                                                <input type="hidden" name="fileupload" value='<?php echo "$imgPaths" ;?>'>
                                                                                                <input type="hidden" name="productCategory" value="Television" > <!--  change -->
                                                                                                <?php
                                                    if($row["UserAddress"] == ""){
                                                        echo '<div class="form-floating" style="margin-left: 10px; margin-right: 10px; margin-bottom: 20px;">
                                                        <textarea  class="form-control" placeholder="your address" name="address" id="floatingTextarea"></textarea>
                                                        <label for="floatingTextarea">Pls enter your address:</label>
                                                      </div>';
                                                    }
                                                    ?>
                                                    
                                                                                                <button type="submit" name="sell" style="margin-right:20px;" class="btn btn-primary">Sell</button>
                                                                                                <button type="submit" name="donate" class="btn btn-primary">Donate</button>
                                                                                            </form>
                                                                                    
                                                                                    <?php } else {?>
                                                                                             <a href="login.php" style="margin-left:10px;" class="btn btn-primary">Pls login to go ahead</a>
                                                                                    <?php } 
                                                                                           // <!-- <img style="width: 300px; height: 300px;" src="./ProductImage/Fridge/<?php //echo $filename; " > -->
                                                                                    break;    
                                                                                    
                                                                                    




                             case "Printer": 
                                 $ans2 = $_REQUEST['model']; 
                                 $ans3 = $_REQUEST['printerAge'];
                                 $ans4 = $_REQUEST['printerFunc']; 
                                 foreach($imgarr as $path){
                                         if($count == 0){ ?>
                                             <div class="carousel-item active">
                                                 <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                             </div>
                                         <?php }else { ?>
                                             <div class="carousel-item">
                                                 <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                             </div>
                                         <?php }
                                             $count++;
                                     }
                                     carouselButtons();?>
                                         <h5 class="card-text"><?php echo "Brand of your TV: ".$brandName; ?></h5>
                                         <h5 class="card-text"><?php echo "Your printer is: ".$ans2; ?></h5>
                                         <h5 class="card-text"><?php echo "Model: ".$ans3; ?></h5>
                                         <h5 class="card-text"><?php echo $ans4; ?></h5>
                    <!-- change -->     <a href="./SellItem.php?itemName=printer" style="margin-top: 20px; margin-bottom:20px;" class="btn btn-primary">Edit details</a>
                                 
                                         <?php if(isset($_SESSION['logged'])){ ?>
                                                 <form action="newFile.php" method="POST">
                                                     <input type="hidden" name="arr" value='<?php echo "$brandName#$ans2#$ans3#$ans4#"?>'>
                                                     <input type="hidden" name="fileupload" value='<?php echo "$imgPaths" ;?>'>
                                                     <input type="hidden" name="productCategory" value="Printer" > <!--  change -->
                                                     <?php
                                                    if($row["UserAddress"] == ""){
                                                        echo '<div class="form-floating" style="margin-left: 10px; margin-right: 10px; margin-bottom: 20px;">
                                                        <textarea  class="form-control" placeholder="your address" name="address" id="floatingTextarea"></textarea>
                                                        <label for="floatingTextarea">Pls enter your address:</label>
                                                      </div>';
                                                    }
                                                    ?>
                                                    
                                                     <button type="submit" name="sell" style="margin-right:20px;" class="btn btn-primary">Sell</button>
                                                     <button type="submit" name="donate" class="btn btn-primary">Donate</button>
                                                 </form>
                                        
                                         <?php } else {?>
                                                  <a href="login.php" style="margin-left:10px;" class="btn btn-primary">Pls login to go ahead</a>
                                         <?php } 
                                                // <!-- <img style="width: 300px; height: 300px;" src="./ProductImage/Fridge/<?php //echo $filename; " > -->
                                         break;  
                                                           
                                         
                            
                        case "headphone": 
                                            $ans2 = $_REQUEST['model']; 
                                            $ans3 = $_REQUEST['charger']; 
                                            $ans4 = $_REQUEST['old']; 
                                            $ans5 = $_REQUEST['functional']; 
                                            foreach($imgarr as $path){
                                                    if($count == 0){ ?>
                                                        <div class="carousel-item active">
                                                            <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                                        </div>
                                                    <?php }else { ?>
                                                        <div class="carousel-item">
                                                            <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                                        </div>
                                                    <?php }
                                                        $count++;
                                                }
                                                carouselButtons();?>
                                                    <h5 class="card-text"><?php echo "Brand of your Headphone: ".$brandName; ?></h5>
                                                    <h5 class="card-text"><?php echo "Model of your headphone: ".$ans2; ?></h5>
                                                    <h5 class="card-text"><?php echo "Availability of charger: ".$ans3; ?></h5>
                                                    <h5 class="card-text"><?php echo "Old: ".$ans4; ?></h5>
                                                    <h5 class="card-text"><?php echo "Functional: ".$ans5; ?></h5>
                               <!-- change -->     <a href="./SellItem.php?itemName=headphone" style="margin-top: 20px; margin-bottom:20px;" class="btn btn-primary">Edit details</a>
                                            
                                                    <?php if(isset($_SESSION['logged'])){ ?>
                                                            <form action="newFile.php" method="POST">
                                                                <input type="hidden" name="arr" value='<?php echo "$brandName#$ans2#$ans3#$ans4#$ans5#"?>'>
                                                                <input type="hidden" name="fileupload" value='<?php echo "$imgPaths" ;?>'>
                                                                <input type="hidden" name="productCategory" value="Radio" > <!--  change -->
                                                                <?php
                                                    if($row["UserAddress"] == ""){
                                                        echo '<div class="form-floating" style="margin-left: 10px; margin-right: 10px; margin-bottom: 20px;">
                                                        <textarea  class="form-control" placeholder="your address" name="address" id="floatingTextarea"></textarea>
                                                        <label for="floatingTextarea">Pls enter your address:</label>
                                                      </div>';
                                                    }
                                                    ?>
                                                    
                                                                <button type="submit" name="sell" style="margin-right:20px;" class="btn btn-primary">Sell</button>
                                                                <button type="submit" name="donate" class="btn btn-primary">Donate</button>
                                                            </form>
                                                   
                                                    <?php } else {?>
                                                             <a href="login.php" style="margin-left:10px;" class="btn btn-primary">Pls login to go ahead</a>
                                                    <?php } 
                                                           // <!-- <img style="width: 300px; height: 300px;" src="./ProductImage/Fridge/<?php //echo $filename; " > -->
                                                    break;  


                                                    case "Radio": 
                                                        $ans2 = $_REQUEST['model']; 
                                                        $ans3 = $_REQUEST['radioAge'];
                                                        $ans4 = $_REQUEST['radioFunc']; 
                                                        $ans5 = $_REQUEST['radioCharger']; 
                                                        foreach($imgarr as $path){
                                                                if($count == 0){ ?>
                                                                    <div class="carousel-item active">
                                                                        <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                                                    </div>
                                                                <?php }else { ?>
                                                                    <div class="carousel-item">
                                                                        <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                                                    </div>
                                                                <?php }
                                                                    $count++;
                                                            }
                                                            carouselButtons();?>
                                                                <h5 class="card-text"><?php echo "Brand of your Radio: ".$brandName; ?></h5>
                                                                <h5 class="card-text"><?php echo "Model of your radio: ".$ans2; ?></h5>
                                                                <h5 class="card-text"><?php echo "Old: ".$ans3; ?></h5>
                                                                <h5 class="card-text"><?php echo $ans4; ?></h5>
                                                                <h5 class="card-text"><?php echo $ans5; ?></h5>
                                           <!-- change -->     <a href="./SellItem.php?itemName=headphone" style="margin-top: 20px; margin-bottom:20px;" class="btn btn-primary">Edit details</a>
                                                        
                                                                <?php if(isset($_SESSION['logged'])){ ?>
                                                                        <form action="newFile.php" method="POST">
                                                                            <input type="hidden" name="arr" value='<?php echo "$brandName#$ans2#$ans3#$ans4#$ans5#"?>'>
                                                                            <input type="hidden" name="fileupload" value='<?php echo "$imgPaths" ;?>'>
                                                                            <input type="hidden" name="productCategory" value="Radio" > <!--  change -->
                                                                            <?php
                                                    if($row["UserAddress"] == ""){
                                                        echo '<div class="form-floating" style="margin-left: 10px; margin-right: 10px; margin-bottom: 20px;">
                                                        <textarea  class="form-control" placeholder="your address" name="address" id="floatingTextarea"></textarea>
                                                        <label for="floatingTextarea">Pls enter your address:</label>
                                                      </div>';
                                                    }
                                                    ?>
                                                    
                                                                            <button type="submit" name="sell" style="margin-right:20px;" class="btn btn-primary">Sell</button>
                                                                            <button type="submit" name="donate" class="btn btn-primary">Donate</button>
                                                                        </form>
                                                               
                                                                <?php } else {?>
                                                                         <a href="../LoginRegister/login.php" style="margin-left:10px;" class="btn btn-primary">Pls login to go ahead</a>
                                                                <?php } 
                                                                       // <!-- <img style="width: 300px; height: 300px;" src="./ProductImage/Fridge/<?php //echo $filename; " > -->
                                                                break;  
            
            
            


                                                    
                        case "Hard_Disk": 
                                $ans2 = $_REQUEST['model']; 
                                $ans3 = $_REQUEST['storage'];
                                $ans4 = $_REQUEST['hardiskAge']; 
                                foreach($imgarr as $path){
                                        if($count == 0){ ?>
                                            <div class="carousel-item active">
                                                <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                            </div>
                                        <?php }else { ?>
                                            <div class="carousel-item">
                                                <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                            </div>
                                        <?php }
                                            $count++;
                                    }
                                    carouselButtons();?>
                                        <h5 class="card-text"><?php echo "Brand of your Hard Disk: ".$brandName; ?></h5>
                                        <h5 class="card-text"><?php echo "Model: ".$ans2; ?></h5>
                                        <h5 class="card-text"><?php echo "Storage: ".$ans3; ?></h5>
                                        <h5 class="card-text"><?php echo "Old: ".$ans4; ?></h5>
                                        
                   <!-- change -->     <a href="./SellItem.php?itemName=hardisk" style="margin-top: 20px; margin-bottom:20px;" class="btn btn-primary">Edit details</a>
                                
                                        <?php if(isset($_SESSION['logged'])){ ?>
                                                <form action="newFile.php" method="POST">
                                                    <input type="hidden" name="arr" value='<?php echo "$brandName#$ans2#$ans3#$ans4#"?>'>
                                                    <input type="hidden" name="fileupload" value='<?php echo "$imgPaths" ;?>'>
                                                    <input type="hidden" name="productCategory" value="Hard_Disk" > <!--  change -->
                                                    <?php
                                                    if($row["UserAddress"] == ""){
                                                        echo '<div class="form-floating" style="margin-left: 10px; margin-right: 10px; margin-bottom: 20px;">
                                                        <textarea  class="form-control" placeholder="your address" name="address" id="floatingTextarea"></textarea>
                                                        <label for="floatingTextarea">Pls enter your address:</label>
                                                      </div>';
                                                    }
                                                    ?>
                                                    
                                                    <button type="submit" name="sell" style="margin-right:20px;" class="btn btn-primary">Sell</button>
                                                    <button type="submit" name="donate" class="btn btn-primary">Donate</button>
                                                </form>
                                       
                                        <?php } else {?>
                                                 <a href="login.php" style="margin-left:10px;" class="btn btn-primary">Pls login to go ahead</a>
                                        <?php } 
                                               // <!-- <img style="width: 300px; height: 300px;" src="./ProductImage/Fridge/<?php //echo $filename; " > -->
                                        break;  






                                        
                case "Other": 
                                $ans2 = $_REQUEST['productExplaination']; 
                                foreach($imgarr as $path){
                                        if($count == 0){ ?>
                                            <div class="carousel-item active">
                                                <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                            </div>
                                        <?php }else { ?>
                                            <div class="carousel-item">
                                                <img style="border-radius: 20px; height: 600px;" src="./<?php echo $path; ?>" class="d-block w-100" alt="...">
                                            </div>
                                        <?php }
                                            $count++;
                                    }
                                    carouselButtons();?>
                                        <h5 class="card-text"><?php echo "Details of your device : <br><b>".$ans2."</b>"; ?></h5>
                   <!-- change -->     <a href="./SellItem.php?itemName=other" style="margin-top: 20px; margin-bottom:20px;" class="btn btn-primary">Edit details</a>
                                
                                        <?php if(isset($_SESSION['logged'])){ ?>
                                                <form action="newFile.php" method="POST">
                                                    <input type="hidden" name="arr" value='<?php echo "$ans2#"?>'>
                                                    <input type="hidden" name="fileupload" value='<?php echo "$imgPaths" ;?>'>
                                                    <input type="hidden" name="productCategory" value="Other" > <!--  change -->
                                                    <?php
                                                    if($row["UserAddress"] == ""){
                                                        echo '<div class="form-floating" style="margin-left: 10px; margin-right: 10px; margin-bottom: 20px;">
                                                        <textarea  class="form-control" placeholder="your address" name="address" id="floatingTextarea"></textarea>
                                                        <label for="floatingTextarea">Pls enter your address:</label>
                                                      </div>';
                                                    }
                                                    ?>
                                                    
                                                    <button type="submit" name="sell" style="margin-right:20px;" class="btn btn-primary">Sell</button>
                                                    <button type="submit" name="donate" class="btn btn-primary">Donate</button>
                                                </form>
                                       
                                        <?php } else {?>
                                                 <a href="login.php" style="margin-left:10px;" class="btn btn-primary">Pls login to go ahead</a>
                                        <?php } 
                                               // <!-- <img style="width: 300px; height: 300px;" src="./ProductImage/Fridge/<?php //echo $filename; " > -->
                                        break;  
        default:
            echo "<h1 style='text-center'>None of the cases matched ! :(</h1>";
        }
        ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
            <?php 
                include 'TemplateHTML/Footer/footer.html'; 
                cdnPoppinsAndJS();
            ?>
    </body>
</html>



<?php
}else {
    echo "<h1>Invalid request</h1>";
}



//link: http://localhost/rohit/Project/E_Solution/Home/home.html

?>

