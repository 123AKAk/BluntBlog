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
                                <h4 class="page-title">Pagination</h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Pagination</li>
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
						<h5>Custom Pagination</h5>
					  </div>
					  <div class="card-body">
						<div class="int-blog-pagination">
							<ul class="pagination">
							  <li class="page-item"><a class="page-link" href="javascript:;"><i class="fas fa-chevron-left"></i> Older</a></li>
							  <li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
							  <li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
							  <li class="page-item active"><a class="page-link" href="javascript:;">3</a></li>
							  <li class="page-item"><a class="page-link" href="javascript:;">...</a></li>
							  <li class="page-item"><a class="page-link" href="javascript:;">12</a></li>
							  <li class="page-item"><a class="page-link" href="javascript:;">13</a></li>
							  <li class="page-item"><a class="page-link" href="javascript:;">14</a></li>
							  <li class="page-item"><a class="page-link" href="javascript:;">Next <i class="fas fa-chevron-right"></i></a></li>
							</ul>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-sm-12">
					<div class="card">
					  <div class="card-header">
						<h5>Pagination active states</h5>
					  </div>
					  <div class="card-body">
						<div class="mfh-pagination"> 
							<ul>
								<li><a href="javascript:;"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
								<li><a href="javascript:;">1</a></li>
								<li class="active"><a href="javascript:;">2</a></li>
								<li><a href="javascript:;">3</a></li>
								<li class="active"><a href="javascript:;">4</a></li>
								<li><a href="javascript:;">5</a></li>
								<li><a href="javascript:;"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-sm-12">
					<div class="card">
					  <div class="card-header">
						<h5>Pagination Working with icons</h5>
					  </div>
					  <div class="card-body">
						<div class="fb-pagination">
							<ul>
								<li><a href="javascript:;"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
								<li><a href="javascript:;">01</a></li>
								<li><a href="javascript:;" class="active">02</a></li>
								<li><a href="javascript:;">03</a></li>
								<li><a href="javascript:;">...</a></li>
								<li><a href="javascript:;">04</a></li>
								<li><a href="javascript:;"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-sm-12">
					<div class="card">
					  <div class="card-header">
						<h5>Sizing</h5>
					  </div>
					  <div class="card-body">
						<div class="tp-pagination">
							<ul>
								<li><a href="javascript:;"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
								<li><a href="javascript:;">1</a></li>
								<li><a href="javascript:;" class="active">2</a></li>
								<li><a href="javascript:;">3</a></li>
								<li><a href="javascript:;">...</a></li>
								<li><a href="javascript:;">8</a></li>
								<li><a href="javascript:;"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					  </div>
					</div>
				  </div>
				</div>
<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?>