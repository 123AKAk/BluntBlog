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
    $stmt = $conn->prepare("SELECT * FROM userfollow WHERE user_id = $uid");
    $stmt->execute();
    $getauthorid = $stmt->fetchAll();

    $stmt = $conn->prepare("SELECT * FROM saved WHERE user_id = $uid");
    $stmt->execute();
    $getpostid = $stmt->fetchAll();

?> 
<style>
    .nav-tabs {
        display:none;
    }

    @media(min-width:768px) {
        .nav-tabs {
            display: flex;
        }
        
        .card {
            border: none;
        }

        .card .card-header {
            display:none;
        }  

        .card .collapse{
            display:block;
        }
    }

    @media(max-width:767px){
        .tab-content > .tab-pane {
            display: block !important;
            opacity: 1;
        }
    }
</style>

     <!--section-heading-->
     <div class="section-heading " >
        <div class="container-fluid">
             <div class="section-heading-2">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="section-heading-2-title">
                             <h1>Account</h1>
                             <p class="links"><a href="./">Home <i class="las la-angle-right"></i></a> Account</p>
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
                <div class="row">
                    <div class="container ">
                        <ul id="tabs" class="nav nav-tabs  mx-auto justify-content-center" role="tablist">
                            <li class="nav-item mr-4">
                                <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab"> Account Information </a>
                            </li>
                            <li class="nav-item mr-4">
                                <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab"> Authors you Follow </a>
                            </li>
                            <li class="nav-item">
                                <a id="tab-C" href="#pane-C" class="nav-link" data-toggle="tab" role="tab"> Saved Posts </a>
                            </li>
                        </ul>


                        <div id="content" class="tab-content" role="tablist">
                            <div id="pane-A" class="card tab-pane fade show active mb-3" role="tabpanel" aria-labelledby="tab-A">
                                <div class="card-header" role="tab" id="heading-A">
                                    <h5 class="mb-0">
                                        <!-- Note: `data-parent` removed from here -->
                                        <a data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                                            Account Information
                                        </a>
                                    </h5>
                                </div>

                                <!-- Note: New place of `data-parent` -->
                                <div id="collapse-A" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-A">
                                    <div class="card-body">
                                        <div class="">
                                            <p class="ml-3">Edit Your Info <i title="Edit Info" class="fas fa-edit" ></i></p>
                                            <div class="col">
                                                <div class="row form-group mb-2">
                                                    <input type="text" class="m-3 col-md-5 form-control <?= (!empty($username_err)) ? 'is-invalid' : ''; ?>" placeholder="Username" name="username" value="<?= (!empty($_SESSION["username"])) ? $_SESSION["username"] : ''; ?>"/>

                                                    <input type="email" class="m-3 col-md-5 form-control <?= (!empty($email_err)) ? 'is-invalid' : ''; ?>" placeholder="Email" name="email" value="<?= (!empty($_SESSION["email"])) ? $_SESSION["email"] : ''; ?>"/>

                                                    <button type="submit" class=" m-3 col-md-1 btn btn-sm btn-secondary">Save</button>
                                                </div>
                                                <div class="row form-group">
                                                    <input type="password" class="m-3 col-md-5 form-control <?= (!empty($password_err)) ? 'is-invalid' : ''; ?>" placeholder="Old Password*" name="password" value="<?= (!empty($_SESSION["password"])) ? $_SESSION["password"] : ''; ?>"/>

                                                    <input type="password" class="m-3 col-md-5 form-control <?= (!empty($password_err)) ? 'is-invalid' : ''; ?>" placeholder="New Password*" name="password" value="<?= (!empty($_SESSION["password"])) ? $_SESSION["password"] : ''; ?>"/>

                                                    <input type="password" class="m-3 col-md-5 form-control <?= (!empty($confrimpassword_err)) ? 'is-invalid' : ''; ?>" placeholder="Confrim new Password*" name="confrimpassword" value=""/>
                                                    
                                                    <button type="submit" class="m-3 btn btn-sm btn-secondary">Change Password</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="pane-B" class="card tab-pane fade mb-3" role="tabpanel" aria-labelledby="tab-B">
                                <div class="card-header" role="tab" id="heading-B">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                                            Authors you Follow
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-B" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-B">
                                    <div class="col card-body">
                                        <div class="row">
                                            <?php foreach ($getauthorid as $authorid) : if(!empty($getauthorid)):?>
                                                <?php
                                                    $artauthorid = $authorid['authorid'];

                                                    $stmt = $conn->prepare("SELECT * FROM author WHERE type != 0 AND author_id=$artauthorid");
                                                    $stmt->execute();
                                                    $authors = $stmt->fetchAll();
                                                    if(isset($authors))
                                                    {
                                                ?>
                                                <input value="<?= $realuserid ?>" id="realuserid" readonly hidden/>
                                                <?php $numcount = 1; foreach ($authors as $author) : $numcount++;?>
                                                <!--author-1-->
                                                <div class="col-md-6">
                                                    <div class="authors-single">
                                                        <div class="authors-single-image">
                                                            <a href="author.php?authid=<?=  $components->protect($author['author_id']) ?>">
                                                                <img src="img/avatar/<?= $author['author_avatar'] ?>" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="authors-single-content ">
                                                            <div class="left">
                                                                <h6>
                                                                    <a href="author.php?authid=<?=  $components->protect($author['author_id']) ?>"><?= $author['author_fullname'] ?></a>
                                                                </h6>
                                                                <div class="tags">
                                                                    <input value="<?=$components->protect($author['author_id']) ?>" id="authorid<?= $numcount?>" readonly hidden/>
                                                                    <ul class="list-inline">
                                                                        <li>
                                                                        <?php if($loggedin == true)
                                                                        {
                                                                            $sql = "SELECT * FROM userfollow WHERE user_id = :user_id AND authorid = :authorid";
                                                                            $stmt = $pdo->prepare($sql);
                                                                            $stmt->execute(['user_id' => $components->unprotect($realuserid), 'authorid' => $author['author_id']]);
                                                                            if ($stmt->rowCount() == 1) 
                                                                            {
                                                                        ?>
                                                                            <a href="javascript:void(0);" onclick="aunfollowauthor('#authorid<?= $numcount?>', '#realuserid', <?= $numcount?>);" id='followauth<?= $numcount?>' title="Unfollow">Unfollow</a>
                                                                        <?php
                                                                            }
                                                                            else
                                                                            {
                                                                        ?>
                                                                            <a href="javascript:void(0);" onclick="afollowauthor('#authorid<?= $numcount?>', '#realuserid');" id='followauth' title="Follow Author">Follow</a>
                                                                        <?php        
                                                                            }
                                                                        }
                                                                        else
                                                                        {
                                                                        ?>
                                                                            <a href="login.php" title="Follow Author">
                                                                                Follow
                                                                            </a>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <p class="ml-2">
                                                                    <?php
                                                                    //get author post total
                                                                    $authid = $author['author_id'];
                                                                    $stmt = $conn->prepare("SELECT * FROM `article` WHERE id_author='$authid'");
                                                                    $stmt->execute();
                                                                    echo $stmt->rowCount();
                                                                    ?> Post</p>
                                                            </div>
                                                            <div class="right">
                                                                <a href="author.php?authid=<?=  $components->protect($author['author_id']) ?>">
                                                                    <div class="more-icon">
                                                                        <i class="las la-angle-double-right"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endforeach; } else {?>
                                                <p>You don't follow any Author</p>
                                            <?php } else : ?>
                                            <p>You don't follow any Author</p>
                                            <?php endif;  ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
                                <div class="card-header" role="tab" id="heading-C">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse-C" aria-expanded="false" aria-controls="collapse-C">
                                            Saved Posts
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-C" class="collapse" role="tabpanel" data-parent="#content" aria-labelledby="heading-C">
                                    <div class="card-body">
                                        <div class="row">
                                            <?php foreach ($getpostid as $postid) : ?>
                                                <?php
                                                    $artpostid = $postid['post_id'];
                                                    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id WHERE article_status=1 AND article_id=$artpostid ORDER BY `article_created_time` DESC ");
                                                    $stmt->execute();
                                                    $articles = $stmt->fetchAll();
                                                    if(isset($articles))
                                                    {
                                                ?>
                                                    <div class="col-md-6">
                                                        <?php foreach ($articles as $article) : ?>
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
                                                        <?php endforeach; }?>
                                                    </div>
                                                <!--post1-->
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
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