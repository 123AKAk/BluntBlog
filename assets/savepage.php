<?php
    require "db.php"; 
    require 'sharedComponents.php';
    $components = new SharedComponents();

    if($_POST["namespace"] == "save")
    {
        $userid = trim($components->unprotect($_POST["userid"]));
        $postid = trim($components->unprotect($_POST["postid"]));
        try
        {
            $sql = "SELECT * FROM saved WHERE user_id = :user_id AND post_id = :post_id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['user_id' => $userid, 'post_id' => $postid]);
            if ($stmt->rowCount() != 1) 
            {
                $data =['user_id' => $userid, 'post_id' => $postid];

                $sql = "INSERT INTO saved (user_id, post_id) VALUES (:user_id, :post_id)";
                $stmt= $conn->prepare($sql);
                if ($stmt->execute($data)) {
                    echo json_encode(['response' => true, 'message' => 'Post added to Save']);
                }
            }
        }
        catch (PDOException $error) 
        {
            echo json_encode(['response' => false, 'message' => 'Sorry, error adding Post to Save. INFO: '.$error]);
        }
    }
    else if($_POST["namespace"] == "unsave")
    {
        $userid = trim($components->unprotect($_POST["userid"]));
        $postid = trim($components->unprotect($_POST["postid"]));
        try
        {
            $sql = "SELECT * FROM saved WHERE user_id = :user_id AND post_id = :post_id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['user_id' => $userid, 'post_id' => $postid]);
            if ($stmt->rowCount() == 1) 
            {
                $data =['user_id' => $userid, 'post_id' => $postid];

                $sql = 'DELETE FROM saved WHERE user_id = :user_id AND post_id = :post_id';
                $stmt = $conn->prepare($sql);
                if ($stmt->execute($data)) {
                    echo json_encode(['response' => true, 'message' => 'Post removed from Save']);
                }
            }
        }
        catch (PDOException $error) 
        {
            echo json_encode(['response' => false, 'message' => 'Sorry, error adding Post to Save. INFO: '.$error]);
        }
    }
   
?>