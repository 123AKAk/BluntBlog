<?php
    include 'includes/header.php';
    include 'includes/navbar.php';
    include 'includes/sidebar.php';
?>
        <!-- Container Start -->
        <div class="page-wrapper">
            <div class="main-content">
                <!-- Page Title Start -->
                <div class="row">
                    <div class="col xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-title-wrapper">
                            <div class="page-title-box">
                                <h4 class="page-title">Alerts</h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Alerts</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Products view Start -->

				<div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card table-card">
                            <div class="card-header pb-0">
                                <h4>Animated Alerts</h4>
                                <p>The .fade and .show classes adds a fading effect when closing the alert message.</p>
                            </div>
                            <div class="card-body">
							  <div class="alert alert-success alert-dismissible fade show">
								<button type="button" class="close" data-bs-dismiss="alert">&times;</button>
								<strong>Success!</strong> This alert box could indicate a successful or positive action.
							  </div>
							  <div class="alert alert-info alert-dismissible fade show">
								<button type="button" class="close" data-bs-dismiss="alert">&times;</button>
								<strong>Info!</strong> This alert box could indicate a neutral informative change or action.
							  </div>
							  <div class="alert alert-warning alert-dismissible fade show">
								<button type="button" class="close" data-bs-dismiss="alert">&times;</button>
								<strong>Warning!</strong> This alert box could indicate a warning that might need attention.
							  </div>
							  <div class="alert alert-danger alert-dismissible fade show">
								<button type="button" class="close" data-bs-dismiss="alert">&times;</button>
								<strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
							  </div>
							  <div class="alert alert-primary alert-dismissible fade show">
								<button type="button" class="close" data-bs-dismiss="alert">&times;</button>
								<strong>Primary!</strong> Indicates an important action.
							  </div>
							  <div class="alert alert-secondary alert-dismissible fade show">
								<button type="button" class="close" data-bs-dismiss="alert">&times;</button>
								<strong>Secondary!</strong> Indicates a slightly less important action.
							  </div>
							  <div class="alert alert-dark alert-dismissible fade show">
								<button type="button" class="close" data-bs-dismiss="alert">&times;</button>
								<strong>Dark!</strong> Dark grey alert.
							  </div>
							  <div class="alert alert-light alert-dismissible fade show">
								<button type="button" class="close" data-bs-dismiss="alert">&times;</button>
								<strong>Light!</strong> Light grey alert.
							  </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?>