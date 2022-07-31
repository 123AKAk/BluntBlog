<?php
    include 'includes/header.php';
    include 'includes/navbar.php';
    include 'includes/sidebar.php';

    $stmt = $conn->prepare("SELECT category_id, category_name FROM category");
    $stmt->execute();
    $categories = $stmt->fetchAll();

    $stmt = $conn->prepare("SELECT author_id, author_fullname FROM author");
    $stmt->execute();
    $authors = $stmt->fetchAll();

?>
        <!-- Container Start -->
        <div class="page-wrapper">
            <div class="main-content">
                <!-- Page Title Start -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-title-wrapper">
                            <div class="page-title-box">
                                <h4 class="page-title">Blog Post</h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Blog Post</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- From Start -->
                <div class="from-wrapper">
                    <div class="row">

                        <div class="col">
                            <div class="card">
                                <div class="col">
                                    <!-- feedback message -->
                                    <?php include 'includes/feedbackmsg.php'; ?>
                                </div>
                                <div class="card-body">
                                    <form class="separate-form" action="../assets/insert.php?type=article" method="POST" enctype="multipart/form-data">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="row">

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="arTitle" class="col-form-label">Post Title</label>
                                                        <input class="form-control" type="text" placeholder="Enter Post Title" name="arTitle" id="arTitle" required>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="arContent">Content</label>
                                                        <textarea class="form-control" name="arContent"  required id="arContent" rows="3" required></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="arImage">Image</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="" name="arImage" id="arImage" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group s-opt">
                                                        <label for="arCategory" class="col-form-label">Category</label>
                                                        <select class="select2 form-control select-opt" name="arCategory" id="arCategory" required>
                                                            <option disabled>-- Select Category --</option>
                                                            <?php foreach ($categories as $category) : ?>
                                                                <option value="<?= $category['category_id'] ?>"><?= $category['category_name'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <span class="sel_arrow">
                                                            <i class="fa fa-angle-down "></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                <?php if($type == 2)
                                                {
                                                ?>
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group s-opt">
                                                        <label for="arAuthor" class="col-form-label">Author</label>
                                                        <select class="select2 form-control select-opt" name="arAuthor" id="arAuthor" required>
                                                            <option disabled>-- Select Author --</option>
                                                            <?php foreach ($authors as $author) : ?>
                                                                <option value="<?= $author['author_id'] ?>"><?= $author['author_fullname'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <span class="sel_arrow">
                                                            <i class="fa fa-angle-down "></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <?php
                                                }
                                                else
                                                {
                                                ?>
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label for="arAuthor" class="col-form-label">Author Name</label>
                                                        <input class="form-control" value="<?= $adid ?>" type="text" name="arAuthor" id="arAuthor" readonly hidden />
                                                        <input value="<?= $username ?>" class="form-control" readonly/>
                                                    </div>
                                                </div>
                                                <?php
                                                }
                                                ?>


                                            </div>

                                            <div class="form-group mb-0">
                                                <button class="btn btn-secondary" type="button" onclick="goback()">Back</button>
                                                <input class="btn btn-primary" type="submit" name="submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
<?php
    include 'includes/footer.php';
?>
    <script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <!-- Text Editor Script -->
    <script>
        CKEDITOR.replace('arContent');
    </script>
<?php
    include 'includes/scripts.php';
?>