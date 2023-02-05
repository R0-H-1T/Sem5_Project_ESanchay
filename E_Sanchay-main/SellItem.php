<?php
    session_start();


    include 'TemplateHTML/boilerplate.html';
    include 'TemplateHTML/Navbar/home.php'; 
    include 'QuesTemplate/upperBody.html';

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $itemName = $_GET['itemName'];

    switch($itemName) {
        case "fridge": ?>

                            <h2 style="text-align:center"> Fridge </h2>
                            <center>
                              <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="assets/img/fridge.jpg" alt="" srcset="" >
                              
                              <?php include 'QuesTemplate/midBody.html'; ?>
                                <input type="hidden" name="itemName" value="Fridge">

                                <div class="mb-3" style="margin-top: 30px;">
                                      <label for="formGroupExampleInput2" class="form-label" id="condition">Select the condition of the bridge:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="condition" id="door">
                                        <option value="New">New</option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Broken">Broken</option>
                                      </select>
                                </div>


                                <div class="mb-3" >
                                    <label for="formGroupExampleInput" id="brand" class="form-label">Select the brand of your fridge:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                    <select class="form-select" name="brand" id="brand">
                                        <!-- <option>Select brand</option> -->
                                        <option selected value="Whirpool">Whirpool</option>
                                        <option value="LG">LG</option>
                                        <option value="Samsung">Samsung</option>
                                        <option value="Haier">Haier</option>
                                        <option value="Godrej">Godrej</option>
                                        <option value="Videocon">Videocon</option>
                                        <option value="Kenstar">Kenstar</option>
                                        <option value="Sansui">Sansui</option>
                                        <option value="Voltas">Voltas</option>
                                        <option value="Lloyd">Lloyd</option>
                                        <option value="Sharp">Sharp</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="door" class="form-label">Is your fridge:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="door" id="door">
                                        <option value="Double Door">Double Door</option>
                                        <option value="Single Door">Single Door</option>
                                      </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="storage" class="form-label">Select the storage of your fridge:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="storage" id="storage">
                                        <option value="100 ltrs">100 ltrs</option>
                                        <option value="200 - 300ltrs">200 - 300ltrs</option>
                                        <option value="300 - 400ltrs">300 - ltrs</option>
                                        <option value="400 - 500ltrs">400 - 500ltrs</option>
                                        <option value="Above 500ltrs">Above 500ltrs</option>
                                      </select>
                                </div>

                                <!-- upload file  -->
                                <div class="mb-3">
                                  <div class="form-group">
                                    <label for="fileInput">Upload a picture of your fridge: </label>
                                   
            <?php
            break;

        case "aircon":?>
            <h2 style="text-align:center"> AC </h2>
                  <center>
                    <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="assets/img/ac.jpg" alt="" srcset="" >

                          <?php include './QuesTemplate/midBody.html'; ?>
                          
                                  <input type="hidden" name="itemName" value="AC">

                                  <div class="mb-3" style="margin-top: 30px;">
                                    <label for="formGroupExampleInput" id="brand" class="form-label">Select the brand of your AC:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                    <select class="form-select" name="brand" id="brand">
                                        <option selected>Select brand</option>        
                                        <option value="Samsung">Samsung</option>
                                        <option value="Haier">Haier</option>
                                        <option value="Godrej">Godrej</option>
                                        <option value="Videocon">Videocon</option>
                                        <option value="Carrier Global">Carrier Global</option>
                                        <option value="Hitachi">Hitachi</option>
                                        <option value="Voltas">Voltas</option>
                                        <option value="Lloyd">Lloyd</option>
                                        <option value="Daikin">Daikin</option>
                                        <option value="Other">Other</option>
                                    </select>
                                  </div>

                                <div class="mb-3" >
                                      <label for="formGroupExampleInput2" class="form-label" id="condition">
                                        Select the condition of your AC:
                                      </label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="condition" id="door">
                                        <option value="New">New</option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Average</option>
                                        <option value="Below Average">Below Average</option>
                                      </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="model" class="form-label">Is your AC:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="model" id="model">
                                        <option value="Split AC">Split AC</option>
                                        <option value="Window AC">Window AC</option>
                                      </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" id="capacity" class="form-label">Select the capacity of your AC:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="capacity" id="capacity">
                                        <option value="1 ton">100 ltrs</option>
                                        <option value="1.1 ton">1.1 ton</option>
                                        <option value="1.5 ton">1.5 ton</option>
                                        <option value="2 ton">2 ton</option>
                                        <option value="Other">Other</option>
                                      </select>
                                </div>

                                <!-- upload file  -->
                                <div class="mb-3">
                                  <div class="form-group">
                                    <label for="fileInput">Upload a picture of your ac: </label>
            <?php
            break;
            case "geyser": ?>
              <h2 style="text-align:center"> Geyser </h2>
              <center>
                <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="assets/img/geyser.jpeg" alt="" srcset="" >
    
                      <?php include './QuesTemplate/midBody.html'; ?>
                      
                              <input type="hidden" name="itemName" value="Geyser">
    
                              <div class="mb-3" style="margin-top: 30px;">
                                <label for="formGroupExampleInput" class="form-label">Select the brand of your geyser:</label>
                                  <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                <select class="form-select" name="brand" id="formGroupExampleInput">     
                                    <option selected value="Havells">Havells</option>
                                    <option value="AO Smith">AO Smith</option>
                                    <option value="Bajaj">Bajaj</option>
                                    <option value="Venus">Venus</option>
                                    <option value="Crompton">Crompton</option>
                                    <option value="Racord">Racord</option>
                                    <option value="Orient Electric">Orient Electric</option>
                                </select>
                              </div>
    
                            <div class="mb-3">
                                          <label for="formGroupExampleInput2" class="form-label">
                                            Select the condition of your Geyser:
                                          </label>
                                          <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                          <select class="form-select" name="condition" id="formGroupExampleInput2">
                                            <option value="New">New</option>
                                            <option value="Good">Good</option>
                                            <option value="Fair">Fair</option>
                                            <option value="Broken">Broken</option>
                                          </select>
                            </div>
    
    
                            <div class="mb-3">
                                  <label for="formGroupExampleInput2" class="form-label">Select the type of geyser:</label>
                                  <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                  <select class="form-select" name="geyserType" id="formGroupExampleInput2">
                                    <option selected value="Instant Geyser">Instant Geyser</option>
                                    <option value="Storage Geyser">Storage Geyser</option>
                                  </select>
                            </div>
    
                            <div class="mb-3">
                                  <label for="formGroupExampleInput2" class="form-label">If storage geyser, what is the capacity:</label>
                                  <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                  <select class="form-select" name="geyserCap" id="formGroupExampleInput2">
                                    <option selected value="1 - 3 Ltrs">1 - 3 Ltrs</option>
                                    <option selected value="6 Ltrs">6 Ltrs</option>
                                    <option selected value="10 - 15 Ltrs">10 - 15 Ltrs</option>
                                    <option selected value="25 Ltrs">25 Ltrs</option>
                                    <option selected value="None">None</option>
                                  </select>
                            </div>

                            <div class="mb-3">
                                  <label for="formGroupExampleInput2" class="form-label">What is the age of your geyser:</label>
                                  <select class="form-select" name="geyserAge" id="formGroupExampleInput2">
                                    <option value="1-2 Years">1-2 Years</option>
                                    <option value="2-5 Years">2-5 Years</option>
                                    <option value="Above 5 Years">Above 5 Years</option>
                                  </select>
                            </div>
    
                            <!-- upload file  -->
                            <div class="mb-3">
                              <div class="form-group">
                                <label for="fileInput">Upload a picture of your laptop: </label>
        <?php
        break;
        case "laptop": ?>
          <h2 style="text-align:center"> Laptop </h2>
          <center>
            <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="assets/img/laptop.jpg" alt="" srcset="" >

                  <?php include './QuesTemplate/midBody.html'; ?>
                  
                          <input type="hidden" name="itemName" value="Laptop">

                          <div class="mb-3"  style="margin-top: 30px;">
                            <label for="formGroupExampleInput" id="brand" class="form-label">Select the brand of your fridge:</label>
                              <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                            <select class="form-select" name="brand" id="brand">
                                <option selected>Select brand</option>        
                                <option value="Dell">Dell</option>
                                <option value="Lenovo">Lenovo</option>
                                <option value="HP">HP</option>
                                <option value="Asus">Asus</option>
                                <option value="Sony">Sony</option>
                                <option value="Google">Google</option>
                                <option value="MacBook">MacBook</option>
                            </select>
                          </div>

                        <div class="mb-3">
                              <label for="formGroupExampleInput2" class="form-label">
                                Select the model of your laptop:
                              </label>
                              <input type="text" class="form-control" id="formGroupExampleInput2" name="model" placeholder="Model of your laptop">
                        </div>

                        <div class="mb-3">
                                      <label for="formGroupExampleInput2" class="form-label">
                                        Select the condition of your Laptop:
                                      </label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="condition" id="formGroupExampleInput2">
                                        <option value="New">New</option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Broken">Broken</option>
                                      </select>
                        </div>


                        <div class="mb-3">
                              <label for="formGroupExampleInput2" class="form-label">Select the processor of your Laptop:</label>
                              <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                              <select class="form-select" name="processor" id="formGroupExampleInput2">
                                <option value="Intel Core i3">Intel Core i3</option>
                                <option value="Intel Core i5">Intel Core i5</option>
                                <option value="Intel Code i7">Intel Code i7</option>
                                <option value="M1 Chip">M1 Chip</option>
                                <option value="M2 Chip">M2 Chip</option>
                              </select>
                        </div>

                        <div class="mb-3">
                              <label for="formGroupExampleInput2" class="form-label">How is the battery health of you laptop:</label>
                              <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                              <select class="form-select" name="battery" id="formGroupExampleInput2">
                                <option value="Battery Life: Good">Good</option>
                                <option value="Battery Life: Moderate">Moderate</option>
                                <option value="Battery Life: Poor">Poor</option>
                              </select>
                        </div>

                        <!-- upload file  -->
                        <div class="mb-3">
                          <div class="form-group">
                            <label for="fileInput">Upload a picture of your laptop: </label>
    <?php
    break;
    case "television": ?>
      <h2 style="text-align:center"> Television </h2>
      <center>
        <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="assets/img/tv.jpg" alt="" srcset="" >

              <?php include './QuesTemplate/midBody.html'; ?>
              
                      <input type="hidden" name="itemName" value="Television">

                      <div class="mb-3" style="margin-top: 30px;">
                        <label for="formGroupExampleInput" class="form-label">Select the brand of your TV:</label>
                          <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                        <select class="form-select" name="brand" id="formGroupExampleInput">     
                            <option selected value="MI">MI</option>
                            <option value="Samsung">Samsung</option>
                            <option value="One Plus">One Plus</option>
                            <option value="Motorola">Motorola</option>
                            <option value="Nokia">Nokia</option>
                            <option value="Sony">Sony</option>
                            <option value="Haier">Haier</option>
                            <option value="LG">LG</option>
                            <option value="Videocon">Videocon</option>
                            <option value="Toshiba">Toshiba</option>
                        </select>
                      </div>

                      <div class="mb-3" >
                                  <label for="formGroupExampleInput2" class="form-label">
                                    Enter the model and dimensions of your TV:
                                  </label>
                                  <input type="text" class="form-control" id="formGroupExampleInput2" name="model" placeholder="Model and dimensions(in inches)">
                      </div>

                    <div class="mb-3" >
                                  <label for="formGroupExampleInput2" class="form-label">
                                    Select the condition of your TV:
                                  </label>
                                  <select class="form-select" name="condition" id="formGroupExampleInput2">
                                    <option value="New">New</option>
                                    <option value="Good">Good</option>
                                    <option value="Fair">Fair</option>
                                    <option value="Broken">Broken</option>
                                  </select>
                    </div>

                    <div class="mb-3">
                          <label for="formGroupExampleInput2" class="form-label">Is it fully functionl:</label>
                          <select class="form-select" name="tvFunc" id="formGroupExampleInput2">
                            <option selected value="Yes, functional">Yes</option>
                            <option value="Somewhat functional">Somewhat</option>
                            <option value="Not functional">No</option>
                          </select>
                    </div>

                    <div class="mb-3">
                          <label for="formGroupExampleInput2" class="form-label">Is it available with accessories (remote, bill):</label>
                          <select class="form-select" name="access" id="formGroupExampleInput2">
                            <option selected value="Accessories available">Yes</option>
                            <option value="Accessories not available">No</option>
                          </select>
                    </div>

                    <!-- upload file  -->
                    <div class="mb-3">
                      <div class="form-group">
                        <label for="fileInput">Upload a picture of your laptop: </label>
<?php
break;
        case "mobile": ?>
          <h2 style="text-align:center"> Mobile </h2>
          <center>
            <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="assets/img/smartphone.jpg" alt="" srcset="" >

                  <?php include './QuesTemplate/midBody.html'; ?>
                  
                                <input type="hidden" name="itemName" value="Mobile">

                                <div class="mb-3" style="margin-top: 30px;">
                                    <label for="formGroupExampleInput" class="form-label">Select the brand of your mobile:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder"> -->
                                    <select class="form-select" name="brand" id="formGroupExampleInput">        
                                        <option selected value="Samsung">Samsung</option>
                                        <option value="Motorola">Motorola</option>
                                        <option value="MI">MI</option>
                                        <option value=LG">LG</option>
                                        <option value="One Plus">One Plus</option>
                                        <option value="Sony">Sony</option>
                                        <option value="Blackberry">Blackberry</option>
                                        <option value="Oppo">Oppo</option>
                                        <option value="Vivo">Vivo</option>
                                        <option value="Apple">Apple</option>
                                        <option value="Huawei">Huawei</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">
                                        Enter the model of your Mobile:
                                    </label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" name="model" placeholder="Model of your Mobile">
                                </div>


                                <div class="mb-3">
                                  <label for="formGroupExampleInput2" class="form-label">How is the battery health of you Mobile:</label>
                                  <select class="form-select" name="battery" id="formGroupExampleInput2">
                                    <option value="Battery Life: Good">Good</option>
                                    <option value="Battery Life: Moderate">Moderate</option>
                                    <option value="Battery Life: Poor">Poor</option>
                                  </select>
                                </div>

                                <div class="mb-3" >
                                      <label for="formGroupExampleInput2" class="form-label">
                                        What is the quality of the display of the Mobile:
                                      </label>
                                      <select class="form-select" name="displayQuality" id="formGroupExampleInput2">
                                        <option value="Display Quality: Good">Good</option>
                                        <option value="Display Quality: Slight Malfunction">Slight Malfunction</option>
                                        <option value="Display Quality: Fully Malfunctional">Fully Malfunctional</option>
                                      </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" class="form-label">Is your mobile fully  functional:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="mobFunc" id="formGroupExampleInput2">
                                        <option value="Mobile function: Yes">Yes</option>
                                        <option value="Mobile function: No">No</option>
                                      </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" class="form-label">Select the storage of your mobile:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="phnStorage" id="formGroupExampleInput2">
                                        <option value="4GB RAM 32GB ROM">4GB RAM 32GB ROM</option>
                                        <option value="4GB RAM 64GB ROM">4GB RAM 64GB ROM</option>
                                        <option value="6GB RAM 128GB ROM">6GB RAM 128GB ROM</option>
                                        <option value="8GB RAM 128GB ROM">8GB RAM 128GB ROM</option>
                                      </select>
                                </div>  

                                <!-- upload file  -->
                                 <div class="mb-3">
                                    <div class="form-group">
                                      <label for="fileInput">Upload a picture of your mobile: </label>
                <?php
              break;
        case "desktop": ?>
           <h2 style="text-align:center"> Desktop </h2>
          <center>
            <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="assets/img/desktop.jpg" alt="" srcset="" >

                  <?php include './QuesTemplate/midBody.html'; ?>
                  
                                <input type="hidden" name="itemName" value="Desktop">

                                <div class="mb-3" style="margin-top: 30px;">
                                    <label for="formGroupExampleInput" class="form-label">Select the brand of your desktop:</label>
                                    <select class="form-select" name="brand" id="formGroupExampleInput">        
                                        <option selected value="Dell">Dell</option>
                                        <option value="Lenovo">Lenovo</option>
                                        <option value="HP">HP</option>
                                        <option value="Apple">Apple</option>
                                        <option value="Alienware">Alienware</option>
                                        <option value="Intel">Intel</option>
                                    </select>
                                </div>

                                <div class="mb-3" >
                                    <label for="formGroupExampleInput2" class="form-label">
                                        Enter the model of your Desktop:
                                    </label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" name="model" placeholder="Model of your Dektop">
                                </div>

                                <div class="mb-3" >
                                    <label for="formGroupExampleInput" class="form-label">Graphic card of your desktop:</label>
                                    <select class="form-select" name="graphic" id="formGroupExampleInput">        
                                        <option selected value="NVIDIA GeForce GTX 1050 Ti">NVIDIA GeForce GTX 1050 Ti</option>
                                        <option selected value="NVIDIA GeForce GTX 1060">NVIDIA GeForce GTX 1060</option>
                                        <option selected value="NVIDIA GeForce GTX 1070">NVIDIA GeForce GTX 1070</option>
                                        <option selected value="NVIDIA GeForce GTX 1080">NVIDIA GeForce GTX 1080</option>
                                        <option selected value="AMD Radeon RX 560">AMD Radeon RX 560</option>
                                        <option selected value="AMD Radeon RX 570">AMD Radeon RX 570</option>
                                        <option selected value="AMD Radeon RX 580">AMD Radeon RX 580</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" class="form-label">Select the processor of your Desktop:</label>
                              <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="processor" id="formGroupExampleInput2">
                                        <option selected value="Intel Core i3 8th Gen">Intel Core i3 8th Gen</option>
                                        <option value="Intel Core i5 8th Gen">Intel Core i5 8th Gen</option>
                                        <option value="Intel Code i7 8th Gen">Intel Code i7 8th Gen</option>
                                        <option value="Intel Code i5 9th Gen">Intel Code i5 9th Gen</option>
                                        <option value="Intel Code i7 9th Gen">Intel Code i7 9th Gen</option>
                                      </select>
                                </div>



                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" class="form-label">Select the storage of your Desktop:</label>
                              <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="storage" id="formGroupExampleInput2">
                                        <option selected value="256 GB SSD">256 GB SSD</option>
                                        <option value="512 GB SSD">512 GB SSD</option>
                                        <option value="1GB SSD">1GB SSD</option>
                                        <option value="2GB SSD">2GB SSD</option>
                                        <option value="500 TB HDD">500 TB HDD</option>
                                        <option value="1 TB HDD">1 TB HDD</option>
                                        <option value="2 TB HDD">2 TB HDD</option>
                                        <option value="4 TB HDD">4 TB HDD</option>
                                      </select>
                                </div>


                                <div class="mb-3">
                                      <label for="formGroupExampleInput2" class="form-label">Is your desktop fully  functional:</label>
                                      <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                      <select class="form-select" name="deskfunc" id="formGroupExampleInput2">
                                        <option value="Desktop functional: Yes">Yes</option>
                                        <option value="Desktop functional: No">No</option>
                                      </select>
                                </div>
                                <!-- upload file  -->
                                 <div class="mb-3">
                                    <div class="form-group">
                                      <label for="fileInput">Upload a picture of your Desktop: </label>
                <?php
              break;
        case "printer": ?>
                <h2 style="text-align:center"> Printer </h2>
                <center>
                  <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="assets/img/printer.jpg" alt="" srcset="" >
      
                        <?php include './QuesTemplate/midBody.html'; ?>
                        
                                      <input type="hidden" name="itemName" value="Printer">

                                      <div class="mb-3" style="margin-top: 30px;">
                                      <label for="formGroupExampleInput2" class="form-label">
                                          Select the brand of your printer:
                                        </label>
                                        <select class="form-select" name="brand" id="formGroupExampleInput2">
                                          <option selected value="Cannon">Cannon</option>
                                          <option value="HP">HP</option>
                                          <option value="Epson">Epson</option>
                                          <option value="Samsung">Samsung</option>
                                          <option value="Dell">Dell</option>
                                        </select>
                                      </div>

                                      <div class="mb-3" >
                                          <label for="formGroupExampleInput2" class="form-label">
                                              Enter the model of your Printer:
                                          </label>
                                          <input type="text" class="form-control" id="formGroupExampleInput2" name="model" placeholder="Model of your Printer">
                                      </div>
      
      
                                      <div class="mb-3">
                                    <label for="formGroupExampleInput2"  class="form-label">How old is your printer?</label>
                                    <select class="form-select" name="printerAge" id="formGroupExampleInput2">
                                      <option value=" 1-3 years"> 1-3 years </option>
                                      <option value=" 3-5 years"> 3-5 years </option>
                                      <option value=" More than 5 years"> More than 5 years </option>
                                    </select>
                              </div>
                              

                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="model" class="form-label">Is your Printer fully functional?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="printerFunc" id="formGroupExampleInput2">
                                      <option value="Functional: Yes">Yes</option>
                                      <option value="Functional: No">No</option>
                                    </select>
                              </div>
      
                                      <!-- upload file  -->
                                       <div class="mb-3">
                                          <div class="form-group">
                                            <label for="fileInput">Upload a picture of your mobile: </label>
                      <?php
                    break;



            // radio--------------------------------------------------------------------------------------------------------->


            case "radio": ?>
              <h2 style="text-align:center"> Radio </h2>
              <center>
                <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="assets/img/radio.jpg" alt="" srcset="" >
    
                      <?php include './QuesTemplate/midBody.html'; ?>
                      
                                    <input type="hidden" name="itemName" value="Radio">

                                    <div class="mb-3" style="margin-top: 30px;">
                                    <label for="formGroupExampleInput2" class="form-label">
                                        Select the brand of your radio:
                                      </label>
                                          <select class="form-select" name="brand" id="formGroupExampleInput2">
                                            <option selected value="SONY Radio">SONY Radio</option>
                                            <option value="Saregama Carvaan Mini">Saregama Carvaan Mini</option>
                                            <option value="Pagaria Retro Radio">Pagaria Retro Radio</option>
                                            <option value="Zoook Rocker Thunder">Zoook Rocker Thunder</option>
                                            <option value="Philips Radio">Philips Radio</option>
                                            <option value="Panasonic Radio">Panasonic Radio</option>
                                            <option value="Toshiba Pocket Radio">Toshiba Pocket Radio</option>
                                            <option value="Amkette Pocket FM Radio">Amkette Pocket FM Radio</option>
                                        </select>
                                    </div>


                                    <div class="mb-3"> 
                                        <label for="formGroupExampleInput" class="form-label">How old is your Radio?</label>
                                          <select class="form-select" name="radioAge" id="formGroupExampleInput">        
                                              <option selected value="1-3 Years">1-3 Years</option>
                                              <option value="3-5 Years">3-5 Years</option>
                                              <option value="More than 5 Years">More than 5 Years</option>
                                          </select>
                                    </div>
    
    
                                    <div class="mb-3"> 
                                      <label for="formGroupExampleInput2" class="form-label">Enter the model of your Radio:</label>
                                      <input class="form-control" name="model" type="text" placeholder="model of your radio" id="formGroupExampleInput2">
                                    </div>
                            

                            <div class="mb-3"> 
                                    <label for="formGroupExampleInput2"  class="form-label">Is your Radio fully functional?</label>
                                    <select class="form-select" name="radioFunc" id="formGroupExampleInput2">
                                      <option value="Functional: Yes">Yes</option>
                                      <option value="Functional: No">No</option>
                                    </select>
                              </div>


                              <div class="mb-3"> 
                                    <label for="formGroupExampleInput2" class="form-label">Does your Radio contain charger?</label>
                                    <select class="form-select" name="radioCharger" id="formGroupExampleInput2">
                                      <option value="Charger: Yes">Yes</option>
                                      <option value="Charger: No">No</option>
                                    </select>
                              </div>
    
                                    <!-- upload file  -->
                                     <div class="mb-3">
                                        <div class="form-group">
                                          <label for="fileInput">Upload a picture of your radio: </label>
                    <?php
                  break;




                  // hardisk--------------------------------------------------------------------------------------------------------->




                  case "hardisk": ?>
                    <h2 style="text-align:center"> Hard Disk </h2>
                    <center>
                      <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="assets/img/harddisk.jpeg" alt="" srcset="" >
          
                            <?php include './QuesTemplate/midBody.html'; ?>
                            
                                          <input type="hidden" name="itemName" value="Hard_Disk">
    
                                          <div class="mb-3" style="margin-top: 30px;">
                                          <label for="formGroupExampleInput2" class="form-label">
                                              Select the brand of your Hard Disk:
                                            </label>
                                            <select class="form-select" name="brand" id="formGroupExampleInput2">                                              
                                                <option selected value="Seagate">Seagate</option>
                                                <option value="Toshiba">Toshiba</option>
                                                <option value="Western digital">Western digital</option>
                                                <option value="Lenovo">Lenovo</option>
                                                <option value="Transcend">Transcend</option>
                                                <option value="Sony">Sony</option>
                                                <option value="Consistent">Consistent</option>
                                            </select>
                                          </div>
    
                                          <div class="mb-3"> 
                                              <label for="formGroupExampleInput2" class="form-label">Enter the model of your Hard Disk: </label>
                                              <input class="form-control" type="text"name="model" id="formGroupExampleInput2" placeholder="model of your hard disk">
                                          </div>
          
          
                                          <div class="mb-3" > 
                                              <label for="formGroupExampleInput"  class="form-label">What is the storage of your Hard disk?</label>
                                              <select class="form-select" name="storage" id="formGroupExampleInput">
                                                  <option selected value="Less than 500GB">Less than 500GB</option>
                                                  <option value="500GB">500GB</option>
                                                  <option value="1TB">1TB</option>
                                                  <option value="2TB">2TB</option>
                                                  <option value="More than 2TB">More than 2TB</option>
                                              </select>
                                          </div>
                                  
    
                                          <div class="mb-3">
                                                <label for="formGroupExampleInput2" class="form-label">How old is your Hard disk?</label>
                                                <select class="form-select" name="hardiskAge" id="formGroupExampleInput2">
                                                  <option selected value="1-3 Years">1-3 Years</option>
                                                  <option value="3-5 Years">3-5 Years</option>
                                                  <option value="More than 5 year">More than 5 years</option>
                                                </select>
                                          </div>
          
                                          <!-- upload file  -->
                                           <div class="mb-3">
                                              <div class="form-group">
                                                <label for="fileInput">Upload a picture of your Hard Disk: </label>
                          <?php
                        break;


//headphone------------------------------------------------------------------------------------------------------------
case "headphone": ?>
  <h2 style="text-align:center"> Head Phone </h2>
  <center>
    <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="assets/img/headphones.jpg" alt="" srcset="" >

          <?php include 'QuesTemplate/midBody.html'; ?>
          
                        <input type="hidden" name="itemName" value="headphone">

                        <div class="mb-3" style="margin-top: 30px;">
                                    <label for="formGroupExampleInput2" class="form-label" id="condition">
                                    What brand it is?
                                    </label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="brand" id="door">
                                    <option selected>Select brand</option>
                              
                                      <option value="Noise">Noise</option>
                                      <option value="Airpods">Airpods</option>
                                      <option value="Boat">Boat</option>
                                      <option value="Samsung">Samsung</option>
                                      <option value="Oneplus">Oneplus</option>
                                      <option value="Mi">Mi</option>
                                      <option value="Othar">Othar</option>
                                    </select>
                              </div>

                              <div class="mb-3">
                              <label for="formGroupExampleInput2" id="typw" class="form-label">Which model is it?</label>
                              <input class="form-control " type="text" placeholder="" name="model">
                              </div>

                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="model" class="form-label">Is it with charger?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="charger" id="model">
                                      <option value="Yes">Yes</option>
                                      <option value="No">No</option>
                                      <option value="Not Applicable">Not Applicable</option>
                                    </select>
                              </div>
                               
                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="model" class="form-label">How old it is?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="old" id="model">
                                      <option value="1 year ">1 year </option>
                                      <option value="1-3 years ">1-3 years </option>
                                      <option value="More than 3 years ">More than 3 years </option>
                                    </select>
                              </div>

                              <div class="mb-3">
                                    <label for="formGroupExampleInput2" id="model" class="form-label">Is it fully functional?</label>
                                    <!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder"> -->
                                    <select class="form-select" name="functional" id="model">
                                      <option value="Yes">Yes</option>
                                      <option value="No">No</option>
                                    </select>
                              </div>

                        <!-- upload file  -->
                         <div class="mb-3">
                            <div class="form-group">
                              <label for="fileInput">Upload a picture of your HeadPhone: </label>
        <?php
      break;

                        //other --------------------------------------------------------------------------------------------------------->




                        case "other": ?>
                          <h2 style="text-align:center"> Other </h2>
                          <center>
                            <img  style="width:500px; height:500px; margin-top: 20px; border-radius: 20px;" src="assets/img/other.jpg" alt="" srcset="" >
                
                                  <?php include './QuesTemplate/midBody.html'; ?>
                                  
                                                <input type="hidden" name="itemName" value="Other">
          
                                                <div class="mb-3" style="margin-top: 30px;">
                                                  <label for="exampleFormControlTextarea1" class="form-label">Explain your product ...</label>
                                                  <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="write about your product"name="productExplaination" rows="6"></textarea>
                                                </div>
                                      <!-- upload file  -->
                                                 <div class="mb-3">
                                                    <div class="form-group">
                                                      <label for="fileInput">Upload a picture of your device/product: </label>
                                                     
                                <?php
                              break;
    

            default:
                echo "<h1 style='text-center'>None of the cases matched ! :(</h1>";
    }  ?>      



                                    <input class="form-control" id="fileInput" type="file" name="uploadfile[]"  multiple required  />
                                  </div>
                                </div>

                                <div>
                                  <center>
                                    <button type="submit" class="btn btn-primary">Next </button>
                                  </center>
                                </div>
                            </form>

            </div>
          </div>
        </div>
      </div>
      <!-- <a href="./SellDonate.php">Back</a> -->
    </div>
    <?php include 'TemplateHTML/Footer/footer.html'; ?>
  </body>
</html>
 <?php 
}else{
    echo "<h1> Yea there are some problems</h1>";
}

?>