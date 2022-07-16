<?php 
    require "assets/db.php";
    require "assets/varnames.php";
    require 'assets/sharedComponents.php';
    $components = new SharedComponents();
?>

<?php
// Initialize the session
session_start();
$loggedin = false;

if (isset($_SESSION["blunt_blog_user_loggedin_"])){
    $_SESSION["blunt_blog_user_loggedin_"] = $components->unprotect($_SESSION["blunt_blog_user_loggedin_"]);
    if ($_SESSION["blunt_blog_user_loggedin_"] == true && isset($_SESSION["blunt_blog_user_status_"])){
        $_SESSION["blunt_blog_user_loggedin_"] = $components->protect($_SESSION["blunt_blog_user_loggedin_"]);
        $loggedin = true;
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
</head>

<body>