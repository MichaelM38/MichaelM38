<?php
/*
  * Description: Connect to database.
  * Date: 2021-03-20
  * Author: Michael Merene
  */
    
    define('DB_DSN','mysql:host=localhost;dbname=shoecollectionserver');
    define('DB_USER','serveruser');
    define('DB_PASS','gorgonzola7!');     
    
    try {
        $db = new PDO(DB_DSN, DB_USER, DB_PASS);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        exit(); // Force execution to stop on errors.
    }
?>