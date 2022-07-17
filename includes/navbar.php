    <!--loading -->
    <!-- <div class="loader">
        <div class="loader-element"></div>
    </div> -->

    <?php
        // Get Categories
        $stmt = $conn->prepare("SELECT *,COUNT(*) as article_count FROM `article` INNER JOIN category ON id_categorie=category_id GROUP BY id_categorie");
        $stmt->execute();
        $categories = $stmt->fetchAll();
    ?>

    <!-- Header-->
    <header class="header navbar-expand-lg fixed-top ">
        <div class="container-fluid ">
            <div class="header-area">
                <!--logo-->
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/img/logo/logo-dark.png" alt="" class="logo-dark">
                        <img src="assets/img/logo/logo-white.png" alt="" class="logo-white">
                    </a>
                </div>
                <!--/-->
                <div class="header-navbar">
                    <nav class="navbar">
                        <!--navbar-collapse-->
                        <div class="collapse navbar-collapse" id="main_nav">
                            <ul class="navbar-nav ">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php"> Home </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">Category(s)</a>
                                    <ul class="dropdown-menu fade-up">
                                        <?php foreach ($categories as $category) : ?>
                                            <li>
                                                <a class="dropdown-item" href="category.php?data=<?=substr($article['category_name'],0,30)."..."?>&catID=<?= $components->protect($article['category_id']) ?>"> <?= $category["category_name"] ?>
                                                </a>
                                            </li>
                                            <hr style="height:-50px;margin-left: auto;  margin-right: auto; border: 0 none;width: 100%;">
                                        <?php endforeach; ?>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Pages </a>
                                    <ul class="dropdown-menu fade-up">
                                        <li>
                                            <a class="dropdown-item" href="about.php"> About us</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="list-authors.php"> All authors </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="login.php"> login </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item " href="signup.php">Sign up </a>
                                        </li>
                                    </ul>
                                </li>

                                <?php if ($loggedin) : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="saved.php"> Saved </a>
                                    </li>
                                <?php else : ?>
                                    
                                <?php endif;  ?>

                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php"> contact </a>
                                </li>
                            </ul>
                        </div>
                        <!--/-->
                    </nav>
                </div>

                <!--header-right-->
                <div class="header-right ">
                    <!--theme-switch-->
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <span class="slider round ">
                                <i class="lar la-sun icon-light"></i>
                                <i class="lar la-moon icon-dark"></i>
                            </span>
                        </label>
                    </div>

                     <!--search-icon-->
                    <div class="search-icon">
                        <i class="las la-search"></i>
                    </div>

                    <div class="botton-sub">
                        <a class="btn-subscribe" href="<?= ($loggedin) ? 'Logout.php' : 'login.php'; ?>">
                            <?= ($loggedin) ? 'Logout' : 'Login'; ?>
                        </a>
                    </div>
                            
                    <!--navbar-toggler-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--/-->
                </div>
            </div>
        </div> 
    </header>
