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
                    <div class="colxl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-title-wrapper">
                            <div class="page-title-box">
                                <h4 class="page-title">Invoice</h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Invoice</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table Start -->
                <div class="row">
                    <div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="ad-invoice-title">
									<h4>Order - 14812</h4>
								</div>
								<hr>
								<div class="row">
									<div class="col-sm-6">
										<h5 class="mb-2">Billed To:</h5>
										<p>John Smith</p>
										<p>14812 Main</p>
										<p>Sdr. 2c</p>
										<p>Lorem Ipsum, RY 545782</p>
									</div>
									<div class="col-sm-6 text-sm-end">
										<h5 class="mb-2">Shipped To:</h5>
										<p>Jenny Mark</p>
										<p>2211 Main</p>
										<p>Sdr. 2B</p>
										<p>Lorem Ipsum, RY 545782</p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 mt-3">
										<h5 class="mb-2">Payment Method:</h5>
										<p>Visa ending **** 1144</p>
										<p>vd@gmail.com</p>
									</div>
									<div class="col-sm-6 mt-3 text-sm-end">
										<h5 class="mb-2">Order Date:</h5>
										<p>22/12/2022</p>
									</div>
								</div>
								<div class="py-2 mt-3 mb-2">
									<h4 class="font-size-15">Order Summary</h4>
								</div>
								<div class="table-responsive">
									<table class="table table-styled mb-0">
										<thead>
											<tr>
												<th style="width: 70px;">No.</th>
												<th>Item</th>
												<th class="text-end">Price</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>01</td>
												<td>SplashDash - Admin Html Template</td>
												<td class="text-end">$359.00</td>
											</tr>
											
											<tr>
												<td>02</td>
												<td>SplashDash - Landing Template</td>
												<td class="text-end">$749.00</td>
											</tr>

											<tr>
												<td>03</td>
												<td>SplashDash - Admin Html Template</td>
												<td class="text-end">$555.00</td>
											</tr>
											<tr>
												<td colspan="2" class="text-end">Sub Total</td>
												<td class="text-end">$4578.00</td>
											</tr>
											<tr>
												<td colspan="2" class="text-end">
													<strong>Shipping</strong></td>
												<td class=" text-end">$14.00</td>
											</tr>
											<tr>
												<td colspan="2" class="text-end">
													<strong>Total</strong></td>
												<td class=" text-end"><h4 class="m-0">$45781.00</h4></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="d-print-none mt-2">
									<div class="float-end">
										<a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i class="fa fa-print"></i></a>
										<a href="javascript:;" class="btn btn-primary w-md waves-effect waves-light">Send</a>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?>