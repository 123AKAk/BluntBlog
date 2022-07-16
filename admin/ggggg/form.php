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
                                <h4 class="page-title">Basic Form</h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Basic Form</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- From Start -->
                <div class="from-wrapper">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Vertical</h4>
                                    <p class="card-desc">Here are examples of form add <code>.form</code> tag with inputs.</p>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="col-form-label">User Name</label>
                                                <input class="form-control" type="text" placeholder="Jenny">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Password</label>
                                                <input class="form-control" type="password" placeholder="123456">
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <input id="checkbox1" type="checkbox">
                                                    <label for="checkbox1">Remember Me</label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <button class="btn btn-primary" type="button">Reset</button>
                                                <input class="btn btn-light" type="submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Horizontal</h4>
                                    <p class="card-desc">Here are examples of form add <code>.form</code> tag with inputs.</p>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Username</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" placeholder="Jenny">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Email</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="email" placeholder="example@domain.com" id="email-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Password</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="password" placeholder="123456">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <div class="checkbox">
                                                        <input id="checkbox2" type="checkbox">
                                                        <label for="checkbox2">Remember Me</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <button class="btn btn-primary" type="button">reset</button>
                                                    <input class="btn btn-light" type="submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Separate</h4>
                                    <p class="card-desc">Here are examples of form add <code>.separate-form</code> tag with inputs.</p>
                                </div>
                                <div class="card-body">
                                    <form class="separate-form">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h5 class="from-title mb-1">Personal Info</h5>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label for="member-name" class="col-form-label">Your Name</label>
                                                        <input class="form-control" type="text" placeholder="Enter Your Name" id="member-name">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label for="member-email" class="col-form-label">Your Email</label>
                                                        <input class="form-control" type="email" placeholder="Enter Your Email" id="member-email">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label for="company-name" class="col-form-label">Company Name (Optional)</label>
                                                        <input class="form-control" type="text" placeholder="Company Name" id="company-name">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label for="web-url" class="col-form-label">URL</label>
                                                        <input class="form-control" type="text" placeholder="Enter URL" id="web-url">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label for="dob" class="col-form-label">DOB</label>
                                                        <input class="form-control" type="text" placeholder="Enter DOB" id="dob">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label for="another-number" class="col-form-label">Contact Number</label>
                                                        <input class="form-control" type="text" placeholder="Contact Number" id="another-number">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="mt-4 mb-4">
                                            <h5 class="from-title mb-1">Billing Info</h5>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
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
                                                            </optgroup>
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
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
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
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label for="province" class="col-form-label">Province</label>
                                                        <input class="form-control" type="text" placeholder="province" id="province">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label for="postal" class="col-form-label">Postal</label>
                                                        <input class="form-control" type="text" placeholder="Postal" id="postal">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="mt-4 mb-4">
                                            <h5 class="from-title mb-1">Additional Details</h5>
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label for="additional-msg" class="col-form-label">Drop Your Message</label>
                                                        <textarea class="form-control" placeholder="Additional Notes" id="additional-msg"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <input id="checkbox3" type="checkbox">
                                                    <label for="checkbox3">Remember Me</label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <button class="btn btn-primary" type="button">reset</button>
                                                <input class="btn btn-danger" type="submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?>