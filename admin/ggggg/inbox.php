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
                                <h4 class="page-title">Inbox</h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Inbox</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Products view Start -->
              
					<div class="row">
						<div class="col-lg-3 col-md-4">
							<div class="card card-body">
								<div class="compose-btn">
									<a href="javascript:;" class="btn btn-primary squer-btn" data-bs-toggle="modal" data-target="#composemodal">
									Compose
									</a>
								</div>
								<ul class="inbox-menu">
									<li class="active">
										<a href="javascript:;"><i class="fas fa-download"></i> Inbox <span class="mail-count">(5)</span></a>
									</li>
									<li>
										<a href="javascript:;"><i class="far fa-star"></i> Important</a>
									</li>
									<li>
										<a href="javascript:;"><i class="far fa-paper-plane"></i> Sent Mail</a>
									</li>
									<li>
										<a href="javascript:;"><i class="far fa-file-alt"></i> Drafts <span class="mail-count">(13)</span></a>
									</li>
									<li>
										<a href="javascript:;"><i class="far fa-trash-alt"></i> Trash</a>
									</li>
								</ul>
							</div>
						</div>
						
						<div class="col-lg-9 col-md-8">
							<div class="card">
								<div class="card-body pb-0">
									<div class="email-header">
										<div class="row">
											<div class="col top-action-left">
												<div class="float-left">
													<div class="btn-group dropdown-action">
														<button type="button" class="btn btn-primary squer-btn dropdown-toggle" data-bs-toggle="dropdown">Select</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="javascript:;">All</a>
															<a class="dropdown-item" href="javascript:;">None</a>
															<div class="dropdown-divider"></div> 
															<a class="dropdown-item" href="javascript:;">Read</a>
															<a class="dropdown-item" href="javascript:;">Unread</a>
														</div>
													</div>
													<div class="btn-group dropdown-action">
														<button type="button" class="btn btn-primary squer-btn dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="javascript:;">Reply</a>
															<a class="dropdown-item" href="javascript:;">Forward</a>
															<a class="dropdown-item" href="javascript:;">Archive</a>
															<div class="dropdown-divider"></div> 
															<a class="dropdown-item" href="javascript:;">Mark As Read</a>
															<a class="dropdown-item" href="javascript:;">Mark As Unread</a>
															<div class="dropdown-divider"></div> 
															<a class="dropdown-item" href="javascript:;">Delete</a>
														</div>
													</div>
													<div class="btn-group dropdown-action mail-search">
														<input type="text" placeholder="Search Messages" class="form-control search-message">
													</div>
												</div>
											</div>
											<div class="col-auto top-action-right">
												<div class="ad-inbox-list">
													<div class="text-right">
														<button type="button" title="" data-bs-toggle="tooltip" class="btn btn-primary squer-btn d-md-inline-block" data-original-title="Refresh"><i class="fas fa-sync-alt"></i></button>
														<div class="btn-group">
															<a class="btn btn-white"><i class="fas fa-angle-left"></i></a>
															<a class="btn btn-white"><i class="fas fa-angle-right"></i></a>
														</div>
													</div>
													<div class="text-right">
														<span class="text-muted d-md-inline-block">Showing 10 of 112 </span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="email-content">
										<div class="table-responsive">
											<table class="table table-inbox table-hover">
												
												<tbody>
													<tr class="unread clickable-row">
														<td>
															<div class="checkbox checkbox-inbox">
																<input id="checkbox1" type="checkbox">
																<label for="checkbox1"></label>
															</div>
														</td>
														<td><span class="mail-important"><i class="fas fa-star starred"></i></span></td>
														<td class="name">John Doe</td>
														<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
														<td><i class="fas fa-paperclip"></i></td>
														<td class="mail-date">13:14</td>
													</tr>
													<tr class="unread clickable-row">
														<td>
														<div class="checkbox checkbox-inbox">
															<input id="checkbox2" type="checkbox">
															<label for="checkbox2"></label>
														</div>
													</td>
														<td><span class="mail-important"><i class="far fa-star"></i></span></td>
														<td class="name">Envato Account</td>
														<td class="subject">Important account security update from Envato</td>
														<td></td>
														<td class="mail-date">8:42</td>
													</tr>
													<tr class="clickable-row">
														<td>
														<div class="checkbox checkbox-inbox">
															<input id="checkbox3" type="checkbox">
															<label for="checkbox3"></label>
														</div>
													</td>
														<td><span class="mail-important"><i class="far fa-star"></i></span></td>
														<td class="name">Twitter</td>
														<td class="subject">HRMS Bootstrap Admin Template</td>
														<td></td>
														<td class="mail-date">30 Nov</td>
													</tr>
													<tr class="unread clickable-row">
														<td>
														<div class="checkbox checkbox-inbox">
															<input id="checkbox4" type="checkbox">
															<label for="checkbox4"></label>
														</div>
													</td>
														<td><span class="mail-important"><i class="far fa-star"></i></span></td>
														<td class="name">Richard Parker</td>
														<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
														<td></td>
														<td class="mail-date">18 Sep</td>
													</tr>
													<tr class="clickable-row">
														<td>
														<div class="checkbox checkbox-inbox">
															<input id="checkbox5" type="checkbox">
															<label for="checkbox5"></label>
														</div>
													</td>
														<td><span class="mail-important"><i class="far fa-star"></i></span></td>
														<td class="name">John Smith</td>
														<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
														<td></td>
														<td class="mail-date">21 Aug</td>
													</tr>
													<tr class="clickable-row">
														<td>
															<div class="checkbox checkbox-inbox">
																<input id="checkbox6" type="checkbox">
																<label for="checkbox6"></label>
															</div>
														</td>
														<td><span class="mail-important"><i class="far fa-star"></i></span></td>
														<td class="name">me, Robert Smith (3)</td>
														<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
														<td></td>
														<td class="mail-date">1 Aug</td>
													</tr>
													<tr class="unread clickable-row">
														<td>
															<div class="checkbox checkbox-inbox">
																<input id="checkbox7" type="checkbox">
																<label for="checkbox7"></label>
															</div>
														</td>
														<td><span class="mail-important"><i class="far fa-star"></i></span></td>
														<td class="name">Codecanyon</td>
														<td class="subject">Welcome To Codecanyon</td>
														<td></td>
														<td class="mail-date">Jul 13</td>
													</tr>
													<tr class="clickable-row">
														<td>
															<div class="checkbox checkbox-inbox">
																<input id="checkbox8" type="checkbox">
																<label for="checkbox8"></label>
															</div>
														</td>
														<td><span class="mail-important"><i class="far fa-star"></i></span></td>
														<td class="name">Richard Miles</td>
														<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
														<td><i class="fas fa-paperclip"></i></td>
														<td class="mail-date">May 14</td>
													</tr>
													<tr class="unread clickable-row">
														<td>
															<div class="checkbox checkbox-inbox">
																<input id="checkbox9" type="checkbox">
																<label for="checkbox9"></label>
															</div>
														</td>
														<td><span class="mail-important"><i class="far fa-star"></i></span></td>
														<td class="name">John Smith</td>
														<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
														<td></td>
														<td class="mail-date">11/11/16</td>
													</tr>
													<tr class="clickable-row">
														<td>
															<div class="checkbox checkbox-inbox">
																<input id="checkbox10" type="checkbox">
																<label for="checkbox10"></label>
															</div>
														</td>
														<td><span class="mail-important"><i class="fas fa-star starred"></i></span></td>
														<td class="name">Mike Litorus</td>
														<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
														<td></td>
														<td class="mail-date">10/31/16</td>
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