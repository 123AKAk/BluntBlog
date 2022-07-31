<?php

    require "assets/db.php"; 
    require 'assets/sharedComponents.php';
    $components = new SharedComponents();
    require 'assets/sendmail.php';
    $model = new send_Mail();

    $param_email = trim($_POST["email"]);

    try
    {

        $sql = "SELECT * FROM newsletters WHERE emails = :emails";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":emails", $param_email, PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() != 1) 
        {
            $data = [
                'emails' => $param_email
            ];
            $sql = "INSERT INTO newsletters (emails) VALUES (:emails)";
            $stmt= $conn->prepare($sql);
            $stmt->execute($data);
    
            $mailresult =  $model->newlettermail($email);
    
           if($mailresult["response"] == true)
                echo json_encode(['response' => true, 'message' => 'Subscription Successfull!']);
            else
                echo json_encode(['response' => false, 'message' => $mailresult["message"]]);
        }
        else
        {
            echo json_encode(['response' => false, 'message' => "Email already Exist"]);
        }
    }
    catch (PDOException $error) 
    {
        echo json_encode(['response' => false, 'message' => 'Error Subscribing to NewsLetter. INFO: '.$error]);
    }
?>