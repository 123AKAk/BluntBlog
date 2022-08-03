<?php
    require "assets/db.php";
    require "assets/varnames.php";
    require 'assets/sharedComponents.php';
    $components = new SharedComponents();
    
    include 'includes/header.php';
    include 'includes/navbar.php';

    
    // Get Latest articles
    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id WHERE article_status=1 ORDER BY `article_created_time` DESC  LIMIT 2,7");
    $stmt->execute();
    $articles = $stmt->fetchAll();

    // Get lastest article show on first part of page
    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id INNER JOIN author ON author_id=id_author WHERE article_status=1 ORDER BY `article_created_time` DESC LIMIT 1");
    $stmt->execute();
    $lastestarticlefirst = $stmt->fetchAll();

    // Get best articles
    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id INNER JOIN author ON author_id=id_author WHERE article_status=1 ORDER BY `article_created_time` DESC LIMIT 1,1");
    $stmt->execute();
    $abestarticles = $stmt->fetchAll();

    // Get Latest articles
    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id INNER JOIN author ON author_id=id_author WHERE article_status=1 ORDER BY `article_created_time` DESC  LIMIT 1");
    $stmt->execute();
    $bestarticles = $stmt->fetchAll();

    // Get all categories as list
    $stmt = $conn->prepare("SELECT * FROM `category` INNER JOIN article ON category_id=id_categorie INNER JOIN author ON author_id=id_author WHERE article_status=1 ORDER BY RAND()");
    $stmt->execute();
    $categorieslist = $stmt->fetchAll();

    //get editor's choice
    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=1 INNER JOIN author ON author_id=id_author WHERE article_status=1 LIMIT 6");
    $stmt->execute();
    $editorchoice = $stmt->fetchAll();
?> 

    <!-- blog-home5-->
    <?php foreach ($lastestarticlefirst as $article) : ?>
    <div class="blog blog-home5" >
        <div class="blog-banner" style="background-image: url('img/article/<?= $article['article_image'] ?>'); background-cover:contain;"> </div>
        <div class="container-fluid">
            <div class="post-list-hero"  >
                <div class="row">
                    <div class="col-lg-6">
                        <div class="post-list-content">
                            <h2 class="entry-title">
                                    <a href="post-single.php?data=<?=substr($article['article_title'],0,30)."..."?>&id=<?= $components->protect($article['article_id']) ?>">
                                        <?= strlen($article['article_title']) > 57 ? substr($article['article_title'],0,57)."..." : $article['article_title']; ?>
                                    </a>
                            </h2>  
                            <ul class="entry-meta">
                                <li class="post-author-img"><img src="img/avatar/<?= $article['author_avatar'] ?>" alt="<?= $article['author_fullname'] ?>"></li>
                                <li class="post-author">
                                    <a href="author.php?authid=<?=  $components->protect($article['author_id']) ?>">
                                        <?= $article['author_fullname'] ?>
                                    </a>
                                </li>
                                <li class="entry-cat">
                                    <a href="category.php?data=<?=substr($article['category_name'],0,30)."..."?>&catID=<?= $components->protect($article['category_id']) ?>" class="category-style-1" style="color:<?= $article['category_color'] ?>">
                                        <span class="line"></span> 
                                        <?= $article['category_name'] ?>
                                    </a>
                                </li>
                                <li class="post-date"> <span class="line"></span> <?= date_format(date_create($article['article_created_time']), "F d, Y ") ?></li>
                            </ul>
                            <div class="post-exerpt">
                                <p>
                                    <?= strlen(strip_tags($article['article_content'])) > 200 ? substr(strip_tags($article['article_content']),0,200)."..." : strip_tags($article['article_content']); ?>
                                </p>
                            </div>
                            <div class="post-btn">
                                <a href="post-single.php?data=<?=substr($article['article_title'],0,30)."..."?>&id=<?= $components->protect($article['article_id']) ?>" class="btn-read ">read more<i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                   </div>
               </div>
           </div>
        </div>
    </div>
    <?php endforeach;  ?>

    <!-- Latest articles-->
    <section class="section-feature-2 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="section-title">
                        <h3>Latest Post </h3>
                        <p>Discover the most outstanding news in all topics .</p>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-6">

                <?php foreach ($articles as $article) : ?>
                    <!--Latest Articles-->
                    <div class="post-list post-list-style1 ">
                        <div class="post-list-image">
                            <a href="post-single.php?data=<?=substr($article['article_title'],0,30)."..."?>&id=<?= $components->protect($article['article_id']) ?>">
                                <img src="img/article/<?= $article['article_image'] ?>" alt="<?=$article['article_title']?>">
                            </a>
                        </div>
                        <div class="post-list-title">
                            <div class="entry-title">
                                <h5>
                                    <a href="post-single.php?data=<?=substr($article['article_title'],0,30)."..."?>&id=<?= $components->protect($article['article_id']) ?>">
                                        <?= strlen($article['article_title']) > 57 ? substr($article['article_title'],0,57)."..." : $article['article_title']; ?>
                                    </a>
                                </h5>
                            </div>
                        </div>
                        <div class="post-list-category">
                            <div class="entry-cat">
                                <a href="category.php?data=<?=substr($article['category_name'],0,30)."..."?>&catID=<?= $components->protect($article['category_id']) ?>" class="category-style-1" style="color:<?= $article['category_color'] ?>">
                                    <?= $article['category_name'] ?>
                                </a>
                            </div>
                            <div class="entry-cat">
                                <span class="post-date">
                                    <?= date_format(date_create($article['article_created_time']), "F d, Y ") ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach;  ?>

                </div>

                <?php foreach ($abestarticles as $article) : ?>
                    <!--Side Post-->
                    <div class="col-lg-6">
                        <div class="post-overly post-overly-2">
                            <div class="post-ovetly-image">
                                <a href="post-single.php?data=<?=substr($article['article_title'],0,30)."..."?>&id=<?= $components->protect($article['article_id']) ?>">
                                    <img src="img/article/<?= $article['article_image'] ?>" alt="<?=$article['article_title']?>" style="">
                                </a>
                            </div>
                            <div class="post-overly-content">
                                <div class="entry-cat">
                                    <a href="category.php?data=<?=substr($article['category_name'],0,30)."..."?>&catID=<?= $components->protect($article['category_id']) ?>" class="category-style-2" style="color:<?= $article['category_color'] ?>">
                                        <?= $article['category_name'] ?>
                                    </a>
                                </div>
                                <h3 class="entry-title">
                                    <a href="post-single.php?data=<?=substr($article['article_title'],0,30)."..."?>&id=<?= $components->protect($article['article_id']) ?>"><?= $article ['article_title'] ?></a>
                                </h3>
                                <ul class="entry-meta">
                                    <li class="post-author">
                                        <a href="author.php?authid=<?=  $components->protect($article['author_id']) ?>">
                                            <?= $article['author_fullname'] ?>
                                        </a>
                                    </li>
                                    <li class="post-date"> <span class="line"></span><?= date_format(date_create($article['article_created_time']), "F d, Y ") ?></li>
                                    <li class="post-timeread">
                                         <!-- <span class="line"></span>Read NaN mins read -->
                                    </li>
                                </ul>
                            </div>   
                        </div>
                    </div>
                <?php endforeach;  ?>

            </div>        
        </div>
    </section>

    <!--ads-->
    <div class="ads ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <div class="image">
                    <img src="assets/img/ads/ads.jpg" alt="ads">
                </div>
                </div>
            </div>
        </div>             
    </div>
  

    <!--Editor's choise-->
    <section class="section-feature-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Editor's Choice</h3>
                        <p>Discover the most outstanding articles in your Editor's Choice.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--content-->
                <div class="col-lg-8 oredoo-content ">
                    <div class="theiaStickySidebar">
                        <div class="section-block-posts">

                            <?php foreach ($editorchoice as $article) : ?>
                            <!--post-1-->
                            <div class="post-list post-list-style6">
                                <div class="post-list-content">
                                    <ul class="entry-meta">
                                        <li class="entry-cat">
                                            <a href="category.php?data=<?=substr($article['category_name'],0,30)."..."?>&catID=<?= $components->protect($article['category_id']) ?>" class="category-style-1" style="color:<?= $article['category_color'] ?>">
                                                <?= $article['category_name'] ?>
                                            </a>
                                        </li>
                                        <li class="post-author">
                                            <a href="author.php?authid=<?=  $components->protect($article['author_id']) ?>">
                                                <span class="line"></span><?= $article['author_fullname'] ?>
                                            </a>
                                        </li>
                                        <li class="post-date"> <span class="line"></span><?= date_format(date_create($article['article_created_time']), "F d, Y ") ?></li>
                                    </ul>
                                    <h4 class="entry-title">
                                        <a href="post-single.php?data=<?=substr($article['article_title'],0,30)."..."?>&id=<?= $components->protect($article['article_id']) ?>">
                                            <?= strlen($article['article_title']) > 57 ? substr($article['article_title'],0,57)."..." : $article['article_title']; ?>
                                        </a>
                                    </h4>
                                    <div class="post-exerpt">
                                        <p>
                                            <?= strlen(strip_tags($article['article_content'])) > 200 ? substr(strip_tags($article['article_content']),0,200)."..." : strip_tags($article['article_content']); ?>
                                        </p>
                                    </div>
                                </div>   
                            </div>
                            <?php endforeach;  ?>

                        </div>
                    </div>
                </div>  <!--/-->
              
                <?php
                    include 'includes/sidebar.php';
                ?>
               
            </div>
        </div>
    </section>


    <?php
        include 'includes/randompost.php';
    ?>
   

    <!-- List Categories-->
    <section class="blog blog-home7 " > 
        <div class="container-wrap2">
            <div class="owl-carousel">

                <?php foreach ($categorieslist as $article) : ?>
                <!--post-1-->
                <div class="post-overly post-overly-2">
                    <div class="post-overly-image">
                        <img src="img/article/<?= $article['article_image'] ?>" alt="<?=$article['article_title']?>">
                    </div>
                    <div class="post-overly-content">
                        <div class="entry-cat">
                            <a href="category.php?data=<?=substr($article['category_name'],0,30)."..."?>&catID=<?= $components->protect($article['category_id']) ?>" class="category-style-2" style="color:<?= $article['category_color'] ?>">
                                <?= $article['category_name'] ?>
                            </a>
                        </div>
                        <h4 class="entry-title">
                            <a href="post-single.php?data=<?=substr($article['article_title'],0,30)."..."?>&id=<?= $components->protect($article['article_id']) ?>">
                                <?= strlen($article['article_title']) > 30 ? substr($article['article_title'],0,47)."..." : $article['article_title']; ?>
                            </a>
                        </h4>
                        <ul class="entry-meta">
                            <li class="post-author">
                                <a href="author.php?authid=<?=  $components->protect($article['author_id']) ?>">
                                    <?= $article['author_fullname'] ?>
                                </a>
                            </li>
                            <li class="post-date"> <span class="line"></span> 
                                <?= date_format(date_create($article['article_created_time']), "F d, Y ") ?>
                            </li>
                        </ul>
                    </div>   
                </div>
                <?php endforeach;  ?>

            </div>
        </div> 
    </section>

    <!--instagram-->
    <?php
        include 'includes/instagrampost.php';
    ?> 

<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?> 