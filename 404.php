<?php

    $errmsg = $_GET["err"];

    session_start();
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
                        <p><?= $errmsg ?></p>
                        <br>
                        <p>The page which you are looking for does not exist. Please return to the homepage.
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