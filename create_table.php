<?php

require_once 'config/setup.php';

//Table preparing

try{
    $sql = "CREATE TABLE users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL UNIQUE,
        password LONGTEXT NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP
    )";

    $connection->exec($sql);
    echo "<p> Table added </p>";
} catch (PDOException $e){
    echo $e->getMessage();
}

$connection = null;
?>