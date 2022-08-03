<?php
    require "assets/db.php";
    require "assets/varnames.php";
    require 'assets/sharedComponents.php';
    $components = new SharedComponents();
    
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
                             <h1>About us</h1>
                             <p class="links"><a href="./">Home <i class="las la-angle-right"></i></a> About</p>
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
                    <div class="col-lg-12 ">
                        <div class="image">
                            <img src="assets/img/other/about-1.jpg" alt="">
                        </div>
                   
                        <div class="description">
                            <h3 >Thank you for checking out our blog website.</h3>
                            <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus finibus, nisi vitae dapibus luctus, ante magna auctor magna, aliquet lacinia mauris magna a ligula. Nunc pharetra lectus eros, at blandit nisi iaculis vel. Donec vehicula eros nibh, in efficitur libero luctus vel. Nunc ac augue sapien. Praesent mollis dolor a velit porta, non egestas mauris facilisis. Aliquam fermentum mauris ex, et tristique tortor pellentesque.
                            </p>
                            <p>
                                Quisque venenatis tempor enim, quis mollis quam hendrerit ut. Praesent tempor, eros in sodales dignissim, augue tellus convallis eros, at ultrices nibh neque sed turpis. Cras consequat placerat enim in varius. Suspendisse sem neque, lobortis vitae tristique ac, sodales non eros. Aenean vel dictum sem. Nullam ultricies cursus nisl id.
                            </p>
                            <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus finibus, nisi vitae dapibus luctus, ante magna auctor magna, aliquet lacinia mauris magna a ligula. Nunc pharetra lectus eros, at blandit nisi iaculis vel. Donec vehicula eros nibh, in efficitur libero luctus vel. Nunc ac augue sapien. Praesent mollis dolor a velit porta, non egestas mauris facilisis. Aliquam fermentum mauris ex, et tristique tortor pellentesque.
                                Quisque venenatis tempor enim, quis mollis quam hendrerit ut. Praesent tempor, eros in sodales dignissim, augue tellus convallis eros, at ultrices nibh neque sed turpis. Cras consequat placerat enim in varius. Suspendisse sem neque, lobortis vitae tristique ac, sodales non eros. Aenean vel dictum sem. Nullam ultricies cursus nisl id.
                            </p>

                            <a href="mailto:<?= $siteemail ?>" class="btn-custom">Send us a Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
<br>
<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?> 