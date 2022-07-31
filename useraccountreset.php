<?php 
require "assets/db.php";
require "assets/varnames.php";
require 'assets/sharedComponents.php';
$components = new SharedComponents();

include 'includes/header.php';
include 'includes/navbar.php';
?>
<?php

    if(!isset($_GET['code']) && !isset($_GET['userid']))
    {
        header("location: 404.php?err=Error Verification Failed, Invalid User Indentification");
        exit;
    }

    session_start();


    // Define variables and initialize with empty values
    $password = $password_err = $confrimpassword_err ="";

    // Processing form data when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Check if all password is empty
        if (empty(trim($_POST["password"]))) {
            $password_err = "Enter your Password.";
        }    
        else if (empty(trim($_POST["confrimpassword"]))) {
            $_SESSION["password"] = trim($_POST["password"]);
            $confrimpassword_err = "Confrim your Password.";
        }
        else if ($_POST["confrimpassword"] != $_POST["password"]){
            $confrimpassword_err = "Passwords does not Match.";
        }
        else {
            $password = trim($_POST["password"]);
        }


        // Validate credentials
        if (empty($password_err) && empty($confrimpassword_err)) {

            $userid = $components->unprotect($_GET["userid"]);

            // Prepare a select statement
            $sql = "SELECT * FROM users WHERE id = :id";
            if ($stmt = $pdo->prepare($sql)) 
            {
                $stmt->bindParam(":id", $userid, PDO::PARAM_STR);
                if ($stmt->execute()) 
                {
                    if ($stmt->rowCount() == 1) 
                    {
                        if ($row = $stmt->fetch()) 
                        {
                            $username = $row["username"];
                            $usercode = $row["code"];
                            if ($usercode == $_GET["code"])
                            {
                                $hashpassword = password_hash($password, PASSWORD_DEFAULT);
                                //update user password
                                $bsql = "UPDATE users SET password=:password WHERE id=:id";
                                $stmt= $pdo->prepare($bsql);
                                $stmt->execute(['password' => $hashpassword, 'id' => $userid]);
                                if ($stmt->rowCount()) {
                                    header("Location: login.php?newadmsg=active");
                                    exit;
                                }
                                else
                                {
                                    $_SESSION["main_err"] = "Error Updating Password, contact site administrator";
                                }
                            }
                            else
                            {
                                $_SESSION["main_err"] = "User Codes Doesn't Match";
                            }
                        }
                    }
                    else 
                    {
                        $_SESSION["main_err"] = "No account found with User Identification.";
                    }
                }
                else
                {
                    $_SESSION["main_err"] = "Oops! Something went wrong. Please try again later.";
                }
                unset($stmt);
            }
        }
        // Close connection
        unset($pdo);
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
    <title> Admin | Login </title>
  
    <!-- CSS Plugins -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">

    <!-- main style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <?php require "includes/metatags.php"; ?>    
</head>

<body>

    <!--Login-->
    <section class="container">
    <br>
        <div class="section-heading">
            <div class="row">
                <div class="col-lg-6 col-md-8 m-auto">
                    <div class="login-content">
                        <h4> Password Reset</h4>
                        <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="sign-form widget-form " method="POST">

                            <p class="text-center m-2 text-danger">
                                <?= (!empty($_SESSION["main_err"])) ? $_SESSION["main_err"] : ''; unset($_SESSION["main_err"]) ?>
                            </p>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control <?= (!empty($password_err)) ? 'is-invalid' : ''; ?>"  placeholder="Password*">
                                <span class="invalid-feedback"><?= $password_err; ?></span>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control <?= (!empty($confrimpassword_err)) ? 'is-invalid' : ''; ?>" placeholder="Confrim Password*" name="confrimpassword" value="">
                                <span class="invalid-feedback"><?= $confrimpassword_err; ?></span>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn-custom">Submit</button>
                            </div>
                            <p class="form-group text-center">Don't have an account? <a href="adminsignup.php" class="btn-link">Create One</a> </p>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <br>

<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?> 