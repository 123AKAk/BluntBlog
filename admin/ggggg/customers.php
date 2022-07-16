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
                            <div class="page-title-box ad-title-box-use">
                                <h4 class="page-title">Customers</h4>
                            </div>
                            <div class="ad-breadcrumb">
                                <ul>
                                    <li>
										<div class="ad-user-btn">
											<input class="form-control" type="text" placeholder="Search Here..." id="text-input">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 56.966 56.966">
												<path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
												s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
												c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
												s-17-7.626-17-17S14.61,6,23.984,6z"></path>
											</svg>
										</div>
                                    </li>
                                    <li>
										<div class="add-group">
											<a class="ad-btn">New Customers</a>
										</div>
									</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table Start -->
                <div class="row">
                    <!-- Styled Table Card-->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card table-card">
                            <div class="card-header pb-0">
                                <h4>Customers List</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-holder">
                                    <div class="table-responsive">
                                        <table class="table table-styled mb-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Username</th>
                                                    <th>Phone / Email</th>
                                                    <th>Address</th>
                                                    <th>Rating</th>
                                                    <th>Wallet Balance</th>
                                                    <th>Joining Date</th>
													<th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

												<tr>
                                                    <td>
														<div class="checkbox">
															<input id="checkbox33" type="checkbox">
															<label for="checkbox33"></label>
														</div>
													</td>
                                                    <td>Mike Doe</td>
                                                    <td>
                                                        +(00) 4512 451<br>
														mikedoe@gamil.com
                                                    </td>
                                                    <td>4477 labore et dolore magna, NI 440011</td>
													<td>
                                                        <label class="mb-0 badge badge-primary">3.1</label>
                                                    </td>
                                                    <td>$5,415</td>
                                                    <td>12/02/2022</td>
                                                    <td class="relative">
                                                        <a class="action-btn " href="javascript:void(0); ">
                                                            <svg class="default-size " viewBox="0 0 341.333 341.333 ">
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
												<tr>
                                                    <td>
														<div class="checkbox">
															<input id="checkbox71" type="checkbox">
															<label for="checkbox71"></label>
														</div>
													</td>
                                                    <td>Tom John</td>
                                                    <td>
                                                        +(00) 4512 451<br>
														tomjohn@gamil.com
                                                    </td>
                                                    <td>4877 occaecat cupidatat non proident, NI 2441</td>
													<td>
                                                        <label class="mb-0 badge badge-primary">1.1</label>
                                                    </td>
                                                    <td>$4,411</td>
                                                    <td>11/07/2022</td>
                                                    <td class="relative">
                                                        <a class="action-btn " href="javascript:void(0); ">
                                                            <svg class="default-size " viewBox="0 0 341.333 341.333 ">
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
								<div class="text-right">
									<nav class="d-inline-block">
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
                </div>
<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?>