<?php 
    require "db.php"; 
    require 'sharedComponents.php';
    $components = new SharedComponents();
?>
<?php
session_start();
// Get type from header
$type = $_GET['type'];

if ($conn) {

    if (isset($_POST["submit"])) {

        switch ($type) {
            case "article":
                // Upload Image
                $picuploadmsg = uploadImage2("arImage", "../img/article/");

                if($picuploadmsg == 11)
                {
                    // PREPARE DATA TO INSERT INTO DB
                    $data = array(
                        "article_title" => test_input($_POST["arTitle"]),
                        "article_content" => $_POST["arContent"],
                        "article_image" => test_input($_FILES["arImage"]["name"]),
                        "article_created_time" => date('Y-m-d H:i:s'),
                        "id_categorie" => test_input($_POST["arCategory"]),
                        "id_author" => test_input($_POST["arAuthor"])
                    );
    
                    // $tableName = 'article';
    
                    // Call insert function
                    $resultmsg = insertToDB($conn, $type, $data);
                    if($resultmsg != 0)
                    {
                        $_SESSION["adminsuc"] = "Post Created Successfully";
                        header("Location: ../admin/add_post.php", true, 301);
                        exit;
                    }
                    else
                    {
                        $_SESSION["adminerra"] = $resultmsg;
                        header("Location: ../admin/add_post.php", true, 301);
                    }
                }
                else
                {
                    $_SESSION["adminerra"] = $picuploadmsg;
                    header("Location: ../admin/add_post.php", true, 301);
                }

                // Go to show.php
                break;

            case "category":

                // Upload Image
                $picuploadmsg = uploadImage2("catImage", "../img/category/");

                if($picuploadmsg == 11)
                {
                    // PREPARE DATA TO INSERT INTO DB
                    $data = array(
                        "category_name"  => test_input($_POST["catName"]),
                        "category_image" => test_input($_FILES["catImage"]["name"]),
                        "category_color" => test_input($_POST["catColor"]),
                    );

                    // $tableName = 'category';

                    // Call insert function
                    $resultmsg = insertToDB($conn, $type, $data);
                    if($resultmsg != 0)
                    {
                        $_SESSION["adminsuc"] = "Category Created Successfully";
                        header("Location: ../admin/add_category.php", true, 301);
                        exit;
                    }
                    else
                    {
                        $_SESSION["adminerra"] = $resultmsg;
                        header("Location: ../admin/add_category.php", true, 301);
                    }
                    // Go to show.php
                }
                else
                {
                    $_SESSION["adminerra"] = $picuploadmsg;
                    header("Location: ../admin/add_category.php", true, 301);
                }
                break;

            case "author":

                $sql = "SELECT * FROM author WHERE author_email = :author_email";
                if ($stmt = $conn->prepare($sql)) {
                $param_email = trim($_POST["authEmail"]);
                $stmt->bindParam(":author_email", $param_email, PDO::PARAM_STR);
                if ($stmt->execute()) {
                if ($stmt->rowCount() == 1) {
                    $_SESSION["adminerra"] = "There is an account with that Email.";
                        header("Location: ../admin/add_author.php", true, 301);
                        exit;
                }}}

                // Upload Image
                $picuploadmsg = uploadImage2("authImage", "../img/avatar/");

                if($picuploadmsg == 11)
                {
                    $set = 'EYO1BLUNT2AKAK3';
                    $code = substr(str_shuffle($set), 0, 12);

                    //hash password
                    $password = $code;
                    $hashpassword = password_hash($password, PASSWORD_DEFAULT);

                    // PREPARE DATA TdO INSERT INTO DB
                    $data = array(
                        "author_fullname" => test_input($_POST["authName"]),
                        "author_desc" => test_input($_POST["authDesc"]),
                        "author_email" =>  test_input($_POST["authEmail"]),
                        "password" =>  test_input($hashpassword),
                        "author_twitter" =>  test_input($_POST["authTwitter"]),
                        "auth_instagram" => test_input($_POST["authInstagram"]),
                        "auth_facebook" => test_input($_POST["authFacebook"]),
                        "author_avatar" => test_input($_FILES["authImage"]["name"]),
                        "type" => test_input(0)
                    );

                    $tableName = 'author';

                    // Call insert function
                    $resultmsg = insertToDB($conn, $tableName, $data);
                    if($resultmsg != 0)
                    {

                        require 'sendmail.php';
                        $model = new send_Mail();
                        $mailresult = $model->sendMail($_POST["authEmail"], $password, $_POST["authName"], $code, $components->protect($resultmsg));
                        json_encode($mailresult);
                        if($mailresult["response"] == true)
                        {
                            $_SESSION["adminsuc"] = "Author Created Successfully";
                            header("Location: ../admin/authors.php", true, 301);
                            exit;
                        }
                        else
                            $_SESSION["adminerra"] = $mailresult["message"];
                            header("Location: ../admin/add_author.php", true, 301);
                            exit;
                    }
                    else
                    {
                        $_SESSION["adminerra"] = $resultmsg;
                        header("Location: ../admin/add_author.php", true, 301);
                    }
                }
                else
                {
                    $_SESSION["adminerra"] = $picuploadmsg;
                    header("Location: ../admin/add_author.php", true, 301);
                }
                break;

            case "comment":

                $lastid = $_POST["id_article"];
                $aid = $components->unprotect($lastid);
                //$id = test_input($aid);

                //rand()

                // PREPARE DATA TO INSERT INTO DB
                $data = array(
                    "comment_username" => test_input($_POST["username"]),
                    "comment_content" => test_input($_POST["comment"]),
                    "comment_date" => date('Y-m-d H:i:s'),
                    "id_article" =>  test_input($aid)
                );

                $tableName = 'comment';

                // Call insert function
                insertToDB($conn, $tableName, $data);

                // Go to show.php
                header("Location: ../post-single.php?id=$lastid#commentsec", true, 301);
                exit;
                break;

            default:
                echo "ERROR";
                break;
        }
    }
} else {
    echo 'Error: ' . $e->getMessage();
}

function insertToDB($conn, $table, $data)
{
    // Get keys string from data array
    $columns = implodeArray(array_keys($data));

    // Get values string from data array with prefix (:) added
    $prefixed_array = preg_filter('/^/', ':', array_keys($data));
    $values = implodeArray($prefixed_array);

    try {
        // prepare sql and bind parameters
        $sql = "INSERT INTO $table ($columns) VALUES ($values); SELECT LAST_INSERT_ID();";
        $stmt = $conn->prepare($sql);

        // insert row
        $stmt->execute($data);
        
        //echo "New records created successfully";
        return $conn->lastInsertId();
    } catch (PDOException $error) {
        //echo $error;
        return $error;
    }
}

function implodeArray($array)
{
    return implode(", ", $array);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// function uploadImage($name, $dest){
//     // Upload Image
//     $fileName = $_FILES[$name]['name'];
//     $fileTmpName = $_FILES[$name]['tmp_name'];
//     $fileError = $_FILES[$name]['error'];

//     if($fileError === 0){
//         $fileDestination = $dest.$fileName;
//         move_uploaded_file($fileTmpName, $fileDestination);
//         echo "Image Upload Successful";
//     }else {
//         echo "Image Upload Error";
//     }
// }

function uploadImage2($name, $dest)
{
    $target_dir = $dest;
    $target_file = $target_dir . basename($_FILES[$name]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES[$name]["tmp_name"]);
    if ($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        //return "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        return "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        //echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES[$name]["size"] > 500000) {
        //echo "Sorry, your file is too large.";
        return "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        return "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        //echo "Sorry, your file was not uploaded.";
        return "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
            //echo "The file " . basename($_FILES[$name]["name"]) . " has been uploaded.";
            return 11;
        } else {
            //echo "Sorry, there was an error uploading your file.";
            return "Sorry, there was an error uploading your file.";
        }
    }
}

?>