    <?php
        // Get random category
        $stmt = $conn->prepare("SELECT * FROM `category` WHERE category_id != 1 ORDER BY RAND() LIMIT 1");
        $stmt->execute();
        $randomcategory = $stmt->fetchAll();

        $rancatid = 1;
        $rancatname = "Random";
        foreach ($randomcategory as $category)
        {
            $rancatid = $category['category_id'];        
            $rancatname = $category['category_name'];
            $rancatcolor = $category['category_color'];
        }

        // Get special category articles 
        $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id INNER JOIN author ON author_id=id_author WHERE id_categorie = '$rancatid' AND article_status=1 LIMIT 3");
        $stmt->execute();
        $specialarticle1 = $stmt->fetchAll();
    ?>

    <!-- Recent articles-->
    <section class="section-feature-4 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="section-title">
                        <h3 style="color:<?= $rancatcolor ?>"><?= $rancatname ?></h3>
                        <p>Discover the most outstanding news in any topic.</p>
                    </div>
                </div>
            </div>
            <div class="row ">

                <!--post1-->
                <?php foreach ($specialarticle1 as $article) : ?>
                <div class="col-lg-4  col-md-6">
                    <div class="post-overly post-overly-2">
                        <div class="post-ovetly-image">
                            <img src="img/article/<?= $article['article_image'] ?>" alt="" style="height: 380px;">
                        </div>
                        <div class="post-overly-content">
                            <div class="entry-cat">
                                <a href="category.php?data=<?=substr($article['category_name'],0,30)."..."?>&catID=<?= $components->protect($article['category_id']) ?>" class="category-style-2">
                                    <?= $article['category_name'] ?>
                                </a>
                            </div>
                            <h5 class="entry-title">
                                <a href="post-single.php?data=<?=substr($article['article_title'],0,30)."..."?>&id=<?= $components->protect($article['article_id']) ?>">
                                    <?= strlen($article['article_title']) > 50 ? substr($article['article_title'],0,50)."..." : $article['article_title']; ?>
                                </a>
                            </h5>
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
                </div>
                <?php endforeach;  ?>

            </div>        
        </div>
    </section>