<?php
    require "assets/db.php";
    require "assets/varnames.php";
    require 'assets/sharedComponents.php';
    $components = new SharedComponents();
    
    include 'includes/header.php';
    include 'includes/navbar.php';

    $email = $email_err = $email_succ = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Check if email is empty
        if (empty(trim($_POST["email"]))) {
            $email_err = "Enter your Email.";
        } else {
            $email = trim($_POST["email"]);
        }

        if (empty($email_err)) {
            $sql = "SELECT * FROM users WHERE email = :email";
            if ($stmt = $pdo->prepare($sql)) {
                $param_email = trim($_POST["email"]);
                $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
                if ($stmt->execute()) {
                    if ($stmt->rowCount() == 1) {
                        if ($row = $stmt->fetch()) {

                            $set = 'EYO1BLUNT2AKAK3';
                            $code = substr(str_shuffle($set), 0, 12);

                            $bsql = "UPDATE users SET code=:code WHERE id=:id";
                            $stmt= $pdo->prepare($bsql);
                            $stmt->execute(['code' => $code, 'id' => $row["id"],]);
                            if ($stmt->rowCount()) 
                            {
                                $userid = $components->protect($row["id"]);

                                require 'assets/sendmail.php';
                                $model = new send_Mail();
                                $mailresult = $model->forgotpasswrd($_POST["email"], $row["username"], $code, $userid, "user");
                                json_encode($mailresult);
                                if($mailresult["response"] == true)
                                    $email_succ = $mailresult["message"];
                                else
                                    $email_err = $mailresult["message"];
                            }
                            
                            
                        }
                    } else {
                        // Display an error message if username doesn't exist
                        $email_err = "No account found with that Email.";
                    }
                } else {
                    echo "Oops! Something went wrong. Please try again later.";
                }
                unset($stmt);
            }
        }
        unset($pdo);
    }
?>

    <!--section-heading-->
    <div class="section-heading " >
        <div class="container-fluid">
            <div class="section-heading-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading-2-title ">
                            <h1>Forgot Password</h1>
                            <p class="links"><a href="./">Home <i class="las la-angle-right"></i></a> Activate Account</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    <!-- display output-->
    <section class="blog-author mt-30">
        <div class="container-fluid">
            <div class="">
                <!--content-->
                <div class="" style="justify-content: center; display: flex;">
                    <div class="row theiaStickySidebar">
                        <div class="card p-2">
                            <h3><span class="text-success"><?= $email_succ; ?></span></h3>
                            <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="sign-form widget-form " method="POST">
                                <div class="form-group">
                                    <input type="email" class="form-control <?= (!empty($email_err)) ? 'is-invalid' : ''; ?>" placeholder="Email*" name="email" value="">
                                    <span class="invalid-feedback"><?= $email_err; ?></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn-custom btn-dark">Submit</button>
                                </div>
                                <p class="form-group text-center">Don't have an account? <a href="adminsignup.php" class="btn-link">Create One</a> </p>
                            </form>
                        </div>
                    </div>

                    <br>
                </div>
                <!--/-->
                <br>
            </div>
        </div>
    </section>
<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
?> 
