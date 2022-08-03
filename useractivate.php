<?php
require "assets/db.php";
require "assets/varnames.php";
require 'assets/sharedComponents.php';
$components = new SharedComponents();

include 'includes/header.php';
include 'includes/navbar.php';

if(isset($_GET["userid"]) && isset($_GET["code"]))
{
    $id = $components->unprotect($_GET["userid"]);

    $sql = "SELECT * FROM users WHERE id = :id";
    if ($stmt = $pdo->prepare($sql)) 
    {
        $stmt->bindParam(":id", $id, PDO::PARAM_STR);
        if ($stmt->execute()) 
        {
            if ($stmt->rowCount() == 1) 
            {
                if ($row = $stmt->fetch()) 
                {
                    $userstatus = $row["userstatus"];
                    $code = $row["code"];
                    if($row["userstatus"] == 1)
                    {
                        $displayoutput = displayoutput(0, "Account has been Verified already");
                    }
                    else
                    {
                        // update userstatus
                        $bsql = "UPDATE users SET userstatus=:userstatus WHERE id=:id";
                        $stmt= $pdo->prepare($bsql);
                        $stmt->execute(['userstatus' => 1, 'id' => $id]);
                        if ($stmt->rowCount()) {
                            $displayoutput = displayoutput(true, "Account Verfication Successful");
                        }
                        //return $stmt->rowCount() ? 1 : 0;
                    }
                }
            } 
            else {
                $displayoutput = displayoutput(false, "Invalid Code or User Indentification");
            }
        } 
        else {
            $accountverify = 2;
        }
        unset($stmt);
    }
    unset($pdo);
}
else
{
    $displayoutput = displayoutput(false, "Invalid Code or User Indentification");
}

function displayoutput($status, $txt)
{
    if($status == false)
    {
        return "
        <div class='alert alert-danger'>
            <h4>Error!</h4>
            ".$txt."
        </div>
        <p> <a href='' style='font-weight:bold;'>Try Again</a> <br> You may <a href='signup.php' style='font-weight:bold;'>Signup</a> or back to <a href='./' style='font-weight:bold;'>Homepage</a>.</p>
        ";
    }
    else if($status == true)
    {
        return "
        <div class='alert alert-success'>
            <h4>Success!</h4>
            ".$txt."
        </div>
        <p>You may <a href='login.php' style='font-weight:bold;'>Login</a> or Go back to <a href='./' style='font-weight:bold;'>Homepage</a>.</p>
        ";
    }
    else
    {
        return "
        <div class='alert alert-secondary'>
            <h4>Success!</h4>
            ".$txt."
        </div>
        <p>You may <a href='login.php' style='font-weight:bold;'>Login</a> or Go back to <a href='./' style='font-weight:bold;'>Homepage</a>.</p>
        ";   
    }

}
?> 

    <!--section-heading-->
    <div class="section-heading " >
        <div class="container-fluid">
            <div class="section-heading-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading-2-title ">
                            <h1> <?= $globalname ?> - Activate Account</h1>
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
                            <?= $displayoutput ?>
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