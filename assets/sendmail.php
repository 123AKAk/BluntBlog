
<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class send_Mail
{
	function sendMail($email, $password, $username, $code, $userid)
	{
        include "varnames.php";

        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https://";
        else
        $url = "http://";
        // Append the host(domain name, ip) to the URL.
        $url.= $_SERVER['HTTP_HOST']."/blog/adminactivate.php?code=".$code."&userid=".$userid."";
        // Append the requested resource location to the URL
        //$url.= $_SERVER['REQUEST_URI'];

        $message = "
            <h3>Thank you for Registering on $globalname .</h3>
            <p>Your Account Information:</p>
            <p>Username: ".$username."</p>
            <p>Email: ".$email."</p>
            <p>Password: ".$password."</p>
            <p>Please click the link below to activate your account.</p>
            <a href='".$url."'>Activate your Account</a>
        ";

        require 'vendor/autoload.php';
        $mail = new PHPMailer(true);
        try
        {
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
            //$mail->IsSMTP();
            $mail->Host = $siteemailhost;
            $mail->SMTPAuth = true;
            $mail->Username = $siteemail;
            $mail->Password = $siteemailpassword;
            $mail->SMTPSecure = 'SSL';
            $mail->Port = $siteemailport;

            $mail->setFrom($siteemail, $globalname);
            $mail->addAddress($email, $username);
            $mail->addReplyTo($siteemail, 'For any Information');
            $mail->isHTML(true);
            $mail->Subject = 'Admin Registration Successful - '.$globalname;
            $mail->Body    = $message;
            $mail->AltBody = "Thank you for Registering on $globalname Blog | Your Account Information: Email - ".$email.", Password: ".$password." <a href='".$url."'>Activate your Account</a>";

            $mail->send();

            if (!$mail->send())
            {
                return $result = ['response' => false, 'message' => 'EMAIL SENDING FAILED. INFO'];
                //return $result = ['response' => false, 'message' => 'EMAIL SENDING FAILED. INFO: '.$mail->ErrorInfo];
            }
            else 
            {
                return $result = ['response' => true, 'message' => 'Account created Successfully, access your email to activate your account'];
            }
        }
        catch (Exception $eax) 
        {
            return $result = ['response' => false, 'message' => 'EMAIL SENDING FAILED. INFO: '.$mail->ErrorInfo." ".$eax];
        }
        finally
        {
        }
    }
    function sendUsersMail($email, $password, $username, $code, $userid)
	{
        require "varnames.php";

        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https://";
        else
        $url = "http://";
        // Append the host(domain name, ip) to the URL.
        $url.= $_SERVER['HTTP_HOST']."/blog/useractivate.php?code=".$code."&userid=".$userid."";
        // Append the requested resource location to the URL
        //$url.= $_SERVER['REQUEST_URI'];

        $message = "
            <h3>Thank you for Registering on $globalname .</h3>
            <p>Your Account Information:</p>
            <p>Username: ".$username."</p>
            <p>Email: ".$email."</p>
            <p>Password: ".$password."</p>
            <p>Please click the link below to activate your account.</p>
            <a href='".$url."'>Activate your Account</a>
        ";

        require 'vendor/autoload.php';
        $mail = new PHPMailer(true);
        try
        {
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            // $mail->IsSMTP();
            $mail->Host = $siteemailhost;
            $mail->SMTPAuth = true;
            $mail->Username = $siteemail;
            $mail->Password = $siteemailpassword;
            $mail->SMTPSecure = 'SSL';
            $mail->Port = $siteemailport;

            $mail->setFrom($siteemail, $globalname);
            $mail->addAddress($email, $username);
            $mail->addReplyTo($siteemail, 'For any Information');
            $mail->isHTML(true);
            $mail->Subject = 'User SignUp Successful - '.$globalname;
            $mail->Body    = $message;
            $mail->AltBody = "Thank you for Registering on $globalname Blog | Your Account Information: Email - ".$email.", Password: ".$password." <a href='".$url."'>Activate your Account</a>";

            $mail->send();

            if (!$mail->send())
            {
                return $result = ['response' => false, 'message' => 'EMAIL SENDING FAILED. INFO: '.$mail->ErrorInfo];
            }
            else 
            {
                return $result = ['response' => true, 'message' => 'Account created Successfully, access your email to activate your account'];
            }
        }
        catch (Exception $eax) 
        {
            return $result = ['response' => false, 'message' => 'EMAIL SENDING FAILED. INFO: '.$mail->ErrorInfo." ".$eax];
        }
        finally
        {
        }
    }

    function forgotpasswrd($email, $username, $code, $userid, $usertype)
	{
        require "varnames.php";

        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https://";
        else
        $url = "http://";
        // Append the host(domain name, ip) to the URL.
        if($usertype == "admin")
        {
            $url.= $_SERVER['HTTP_HOST']."/blog/adminaccountreset.php?code=".$code."&userid=".$userid."";
        }
        else
        $url.= $_SERVER['HTTP_HOST']."/blog/accountreset.php?code=".$code."&userid=".$userid."";
        // Append the requested resource location to the URL
        //$url.= $_SERVER['REQUEST_URI'];

        $message = "
            <h3>$globalname - Forgot Password.</h3>
            <p>Your Account Information:</p>
            <p>Username: ".$username."</p>
            <p>Email: ".$email."</p>
            <p>Please click the link below to reset your account password.</p>
            <a href='".$url."'>Reset account password</a>
        ";

        require 'vendor/autoload.php';
        $mail = new PHPMailer(true);
        try
        {
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
            //$mail->IsSMTP();
            $mail->Host = $siteemailhost;
            $mail->SMTPAuth = true;
            $mail->Username = $siteemail;
            $mail->Password = $siteemailpassword;
            $mail->SMTPSecure = 'SSL';
            $mail->Port = $siteemailport;

            $mail->setFrom($siteemail, $globalname);
            $mail->addAddress($email, $username);
            $mail->addReplyTo($siteemail, 'For any Information');
            $mail->isHTML(true);
            $mail->Subject = $globalname.' - Account Reset';
            $mail->Body    = $message;
            $mail->AltBody = "$globalname - Forgot Password. | Your Account Information: Email - ".$email.", Password: ".$password." <a href='".$url."'>Reset account password</a>";

            $mail->send();

            if (!$mail->send())
            {
                return $result = ['response' => false, 'message' => 'EMAIL SENDING FAILED. INFO: '.$mail->ErrorInfo];
            }
            else 
            {
                return $result = ['response' => true, 'message' => 'A mail has been sent to your Email'];
            }
        }
        catch (Exception $eax) 
        {
            return $result = ['response' => false, 'message' => 'EMAIL SENDING FAILED. INFO: '.$mail->ErrorInfo." ".$eax];
        }
        finally
        {
        }
    }

    function newlettermail($email)
	{
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https://";
        else
        $url = "http://";
        $url.= $_SERVER['HTTP_HOST']."/blog/unsubscribe.php";

        require "varnames.php";
        

        $message = "
            <p>Thanks for subscribing to our news letter updates, expect more from us. To Unsubcribe click <a href='$url'>here</a></p>
        ";

        require 'vendor/autoload.php';
        $mail = new PHPMailer(true);
        try
        {
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
            //$mail->IsSMTP();
            $mail->Host = $siteemailhost;
            $mail->SMTPAuth = true;
            $mail->Username = $siteemail;
            $mail->Password = $siteemailpassword;
            $mail->SMTPSecure = 'SSL';
            $mail->Port = $siteemailport;

            $mail->setFrom($siteemail, $globalname);
            $mail->addAddress($email, "Subscriber");
            $mail->addReplyTo($siteemail, 'For any Information');
            $mail->isHTML(true);
            $mail->Subject = $globalname.' - Account Reset';
            $mail->Body    = $message;
            $mail->AltBody = "Thanks for subscribing to our news letter updates, expect more from us. To Unsubcribe click <a href='$url'>here</a>";

            $mail->send();

            if (!$mail->send())
            {
                return $result = ['response' => false, 'message' => 'EMAIL SENDING FAILED. INFO: '.$mail->ErrorInfo];
            }
            else 
            {
                return $result = ['response' => true, 'message' => 'A mail has been sent to your Email'];
            }
        }
        catch (Exception $eax) 
        {
            return $result = ['response' => false, 'message' => 'EMAIL SENDING FAILED. INFO: '.$mail->ErrorInfo." ".$eax];
        }
        finally
        {
        }
    }
}

?>