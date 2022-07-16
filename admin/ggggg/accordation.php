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
                                <h4 class="page-title">Accordion </h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Accordion </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Products view Start -->
				<div class="row">
					<div class="col-xl-6">
						<div class="card">
                            <div class="card-header pb-0">
                                <h4 class="card-title">Default Accordion</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="ez-minus-plus">
										<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingOne">
													<h4 class="panel-title">
														<a data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
														  <span class="editableElement" data-kindoff="text">Lorem Ipsum is simply dummy text of the.</span>
														</a>
													</h4>
												</div>
												<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
													<div class="panel-body"><p class="editableElement" data-kindoff="text">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.le VHS.</p></div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingTwo">
													<h4 class="panel-title">
														<a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
														  <span class="editableElement" data-kindoff="text">Lorem Ipsum is simply dummy text of the printing.</span>
														</a>
													</h4>
												</div>
												<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
													<div class="panel-body"><p class="editableElement" data-kindoff="text">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p></div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingThree">
													 <h4 class="panel-title">
														<a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
														  <span class="editableElement" data-kindoff="text">Lorem Ipsum is simply dummy text of the printing.</span>
														</a>
													  </h4>
												</div>
												<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
													<div class="panel-body"><p class="editableElement" data-kindoff="text">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p></div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingFour">
													<h4 class="panel-title">
														<a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
														  <span class="editableElement" data-kindoff="text">Lorem Ipsum is simply dummy text of the printing.</span>
														</a>
													</h4>
												</div>
												<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
													<div class="panel-body"><p class="editableElement" data-kindoff="text">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p></div>
												</div>
											</div>
										</div>
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