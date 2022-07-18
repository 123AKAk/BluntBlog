
<?php
    if(!isset($_GET['id']))
    {
        header("location: 404.php?err=Error Getting Post");
        exit;
    }
    
    include 'includes/header.php';
    
    $article_id = $components->unprotect($_GET['id']);
    
    // Get Article Info
    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN `author` ON `article`.id_author = `author`.author_id  WHERE `article_id` = ?");
    $stmt->execute([$article_id]);
    $article = $stmt->fetch();
    
    if(empty($article))
    {
        header("location: 404.php?err=Post has been Deleted, cannot be found");
        exit;
    }
    
    // Get Category of article
    $stmt = $conn->prepare("SELECT * FROM `category` WHERE `category_id` = ?");
    $stmt->execute([$article["id_categorie"]]);
    $category = $stmt->fetch();
    
    // Get Author's articles
    $stmt = $conn->prepare("SELECT article_title, article_id FROM `article` WHERE id_author = ? LIMIT 4");
    $stmt->execute([$article["id_author"]]);
    $articles = $stmt->fetchAll();
    
    // Get previous article Info
    $stmt = $conn->prepare("SELECT * FROM `article` WHERE `article_id` < '$article_id' AND `id_categorie` = ? ORDER BY `article_id` DESC LIMIT 1");
    $stmt->execute([$article["id_categorie"]]);
    $previous_article = $stmt->fetchAll();
    
    // Get next article Info
    $stmt = $conn->prepare("SELECT * FROM `article` WHERE `article_id` > '$article_id' AND `id_categorie` = ? ORDER BY `article_id` DESC LIMIT 1");
    $stmt->execute([$article["id_categorie"]]);
    $next_article = $stmt->fetchAll();
    
    // Get Comments with total comments
    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN `comment` WHERE `article`.`article_id`= `comment`.`id_article` AND `article`.`article_id` = ? ORDER BY comment_id DESC");
    $stmt->execute([$article_id]);
    $comments = $stmt->fetchAll();
    $number_of_rows = $stmt->rowCount();
    
    include 'includes/navbar.php';
    ?> 

<!--section-heading-->
<div class="section-heading " >
        <div class="container-fluid">
            <div class="section-heading-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading-2-title ">
                            <p class="links">
                                <a href="index.php">
                                    Home <i class="las la-angle-right"></i>
                                </a> Post
                            </p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    

    <!--post-single-->
    <section class="">
    
        <div class="post-single-image">
            <img src="img/article/<?= $article["article_image"] ?>" alt="" style="width: 100%;">
        </div>

        <div class="container-fluid">
            <div class="row">
                <!--content-->
                <div class="col-lg-8 oredoo-content">
                    <div class="theiaStickySidebar">
                             <!--post-single-title-->
                             <div class="post-single-title">  
                                <h3>
                                    <?= $article["article_title"] ?>
                                </h3>
                                <ul class="entry-meta">
                                    <li class="post-author-img">
                                        <img src="img/avatar/<?= $article['author_avatar'] ?>" alt="">
                                    </li>
                                    <li class="post-author">
                                        <a href="author.php?authid=<?= $article['author_id'] ?>">
                                            <?= $article['author_fullname'] ?>
                                        </a>
                                    </li>
                                    <li class="entry-cat">
                                        <span class="line"></span>
                                        <a class="post-category" href="category.php?data=<?=substr($category['category_name'],0,30)."..."?>&catID=<?= $components->protect($category['category_id']) ?>">
                                        <?= $category['category_name'] ?>
                                    </a>
                                    </li>
                                    <li class="post-date"> <span class="line"></span>
                                        <?= date_format(date_create($article["article_created_time"]), "F d, Y ") ?>
                                    </li>
                                    <li>
                                        <span class="line"></span>
                                        <a title="Views">
                                            <i class="fab fa-eye" style="background-color: gray;"></i> 0 Views
                                        </a>
                                    </li>
                                    <li>
                                        <span class="line"></span>
                                        <a title="Save Post" onclick="savepost()" href="javascript:void(0);">
                                            <i class="fab fa-save" style="background-color: gray;"></i> Save Post
                                        </a>
                                    </li>
                                </ul>
                                
                            </div>

                            <!--post-single-content-->
                            <div class="post-single-content">
                                <?= $article["article_content"] ?>
                            </div>
                            
                            <!--post-single-bottom-->
                            <div class="post-single-bottom">
                                <div class="menu-outer">
                                    <div class="">
                                        <ul class="list-inline">
                                            <li>
                                                <a>Share To : </a>
                                            </li>
                                            <li>
                                                <a title="Facebook" id="singleshare1" data-sharer="facebook" data-hashtag="<?= $sitehashtag ?>">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Twitter" id="singleshare2" data-sharer="twitter" data-title="<?= $sitemsg ?>" data-hashtags="<?= $sitehashtag ?>" >
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Pinterest" id="singleshare3" data-sharer="pinterest" >
                                                    <i class="fab fa-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Whatsapp" id="singleshare4" data-sharer="whatsapp" data-title="<?= $sitemsg ?>" >
                                                    <i class="fab fa-whatsapp" style="background-color: #25D366;"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Linkedin" id="singleshare5" data-sharer="linkedin" >
                                                    <i class="fab fa-linkedin" style="background-color: #0072b1;"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Telegram" id="singleshare7" data-sharer="telegram" data-title="<?= $sitemsg ?>" >
                                                    <i class="fab fa-telegram" style="background-color: #229ED9;"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Email" id="singleshare6" data-sharer="email" data-title="<?= $sitemsg ?>" data-subject="Hey! Check out that URL" data-to="some@email.com">
                                                    <i class="fab fa-mailchimp" style="background-color: gray;"></i>
                                                </a>
                                            </li>
                                            <!-- <li>
                                                <a href="#">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                                <!-- <div class="social-media">
                                    <p>Share on :</p>
                                    <ul class="">
                                        <li>
                                            <a id="singleshare1" data-sharer="facebook" data-hashtag="hashtag" >
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a id="singleshare2" data-sharer="twitter" data-title="Check out!" data-hashtags="awesome, blunt" >
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a id="singleshare3" data-sharer="pinterest" >
                                                <i class="fab fa-pinterest"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a id="singleshare4" data-sharer="whatsapp" data-title="Checkout Sharer.js!" >
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a id="singleshare5" data-sharer="linkedin" >
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a id="singleshare6" data-sharer="email" data-title="Awesome Url" data-subject="Hey! Check out that URL" data-to="some@email.com">
                                                <i class="fab fa-email"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a id="singleshare7" data-sharer="telegram" data-title="Checkout Sharer.js!" >
                                                <i class="fab fa-telegram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>

                            <!--post-single-author-->
                            <div class="post-single-author ">
                                <div class="authors-info">
                                    <div class="image">
                                        <a href="author.php?authid=<?= $article['author_id'] ?>" class="image">
                                            <img src="img/avatar/<?= $article['author_avatar'] ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4><?= $article['author_fullname'] ?></h4>
                                        <p><?= $article['author_desc'] ?></p>
                                    </div>
                                </div>
                            </div>


                             <!--post-single-Related posts-->
                             <div class="post-single-next-previous">
                                <div class="row ">

                                    <!--prevvious post-->
                                    <?php 
                                        if(isset($previous_article))
                                        {
                                            foreach ($previous_article as $aart) : 
                                    ?>
                                    <div class="col-md-6">
                                        <div class="small-post">
                                            <div class="small-post-image">
                                                <a href="post-single.php">
                                                    <img src="img/article/<?= $aart["article_image"] ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="small-post-content">
                                            <small>
                                                <a href="post-single.php?data=<?=substr($article['article_title'],0,30)."..."?>&id=<?= $components->protect($article['article_id']) ?>">
                                                    <i class="las la-arrow-left"></i>
                                                    Previous related post category
                                                </a>
                                            </small>
                                            <p>
                                                <a href="post-single.php?data=<?=substr($article['article_title'],0,30)."..."?>&id=<?= $components->protect($article['article_id']) ?>">
                                                    <?= strlen($aart['article_title']) > 47 ? substr($aart['article_title'],0,47)."..." : $aart['article_title']; ?>
                                                </a>
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                            endforeach;
                                        }
                                        else
                                    ?>
                                    <!--/-->

                                    <!--next post-->
                                    <?php
                                        if(isset($next_article))
                                        { 
                                            foreach ($next_article as $bart) : 
                                    ?>
                                    <div class="col-md-6">
                                        <div class="small-post">
                                            <div class="small-post-image">
                                                <a href="post-single.php">
                                                    <img src="img/article/<?= $bart["article_image"] ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="small-post-content">
                                                <small>
                                                    <a href="post-single.php?data=<?=substr($article['article_title'],0,30)."..."?>&id=<?= $components->protect($article['article_id']) ?>">
                                                        Next related post category
                                                        <i class="las la-arrow-right"></i>
                                                    </a>
                                                </small>
                                                <p>
                                                    <a href="post-single.php?data=<?=substr($article['article_title'],0,30)."..."?>&id=<?= $components->protect($article['article_id']) ?>">
                                                        <?= strlen($bart['article_title']) > 47 ? substr($bart['article_title'],0,47)."..." : $bart['article_title']; ?>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                            endforeach;
                                        }
                                        else
                                      ?>
                                    <!--/-->
                                </div>
                            </div>


                            <!--post-single-Ads-->
                            <div class="post-single-ads ">
                                <div class="ads">
                                    <img src="assets/img/ads/ads.jpg" alt="">
                                </div>
                            </div>
                            
                            <!--post-single-comments-->
                            <div class="post-single-comments">
                                <!--Comments-->
                                <h4><?= $number_of_rows ?> Comments</h4>
                                <ul class="comments">

                                <?php foreach ($comments as $comment) : ?>
                                    <!--comment1-->
                                    <li class="comment-item pt-0">
                                        <div class="content">
                                            <div class="meta">
                                                <ul class="list-inline">
                                                    <li>
                                                        <a>
                                                            <?= "User-" . $comment['comment_username'] ?>
                                                        </a>
                                                    </li>
                                                    <li class="slash"></li>
                                                    <li>
                                                        <?= date_format(date_create($comment['comment_date']), "d F Y, h:i") ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p style="font-weight:bold;">
                                                <?= $comment['comment_content'] ?>
                                            </p>
                                            <!-- <a href="#" class="btn-reply"><i class="las la-reply"></i> Reply</a> -->
                                        </div>
                                
                                    </li>
                                <?php endforeach; ?>

                                </ul>
                                <!--Leave-comments-->
                                <div class="comments-form">
                                    <h4 >Leave a Comment</h4>
                                    <!--form-->
                                    <form class="form " action="assets/insert.php?type=comment&id=<?= $components->protect($article_id) ?>#comment" method="POST" id="main_contact_form">
                                        <p>Your email adress will not be published ,Requied fileds are marked*.</p>
                                        <div class="alert alert-success contact_msg" style="display: none" role="alert">
                                            Your message was sent successfully.
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name*" required="required">
                                                    <input type="hidden" name="username" value="<?= rand() ?>">
                                                    <input type="hidden" name="id_article" value="<?= $components->protect($article_id) ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email*" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="comment" id="comment" cols="30" rows="5" class="form-control" placeholder="Add your comment...*" required="required"></textarea>
                                                </div>
                                            </div>
                                        
                                            <div class="col-lg-12">
                                                <div class="mb-20">
                                                    <input name="name" type="checkbox" value="1" required="required">
                                                    <label for="name"><span>save my name , email and website in this browser for the next time I comment.</span></label>
                                                </div>
                                            
                                                <button type="submit" name="submit" class="btn-custom">
                                                    Add Comment
                                                </button>
                                            </div> 
                                        </div>
                                    </form>
                                    <!--/-->
                                </div>
                            </div>
                   </div>
                </div>

                <!--sidebar-->
                <?php
                    include 'includes/sidebar.php';
                ?>
            </div>
        </div>
    </section>

    <?php
        include 'includes/randompost.php';
    ?> 

    <!--instagram-->
    <?php
        include 'includes/instagrampost.php';
    ?>


<?php
    include 'includes/footer.php';
?>
<?php
    include 'includes/scripts.php';
?> 