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
                                <h4 class="page-title bold">Charts</h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Chart</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chart Start -->
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <!-- Basic Area Chart -->
                        <div class="card chart-card">
                            <div class="card-header">
                                <h4>Basic Area Chart</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-holder">
                                    <div id="chartA"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <!-- Area Spaline Chart -->
                        <div class="card chart-card">
                            <div class="card-header">
                                <h4>Area Spaline Chart</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-holder">
                                    <div id="chartB"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <!-- Basic Bar Chart-->
                        <div class="card chart-card">
                            <div class="card-header">
                                <h4>Basic Bar Chart</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-holder">
                                    <div id="chartC"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <!-- Vertical Bar Chart Card-->
                        <div class="card chart-card">
                            <div class="card-header">
                                <h4>Vertical Bar Chart</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-holder">
                                    <div id="chartD"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <!-- Column Bar Chart Card-->
                        <div class="card chart-card">
                            <div class="card-header">
                                <h4>Column Bar Chart</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-holder">
                                    <div id="chartE"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <!-- Stacked Bar Chart Card-->
                        <div class="card chart-card">
                            <div class="card-header">
                                <h4>Stacked Bar Chart</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-holder">
                                    <div id="chartF"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Basic Line Chart-->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card chart-card">
                            <div class="card-header">
                                <h4>Basic Line Chart</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-holder">
                                    <div id="chartG"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Line with Data Labels-->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card chart-card">
                            <div class="card-header">
                                <h4>Line Chart with Data Labels</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-holder">
                                    <div id="chartH"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Line & Column Chart Card-->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card chart-card">
                            <div class="card-header">
                                <h4>Line &amp; Column Chart</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-holder">
                                    <div id="chartI"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Radial Chart Card-->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card chart-card">
                            <div class="card-header">
                                <h4>Radial Chart</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-holder">
                                    <div id="chartJ"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Start Radar Chart Card-->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card chart-card">
                            <div class="card-header">
                                <h4>Radar Chart</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-holder">
                                    <div id="chartK"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Pie Chart Card-->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card chart-card">
                            <div class="card-header">
                                <h4>Pie Chart</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-holder">
                                    <div id="chartL"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?>