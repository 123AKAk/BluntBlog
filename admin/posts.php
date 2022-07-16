<?php
    include 'includes/header.php';
    include 'includes/navbar.php';
    include 'includes/sidebar.php';

    // Get all Articles Data
    $stmt = $conn->prepare("SELECT * FROM article, author, category WHERE id_categorie = category_id AND author_id = id_author ORDER BY article_id DESC");
    $stmt->execute();
    $data = $stmt->fetchAll();

?>
        <!-- Container Start -->
        <div class="page-wrapper">
            <div class="main-content">
                <!-- Page Title Start -->
                <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-title-wrapper">
                            <div class="page-title-box">
                                <h2 class="page-title bold">All Post</h2>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Home</a>
                                    </li>
                                    <li class="breadcrumb-link active">All Post</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table Start -->
                <div class="row">
                    <!-- Advance Table Card-->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card table-card">
                            <div class="col">
                                <!-- feedback message -->
                                <?php include 'includes/feedbackmsg.php'; ?>
                            </div>
                            <div class="card-body">
                                <div class="chart-holder">
                                <div class="table-responsive">
                                        <table class="table table-styled mb-0">
                                            <thead>
                                                <tr>
                                                    <th>
														<div class="checkbox">
															<input id="checkbox1" type="checkbox">
															<label for="checkbox1"></label>
														</div>
													</th>
                                                    <th>S/N</th>
                                                    <th scope='col'>Title</th>
                                                    <th scope='col'>Content</th>
                                                    <th scope='col'>Image</th>
                                                    <th scope='col'>Time</th>
                                                    <th scope='col'>Category</th>
                                                    <th scope='col'>Author</th>
                                                    <th scope='col' colspan="3">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $countnum = 1;
                                                foreach ($data as $row) :
                                                    
                                                    echo $row['article_status'] == 0 ? "<tr style='background:#e76c63;'>" : "<tr>";

                                                    $date=date_create($row['article_created_time']);
                                                    ?>
                                                    <td>
														<div class="checkbox">
															<input id="checkbox9" type="checkbox" name="<?= $row['article_id'] ?>">
															<label for="checkbox9"></label>
														</div>
													</td>
                                                    <td><?= $countnum++ ?></td>
                                                    <td>
                                                        <?= strip_tags(substr($row['article_title'], 0, 15)) . "..." ?>
                                                    </td>
                                                    <td>
                                                        <?= strip_tags(substr($row['article_content'], 0, 25)) . "..." ?>
                                                    </td>
                                                    <td>
                                                        <span >
                                                            <img src="../img/article/<?= $row['article_image'] ?>" style="width: 100px; height: auto;">
                                                        </span>
                                                    </td>
                                                    <td><?= date_format($date, "D, M Y H:i:s") ?></td>
                                                    <td><?= $row['category_name'] ?></td>
                                                    <td style="color:dodgerblue"><?= $row['author_fullname'] ?></td>

                                                    <td class="relative">
                                                        <a class="action-btn " href="javascript:void(0); ">
                                                            <svg class="default-size "  viewBox="0 0 341.333 341.333 ">
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <path d="M170.667,85.333c23.573,0,42.667-19.093,42.667-42.667C213.333,19.093,194.24,0,170.667,0S128,19.093,128,42.667 C128,66.24,147.093,85.333,170.667,85.333z "></path>
                                                                            <path d="M170.667,128C147.093,128,128,147.093,128,170.667s19.093,42.667,42.667,42.667s42.667-19.093,42.667-42.667 S194.24,128,170.667,128z "></path>
                                                                            <path d="M170.667,256C147.093,256,128,275.093,128,298.667c0,23.573,19.093,42.667,42.667,42.667s42.667-19.093,42.667-42.667 C213.333,275.093,194.24,256,170.667,256z "></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <div class="action-option ">
                                                            <ul>
                                                                <li>
                                                                    <a href="../post-single.php?id=<?= $row['article_id'] ?>" target="_blank">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i> View
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="update_post.php?id=<?= $row['article_id'] ?> ">
                                                                        <i class="far fa-edit mr-2" aria-hidden="true"></i> Edit
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="../assets/delete.php?type=article&id=<?= $row['article_id'] ?> ">
                                                                        <i class="far fa-trash-alt mr-2" aria-hidden="true"></i> Delete
                                                                    </a>
                                                                </li>
                                                                <?php if($row['article_status'] == 0){ ?>
                                                                <li>
                                                                    <a href="../assets/publish.php?type=article&id=<?= $row['article_id'] ?> ">
                                                                        <i class="far fa-check-square mr-1" aria-hidden="true"></i> Publish
                                                                    </a>
                                                                </li>
                                                                <?php }else { ?>
                                                                <li>
                                                                    <a href="../assets/unpublish.php?type=article&id=<?= $row['article_id'] ?> ">
                                                                        Unpublish
                                                                    </a>
                                                                </li>
                                                                <?php } ?>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                <?php
                                                    echo "</tr>";
                                                endforeach;
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right pt-0">
                                <nav class="d-inline-block ">
                                    <ul class="pagination mb-0 ">
                                      <li class="page-item disabled ">
                                        <a class="page-link" href="javascript:void(0);" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                      </li>
                                      <li class="page-item active "><a class="page-link " href="javascript:void(0); ">1</a></li>
                                      <li class="page-item ">
                                        <a class="page-link " href="javascript:void(0); ">2</a>
                                      </li>
                                      <li class="page-item "><a class="page-link " href="javascript:void(0); ">3</a></li>
                                      <li class="page-item ">
                                        <a class="page-link " href="javascript:void(0); "><i class="fas fa-chevron-right "></i></a>
                                      </li>
                                    </ul>
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?>