<?php
    require "db.php"; 
    require 'sharedComponents.php';
    $components = new SharedComponents();

    if($_POST["namespace"] == "follow")
    {
        $userid = trim($components->unprotect($_POST["userid"]));
        $postid = trim($components->unprotect($_POST["authorid"]));
        try
        {
            $sql = "SELECT * FROM userfollow WHERE user_id = :user_id AND authorid = :authorid";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['user_id' => $userid, 'authorid' => $authorid]);
            if ($stmt->rowCount() != 1) 
            {
                $data =['user_id' => $userid, 'authorid' => $authorid];

                $sql = "INSERT INTO userfollow (user_id, authorid) VALUES (:user_id, :authorid)";
                $stmt= $conn->prepare($sql);
                if ($stmt->execute($data)) {
                    echo json_encode(['response' => true, 'message' => 'Following']);
                }
            }
        }
        catch (PDOException $error) 
        {
            echo json_encode(['response' => false, 'message' => 'Sorry, error following Author. INFO: '.$error]);
        }
    }
    else if($_POST["namespace"] == "unfollow")
    {
        $userid = trim($components->unprotect($_POST["userid"]));
        $authorid = trim($components->unprotect($_POST["authorid"]));
        try
        {
            $sql = "SELECT * FROM userfollow WHERE user_id = :user_id AND authorid = :authorid";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['user_id' => $userid, 'authorid' => $authorid]);
            if ($stmt->rowCount() == 1) 
            {
                $data =['user_id' => $userid, 'authorid' => $authorid];

                $sql = 'DELETE FROM userfollow WHERE user_id = :user_id AND authorid = :authorid';
                $stmt = $conn->prepare($sql);
                if ($stmt->execute($data)) {
                    echo json_encode(['response' => true, 'message' => 'Unfollowed']);
                }
            }
        }
        catch (PDOException $error) 
        {
            echo json_encode(['response' => false, 'message' => 'Sorry, error unfollowing Author. INFO: '.$error]);
        }
    }
   
?>