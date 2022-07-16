<?php require "assets/db.php"; ?>
<?php

    session_start();

    $loggedin = false;

    // Check if the user is already logged in, if yes then redirect him to welcome page
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) 
    {
        header("location: index.php");
        exit;
    }
    

    // Define variables and initialize with empty values
    $email = $password = "";
    $email_err = $password_err = $_SESSION["email"] ="";

    // Processing form data when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Check if email is empty
        if (empty(trim($_POST["email"]))) {
            $email_err = "Enter your Email.";
        } else {
            $email = trim($_POST["email"]);
            $_SESSION["email"] = $email;
        }

        // Validate credentials
        if (empty($email_err)) {
            // Prepare a select statement
            $sql = "SELECT * FROM users WHERE email = :email";

            if ($stmt = $pdo->prepare($sql)) {
                // Bind variables to the prepared statement as parameters
                $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);

                // Set parameters
                $param_email = trim($_POST["email"]);

                // Attempt to execute the prepared statement
                if ($stmt->execute()) {
                    // Check if email exists, if yes then verify password
                    if ($stmt->rowCount() == 1) {
                        if ($row = $stmt->fetch()) {
                            $id = $row["id"];
                            $username = $row["username"];
                           
                            
                        }
                    } else {
                        // Display an error message if username doesn't exist
                        $email_err = "No account found with that Email.";
                    }
                } else {
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                unset($stmt);
            }
        }
        // Close connection
        unset($pdo);
    }
?>

<?php
// Initialize the session
// session_start();
// $loggedin = false;

// // Check if the user is already logged in, if yes then redirect him to welcome page
// if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
//    $loggedin = true;
    
// }

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
    <title> Login </title>
  
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

<?php require "includes/navbar.php"; ?>
<!-- <br>
<br>
<br>
<br> -->
    <!--Login-->
    <section class="container" style="margin-bottom:20px">
    <br>
        <div class="section-heading">
            <div class="row">
                <div class="col-lg-6 col-md-8 m-auto">
                    <div class="login-content">
                        <h4>Forgot Password</h4>
                        <p></p>
                        <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="sign-form widget-form " method="POST">
                            <div class="form-group">
                                <input type="email" class="form-control <?= (!empty($email_err)) ? 'is-invalid' : ''; ?>" placeholder="Enter Account Email" name="email" value="<?= (!empty($_SESSION["email"])) ? $_SESSION["email"] : ''; ?>">
                                <span class="invalid-feedback"><?= $email_err; ?></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-custom">Submit</button>
                            </div>
                            <p class="form-group text-center">Don't have an account? <a href="signup.php" class="btn-link">Create One</a> or <a href="signup.php" class="btn-link">Login    </a></p>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </section>

<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?> 