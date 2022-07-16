<?php
    session_start();
    $loggedin = false;
    require "../assets/db.php";
    require '../assets/sharedComponents.php';
    $components = new SharedComponents();

    if (isset($_SESSION["admin_blunt_blog_user_loggedin_"])){
        $_SESSION["admin_blunt_blog_user_loggedin_"] = $components->unprotect($_SESSION["admin_blunt_blog_user_loggedin_"]);
        if ($_SESSION["admin_blunt_blog_user_loggedin_"] == true && isset($_SESSION["blunt_blog_user_status_"])){
            $_SESSION["admin_blunt_blog_user_loggedin_"] = $components->protect($_SESSION["admin_blunt_blog_user_loggedin_"]);
            $id = $components->unprotect($_SESSION["blunt_blog_user_status_"]);
            $result = $components->checkuser($id, $pdo);
            if($result != 1)
            {
                header("location: ../logout.php");
                exit;
            }
            else{
                $loggedin = true;
            }
        }
        else{
            header("location: .././");
        }
    }
    else{
        header("location: .././");
    }
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--<![endif]-->
<!-- Begin Head -->

<head>
    <title>Blog</title>
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
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" id="theme-change" type="text/css" href="#">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">

    <link rel="stylesheet" type="text/css" href="assets/css/theme.css">

    <link rel="stylesheet" type="text/css" href="assets/css/auth.css">

    <style>
        /* *&* */
        /* feedback alert styling */
        .alert {
            padding: 10px;
            background-color: #f44336;
            color: white;
            opacity: 1;
            transition: opacity 0.6s;
            margin-bottom: 15px;
            margin: auto;
            display: block;
            width: 100%;
            border-radius: 0;
        }
        
        .alert.success {background-color: #04AA6D;}
        .alert.info {background-color: #2196F3;}
        .alert.warning {background-color: #e76c63;}
        
        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
        
        .closebtn:hover {
            color: black;
        }
        .alert p{
            color: white;
        }
        /* *&* */

    </style>
</head>