<?php
    session_start();
    include 'includes/header.php';
    include 'includes/navbar.php';
?> 


    <!--section-heading-->
    <div class="section-heading " >
        <div class="container-fluid">
            <div class="section-heading-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading-2-title text-left">
                            <h2>Search resultats for : branding</h2>
                            <p class="desc">8 Articles were found for keyword  <strong> branding</strong></p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    
   <!--blog-layout-1-->
    <div class="blog-search">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 oredoo-content">
                    <div class="theiaStickySidebar">
                     <!--Post1-->
                    <div class="post-list post-list-style1 pt-0">
                        <div class="post-list-image">
                            <a href="post-single.php">
                                <img src="assets/img/blog/1.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-list-title">
                            <div class="entry-title">
                                <h5>
                                    <a href="post-single.php">Brand is just a perception, and perception will match reality over time </a>
                                </h5>
                            </div>
                        </div>
                        <div class="post-list-category">
                            <div class="entry-cat">
                                <a href="blog-layout-1.php" class="category-style-1">Branding</a>
                            </div>
                        </div>
                    </div>

                    <!--pagination-->
                    <div class="pagination">     
                        <div class="pagination-area">
                            <div class="row"> 
                                <div class="col-lg-12">
                                    <div class="pagination-list">
                                        <ul class="list-inline">
                                            <li><a href="#" ><i class="las la-arrow-left"></i></a></li>
                                            <li><a href="#" class="active">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#" ><i class="las la-arrow-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/-->
                    </div>
                </div>

                <!--sidebar-->
                <?php
                    include 'includes/sidebar.php';
                ?>
                <!--/-->
            </div>
        </div>
    </div>

<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?> 
     
   