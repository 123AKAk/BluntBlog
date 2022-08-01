<?php
    require "assets/db.php";
    require "assets/varnames.php";
    require 'assets/sharedComponents.php';
    $components = new SharedComponents();
    
    include 'includes/header.php';
    include 'includes/navbar.php';
    
    $stmt = $conn->prepare("SELECT * FROM author WHERE type != 0");
    $stmt->execute();
    $authors = $stmt->fetchAll();

?> 


    <!--section-heading-->
    <div class="section-heading " >
        <div class="container-fluid">
            <div class="section-heading-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading-2-title ">
                            <h1>All Authors</h1>
                            <p class="links"><a href="index.php">Home <i class="las la-angle-right"></i></a> pages</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    
   <!--blog-layout-1-->
    <div class="authors ">
        <div class="container-fluid">
            <div class="authors-area">
                <div class="row">
                    <input value="<?= $realuserid ?>" id="realuserid" readonly hidden/>
                    <?php $numcount = 1; foreach ($authors as $author) : $numcount++;?>
                    <!--author-1-->
                    <div class="col-md-6 ">
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
                                                <a href="javascript:void(0);" onclick="unfollowauthor('#authorid<?= $numcount?>', '#realuserid', <?= $numcount?>);" id='followauth<?= $numcount?>' title="Unfollow">Unfollow</a>
                                            <?php
                                                }
                                                else
                                                {
                                            ?>
                                                <a href="javascript:void(0);" onclick="followauthor('#authorid<?= $numcount?>', '#realuserid');" id='followauth' title="Follow Author">Follow</a>
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
                    <?php endforeach; ?>

                </div>
            </div>

        </div> 
    </div>
  <br>
<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?> 