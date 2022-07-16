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
                                <h4 class="page-title">Carousal</h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Carousal</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Products view Start -->
				<div class="row">
				  <div class="col-sm-12">
					<div class="card">
					  <div class="card-header">
						<h5>Carousal With controls</h5>
					  </div>
					  <div class="card-body">
						<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img class="d-block w-100" src="assets/images/carousal1.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
							  <img class="d-block w-100" src="assets/images/carousal2.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
							  <img class="d-block w-100" src="assets/images/carousal3.jpg" alt="Third slide">
							</div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-sm-12">
					<div class="card">
					  <div class="card-header">
						<h5>Carousal With indicators</h5>
					  </div>
					  <div class="card-body">
						<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
						  <!-- <ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
						  </ol> -->
                          <div class="carousel-indicators">
							<button data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
							<button data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
							<button data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
						  </div>
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img class="d-block w-100" src="assets/images/carousal4.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
							  <img class="d-block w-100" src="assets/images/carousal5.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
							  <img class="d-block w-100" src="assets/images/carousal6.jpg" alt="Third slide">
							</div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-sm-12">
					<div class="card">
					  <div class="card-header">
						<h5>Carousal With Crossfade</h5>
					  </div>
					  <div class="card-body">
						<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img class="d-block w-100" src="assets/images/carousal7.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
							  <img class="d-block w-100" src="assets/images/carousal8.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
							  <img class="d-block w-100" src="assets/images/carousal9.jpg" alt="Third slide">
							</div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
					  </div>
					</div>
				  </div>
				</div>
<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?>