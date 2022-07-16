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
                                <h4 class="page-title bold">Dashboard</h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Admin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dashboard Start -->
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <!-- Start Card-->
                        <div class="card ad-info-card">
                            <div class="card-body dd-flex align-items-center">
                                <h3>Active Users</h3>
                                <div class="icon-info-text">
                                    <h5 class="ad-title"></h5>
                                    <h4 class="ad-card-title">66</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Card-->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card ad-info-card">
                            <div class="card-body dd-flex align-items-center">
                                <h3>Post Articles</h3>
                                <div class="icon-info-text">
                                    <h5 class="ad-title"></h5>
                                    <h4 class="ad-card-title">15</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Card-->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card ad-info-card">
                            <div class="card-body dd-flex align-items-center">
                                <h3>Post Authors</h3>
                                <div class="icon-info-text">
                                    <h5 class="ad-title">No. of Authors</h5>
                                    <h4 class="ad-card-title">4</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Card-->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card ad-info-card">
                            <div class="card-body dd-flex align-items-center">
                                <h3>News Letters</h3>
                                <div class="icon-info-text">
                                    <h5 class="ad-title"></h5>
                                    <h4 class="ad-card-title">10</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Revanue Status Start -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card chart-card">
                            <div class="card-header">
                                <h4 class="has-btn">Site Analystics <span><button type="button" class="btn btn-primary squer-btn sm-btn">View</button></span></h4>
                            </div>
                            <div class="card-body">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Products Orders Start -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card chart-card">
                            <div class="card-header">
                                <h4>Category(s)</h4>
                            </div>
                            <div class="card-body pb-4">
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
                                                    <th>Name</th>
                                                    <th>Color</th>
                                                    <th>Date Added</th>
                                                    <th>Date Edited</th>
													<th>No. Posts</th>
													<th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
												<tr>
                                                    <td>
														<div class="checkbox">
															<input id="checkbox9" type="checkbox">
															<label for="checkbox9"></label>
														</div>
													</td>
                                                    <td>1</td>
                                                    <td>
                                                        <span class="img-thumb ">
                                                            <img src="assets/images/table/4.jpg" alt=" ">
                                                            <span class="ml-2 ">NaN</span>
                                                        </span>
                                                    </td>
                                                    <td>Blue</td>
                                                    <td>13/04/2022</td>
													<td>13/04/2022</td>
                                                    <td>0</td>
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
                                                                    <a href="javascript:void(0); "><i class="far fa-edit mr-2 "></i>Edit</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0); "><i class="far fa-trash-alt mr-2 "></i>Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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