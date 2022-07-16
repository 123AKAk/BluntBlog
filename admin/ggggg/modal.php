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
                                <h4 class="page-title">Modal</h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Modal</li>
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
						<h5>Static Example</h5>
					  </div>
					  <div class="card-body">
						<div class="modal" tabindex="-1" role="dialog" style="display: block;position: unset;">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title">Modal title</h5>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-secondary squer-btn" data-bs-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary squer-btn">Save changes</button>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				  <div class="col-sm-12">
					<div class="card">
					  <div class="card-header">
						<h5>Basic Modal</h5>
					  </div>
					  <div class="card-body">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary squer-btn" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
						  Simple
						</button>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary squer-btn" data-bs-toggle="modal" data-bs-target="#longc">
						  Scrolling long content
						</button>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary squer-btn" data-bs-toggle="modal" data-bs-target="#model3">
						  Vertically centered
						</button>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary squer-btn" data-bs-toggle="modal" data-bs-target="#model4">
						  Tooltips and popovers
						</button>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary squer-btn" data-bs-toggle="modal" data-bs-target="#model-grid">
						  Using the grid
						</button>
						
					  </div>
					</div>
				  </div>
				  <div class="col-sm-12">
					<div class="card">
					  <div class="card-header">
						<h5>Varying modal content</h5>
					  </div>
					  <div class="card-body">
						<button type="button" class="btn btn-primary squer-btn" data-bs-toggle="modal" data-bs-target="#exampleModal20" data-whatever="@mdo">Open modal for @mdo</button>
						<button type="button" class="btn btn-primary squer-btn" data-bs-toggle="modal" data-bs-target="#exampleModal21" data-whatever="@fat">Open modal for @fat</button>
						<button type="button" class="btn btn-primary squer-btn" data-bs-toggle="modal" data-bs-target="#exampleModal22" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>
					  </div>
					</div>
				  </div>
				  <div class="col-sm-12">
					<div class="card">
					  <div class="card-header">
						<h5>Sizes modal</h5>
					  </div>
					  <div class="card-body">
						<button type="button" class="btn btn-primary squer-btn" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Large modal</button>
						<button type="button" class="btn btn-primary squer-btn" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm">Small modal</button>
					  </div>
					</div>
				  </div>
				</div>
				<?php
                    include 'includes/footer.php';
                ?>

    <!-- Model -->
	<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
			<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			...
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
    <!-- Model 2 -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
			<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			...
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
    <!-- Model -->
	<!-- Model 2 -->
	<div class="modal fade" id="longc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalCenterTitle2">Modal title</h5>
			<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
      </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
    <!-- Model -->
    <!-- Model 3 -->
	<div class="modal fade" id="model3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalCenterTitle3">Modal title</h5>
			<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			...
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
    <!-- Model 3 -->
	<div class="modal fade" id="model4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalCenterTitle4">Modal title</h5>
			<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		 <div class="modal-body">
		  <h5>Popover in a modal</h5>
		  <p>This <a href="javascript:;" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
		  <hr>
		  <h5>Tooltips in a modal</h5>
		  <p><a href="javascript:;" class="tooltip-test" title="Tooltip">This link</a> and <a href="javascript:;" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
		</div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
    <!-- Model 3 -->
	
	 <!-- Model 4 -->
	<div class="modal fade" id="model-grid" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalCenterTitle5">Modal title</h5>
			<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
			<div class="modal-body">
			  <div class="container-fluid">
				<div class="row">
				  <div class="col-md-4">.col-md-4</div>
				  <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
				</div>
				<div class="row">
				  <div class="col-md-3 ml-auto">.col-md-3 .ml-auto</div>
				  <div class="col-md-2 ml-auto">.col-md-2 .ml-auto</div>
				</div>
				<div class="row">
				  <div class="col-md-6 ml-auto">.col-md-6 .ml-auto</div>
				</div>
				<div class="row">
				  <div class="col-sm-9">
					Level 1: .col-sm-9
					<div class="row">
					  <div class="col-8 col-sm-6">
						Level 2: .col-8 .col-sm-6
					  </div>
					  <div class="col-4 col-sm-6">
						Level 2: .col-4 .col-sm-6
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
    <!-- Model 5 -->
	
    <!-- Model 6-7-8 -->
	<div class="modal fade" id="exampleModal20" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel02">New message to @mdo</h5>
			<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form>
			  <div class="form-group">
				<label class="col-form-label">Recipient:</label>
				<input type="text" class="form-control">
			  </div>
			  <div class="form-group">
				<label class="col-form-label">Message:</label>
				<textarea class="form-control"></textarea>
			  </div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Send message</button>
		  </div>
		</div>
	  </div>
	</div>
	<div class="modal fade" id="exampleModal21" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel0">New message to @fat</h5>
			<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form>
			  <div class="form-group">
				<label class="col-form-label">Recipient:</label>
				<input type="text" class="form-control">
			  </div>
			  <div class="form-group">
				<label class="col-form-label">Message:</label>
				<textarea class="form-control"></textarea>
			  </div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Send message</button>
		  </div>
		</div>
	  </div>
	</div>
	<div class="modal fade" id="exampleModal22" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel01">New message to @getbootstrap</h5>
			<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form>
			  <div class="form-group">
				<label class="col-form-label">Recipient:</label>
				<input type="text" class="form-control">
			  </div>
			  <div class="form-group">
				<label class="col-form-label">Message:</label>
				<textarea class="form-control"></textarea>
			  </div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Send message</button>
		  </div>
		</div>
	  </div>
	</div>
    <!-- Model 6-7-8 -->
	
    <!-- Model 9 -->
	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">

		  <div class="modal-header">
			<h5 class="modal-title h4" id="myLargeModalLabel">Large modal</h5>
			<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">×</span>
			</button>
		  </div>
		  <div class="modal-body">
			...
		  </div>
		</div>
	  </div>
	</div>

	<!-- Small modal -->
	
	<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title h4" id="mySmallModalLabel">Small modal</h5>
			<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">×</span>
			</button>
		  </div>
		  <div class="modal-body">
			...
		  </div>
		</div>
	  </div>
	</div>
    <!-- Model 9 -->
	
    <!-- Preview Setting Box -->
	<div class="slide-setting-box">
        <div class="slide-setting-holder">
            <div class="setting-box-head">
                <h4>Dashboard Demo</h4>
                <a href="javascript:void(0);" class="close-btn">Close</a>
            </div>
            <div class="setting-box-body">
				<div class="sd-light-vs"> 
					<a href="index.php">
						Light Version
						<img src="assets/images/light.png" alt=""/>
					</a>
				</div>
				<div class="sd-light-vs"> 
					<a href="https://kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template-dark/index.php">
						dark Version
						<img src="assets/images/dark.png" alt=""/>
					</a>
				</div>
            </div>
			<div class="sd-color-op">
				<h5>color option</h5> 
				<div id="style-switcher">
					<div>
						<ul class="colors">
							<li>
								<p class='colorchange' id='color'>
								</p>
							</li>
							<li>
								<p class='colorchange' id='color2'>
								</p>
							</li>
							<li>
								<p class='colorchange' id='color3'>
								</p>
							</li>
							<li>
								<p class='colorchange' id='color4'>
								</p>
							</li>
							<li>
								<p class='colorchange' id='color5'>
								</p>
							</li>
							<li>
								<p class='colorchange' id='style'>
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
        </div>
    </div>
    <!-- Preview Setting -->
	
<?php
    include 'includes/scripts.php';
?>