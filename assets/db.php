<?php

    // // Declare DB Variables
    $servername  = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blogblog";

    // // Create connection
    // try {
    //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $GLOBALS['conn'] = $conn;

    // } catch(PDOException $e) {
    //     $GLOBALS['e'] = $e;
    //     echo "Connection failed: " . $e->getMessage();
    // }


    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    // ++local server
    // define('DB_SERVER', 'localhost');
    // define('DB_USERNAME', 'root');
    // define('DB_PASSWORD', '');
    // define('DB_NAME', 'blogblog');

    // ++online server
    // define('DB_SERVER', 'localhost');
    // define('DB_USERNAME', 'threesi2_eyo');
    // define('DB_PASSWORD', 'threesi2_eyo');
    // define('DB_NAME', 'threesi2_blogblog');

    /* Attempt to connect to MySQL database */
    try{
        $pdo = new PDO("mysql:host=" . $servername . ";dbname=" . $dbname, $username, $password);
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $GLOBALS['conn'] = $pdo;

    } catch(PDOException $e){
        $GLOBALS['e'] = $e;
        die("ERROR: Could not connect. " . $e->getMessage());
    }

