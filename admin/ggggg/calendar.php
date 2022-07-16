<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>SplashDash</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.min.css">
	<link rel="stylesheet" href="assets/css/calender.css">
    <!--Page Specific -->
    <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
    <!--Custom Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" id="theme-change" type="text/css" href="#">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
</head>


<body>
	<?php
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
                                <h4 class="page-title">Calendar</h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-link active">Calendar</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Products view Start -->
				<div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card table-card">
                            <div class="card-body">
                                <div class="calendar-wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>

<?php
    include 'includes/footer.php';
?>
    <!-- Script Start -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Page Specific -->
    <script src="assets/js/calendar.min.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/custom.js"></script>
	<script>
		function selectDate(date) {
		  $('.calendar-wrapper').updateCalendarOptions({
			date: date
		  });
		}

		var defaultConfig = {
		  weekDayLength: 1,
		  date: new Date(),
		  onClickDate: selectDate,
		  showYearDropdown: true,
		  startOnMonday: true,
		};

		$('.calendar-wrapper').calendar(defaultConfig);
	</script>
<?php
    include 'includes/scripts.php';
?>
