    <?php require "db.php"; ?>
    <?php
    session_start();
    // Get id & type from header
    $id = $_GET['id'];
    $type = $_GET['type'];

    if ($conn) {
        switch ($type) {
            case "article":
                delete($conn, $type, $id, "posts.php");
                break;
            case "category":
                delete($conn, $type, $id, "categorys.php");
                break;
            case "author":
                delete($conn, $type, $id, "authors.php");
                break;
            case "user":
                deleteuser($conn, "users", $id, "users.php");
                break;
            default:
                break;
        }
    } else {
        echo 'Error: ' . $e->getMessage();
    }


    function delete($conn, $table, $id, $goto)
    {
        $col = $table . "_id";
        try {
            // sql to delete a record
            $sql = "DELETE FROM $table WHERE $col = $id";
            // use exec() because no results are returned
            $conn->exec($sql);
            //echo "$table Deleted Successfully";
            $_SESSION["adminsuc"] = $table." Deleted Successfully";
        } catch (PDOException $e) {
            //echo $sql . "<br>" . $e->getMessage();
            $_SESSION["adminerra"] = $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
        header("Location: ../admin/$goto", true, 301);
        exit;
    }
    function deleteuser($conn, $table, $id, $goto)
    {
        try {
            // sql to delete a record
            $sql = "DELETE FROM $table WHERE id = $id";
            // use exec() because no results are returned
            $conn->exec($sql);
            //echo "$table Deleted Successfully";
            $_SESSION["adminsuc"] = "User Deleted Successfully";
        } catch (PDOException $e) {
            //echo $sql . "<br>" . $e->getMessage();
            $_SESSION["adminerra"] = $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
        header("Location: ../admin/$goto", true, 301);
        exit;
    }
    ?>