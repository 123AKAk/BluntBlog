<?php
    require "assets/db.php";
    require "assets/varnames.php";
    require 'assets/sharedComponents.php';
    $components = new SharedComponents();
    
    include 'includes/header.php';
    include 'includes/navbar.php';
    
    // Check if the user is already logged in, if not then redirect him to welcome page
    if ($loggedin != true)
    {
        echo "<script>window.location.replace('./');</script>";
    }

    $uid = $components->unprotect($realuserid);
    $stmt = $conn->prepare("SELECT * FROM saved WHERE user_id = $uid");
    $stmt->execute();
    $getpostid = $stmt->fetchAll();
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
                        <?php foreach ($getpostid as $postid) : ?>
                            <?php
                                $artpostid = $postid['post_id'];
                                $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id WHERE article_status=1 AND article_id=$artpostid ORDER BY `article_created_time` DESC ");
                                $stmt->execute();
                                $articles = $stmt->fetchAll();
                                if(isset($articles))
                                {
                            ?>
                             <?php foreach ($articles as $article) : ?>
                                <div>
                                <br>
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
                                </div>
                            <?php endforeach; }?>
                            <!--post1-->
                        <?php endforeach; ?>
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