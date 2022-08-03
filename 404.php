<?php

    $errmsg = $_GET["err"];
    require "assets/db.php";
    require "assets/varnames.php";
    require 'assets/sharedComponents.php';
    $components = new SharedComponents();
    
    include 'includes/header.php';
    include 'includes/navbar.php';
?> 

    <!--page404-->
    <div class="page404 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="page404-content">
                       <img src="assets/img/other/error404.png" alt="">
                        <h3>Oops... Page Not Found!</h3>
                        <h5  style="font-weight: bold;"><?= $errmsg ?></h5>
                        
                        <p>Maybe the page which you are looking for does not exist. Please return to the homepage or 
                        <a href="javascript:void(0);" style="font-weight: bold;" class="search-icon">Make a Search.</a>
                        </p>
                        <a href="./" class="btn-custom">Back to homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
       

    <!--instagram-->
    <?php
        include 'includes/instagrampost.php';
    ?> 

<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?> 