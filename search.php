<?php
    if(!isset($_POST["searchkeyword"]))
    {
        header("location: ./");
    }

    $keywrd = $_POST["searchkeyword"];

    include 'includes/header.php';
    include 'includes/navbar.php';
    
    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id INNER JOIN author ON author_id=id_author WHERE article_title LIKE :keyword OR category_name LIKE :keyword OR author_fullname LIKE :keyword");
    $stmt->bindValue(':keyword', '%' . $keywrd . '%', PDO::PARAM_STR);
    $stmt->execute();
    $searchdata = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $number_of_rows = $stmt->rowCount();

    session_start();

    
?> 


    <!--section-heading-->
    <div class="section-heading " >
        <div class="container-fluid">
            <div class="section-heading-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading-2-title text-left">
                            <h2>Search result(s) for : <?= $keywrd ?></h2>
                            <p class="desc"><?= $number_of_rows ?> Posts were found for keyword <strong><?= $keywrd ?></strong></p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    
   <!--blog-layout-1-->
    <div class="blog-search">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 oredoo-content">
                    <div class="theiaStickySidebar">

                        <!--Post1-->
                        <?php foreach ($searchdata as $data) : ?>
                            <div class="post-list post-list-style1 pt-0">
                                <div class="post-list-image">
                                    <a href="post-single.php?data=<?=substr($data['article_title'],0,30)."..."?>&id=<?= $components->protect($data['article_id']) ?>">
                                        <img src="img/article/<?= $data['article_image'] ?>" alt="">
                                    </a>
                                </div>
                                <div class="post-list-title">
                                    <div class="entry-title">
                                        <h5>
                                            <a href="post-single.php?data=<?=substr($data['article_title'],0,30)."..."?>&id=<?= $components->protect($data['article_id']) ?>">
                                                <?php //echo strlen($article['article_title']) > 57 ? substr($article['article_title'],0,57)."..." : $article['article_title']; ?>
                                                <?= $data['article_title'] ?>
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="post-list-category">
                                    <div class="entry-cat">
                                        <a href="category.php?data=<?=substr($data['category_name'],0,30)."..."?>&catID=<?= $components->protect($data['category_id']) ?>" class="category-style-1">
                                            <?= $data['category_name'] ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;  ?>

                    </div>
                </div>

                <!--sidebar-->
                <?php
                    include 'includes/sidebar.php';
                ?>
                <!--/-->
            </div>
        </div>
    </div>

<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?> 
     
   