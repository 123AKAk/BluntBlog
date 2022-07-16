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
                                <h4 class="page-title">Data Tables</h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Data Tables</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Products view Start -->
				<div class="row">
                    <!-- Styled Table Card-->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card table-card">
                            <div class="card-header pb-0">
                                <h4>Default Datatable</h4>
                            </div>
                            <div class="card-body">
                               <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
									<thead>
										<tr>
											<th>First name</th>
											<th>Last name</th>
											<th>Position</th>
											<th>Office</th>
											<th>Age</th>
											<th>Start date</th>
											<th>Salary</th>
											<th>Extn.</th>
											<th>E-mail</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Donna</td>
											<td>Snider</td>
											<td>Customer Support</td>
											<td>New York</td>
											<td>27</td>
											<td>2011/01/25</td>
											<td>$112,000</td>
											<td>4226</td>
											<td>d.snider@datatables.net</td>
										</tr>
									</tbody>
								</table>
                            </div>
                        </div>
                    </div>
                </div>
<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?>