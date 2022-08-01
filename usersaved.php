<?php
    require "assets/db.php";
    require "assets/varnames.php";
    require 'assets/sharedComponents.php';
    $components = new SharedComponents();
    
    // Check if the user is already logged in, if no then redirect him to welcome page
    if (!isset($_SESSION["blunt_blog_user_loggedin_"])){
        header("location: index.php");
        exit;
    }
    include 'includes/header.php';
    include 'includes/navbar.php';

?> 
     <!--section-heading-->
     <div class="section-heading " >
        <div class="container-fluid">
             <div class="section-heading-2">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="section-heading-2-title">
                             <h1>Saved Posts</h1>
                             <p class="links"><a href="./">Home <i class="las la-angle-right"></i></a> Saved Posts</p>
                         </div>
                     </div>  
                 </div>
             </div>
         </div>
    </div>

    <!--about-us-->
    <section class="about-us">
        <div class="container-fluid">
            <div class="about-us-area">
                <div class="row ">
                    <div class="col-lg-8 oredoo-content">
                        
                    </div>
                    <!--sidebar-->
                    <?php
                        include 'includes/sidebar.php';
                    ?>
                </div>
            </div>
        </div>
    </section>
        
<br>
<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?> 