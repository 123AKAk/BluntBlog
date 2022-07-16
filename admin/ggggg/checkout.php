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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-title-wrapper">
                            <div class="page-title-box">
                                <h4 class="page-title">Checkout</h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Checkout</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table Start -->
                <div class="row">
                    <!-- Styled Table Card-->
						<div class="col-xl-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Billing Details</h4>
                                </div>
                                <div class="card-body">
                                    <form>
										<div class="row">
											<div class="col-xl-6 col-lg-6">
												<div class="form-group">
													<label for="text-input" class="col-form-label">First Name</label>
													<input class="form-control" type="text" placeholder="">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6">
												 <div class="form-group">
													<label for="text-input" class="col-form-label">Last Name</label>
													<input class="form-control" type="text" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xl-6 col-lg-6">
												 <div class="form-group">
													<label for="text-input" class="col-form-label">Phone</label>
													<input class="form-control" type="text" placeholder="">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6">
												 <div class="form-group">
													<label for="text-input" class="col-form-label">Email Address</label>
													<input class="form-control" type="text" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xl-6 col-lg-6">
												 <div class="form-group s-opt">
													<label for="region" class="col-form-label">Country Or Region</label>
													<select class="select2 form-control select-opt" id="region">
														<optgroup label="Alaskan/Hawaiian Time Zone">
														  <option value="AK">Alaska</option>
														  <option value="HI">Hawaii</option>
                                                         
                                                        </optgroup>
                                                       
														<optgroup label="Pacific Time Zone">
														  <option value="CA">California</option>
														  <option value="NV">Nevada</option>
														  <option value="OR">Oregon</option>
														  <option value="WA">Washington</option>
														</optgroup>
														<optgroup label="Mountain Time Zone">
														  <option value="AZ">Arizona</option>
														  <option value="CO">Colorado</option>
														  <option value="ID">Idaho</option>
														  <option value="MT">Montana</option>
														  <option value="NE">Nebraska</option>
														  <option value="NM">New Mexico</option>
														  <option value="ND">North Dakota</option>
														  <option value="UT">Utah</option>
														  <option value="WY">Wyoming</option>
														</optgroup>
														<optgroup label="Central Time Zone">
														  <option value="AL">Alabama</option>
														  <option value="AR">Arkansas</option>
														  <option value="IL">Illinois</option>
														  <option value="IA">Iowa</option>
														  <option value="KS">Kansas</option>
														  <option value="KY">Kentucky</option>
														  <option value="LA">Louisiana</option>
														  <option value="MN">Minnesota</option>
														  <option value="MS">Mississippi</option>
														  <option value="MO">Missouri</option>
														  <option value="OK">Oklahoma</option>
														  <option value="SD">South Dakota</option>
														  <option value="TX">Texas</option>
														  <option value="TN">Tennessee</option>
														  <option value="WI">Wisconsin</option>
														</option>
														<optgroup label="Eastern Time Zone">
														  <option value="CT">Connecticut</option>
														  <option value="DE">Delaware</option>
														  <option value="FL">Florida</option>
														  <option value="GA">Georgia</option>
														  <option value="IN">Indiana</option>
														  <option value="ME">Maine</option>
														  <option value="MD">Maryland</option>
														  <option value="MA">Massachusetts</option>
														  <option value="MI">Michigan</option>
														  <option value="NH">New Hampshire</option>
														  <option value="NJ">New Jersey</option>
														  <option value="NY">New York</option>
														  <option value="NC">North Carolina</option>
														  <option value="OH">Ohio</option>
														  <option value="PA">Pennsylvania</option>
														  <option value="RI">Rhode Island</option>
														  <option value="SC">South Carolina</option>
														  <option value="VT">Vermont</option>
														  <option value="VA">Virginia</option>
														  <option value="WV">West Virginia</option>
														</optgroup>
													</select>
                                                    <span class="sel_arrow">
                                                    <i class="fa fa-angle-down "></i>
                                                </span>
												</div>
											</div>
											<div class="col-xl-6 col-lg-6">
												<div class="form-group">
													<label for="text-input" class="col-form-label">Address</label>
													<input class="form-control" type="text" placeholder="" id="text-input">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xl-6 col-lg-6">
												<div class="form-group s-opt">
													<label for="city" class="col-form-label">Town/City</label>
													<select class="select2 form-control select-opt" id="city">
														  <option value="AK">Alaska</option>
														  <option value="HI">Hawaii</option>
														  <option value="CA">California</option>
														  <option value="NV">Nevada</option>
														  <option value="OR">Oregon</option>
														  <option value="WA">Washington</option>
													</select>
                                                    <span class="sel_arrow">
                                                        <i class="fa fa-angle-down "></i>
                                                    </span>
												</div>
											</div>
											<div class="col-xl-6 col-lg-6">
												<div class="form-group s-opt">
													<label for="State" class="col-form-label">State/Country</label>
													<select class="select2 form-control select-opt" id="State">
														  <option value="AK">Alaska</option>
														  <option value="HI">Hawaii</option>
														  <option value="CA">California</option>
													</select>
                                                    <span class="sel_arrow">
                                                        <i class="fa fa-angle-down "></i>
                                                    </span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="password-input" class="col-form-label">Postal Code</label>
											<input class="form-control" type="password" placeholder="" id="password-input">
										</div>
										<div class="form-group mb-0">
											<div class="checkbox mb-3">
												<input id="checkbox1" type="checkbox">
												<label for="checkbox1">check me out</label>
											</div>
										</div>
										<div class="form-group mb-0">
											<button class="btn btn-primary squer-btn mt-2 mr-2" type="submit">Submit</button>
										</div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6">
							<div class="card table-card ">
								<div class="card-header pb-0">
									<div class="d-flex">
										<h4 style="flex:1;">Product</h4>
										<h4>Total</h4>
									</div>
								</div>
								<div class="card-body">
									<div class="chart-holder">
										<div class="row">
											<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
												<div class="ad-checkout-tab">
													<h5>Dining Chair</h5>
													<h5>Ceiling Light</h5>
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
												<div class="ad-checkout-tab text-right">
													<h5>$85</h5>
													<h5>$105</h5>
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
												<div class="ad-checkout-tab">
													<h5>Subtotal</h5>
													<h5>Shipping</h5>
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
												<div class="ad-checkout-tab text-right">
													<h5>$380.10</h5>
													<div class="form-group">
														<div class="checkbox">
															<input id="checkbox0" type="checkbox">
															<label for="checkbox0">Option 1</label>
														</div>
														<div class="checkbox">
															<input id="checkbox-1" type="checkbox">
															<label for="checkbox-1">Option 2</label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="ad-checkout-tab">
													<h5>Total</h5>
													<div class="ad-radio-button">
														<input id="radio-1" name="radio" type="radio" checked>
														<label for="radio-1" class="radio-label">Check Payments</label>
													</div>
													<div class="ad-radio-button">
														<input id="radio-2" name="radio" type="radio">
														<label  for="radio-2" class="radio-label">Cash On Delivery</label>
													</div>
													<div class="ad-radio-button">
														<input id="radio-3" name="radio" type="radio">
														<label for="radio-3" class="radio-label">PayPal</label>
													</div>
													<div class="ad-place-order">
														<button type="button" class="btn btn-primary squer-btn mt-2 mr-2">Place Order</button>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
												<div class="ad-checkout-tab text-right">
													<h5>$620.00</h5>
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