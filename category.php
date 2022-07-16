<?php
    include 'includes/header.php';
    include 'includes/navbar.php';
    
    $catID = "";

    // Get All Categories
    $stmt = $conn->prepare("SELECT * FROM `category` ");
    $stmt->execute();
    $categories = $stmt->fetchAll();

    if (isset($_GET["catID"])) {

    $catID = $_GET["catID"];

    // Get Category Info
    $stmt = $conn->prepare("SELECT * FROM `category` WHERE category_id = ?");
    $stmt->execute([$catID]);
    $category = $stmt->fetch();

    // Get Latest articles
    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id WHERE id_categorie = ?  ORDER BY `article_created_time` DESC ");
    $stmt->execute([$catID]);
    $articles = $stmt->fetchAll();
    } else {

    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id ORDER BY `article_created_time` DESC ");
    $stmt->execute();
    $articles = $stmt->fetchAll();
    }


?> 

    <!--section-heading-->
    <div class="section-heading " >
        <div class="container-fluid">
            <div class="section-heading-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading-2-title ">
                            <h1> <?= $catID == "" ? "" : $category['category_name'] ?>  </h1>
                            <p class="links"><a href="index.php">Home <i class="las la-angle-right"></i></a> Category(s)</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    <!-- category-->
    <section class="blog-author mt-30">
        <div class="container-fluid">
            <div class="">
                <!--content-->
                <div class="">
                    <div class="row theiaStickySidebar">

                        <?php foreach ($articles as $article) : ?>
                            <!--post1-->
                            <div class="col-lg-6">
                            <br>
                                <div class="post-list post-list-style4 pt-0">
                                    <div class="post-list-image">
                                        <a href="post-single.php?id=<?= $article['article_id'] ?>">
                                            <img src="img/article/<?= $article['article_image'] ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="post-list-content">
                                        <ul class="entry-meta"> 
                                            <li class="entry-cat">
                                                <a href="category.php?catID=<?= $article['category_id'] ?>" class="category-style-1">
                                                    <?= $article['category_name'] ?>
                                                </a>
                                            </li>
                                            <li class="post-date"> <span class="line"></span><?= date_format(date_create($article['article_created_time']), "F d, Y ") ?></li>
                                        </ul>
                                        <h5 class="entry-title">
                                            <a href="post-single.php?id=<?= $article['article_id'] ?>">
                                                <?= strlen($article['article_title']) > 30 ? substr($article['article_title'],0,30)."..." : $article['article_title']; ?>
                                            </a>
                                        </h5>  
                                        <div class="post-btn">
                                            <a href="post-single.php?id=<?= $article['article_id'] ?>" class="btn-read-more">Continue Reading <i class="las la-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                   
                    <!--pagination-->
                    <div class="pagination">
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
                    </div>
                    
                </div>
                <!--/-->

            </div>
        </div>
    </section>

     

<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?> 