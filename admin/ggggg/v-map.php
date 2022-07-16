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
                                <h4 class="page-title">Vector Maps</h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Vector Maps</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Products view Start -->
				
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
						   <div class="card-body">

								<h4 class="card-title">Vector Default Maps</h4>
								<p class="card-title-desc">Example of Vector maps.</p>

							   <div class="ad-google-map">
								    <div id="vmap" style="width: 100%; height: 600px;"></div>
							   </div>
							</div>
						</div>
					</div> <!-- end col -->

				</div>
    <?php
        include 'includes/footer.php';
    ?>
    <!-- Script Start -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.vmap.min.js"></script>
    <script src="assets/js/jquery.vmap.world.js"></script>
    <script src="assets/js/jquery.vmap.sampledata.js"></script>
	<script src="assets/js/swiper.min.js"></script>
	<script>
		jQuery('#vmap').vectorMap({
			map: 'world_en',
			backgroundColor: '#ffffff',
			color: '#ffffff',
			hoverOpacity: 0.7,
			selectedColor: '#666666',
			enableZoom: true,
			showTooltip: true,
			values: sample_data,
			scaleColors: ['#C8EEFF', '#006491'],
			normalizeFunction: 'polynomial'
		});
	</script>
<?php
    include 'includes/scripts.php';
?>