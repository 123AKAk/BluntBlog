  <!--footer-->
  <div class="footer">
        <div class="footer-area">
            <div class="footer-area-content">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-3">
                            <div class="menu">
                                <h6>Menu</h6>
                                <ul>
                                    <li><a href="./">Homepage</a></li>
                                    <li><a href="about.php">about us</a></li>
                                    <li><a href="contact.php">contact us</a></li>
                                    <li><a href="privacy.php">privacy</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--newsletter-->
                        <div class="col-md-6">
                            <div class="newslettre">
                                <div class="newslettre-info">
                                    <h3>Subscribe To Our
                                        Newsletter</h3>
                                    <p>Sign up for free and be the first to get notified about new posts.</p>
                                
                                </div>
                                <form action="subnewsletter.php" class="newslettre-form" method="POST" enctype="multipart/form-data">
                                    <div class="form-flex">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email Adress" required="required">
                                        </div>
                                        <button class="submit-btn" type="submit">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/-->
                        <div class="col-md-3">
                            <div class="menu">
                                <h6>Follow us</h6>
                                <ul>
                                    <li><a href="#">facebook</a></li>
                                    <li><a href="#">instagram</a></li>
                                    <li><a href="#">youtube</a></li>
                                    <li><a href="#">twitter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            <!--footer-copyright-->
            <div class="footer-area-copyright">
                <div class="container">
                    <div class="row">
                       <div class="col-lg-12">
                           <div class="copyright">
                            <p>?? 2022,  BLUNT, All Rights Reserved.</p>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
            <!--/-->
        </div>
    </div>

    <!--Back-to-top-->
    <div class="back">
        <a href="#" class="back-top">
            <i class="las la-long-arrow-alt-up"></i>
        </a>
    </div>
   

    <!--Search-form-->
    <div class="search">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-10 m-auto">
                    <div class="search-width">
                        <button type="button" class="close">
                            <i class="far fa-times"></i>
                        </button>
                        <form class="search-form" action="search.php" method="POST" enctype="multipart/form-data">
                            <input type="search" name="searchkeyword" value="" placeholder="What are you looking for?">
                            <button type="submit" class="search-btn"> Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
