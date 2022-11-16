<?php

    include '../QuesTemplate/functions.php';
    include '../TemplateHTML/boilerplate.html';
    css();
    


?>

<div class="box" style="display:flex; justify-content:center;">
    <div class="mainBox" style="width:1200px; height:1000px; background-color:aqua;">
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
        </div>
    </div>
</div>


