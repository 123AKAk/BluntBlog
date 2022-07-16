
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
        require "varnames.php";

        return $result = ['response' => true, 'message' => 'Data Firewall Bypassed'];

        $message = "
            <h3>Thank you for Registering on $globalname .</h3>
            <p>Your Account Information:</p>
            <p>Username: ".$username."</p>
            <p>Email: ".$email."</p>
            <p>Password: ".$password."</p>
            <p>Please click the link below to activate your account.</p>
            <a href='http://localhost:8081/allblogs/oredoo/adminactivate.php?code=".$code."&userid=".$userid."'>Activate your Account</a>
        ";

        require 'vendor/autoload.php';
        $mail = new PHPMailer(true);
        try
        {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->IsSMTP();
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
            $mail->AltBody = "Thank you for Registering on $globalname Blog | Your Account Information: Email - ".$email.", Password: ".$password." <a href='http://localhost:8081/allblogs/oredoo/adminactivate.php?code=".$code."&userid=".$userid."'>Activate your Account</a>";

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
    function sendUsersMail($email, $password, $username, $code, $userid)
	{
        require "varnames.php";

        return $result = ['response' => true, 'message' => 'Data Firewall Bypassed'];

        $message = "
            <h3>Thank you for Registering on $globalname .</h3>
            <p>Your Account Information:</p>
            <p>Username: ".$username."</p>
            <p>Email: ".$email."</p>
            <p>Password: ".$password."</p>
            <p>Please click the link below to activate your account.</p>
            <a href='http://localhost:8081/allblogs/oredoo/adminactivate.php?code=".$code."&userid=".$userid."'>Activate your Account</a>
        ";

        require 'vendor/autoload.php';
        $mail = new PHPMailer(true);
        try
        {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->IsSMTP();
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
            $mail->AltBody = "Thank you for Registering on $globalname Blog | Your Account Information: Email - ".$email.", Password: ".$password." <a href='http://localhost:8081/allblogs/oredoo/adminactivate.php?code=".$code."&userid=".$userid."'>Activate your Account</a>";

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
}

?>