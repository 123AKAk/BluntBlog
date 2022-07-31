                <?php

                // Get Most Read Articles
                $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id WHERE article_status=1 order by RAND() LIMIT 4");
                $stmt->execute();
                $most_read_articles = $stmt->fetchAll();
                
                ?>
                <!--sidebar-->
                <div class="col-lg-4 oredoo-sidebar">
                    <div class="theiaStickySidebar">
                        <div class="sidebar">
                            <!--search-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h5>Search</h5>
                                </div>
                                <div class="widget-search form-flex">
                                    <form class="search-form">
                                        <div class="form-group">
                                            <input type="search" id="searchkeyword" name="searchkeyword" placeholder="Search...">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn-custom">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                             <!--Ads-->
                             <div class="widget">
                                <div class="widget-ads">
                                     <img src="assets/img/ads/ads2.jpg" alt="">
                                </div>
                            </div>
                            <!--/-->

                            <!--newslatter-->
                            <div class="widget widget-newsletter">
                                <h5>Subscribe To Our Newsletter</h5>
                                 <p>No spam, notifications only about new posts, updates.</p>
                                <form class="newslettre-form">
                                    <span class="msgspan"></span>
                                    <br>
                                    <div class="form-flex mt-2">
                                        <div class="form-group">
                                            <input type="email" id="newsletteremail" name="newsletteremail" class="form-control" placeholder="Your Email Adress" required="required">
                                        </div>
                                        <button class="btn-custom" type="submit">Subscribe now</button>
                                    </div>
                                </form>
                            </div>

                            <!--popular-posts-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h5>Most Read Posts</h5>
                                </div>
                                <ul class="widget-popular-posts">
                                    <?php foreach ($most_read_articles as $article) : ?>
                                        <?php
                                            $currentview = 1;
                                            $artid = $article['article_id'];
                                            $stmt = $conn->prepare("SELECT * FROM postviews WHERE postid = $artid");
                                            $stmt->execute();
                                            $postviews = $stmt->fetch();
                                            if(!empty($postviews["viewcount"]))
                                            $currentview = $postviews["viewcount"];
                                        ?>
                                        <!--post1-->
                                        <li class="small-post">
                                            <div class="small-post-image">
                                                <a href="post-single.php?data=<?=substr($article['article_title'],0,30)."..."?>&id=<?= $components->protect($article['article_id']) ?>">
                                                    <img src="img/article/<?= $article['article_image'] ?>" alt="">
                                                    <small class="nb" title="No. of Post Views">
                                                        <!-- number of person that has viewed post -->
                                                        <?= $currentview ?>
                                                    </small>
                                                </a>
                                            </div>
                                            <div class="small-post-content">
                                                <p>
                                                    <a href="post-single.php?data=<?=substr($article['article_title'],0,30)."..."?>&id=<?= $components->protect($article['article_id']) ?>">
                                                        <?= strlen($article['article_title']) > 47 ? substr($article['article_title'],0,47)."..." : $article['article_title']; ?>
                                                    </a>
                                                </p>
                                                <small>
                                                    <span class="slash"></span>
                                                    <?= date_format(date_create($article['article_created_time']), "F d, Y ") ?>
                                                </small>
                                            </div>
                                        </li>
                                    <?php endforeach;  ?>
                                </ul>
                            </div>
                            <!--Tags-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h5>Categories</h5>
                                </div>
                                <div class="tags">
                                    <ul class="list-inline">
                                        <?php foreach ($categories as $category) : ?>
                                            <li>
                                                <a href="category.php?data=<?=substr($article['category_name'],0,30)."..."?>&catID=<?= $components->protect($article['category_id']) ?>"> <?= $category["category_name"] ?>
                                                    <span style="color: <?= $category["category_color"]; ?>;"> <?= $category["article_count"] ?></span>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
        
                              <!--stay connected-->
                              <div class="widget ">
                                <div class="widget-title">
                                    <h5>Stay connected</h5>
                                </div>
                                
                                <div class="widget-stay-connected">
                                    <div class="list">

                                        <!-- social media platforms -->
                                        <div class="item color-facebook">
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <p>Any Social Media Here</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  <!--/-->