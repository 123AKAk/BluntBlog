<?php
    include 'includes/header.php';
    include 'includes/navbar.php';
    
    // Check if the admin is already logged in, if yes then redirect him to home page
    if (!$loggedin) {
        header("location: index.php");
        exit;
    }

    $stmt = $conn->prepare("SELECT * FROM author");
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
                    
                    <?php foreach ($authors as $author) :?>
                    <!--author-1-->
                    <div class="col-md-6 ">
                        <div class="authors-single">
                            <div class="authors-single-image">
                                <a href="author.php?authid=<?= $author['author_id'] ?>">
                                    <img src="img/avatar/<?= $author['author_avatar'] ?>" alt="">
                                </a>
                            </div>
                            <div class="authors-single-content ">
                                <div class="left">
                                    <h6> <a href="author.php?authid=<?= $author['author_id'] ?>"><?= $author['author_fullname'] ?></a></h6>
                                    <p>
                                    <?php
                                        //get author post total
                                        $authid = $author['author_id'];
                                        $stmt = $conn->prepare("SELECT * FROM `article` WHERE id_author='$authid'");
                                        $stmt->execute();
                                        echo $stmt->rowCount();
                                    ?> Post</p>
                                </div>
                                <div class="right">
                                    <a href="author.php?authid=<?= $author['author_id'] ?>">
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
    </div>
  <br>
<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?> 