
<?php
// Initialize the session
session_start();
$loggedin = false;
$realuserid = 0;

if (isset($_SESSION["blunt_blog_user_loggedin_"])){
    $_SESSION["blunt_blog_user_loggedin_"] = $components->unprotect($_SESSION["blunt_blog_user_loggedin_"]);
    if ($_SESSION["blunt_blog_user_loggedin_"] == true && isset($_SESSION["blunt_blog_user_status_"])){
        $_SESSION["blunt_blog_user_loggedin_"] = $components->protect($_SESSION["blunt_blog_user_loggedin_"]);
        
        $loggedin = true;
        $realuserid = $_SESSION["blunt_blog_user_status_"];
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon -->
    <link rel="icon" sizes="16x16" href="assets/img/favicon.png">

    <!-- Title -->
    <title> BLUNT - Personal Blog </title>
  
    <!-- CSS Plugins -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">

    <!-- main style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <?php includeWithVariables('metatags.php', array('metatitle' => empty($returntitle) ? $globalname :  $returntitle )); ?>

    <script>
        function sharefunc()
        {
            var aurl = window.location.href
            document.getElementById("singleshare1").setAttribute("data-url", ""+aurl);
            document.getElementById("singleshare2").setAttribute("data-url", ""+aurl);
            document.getElementById("singleshare3").setAttribute("data-url", ""+aurl);
            document.getElementById("singleshare4").setAttribute("data-url", ""+aurl);
            document.getElementById("singleshare5").setAttribute("data-url", ""+aurl);
            document.getElementById("singleshare6").setAttribute("data-url", ""+aurl);
            document.getElementById("singleshare67").setAttribute("data-url", ""+aurl);
        }
    </script>
</head>

<body onload="sharefunc()">