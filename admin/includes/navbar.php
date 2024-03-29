<!-- <div class="loader">
    <div class="spinner">
    <img src="assets/images/loader.gif" alt=""/>
    </div> 
</div> -->

<body>
    <!-- Main Body -->
    <div class="page-wrapper">
        <!-- Header Start -->
        <header class="header-wrapper main-header">
            <div class="header-inner-wrapper">
                <div class="header-right">
                    <div class="serch-wrapper">
                        <form>
                            <input type="text" placeholder="Search Here...">
                        </form>
                        <a class="search-close" href="javascript:void(0);"><span class="icofont-close-line"></span></a>
                    </div>
                    <div class="header-left">
                        <div class="header-links">
                            <a href="javascript:void(0);" class="toggle-btn">
                                <span></span>
                            </a>
                        </div>
                        <!-- <div class="header-links search-link">
                            <a class="search-toggle" href="javascript:void(0);">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve">
                                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
                                    s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
                                    c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
                                    s-17-7.626-17-17S14.61,6,23.984,6z"/>
                                </svg>
                            </a>
                        </div> -->
                    </div>
                    <div class="header-controls">
                        <?php
                            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                            $url = "https://";
                            else
                            $url = "http://";
                            $url.= $_SERVER['HTTP_HOST']."/webmail";
                        ?>
                        <div class="notification-wrapper header-links">
                            <a href="<?= $url ?>" class="notification-info" title="Web Mail" target="_blank">
                                <i class="far fa-envelope"></i>
                            </a>
                        </div>
                        <div class="user-info-wrapper header-links">
                            <a href="javascript:void(0);" class="user-info">
                                <img src="assets/images/user.jpg" alt="" class="user-img">
                            </a>
                            <div class="user-info-box">
                                <div class="drop-down-header">
                                    <h4><?= $username ?></h4>
                                    <p><?= $type == 2 ?"Admin" : "Author"?></p>
                                </div>
                                <ul>
                                    <li>
                                        <a href="profile.php?type=banauthor&id=<?= $adid?>">
                                            <i class="far fa-edit"></i> Edit Profile
                                        </a>
                                    </li>
                                    <?php if($type == 2)
                                    {
                                    ?>
                                    <!-- <li>
                                        <a href="setting.php">
                                            <i class="fas fa-cog"></i> Settings
                                        </a>
                                    </li> -->
                                    <?php
                                    }
                                    ?>
                                    <li>
                                        <a href="../logout.php">
                                            <i class="fas fa-sign-out-alt"></i> logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>