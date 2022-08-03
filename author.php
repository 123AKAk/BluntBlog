<?php
    require "assets/db.php";
    require "assets/varnames.php";
    require 'assets/sharedComponents.php';
    $components = new SharedComponents();
    
    if(!isset($_GET["authid"]))
    {
        happy:
        header("location: 404.php?err=Error Getting Author");
        exit;
    }

    include 'includes/header.php';
    
    $author_id =  $components->unprotect($_GET["authid"]);
    
    // Get author Data to display
    $stmt = $conn->prepare("SELECT * FROM author WHERE author_id = ? AND `type` != 0");
    $stmt->execute([$author_id]);
    $author = $stmt->fetch();
    
    if(!empty($author))
    {
        //get author related post
        $authid = $author['author_id'];
        $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id WHERE id_author='$authid' ORDER BY `article_created_time` DESC");
        $stmt->execute();
        $articles = $stmt->fetchAll();
    }
    else
    {
        goto happy;
    }
    
    include 'includes/navbar.php';
?> 

    <!--author-->
    <section class="authors">
        <div class="container-fluid">
            <div class="row">  
                <!--author-image-->
                <div class="col-lg-12 col-md-12 ">
                    <div class="authors-info">
                        <div class="image">
                            <a href="author.php" class="image">
                                <img src="img/avatar/<?= $author['author_avatar'] ?>" alt="">
                            </a>
                        </div>
                        <div class="content">
                            <h4><?= $author['author_fullname'] ?></h4>
                            <p>
                                <?= $author['author_email'] ?>
                            </p>
                            <p>
                                <?= $author['author_desc'] ?>
                            </p>
                            <div class="social-media">
                                <ul class="list-inline">
                                    <li>
                                        <a href="<?= $author['author_github'] ?>">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= $author['author_twitter'] ?>">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= $author['author_link'] ?>" >
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/-->
                </div>
            </div>
        </div>
    </section>

    <!-- blog-author-->
    <section class="blog-author mt-30">
        <div class="container-fluid">
            <h3>'<?= $author['author_fullname'] ?>' Posts</h3>
            <br>
            <div class="row">
                <!--content-->
                <div class="col-lg-8 oredoo-content">
                    <div class="theiaStickySidebar">

                        <?php foreach ($articles as $article) : ?>
                        <!--post1-->
                        <div class="post-list post-list-style4 pt-0"> 
                            <div class="post-list-image">
                                <a href="post-single.php?data=<?=substr($article['article_title'],0,30)."..."?>&id=<?= $components->protect($article['article_id']) ?>">
                                    <img src="img/article/<?= $article['article_image'] ?>" alt="">
                                </a>
                            </div>
                            <div class="post-list-content">
                                <ul class="entry-meta"> 
                                    <li class="entry-cat">
                                        <a href="category.php?data=<?=substr($article['category_name'],0,30)."..."?>&catID=<?= $components->protect($article['category_id']) ?>" class="category-style-1" style="color:<?= $article['category_color'] ?>">
                                            <?= $article['category_name'] ?>
                                        </a>
                                    </li>
                                    <li class="post-date"> <span class="line"></span><?= date_format(date_create($article['article_created_time']), "F d, Y ") ?></li>
                                </ul>
                                <h5 class="entry-title">
                                    <a href="post-single.php?data=<?=substr($article['article_title'],0,30)."..."?>&id=<?= $components->protect($article['article_id']) ?>">
                                        <?= strlen($article['article_title']) > 30 ? substr($article['article_title'],0,30)."..." : $article['article_title']; ?>
                                    </a>
                                </h5>  
                                <div class="post-btn">
                                    <a href="post-single.php?data=<?=substr($article['article_title'],0,30)."..."?>&id=<?= $components->protect($article['article_id']) ?>" class="btn-read-more">Continue Reading <i class="las la-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                        <!--pagination-->
                        <!-- <div class="pagination">
                            <div class="pagination-area text-left">
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
                        </div> -->
                        <br>
                    </div>
                </div>
                <!--/-->

                <!--Sidebar-->
                <?php
                    include 'includes/sidebar.php';
                ?>
                <!--/-->
            </div>
        </div>
    </section>

<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?> 