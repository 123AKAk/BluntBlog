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
                                <h4 class="page-title">Tabs </h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Tabs </li>
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
                                <h4 class="card-title">Default Tabs</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
									  <li class="nav-item">
										<a class="nav-link active" id="home-tab2" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
									  </li>
									  <li class="nav-item">
										<a class="nav-link" id="profile-tab19" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
									  </li>
									  <li class="nav-item">
										<a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
									  </li>
									</ul>
									<div class="tab-content ad-content2" id="myTabContent">
									  <div class="tab-pane fade show active" id="home" role="tabpanel">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									  </div>
									  <div class="tab-pane fade" id="profile" role="tabpanel">
										<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
									  </div>
									  <div class="tab-pane fade" id="contact" role="tabpanel">
										<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
									  </div>
									</div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-6">
						<div class="card">
                            <div class="card-header pb-0">
                                <h4 class="card-title">Justify Tabs</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                   <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
									  <li class="nav-item">
										<a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
									  </li>
									  <li class="nav-item">
										<a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
									  </li>
									  <li class="nav-item">
										<a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
									  </li>
									</ul>
									<div class="tab-content" id="pills-tabContent">
									  <div class="tab-pane fade show active" id="pills-home" role="tabpanel"><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p></div>
									  <div class="tab-pane fade" id="pills-profile" role="tabpanel"><p> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p></div>
									  <div class="tab-pane fade" id="pills-contact" role="tabpanel" ><p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p></div>
									</div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-6">
						<div class="card">
                            <div class="card-header pb-0">
                                <h4 class="card-title">Vertical Nav Tabs</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                   <div class="row">
									  <div class="col-3">
										<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
										  <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
										  <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
										  <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
										  <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
										</div>
									  </div>
									  <div class="col-9">
										<div class="tab-content ad-vertical-three" id="v-pills-tabContent">
										  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.  All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as.</p></div>
										  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" ><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p></div>
										  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" ><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p></div>
										  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" ><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p></div>
										</div>
									  </div>
									</div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-6">
						<div class="card">
                            <div class="card-header pb-0">
                                <h4 class="card-title">Custom Tabs</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                   <div class="mfh-machine-profile">
										<ul class="nav nav-tabs" id="myTab1" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" id="home-tab1" data-bs-toggle="tab" href="#home0" role="tab" aria-controls="home" aria-selected="true">Home</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="profile-tab20" data-bs-toggle="tab" href="#profile0" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="profile-tab21" data-bs-toggle="tab" href="#messages" role="tab" aria-controls="profile" aria-selected="false">Messages</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="profile-tab22" data-bs-toggle="tab" href="#settings" role="tab" aria-controls="profile" aria-selected="false">Settings</a>
											</li>
										</ul>
										<div class="tab-content ad-content2" id="myTabContent2">
											<div class="tab-pane fade show active" id="home0" role="tabpanel" >
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
											</div>
											<div class="tab-pane fade" id="profile0" role="tabpanel">
												<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
											</div>
											<div class="tab-pane fade" id="messages" role="tabpanel" >
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
											</div>
											<div class="tab-pane fade" id="settings" role="tabpanel">
												<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
											</div>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-6">
						<div class="card">
                            <div class="card-header pb-0">
                                <h4 class="card-title">Collapse</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                   <p>
									  <a class="btn btn-primary squer-btn" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
										Link with href
									  </a>
									  <button class="btn btn-primary squer-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
										Button with data-bs-target
									  </button>
									</p>
									<div class="collapse" id="collapseExample">
									  <div class="card card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
									  </div>
									</div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-xl-6">
						<div class="card">
                            <div class="card-header pb-0">
                                <h4 class="card-title">Multiple Targets</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
									<p>
									  <a class="btn btn-primary squer-btn" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
									  <button class="btn btn-primary squer-btn" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
									  <button class="btn btn-primary squer-btn" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
									</p>
									<div class="row">
									  <div class="col">
										<div class="collapse multi-collapse" id="multiCollapseExample1">
										  <div class="card card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
										  </div>
										</div>
									  </div>
									  <div class="col">
										<div class="collapse multi-collapse" id="multiCollapseExample2">
										  <div class="card card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
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